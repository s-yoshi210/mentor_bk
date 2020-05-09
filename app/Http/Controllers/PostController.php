<?php

namespace App\Http\Controllers;

use App\Models\Follower;
use App\Models\Post;
use App\Models\User;
use App\Models\SelfCount;
use Dotenv\Validator;
//use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;
use function Sodium\increment;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $user_id = Auth::id();

        // フォロー一覧
        $followingIds = Follower::followingIds($user_id);
        $follow_posts = Post::followerPosts($user_id, $followingIds);

        // 「新着」一覧
        $posts = Post::withCount('comments', 'likes', 'takes')->latest()->get();

        // 「注目」一覧
        $target_from = Carbon::now()->subMonth();
        $target_to = Carbon::now();
        $attention_posts = Post::whereBetween('created_at', [$target_from, $target_to])
                ->withCount('likes')
                ->having('likes_count', '>', 0)
                ->orderBy('likes_count', 'desc')
                ->get();

        return view('post.index', ['follow_posts' => $follow_posts, 'posts' => $posts,'attention_posts' => $attention_posts]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * 投稿新規登録
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        // バリデータ取得
        $validator = $request->getValidator();
        if ($validator->fails()) {
            return redirect('post')
                ->withErrors($validator)
                ->withInput();
        }

        DB::transaction( function () use ($request) {
            // 投稿登録
            $post = new Post;
            $post->user_id = Auth::id();
            $post->content = $request->post_content;
            $post->save();

            if ($request->give == 'on') {
                // Giveカウント登録
                SelfCount::updateOrCreate(
                    ['user_id' => Auth::id()]
                )->increment('give_count');
            }
        });

        return redirect('post');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($post_id)
    {
        $post = Post::findOrFail($post_id);

        return view('post.comment')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

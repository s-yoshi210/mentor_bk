<?php

namespace App\Http\Controllers;

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


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // 「新着」一覧
        $posts = Post::withCount('comments', 'likes', 'takes')->latest()->get();
        return view('post.index', ['posts' => $posts]);
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
                    ['user_id' => Auth::id()],
                    ['give_count' => DB::raw('give_count + 1')]
                );
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
    public function show($id)
    {
        //
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

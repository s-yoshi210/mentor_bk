<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * プライマリーキー 変更
     * デフォルトは「id」であるため
     *
     * @var string
     */
    protected $primaryKey = 'post_id';

    /**
     * 書き換えたくない情報を保護する
     * post_id以外の要素をcreateから渡すことができる
     * $fillableの場合は、user_idとcontentを指定すれば同じこと
     *
     * @var array
     */
    protected $guarded = ['post_id'];

    /**
     * 投稿のユーザー情報を取得する
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User','user_id');
    }

    /**
     * 投稿に対するコメントを取得する
     */
    public function comments()
    {
        return $this->hasMany('App\Models\PostComment', 'post_id');
    }

    /**
     * 投稿に対するいいね数を取得する
     */
    public function likes()
    {
        return $this->hasMany('App\Models\Like', 'post_id');
    }

    /**
     * 投稿に対するTake数を取得する
     */
    public function takes()
    {
        return $this->hasMany('App\Models\Take', 'post_id');
    }
}

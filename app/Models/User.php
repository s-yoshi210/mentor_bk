<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * プライマリーキー 変更
     * デフォルトは「id」であるため
     *
     * @var string
     */
    protected $primaryKey = 'user_id';

    /**
     * 書き換えてもいい情報に許可を与える
     *
     * @var array
     */
    protected $fillable = [
        'user_name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * ユーザーの投稿を取得する
     */
    public function posts()
    {
        return $this->hasMany(Post::class,'user_id');
    }

    /**
     * フォローされているユーザーを取得
     * 自分をフォローしてくれている人
     */
    public function followers()
    {
        return $this->belongsToMany(self::class, 'followers', 'followed_id', 'following_id');
    }

    /**
     * フォローしているユーザーを取得
     * 自分がフォローしている人
     */
    public function follows()
    {
        return $this->belongsToMany(self::class, 'followers', 'following_id', 'followed_id');
    }

    /**
     * フォローされているユーザーを取得
     */
    public function followUsers()
    {
        return $this->belongsToMany(self::class, 'follow_users', 'user_id', 'followed_user_id')
                     ->using(Follower::class);
    }

//    public function post()
//    {
//        return $this->hasOne('App\Models\Post', 'user_id', 'user_id');
//    }
//
//    public function posts()
//    {
//        return $this->hasMany('App\Models\Post', 'user_id');
//    }
}

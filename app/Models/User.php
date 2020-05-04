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
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function posts()
    {
        return $this->hasMany('App\Models\Post','user_id');
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

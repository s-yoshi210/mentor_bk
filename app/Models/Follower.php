<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class Follower extends Pivot
{
    protected $table = 'followers';

    protected $primaryKey = [
        'following_id',
        'followed_id'
    ];

    protected $fillable = [
        'following_id',
        'followed_id'
    ];

    public $incrementing = false;

    /**
     * フォローしているユーザーのIDを取得
     */
    public static function followingIds(int $user_id)
    {
        return Follower::where('following_id', $user_id)->get('followed_id');
    }
}

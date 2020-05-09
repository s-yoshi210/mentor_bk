<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SelfCount extends Model
{
    /**
     * user_idが自動増分であるか
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * プライマリーキー 変更
     * デフォルトは「id」であるため
     *
     * @var string
     */
    protected $primaryKey = 'user_id';

    /**
     * 書き換えたくない情報を保護する
     * user_id以外の要素をcreateから渡すことができる
     * $fillableの場合は、give_countとtake_countを指定すれば同じこと
     *
     * @var array
     */
//    protected $guarded = ['user_id'];
    protected $fillable = ['user_id'];
}

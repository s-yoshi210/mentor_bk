<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SelfCount extends Model
{

    protected $primaryKey = 'user_id';

    protected $fillable = [
        'give_count',
        'take_count',
        'user_id'
    ];
}

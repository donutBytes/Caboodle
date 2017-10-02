<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserFollowing extends Model
{
    protected $table = 'user_followings';
    protected $fillable = [
        'user_id','followed_id'
    ];
}

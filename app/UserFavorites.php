<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserFavorites extends Model
{
    protected $table = 'user_favorites';
    protected $fillable = [
        'user_id','liked_id','isKit'
    ];
}

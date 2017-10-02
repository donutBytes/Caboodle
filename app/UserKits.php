<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Webpatser\Uuid\Uuid;

class UserKits extends Model
{
    protected $table = 'user_kits';

    protected $guarded = [];

    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
        $model->kit_id = (string) Uuid::generate(4);
        });
    }
}

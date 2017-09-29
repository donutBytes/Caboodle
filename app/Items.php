<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Webpatser\Uuid\Uuid;

class Items extends Model
{
    protected $table = 'items';

    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
        $model->item_id = (string) Uuid::generate(4);
    });
}

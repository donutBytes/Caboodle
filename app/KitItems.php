<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Webpatser\Uuid\Uuid;

class KitItems extends Model
{
    protected $table = 'kit_items';
    protected $guarded = [];

    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
        $model->kit_item_id = (string) Uuid::generate(4);
        });
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Webpatser\Uuid\Uuid;

class Items extends Model
{
    protected $table = 'items';
    protected $fillable = [
        'name','producer','date_released','user_id'
    ];
    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
        $model->item_id = (string) Uuid::generate(4);
        });
    }
}

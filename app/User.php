<?php

namespace App;

use App\UserKits;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Webpatser\Uuid\Uuid;

class User extends Authenticatable
{

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'profileFilePath'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public static function boot()
    {
      parent::boot();
      self::creating(function ($model) {
        $model->user_id = (string) Uuid::generate(4);
    });
    }
    // public function user_kits()
    // {
    //   return $this->hasMany(UserKits::class);
    // }
}

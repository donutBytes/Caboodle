<?php

use Illuminate\Database\Seeder;

class UserFavoritesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('user_favorites')->delete();
      DB::table('user_favorites')->insert([ //creating liked item
        'user_id'=>'dca898f6-20e6-45d6-bd54-560dc77e4243',
        'liked_id'=>'589cc871-2776-4e5b-bc98-1687e4ec9b0c',
        'isKit'=>0
      ]);
      DB::table('user_favorites')->insert([ //creating liked kit
        'user_id'=>'dca898f6-20e6-45d6-bd54-560dc77e4243',
        'liked_id'=>'c68696dd-cd10-4ede-a42c-3e2ffb8a56ab',
        'isKit'=>1
      ]);
      DB::table('user_favorites')->insert([ //creating liked item
        'user_id'=>'dca898f6-20e6-45d6-bd54-560dc77e4243',
        'liked_id'=>'89b32gdh-2776-4e5b-bc98-1687e4ec9b0c',
        'isKit'=>0
      ]);
    }
}

<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

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
      $faker = Faker::create();
      DB::table('user_favorites')->insert([ //creating liked item
        'user_id'=>'dca898f6-20e6-45d6-bd54-560dc77e4243',
        'liked_id'=>'589cc871-2776-4e5b-bc98-1687e4ec9b0c',
        'isKit'=>0
      ]);
    }
}

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
      $faker = Faker::create();
      DB::table('user_favorites')->insert([
        'user_id'=>str_random(10),
        'liked_id'=>str_random(10),
        'isKit'=>rand($min=0,$max=1)
      ]);
    }
}

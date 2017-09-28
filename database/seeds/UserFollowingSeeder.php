<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UserFollowingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker::create();
      DB::table('user_followings')->insert([
        'user_id'=>str_random(10),
        'followed_id'=>str_random(10)
      ]);
    }
}

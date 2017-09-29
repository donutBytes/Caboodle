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
      DB::table('user_followings')->delete();
      $faker = Faker::create();
      DB::table('user_followings')->insert([
        'user_id'=>'dca898f6-20e6-45d6-bd54-560dc77e4243',
        'followed_id'=>'90f8b5d6-c284-4da3-a251-17e4d9be0061'
      ]);
    }
}

<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Webpatser\Uuid\Uuid;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->delete();

      $faker = Faker::create();
        DB::table('users')->insert([
          'user_id'=> 'dca898f6-20e6-45d6-bd54-560dc77e4243 ',
          'name' => 'rbilemjian',
          'email' => 'rbilemjian@gmail.com',
          'password' => bcrypt('secret'),
          'remember_token' => str_random(10)
        ]);
    }
}

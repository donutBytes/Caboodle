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
      $faker = Faker::create();
        DB::table('users')->insert([
          'user_id'=> (string) Uuid::generate(4),
          'name' => $faker->name,
          'email' => $faker->unique()->safeEmail,
          'password' => bcrypt('secret'),
          'remember_token' => str_random(10),
        ]);
    }
}

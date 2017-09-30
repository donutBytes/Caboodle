<?php

use Illuminate\Database\Seeder;
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
        DB::table('users')->insert([
          'user_id'=> 'dca898f6-20e6-45d6-bd54-560dc77e4243',
          'name' => 'user',
          'email' => 'user@gmail.com',
          'password' => bcrypt('secret'),
          'remember_token' => str_random(10)
        ]);
        DB::table('users')->insert([
          'user_id'=> '90f8b5d6-c284-4da3-a251-17e4d9be0061',
          'name' => 'rbilemjian',
          'email' => 'rbilemjian@gmail.com',
          'password' => bcrypt('secret'),
          'remember_token' => str_random(10)
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Webpatser\Uuid\Uuid;

class UserKitsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('user_kits')->delete();
      $faker = Faker::create();
      DB::table('user_kits')->insert([
        'user_id'=> 'dca898f6-20e6-45d6-bd54-560dc77e4243',
        'kit_id'=> 'c68696dd-cd10-4ede-a42c-3e2ffb8a56ab',
        'kit_name'=>'GI-Joes',
        'kit_type'=>'Action Figures',
        'description'=>'The greatest GI-Joes you have ever seen in your life.',
        'item_quantity'=>1
      ]);
    }
}

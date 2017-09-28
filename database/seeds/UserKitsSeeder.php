<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UserKitsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker::create();
      DB::table('user_kits')->insert([
        'user_id'=>str_random(10),
        'kit_id'=>str_random(10),
        'kit_name'=>str_random(10),
        'kit_type'=>str_random(5),
        'description'=>str_random(100),
        'item_quantity'=>rand($min=1,$max=100)
      ]);
    }
}

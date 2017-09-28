<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker::create();
      DB::table('items')->insert([
        'user_id'=>str_random(10),
        'item_id'=>str_random(10),
        'name'=>str_random(10),
        'producer'=>str_random(10),
        'date_released'=>$faker->date($format = 'Y-m-d',$max = 'now')
      ]);
    }
}

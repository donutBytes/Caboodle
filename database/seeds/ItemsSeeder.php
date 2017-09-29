<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Webpatser\Uuid\Uuid;

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
        'item_id'=>(string) Uuid::generate(4),
        'name'=>str_random(10),
        'producer'=>str_random(10),
        'date_released'=>$faker->date($format = 'Y-m-d',$max = 'now')
      ]);
    }
}

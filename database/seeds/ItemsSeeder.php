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
      DB::table('items')->delete();
      $faker = Faker::create();
      DB::table('items')->insert([
        'user_id'=>'dca898f6-20e6-45d6-bd54-560dc77e4243',
        'item_id'=>'a6aab468-63e5-4bd4-9c0f-2dd52e731ce4',
        'name'=>'GI-Joe',
        'producer'=>'Company',
        'date_released'=>$faker->date($format = 'Y-m-d',$max = 'now')
      ]);
      DB::table('items')->insert([
        'user_id'=>'90f8b5d6-c284-4da3-a251-17e4d9be0061',
        'item_id'=>'o35fy3g4-63e5-4bd4-9c0f-2dd52e731ce4',
        'name'=>'Super Mario Bros.',
        'producer'=>'Nintendo',
        'date_released'=>'1985-09-13'
      ]);
    }
}

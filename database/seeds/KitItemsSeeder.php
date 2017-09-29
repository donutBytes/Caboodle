<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Webpatser\Uuid\Uuid;

class KitItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        DB::table('kit_items')->insert([
          'kit_id'=>str_random(10),
          'item_id'=>str_random(10),
          'kit_item_id'=>(string) Uuid::generate(4),
          'condition'=>str_random(10),
          'cost'=>rand($min=1,$max=10000),
          'description'=>str_random(100),
        ]);
    }
}

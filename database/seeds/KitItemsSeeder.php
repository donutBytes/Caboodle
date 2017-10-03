<?php

use Illuminate\Database\Seeder;
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
      DB::table('kit_items')->delete();
        DB::table('kit_items')->insert([
          'kit_id'=>'c68696dd-cd10-4ede-a42c-3e2ffb8a56ab',
          'item_id'=>'a6aab468-63e5-4bd4-9c0f-2dd52e731ce4',
          'name'=>'GI-Joe',
          'kit_item_id'=>'589cc871-2776-4e5b-bc98-1687e4ec9b0c',
          'condition'=>'Fair',
          'cost'=>rand($min=1,$max=10000),
          'description'=>'This is the best GI Joe ever.',
        ]);
        DB::table('kit_items')->insert([
          'kit_id'=>'f0g8323g-cd10-4ede-a42c-3e2ffb8a56ab',
          'item_id'=>'o35fy3g4-63e5-4bd4-9c0f-2dd52e731ce4',
          'name'=>'Super Mario Bros.',
          'kit_item_id'=>'89b32gdh-2776-4e5b-bc98-1687e4ec9b0c',
          'condition'=>'Fair',
          'cost'=>rand($min=1,$max=10000),
          'description'=>'Super Mario back when Nintendo actually made the levels.',
        ]);
    }
}

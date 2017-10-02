<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $this->call(UsersTableSeeder::class);
       $this->call(ItemsSeeder::class);
       $this->call(KitItemsSeeder::class);
       $this->call(UserFavoritesSeeder::class);
       $this->call(UserFollowingSeeder::class);
       $this->call(UserKitsSeeder::class);
    }
}

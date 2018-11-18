<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ItemCategorSeeder::class);
        $this->call(ItemSeeder::class);
        $this->call(StoreSeeder::class);
        $this->call(UserDataSeeder::class);
    }
}

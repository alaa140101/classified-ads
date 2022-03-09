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
        $this->call([
            AdsTableSeeder::class,
            CategorySeeder::class,
            CurrencySeeder::class,
            CountrySeeder::class,
            ImageSeeder::class,
            UserSeeder::class,
            FavoriteSeeder::class,
        ]);
    }
}

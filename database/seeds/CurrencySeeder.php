<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('currencies')->insert([
            'name' => "دولار",
            'symbol' => "$"
        ]);
        DB::table('currencies')->insert([
            'name' => "ريال",
            'symbol' => "SAR"
        ]);
        DB::table('currencies')->insert([
            'name' => "درهم ",
            'symbol' => "AED"
        ]);
        DB::table('currencies')->insert([
            'name' => "جنيه",
            'symbol' => "EGP"
        ]);
        DB::table('currencies')->insert([
            'name' => "دينار",
            'symbol' => "KWD"
        ]);
        DB::table('currencies')->insert([
            'name' => "ليرة",
            'symbol' => "SYP"
        ]);
    }
}

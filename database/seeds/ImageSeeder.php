<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Illuminate\Support\Str;


class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $title = $faker->sentence;

        DB::table('images')->insert([
            'ad_id'      => 1,
            'title' => $title,
            'image'      => "pexels-photo-1148955.jpeg",
        ]);

        $title = $faker->sentence;

        DB::table('images')->insert([
            'ad_id'      => 1,
            'title' => $title,
            'image'      => "pexels-photo-1166420.jpeg",
        ]);

        $title = $faker->sentence;

        DB::table('images')->insert([
            'ad_id'      => 2,
            'title' => $title,
            'image'      => "pexels-photo-276534.jpeg",
        ]);

        $title = $faker->sentence;

        DB::table('images')->insert([
            'ad_id'      => 2,
            'title' => $title,
            'image'      => "pexels-photo-276661.jpeg",
        ]);

        $title = $faker->sentence;

        DB::table('images')->insert([
            'ad_id'      => 3,
            'title' => $title,
            'image'      => "pexels-photo-276583.jpeg",
        ]);

        $title = $faker->sentence;

        DB::table('images')->insert([
            'ad_id'      => 3,
            'title' => $title,
            'image'      => "leather-sofa-recliner-sofa-furniture-lounge-suite-65941.jpeg",
        ]);

        $title = $faker->sentence;

        DB::table('images')->insert([
            'ad_id'      => 4,
            'title' => $title,
            'image'      => "pexels-photo-932095.jpeg",
        ]);

        $title = $faker->sentence;

        DB::table('images')->insert([
            'ad_id'      => 5,
            'title' => $title,
            'image'      => "armchair-chairs-clean-923192.jpg",
        ]);

        $title = $faker->sentence;

        DB::table('images')->insert([
            'ad_id'      => 5,
            'title' => $title,
            'image'      => "armchair-chairs-clean-923192.jpg",
        ]);

        $title = $faker->sentence;

        DB::table('images')->insert([
            'ad_id'      => 5,
            'title' => $title,
            'image'      => "pexels-photo-220749.jpeg",
        ]);

        $title = $faker->sentence;

        DB::table('images')->insert([
            'ad_id'      => 6,
            'title' => $title,
            'image'      => "pexels-photo-302879.jpeg",
        ]);

        $title = $faker->sentence;

        DB::table('images')->insert([
            'ad_id'      => 7,
            'title' => $title,
            'image'       => "pexels-photo-461452.png",
        ]);

        $title = $faker->sentence;

        DB::table('images')->insert([
            'ad_id'      => 8,
            'title' => $title,
            'image'       => "pexels-photo-788946.jpeg",
        ]);

        $title = $faker->sentence;

        DB::table('images')->insert([
            'ad_id'      => 9,
            'title' => $title,
            'image'       => "pexels-photo-225841.jpeg",
        ]);

        $title = $faker->sentence;

        DB::table('images')->insert([
            'ad_id'      => 10,
            'title' => $title,
            'image'       => "pexels-photo-119435.jpeg",
        ]);

        $title = $faker->sentence;

        DB::table('images')->insert([
            'ad_id'      => 11,
            'title' => $title,
            'image'       => "pexels-photo-116675.jpeg",
        ]);

        $title = $faker->sentence;

        DB::table('images')->insert([
            'ad_id'      => 12,
            'title' => $title,
            'image'       => "pexels-photo-193021.jpeg",
        ]);

        $title = $faker->sentence;

        DB::table('images')->insert([
            'ad_id'      => 13,
            'title' => $title,
            'image'       => "pexels-photo-170811.jpeg",
        ]);

        $title = $faker->sentence;

        DB::table('images')->insert([
            'ad_id'      => 13,
            'title' => $title,
            'image'       => "pexels-photo-244206.jpeg",
        ]);

        $title = $faker->sentence;

        DB::table('images')->insert([
            'ad_id'      => 14,
            'title' => $title,
            'image'       => "pexels-photo-1105754.jpeg",
        ]);

        $title = $faker->sentence;

        DB::table('images')->insert([
            'ad_id'      => 14,
            'title' => $title,
            'image'       => "pexels-photo-276554.jpeg",
        ]);

        $title = $faker->sentence;

        DB::table('images')->insert([
            'ad_id'      => 14,
            'title' => $title,
            'image'       => "pexels-photo-271724.jpeg",
        ]);

        $title = $faker->sentence;

        DB::table('images')->insert([
            'ad_id'      => 15,
            'title' => $title,
            'image'       => "pexels-photo-280235.jpeg",
        ]);

        $title = $faker->sentence;

        DB::table('images')->insert([
            'ad_id'      => 15,
            'title' => $title,
            'image'       => "pexels-photo-259962.jpeg",
        ]);

        $title = $faker->sentence;

        DB::table('images')->insert([
            'ad_id'      => 16,
            'title' => $title,
            'image'       => "water-pump-industrial-industry-pump.jpg",
        ]);

        $title = $faker->sentence;

        DB::table('images')->insert([
            'ad_id'      => 17,
            'title' => $title,
            'image'       => "beer-machine-alcohol-brewery-159291.jpeg",
        ]);
    }
}

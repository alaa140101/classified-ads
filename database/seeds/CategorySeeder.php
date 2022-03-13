<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Helpers\helper as Helper;




class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            
            $cat = "عقارات";
            $slug = Helper::slug($cat);
            DB::table('categories')->insert([
                'id' => 1,
                'name' => $cat,
                'slug' => $slug,
            ]);
    
            $cat = "وظائف";
            $slug = Helper::slug($cat);
            DB::table('categories')->insert([
                'id' => 2,
                'name' => "وظائف",
                'slug' => $slug,
            ]);
    
            $cat = "إلكترونيات";
            $slug = Helper::slug($cat);
            DB::table('categories')->insert([
                'id' => 3,
                'name' => $cat,
                'slug' => $slug,
            ]);
    
            $cat = "سيارات";
            $slug = Helper::slug($cat);
            DB::table('categories')->insert([
                'id' => 4,
                'name' =>$cat,
                'slug' => $slug,
            ]);
    
            $cat = "أثاث";
            $slug = Helper::slug($cat);
            DB::table('categories')->insert([
                'id' => 5,
                'name' =>$cat,
                'slug' => $slug,
            ]);
    
            $cat = "مال و أعمال";
            $slug = Helper::slug($cat);
            DB::table('categories')->insert([
                'id' =>6,
                'name' => $cat,
                'slug' => $slug,
            ]);
    
            $cat = "مواد و معدات";
            $slug = Helper::slug($cat);
            DB::table('categories')->insert([
                'id' => 7,
                'name' => $cat,
                'slug' => $slug,
            ]);
        }
    }
}

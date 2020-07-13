<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'name' => 'CÂY NỘI THẤT',
                'parent_id' => 0,
                'slug' => 'cay-noi-that',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'CÂY ĐỂ BÀN - KỆ',
                'parent_id' => 1,
                'slug' => 'cay-de-ban-ke',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'CÂY ĐỂ SÀN',
                'parent_id' => 1,
                'slug' => 'cay-de-san',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'CÂY TERRARIUM',
                'parent_id' => 1,
                'slug' => 'cay-terrarium',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            
        ]);
    }
}

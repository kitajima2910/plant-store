<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

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
                'slug' => Str::of('CÂY NỘI THẤT')->slug('-'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'CÂY ĐỂ BÀN - KỆ',
                'parent_id' => 1,
                'slug' => Str::of('CÂY ĐỂ BÀN - KỆ')->slug('-'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'CÂY ĐỂ SÀN',
                'parent_id' => 1,
                'slug' =>  Str::of('CÂY ĐỂ SÀN')->slug('-'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'CÂY TERRARIUM',
                'parent_id' => 1,
                'slug' =>  Str::of('CÂY TERRARIUM')->slug('-'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'TIỂU CẢNH TERRARIUM',
                'parent_id' => 0,
                'slug' =>  Str::of('TIỂU CẢNH TERRARIUM')->slug('-'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'CHẬU-LỌ',
                'parent_id' => 0,
                'slug' =>  Str::of('CHẬU-LỌ')->slug('-'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'BÌNH THỦY TINH',
                'parent_id' => 6,
                'slug' =>  Str::of('BÌNH THỦY TINH')->slug('-'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'PHỤ KIỆN TERRARIUM',
                'parent_id' => 0,
                'slug' =>  Str::of('PHỤ KIỆN TERRARIUM')->slug('-'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            
        ]);
    }
}

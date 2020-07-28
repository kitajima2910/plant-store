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
                'name' => 'CÂY CẢNH PHONG THỦY',
                'parent_id' => 0,
                'slug' => Str::of('CÂY CẢNH PHONG THỦY')->slug('-'),
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'CÂY CẢNH TRONG NHÀ',
                'parent_id' => 0,
                'slug' => Str::of('CÂY CẢNH TRONG NHÀ')->slug('-'),
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'CÂY CẢNH ĐỂ BÀN',
                'parent_id' => 0,
                'slug' => Str::of('CÂY CẢNH ĐỂ BÀN')->slug('-'),
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'CÂY CẢNH VĂN PHÒNG',
                'parent_id' => 0,
                'slug' => Str::of('CÂY CẢNH VĂN PHÒNG')->slug('-'),
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'CÂY CẢNH SEN ĐÁ',
                'parent_id' => 0,
                'slug' => Str::of('CÂY CẢNH SEN ĐÁ')->slug('-'),
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
           
            
        ]);
    }
}

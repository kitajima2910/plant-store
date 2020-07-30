<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menus')->insert([
            [
                'name' => 'Trang Chủ',
                'parent_id' => 0,
                'slug' => Str::of('TRANG CHỦ')->slug('-'),
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Sản phẩm',
                'parent_id' => 0,
                'slug' => Str::of('sẢN PHẨM')->slug('-'),
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Bài Viết',
                'parent_id' => 0,
                'slug' => Str::of('BÀI VIẾT')->slug('-'),
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Giới Thiệu',
                'parent_id' => 0,
                'slug' => Str::of('GIỚI THIỆU')->slug('-'),
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Liên Hệ',
                'parent_id' => 0,
                'slug' => Str::of('LIÊN HỆ')->slug('-'),
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}

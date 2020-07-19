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
                'name' => 'TRANG CHỦ',
                'parent_id' => 0,
                'slug' => Str::of('TRANG CHỦ')->slug('-'),
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'CỬA HÀNG',
                'parent_id' => 0,
                'slug' => Str::of('CỬA HÀNG')->slug('-'),
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'CÂY NỘI THẤT',
                'parent_id' => 2,
                'slug' => Str::of('CÂY NỘI THẤT')->slug('-'),
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'CÂY ĐỂ BÀN - KỆ',
                'parent_id' => 3,
                'slug' => Str::of('CÂY ĐỂ BÀN - KỆ')->slug('-'),
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'CÂY ĐỂ SÀN',
                'parent_id' => 3,
                'slug' => Str::of('CÂY ĐỂ SÀN')->slug('-'),
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'CÂY TERRARIUM',
                'parent_id' => 3,
                'slug' => Str::of('CÂY TERRARIUM')->slug('-'),
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'CHẬU LỌ',
                'parent_id' => 2,
                'slug' => Str::of('CHẬU LỌ')->slug('-'),
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'BÌNH THỦY TINH',
                'parent_id' => 7,
                'slug' => Str::of('BÌNH THỦY TINH')->slug('-'),
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'TIỂU CẢNH TERRARIUM',
                'parent_id' => 2,
                'slug' => Str::of('TIỂU CẢNH TERRARIUM')->slug('-'),
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'DỊCH VỤ',
                'parent_id' => 0,
                'slug' => Str::of('DỊCH VỤ')->slug('-'),
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'BLOG',
                'parent_id' => 0,
                'slug' => Str::of('BLOG')->slug('-'),
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'ABOUT US',
                'parent_id' => 0,
                'slug' => Str::of('ABOUT US')->slug('-'),
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'LIÊN HỆ',
                'parent_id' => 12,
                'slug' => Str::of('LIÊN HỆ')->slug('-'),
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'FAQ',
                'parent_id' => 12,
                'slug' => Str::of('FAQ')->slug('-'),
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'MY ACCOUNT',
                'parent_id' => 0,
                'slug' => Str::of('MY ACCOUNT')->slug('-'),
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}

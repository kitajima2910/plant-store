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
                'name' => 'DANH MỤC',
                'parent_id' => 0,
                'slug' => Str::of('DANH MỤC')->slug('-'),
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
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
                'parent_id' => 1,
                'slug' => Str::of('CÂY NỘI THẤT')->slug('-'),
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        
         
            [
                'name' => 'CHẬU LỌ',
                'parent_id' => 1,
                'slug' => Str::of('CHẬU LỌ')->slug('-'),
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'TIỂU CẢNH',
                'parent_id' => 1,
                'slug' => Str::of('TIỂU CẢNH')->slug('-'),
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'PHỤ KIỆN',
                'parent_id' => 1,
                'slug' => Str::of('PHỤ KIỆN')->slug('-'),
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
                'name' => 'BÀI VIẾT',
                'parent_id' => 0,
                'slug' => Str::of('BÀI VIẾT')->slug('-'),
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
                'parent_id' => 10,
                'slug' => Str::of('LIÊN HỆ')->slug('-'),
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

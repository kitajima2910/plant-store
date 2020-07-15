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
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),
           ],
           [
               'name' => 'CỬA HÀNG',
               'parent_id' => 0,
               'slug' => Str::of('CỬA HÀNG')->slug('-'),
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),
           ],
           [
               'name' => 'CÂY NỘI THẤT',
               'parent_id' => 2,
               'slug' => Str::of('CÂY NỘI THẤT')->slug('-'),
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),
           ],
           [
               'name' => 'CÂY ĐỂ BÀN - KỆ',
               'parent_id' => 3,
               'slug' => Str::of('CÂY ĐỂ BÀN - KỆ')->slug('-'),
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),
           ],
           [
               'name' => 'CÂY ĐỂ SÀN',
               'parent_id' => 3,
               'slug' => Str::of('CÂY ĐỂ SÀN')->slug('-'),
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),
           ],
           [
               'name' => 'CÂY TERRARIUM',
               'parent_id' => 3,
               'slug' => Str::of('CÂY TERRARIUM')->slug('-'),
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),
           ],
           [
               'name' => 'TIỂU CẢNH TERRARIUM',
               'parent_id' => 2,
               'slug' => Str::of('TIỂU CẢNH TERRARIUM')->slug('-'),
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),
           ],
           [
               'name' => 'CHẬU LỌ',
               'parent_id' => 2,
               'slug' => Str::of('CHẬU LỌ')->slug('-'),
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),
           ],
           [
               'name' => 'BÌNH THỦY TINH',
               'parent_id' => 8,
               'slug' => Str::of('BÌNH THỦY TINH')->slug('-'),
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),
           ],
           [
               'name' => 'TIỂU CẢNH TERRARIUM',
               'parent_id' => 2,
               'slug' => Str::of('TIỂU CẢNH TERRARIUM')->slug('-'),
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),
           ],
           [
               'name' => 'DỊCH VỤ',
               'parent_id' => 0,
               'slug' => Str::of('DỊCH VỤ')->slug('-'),
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),
           ],
           [
               'name' => 'TERRARIUM WORKSHOP',
               'parent_id' => 11,
               'slug' => Str::of('TERRARIUM WORKSHOP')->slug('-'),
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),
           ],
           [
               'name' => 'SƯU TẬP',
               'parent_id' => 0,
               'slug' => Str::of('SƯU TẬP')->slug('-'),
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),
           ],
           [
               'name' => 'PLANT LIFE',
               'parent_id' => 0,
               'slug' => Str::of('PLANT LIFE')->slug('-'),
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),
           ],
           [
               'name' => 'PLANT WIKI',
               'parent_id' => 14,
               'slug' => Str::of('PLANT WIKI')->slug('-'),
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),
           ],
           [
               'name' => 'ABOUT US',
               'parent_id' => 0,
               'slug' => Str::of('ABOUT US')->slug('-'),
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),
           ],
           [
               'name' => 'OUR STORY',
               'parent_id' => 16,
               'slug' => Str::of('ABOUT STORY')->slug('-'),
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),
           ],
           [
               'name' => 'LIÊN HỆ',
               'parent_id' => 16,
               'slug' => Str::of('LIÊN HỆ')->slug('-'),
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),
           ],
           [
               'name' => 'ĐỊA CHỈ',
               'parent_id' => 16,
               'slug' => Str::of('ĐỊA CHỈ')->slug('-'),
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),
           ],
           [
               'name' => 'FAQ',
               'parent_id' => 16,
               'slug' => Str::of('FAQ')->slug('-'),
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),
           ],
           [
               'name' => 'MY ACCOUNT',
               'parent_id' => 0,
               'slug' => Str::of('MY ACCOUNT')->slug('-'),
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),
           ],
           [
               'name' => 'CART',
               'parent_id' => 21,
               'slug' => Str::of('CART')->slug('-'),
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),
           ],
       ]); 
    }
}

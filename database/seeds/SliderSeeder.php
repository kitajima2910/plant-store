<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sliders')->insert([
            [
                'link' => Str::of('Trang Chủ')->slug('-') .'.html', 
                'feature_image_path' =>  '/public/uploads/sliders/3/oLoZfL4xq82GF0heCGcIYGHoZbc22BdE.jpg',
                'feature_image_name' => '34-39bbf20e-a699-453a-a9b4-beee70160f1a.jpg',
                'content' => '<p>CHẬU GỐM SỨ HANDCRAFT ĐƯỢC NGHIÊN CỨU VÀ THỰC HIỆN 100% THỦ CÔNG BẰNG  TAY KHÉO  LÉO CỦA CÁC NGHỆ NHÂN VIỆT NAM</p>',
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),   
            ],
            [
                'link' => Str::of('Trang Chủ')->slug('-') .'.html', 
                'feature_image_path' =>  '/public/uploads/sliders/3/dYgQBb10bstwOUbPNw3iMTE0iMWax9Jy.jpg',
                'feature_image_name' => '1568042845-Cactus_mix_yellow_2048x.jpg',
                'content' => '<p>PHƯƠNG PHÁP TRỒNG CÂY MỚI NHẤT THEO KỸ THUẬT CỦA NHẬT BẢN ĐẦU TIÊN VÀ DUY NHẤT TẠI VIỆT NAM</p>',
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),   
            ],
            [
                'link' => Str::of('Trang Chủ')->slug('-') .'.html', 
                'feature_image_path' =>  '/public/uploads/sliders/3/C6ck0dlKVnxIb6KaK4xd9QiRQEWP5D3s.jpg',
                'feature_image_name' => '11108810052-1472410719.jpg',
                'content' => '<p>CHẬU CÂY ARTIST TRANG TRÍ BÀN HỌC BÀN LÀM VIỆC</p>',
                'status' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),   
            ],
        ]);
    }
}

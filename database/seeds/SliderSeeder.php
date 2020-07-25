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
                'link' => Str::of('Slider 1')->slug('-'), 
                'feature_image_path' =>  '/public/uploads/sliders/3/rRX3d5meDNSBWhGwLDRXZPrcep8CrTca.jpg',
                'feature_image_name' => '34-39bbf20e-a699-453a-a9b4-beee70160f1a.jpg',
                'content' => 'CHẬU GỐM SỨ HANDCRAFT ĐƯỢC NGHIÊN CỨU VÀ THỰC HIỆN 100% THỦ CÔNG BẰNG BÀN TAY KHÉO LÉO CỦA CÁC NGHỆ NHÂN VIỆT NAM',
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),   
            ],
            [
                'link' => Str::of('Slider 2')->slug('-'), 
                'feature_image_path' =>  '/public/uploads/sliders/3/m7bTPUL3ILJaTj9qk9XfKlhthuSY3xXu.jpg',
                'feature_image_name' => '1568042845-Cactus_mix_yellow_2048x.jpg',
                'content' => 'PHƯƠNG PHÁP TRỒNG CÂY MỚI NHẤT THEO KỸ THUẬT CỦA NHẬT BẢN ĐẦU TIÊN VÀ DUY NHẤT TẠI VIỆT NAM',
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),   
            ],
            [
                'link' => Str::of('Slider 3')->slug('-'), 
                'feature_image_path' =>  '/public/uploads/sliders/3/J4s0pUuHZaBrSqPBnECxXOS97hCFU8Fs.jpg',
                'feature_image_name' => '11108810052-1472410719.jpg',
                'content' => 'CHẬU CÂY ARTIST TRANG TRÍ BÀN HỌC BÀN LÀM VIỆC',
                'status' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),   
            ],
        ]);
    }
}

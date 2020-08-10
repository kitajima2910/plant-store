<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
            [
                'config_key' => 'key_email',
                'config_value' => 'aptech.hcm@fpt.com.vn',
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'config_key' => 'key_phone',
                'config_value' => '+0942 256 825',
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'config_key' => 'key_address',
                'config_value' => '590 Cách Mạng Tháng Tám, Quận 3, TPHCM',
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'config_key' => 'key_open_hours',
                'config_value' => 'Th2 - CN: 8 giờ đến 21 giờ',
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'config_key' => 'key_happy_hours',
                'config_value' => 'Th7: 14 giờ đến 16 giờ',
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'config_key' => 'key_copyright',
                'config_value' => 'Copyright © FPT APTECH 2020 All Rights Reserved',
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'config_key' => 'key_facebook',
                'config_value' => 'https://www.facebook.com/aptech.fpt',
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'config_key' => 'key_footer_content',
                'config_value' => 'Không đơn thuần là cửa hàng cây xanh, ra đời với mong muốn là điểm nối của mỗi người với thiên nhiên bằng những sản phẩm chất lượng, sáng tạo, thuần Việt.',
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'config_key' => 'key_quality',
                'config_value' => 'Sản phẩm được chọn lọc kỉ lưỡng , thuần khí hậu và  phát triển một cách tự nhiên, luôn được các chủ vườn chăm sóc và nuôi dưỡng trong môi trường nhà kính,, với điều kiện ánh sáng và nhiệt độ phù hợp giúp cây phát triển một cách tốt nhất.',
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'config_key' => 'key_service',
                'config_value' => 'Sản phẩm được chọn lọc kỉ lưỡng , thuần khí hậu và  phát triển một cách tự nhiên, luôn được các chủ vườn chăm sóc và nuôi dưỡng trong môi trường nhà kính,, với điều kiện ánh sáng và nhiệt độ phù hợp giúp cây phát triển một cách tốt nhất.',
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'config_key' => 'key_nature',
                'config_value' => 'Chúng tôi cung cấp những sản phẩm tự nhiên, cây cảnh được nuôi dưỡng trong môi trường tự nhiên  không sử dụng các hóa chất gây ảnh hưởng tới cây trồng.',
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'config_key' => 'key_protected',
                'config_value' => 'Chúng tôi chăm sóc cây cảnh bằng các loại phân bón hữu cơ không ảnh hưởng tới môi trường tự nhiên, diệt các loại nấm sâu bọ bằng các sản phẩm hữu cơ cũng như các loài thiên địch.',
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'config_key' => 'key_soild',
                'config_value' => 'Giá thể trồng cây phải thoáng và thoát nước tốt, định kì bón phân tan chậm để cung cấp dinh dưỡng cho cây trồng.',
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'config_key' => 'key_water',
                'config_value' => 'Chỉ nên tưới cây khi đất thật sự khô, không nên tưới vào những thời điểm nhiệt độ môi trường quá nóng.',
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'config_key' => 'key_cut',
                'config_value' => 'Nên cắt tỉa bỏ những lá giá dưới cùng và thay chậu cho cây 6 tháng 1 lần.',
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}

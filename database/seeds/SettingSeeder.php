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
        ]);
    }
}

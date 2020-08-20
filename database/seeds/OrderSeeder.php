<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert([
            [   
                'user_id' => '4',
                'name' => 'Phạm Xuân Hoài',
                'email' => 'khachhang1@gmail.com',
                'phone' => '0933691822',
                'address' => '643 Đinh Tiên Hoàng, Hà Nội',
                'notes' => '',
                'method' => 'Nhận hàng',
                'status' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [   
                'user_id' => '5',
                'name' => 'Phạm Xuân Hoài',
                'email' => 'khachhang2@gmail.com',
                'phone' => '0933691822',
                'address' => '422/34/2 Phan Huy Ích, Q. Gò Vấp, TP.Hồ Chí Minh',
                'notes' => 'giao trước 12 h',
                'method' => 'Nhận hàng',
                'status' => '2',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [   
                'user_id' => '5',
                'name' => 'Phạm Xuân Hoài',
                'email' => 'khachhang2@gmail.com',
                'phone' => '0933691822',
                'address' => '422/34/2 Phan Huy Ích, Q. Gò Vấp, TP.Hồ Chí Minh',
                'notes' => 'giao vào giờ hành chánh',
                'method' => 'Nhận hàng',
                'status' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [   
                'user_id' => '6',
                'name' => 'Phạm Xuân Hoài',
                'email' => 'khachhang3@gmail.com',
                'phone' => '0933691822',
                'address' => '234 Nuyễn Huệ, TP. Quy Nhơn',
                'notes' => 'giao trong giờ hành chánh',
                'method' => 'Nhận hàng',
                'status' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [   
                'user_id' => '6',
                'name' => 'Phạm Xuân Hoài',
                'email' => 'khachhang3@gmail.com',
                'phone' => '0933691822',
                'address' => '234 Nuyễn Huệ, TP. Quy Nhơn',
                'notes' => 'giao trong giờ hành chánh',
                'method' => 'Nhận hàng',
                'status' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}

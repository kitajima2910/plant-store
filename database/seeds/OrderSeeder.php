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
                'email' => 'khachhang1@gmail.com',
                'phone' => '0933691822',
                'address' => 'GV',
                'notes' => '',
                'status' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [   
                'user_id' => '5',
                'email' => 'khachhang2@gmail.com',
                'phone' => '0933691822',
                'address' => 'GV',
                'notes' => 'giao trước 12 h',
                'status' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [   
                'user_id' => '5',
                'email' => 'khachhang2@gmail.com',
                'phone' => '0933691822',
                'address' => 'GV',
                'notes' => 'giao vào giờ hành chánh',
                'status' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [   
                'user_id' => '6',
                'email' => 'khachhang3@gmail.com',
                'phone' => '0933691822',
                'address' => 'BTH',
                'notes' => 'giao trong giờ hành chánh',
                'status' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [   
                'user_id' => '6',
                'email' => 'khachhang3@gmail.com',
                'phone' => '0933691822',
                'address' => 'BTH',
                'notes' => 'giao trong giờ hành chánh',
                'status' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}

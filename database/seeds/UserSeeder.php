<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Phạm Xuân Hoài',
                'email' => 'hoaipx@gmail.com',
                'password' => bcrypt('123456'),
                'phone' => '0933691822',
                'address' => 'TP. Quy Nhơn',
                'level' => 1,
                'status' => 1,
                'created_at' => '2020-02-19 15:49:30',
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Trần Thị Mỹ Lan',
                'email' => 'lanttm@gmail.com',
                'password' => bcrypt('123456'),
                'phone' => '0933691822',
                'address' => 'TP. Quảng Trị',
                'level' => 0,
                'status' => 1,
                'created_at' => '2020-12-19 15:49:30',
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Huy Phạm Quang',
                'email' => 'toilahuy@gmail.com',
                'password' => bcrypt('123456'),
                'phone' => '0933691822',
                'address' => 'TP. Hồ Chí Minh',
                'level' => 1,
                'status' => 1,
                'created_at' => '2020-02-19 15:49:30',
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Huỳnh Ngọc Huệ',
                'email' => 'khachhang1@gmail.com',
                'password' => bcrypt('123456'),
                'phone' => '0933691822',
                'address' => 'TP. Quy Nhơn',
                'level' => 0,
                'status' => 1,
                'created_at' => '2020-01-19 15:49:30',
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Nguyễn An Khang',
                'email' => 'khachhang2@gmail.com',
                'password' => bcrypt('123456'),
                'phone' => '0933691822',
                'address' => 'TP. Quy Nhơn',
                'level' => 0,
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Võ Nhất Vũ',
                'email' => 'khachhang3@gmail.com',
                'password' => bcrypt('123456'),
                'phone' => '0933691822',
                'address' => 'Xã Đảo',
                'level' => 0,
                'status' => 1,
                'created_at' => '2020-12-19 15:49:30',
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}

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
                'email' => 'kitajima2910@gmail.com',
                'password' => bcrypt('123456'),
                'QRpassword' => '$2y$12$LM9bNcr.wAdFtDq.rsF8K.8CSH/bDe.HyV/D2uJ/4qEx4.S5wtroa', // PlantStore:kitajima2910@gmail.com
                'phone' => '0933691822',
                'address' => 'TP. Quy Nhơn',
                'level' => 0,
                'status' => 1,
                'created_at' => '2020-02-19 15:49:30',
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Trần Thị Mỹ Lan',
                'email' => 'lanttm@gmail.com',
                'password' => bcrypt('123456'),
                'QRpassword' => '$2y$12$VeVdxe.ALl9dPBwpklIzZOm45Ino5.ir7Xe5ueoiJYo4IJaRaIlWa',
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
                'QRpassword' => '$2y$12$00qr0U.Hg14fn2hfZkPxteqHGGY/LwoWlLScvJmpyOEsvA/KaSFmK',
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
                'QRpassword' => '$2y$12$jy867ZB0KD49Q7QdHiEKLeHG36D66469DvVx2k91dZPYcxaqNpViq',
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
                'QRpassword' => '$2y$12$qW2z/22ORjFpJRn/1wiylu6/Y4Be7mucxHDVMJs7E0rYcGQolRALe',
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
                'QRpassword' => '$2y$12$19CXIKC8VW4c2QOCJXG4s.I4FP8hwpGCFi8VTlFdrvu7vdrh3Fo6m',
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

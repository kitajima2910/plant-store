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
                'full_name' => 'Phạm Xuân Hoài',
                'email' => 'hoaipx@gmail.com',
                'password' => bcrypt('848028'),
                'address' => 'Gò Vấp, TP.HCM',
                'phone' => '0921223845',
                'date_of_birth' => Carbon::createFromFormat('d/m/Y', '29/10/1995'),
                'gender' => 0,
                'avatar' => 'https://via.placeholder.com/150',
                'level' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'full_name' => 'Trần Thị Mỹ Lan',
                'email' => 'lanttml@gmail.com',
                'password' => bcrypt('123456'),
                'address' => 'Quảng Trị',
                'phone' => '',
                'date_of_birth' => Carbon::createFromFormat('d/m/Y', '21/05/2002'),
                'gender' => 1,
                'avatar' => 'https://via.placeholder.com/150',
                'level' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'full_name' => 'Huy Phạm Quang',
                'email' => 'toilahuy@gmail.com',
                'password' => bcrypt('123456'),
                'address' => 'Bình Thạnh',
                'phone' => '',
                'date_of_birth' => Carbon::createFromFormat('d/m/Y', '04/04/1998'),
                'gender' => 0,
                'avatar' => 'https://via.placeholder.com/150',
                'level' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}

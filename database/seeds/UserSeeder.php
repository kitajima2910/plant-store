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
                'password' => bcrypt('848028'),
                'level' => 1,
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Trần Thị Mỹ Lan',
                'email' => 'lanttm@gmail.com',
                'password' => bcrypt('123456'),
                'level' => 0,
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Huy Phạm Quang',
                'email' => 'toilahuy@gmail.com',
                'password' => bcrypt('123456'),
                'level' => 1,
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
            [
                'tags_name' => Str::of('Cây Để Bàn')->slug('-'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(), 
            ],
            [
                'tags_name' => Str::of('Cây Để Sàn')->slug('-'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(), 
            ],
            [
                'tags_name' => Str::of('Cây Terrarium')->slug('-'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(), 
            ],
            [
                'tags_name' => Str::of('Tiểu Cảnh Terrarium')->slug('-'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(), 
            ],
            [
                'tags_name' => Str::of('Chậu Lọ')->slug('-'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(), 
            ],
            [
                'tags_name' => Str::of('Phụ  Kiện')->slug('-'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(), 
            ],
        ]);
    }
}

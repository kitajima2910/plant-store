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
                'tags_name' => 'cay-canh',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(), 
            ],    
            [
                'tags_name' => 'cay-canh-phong-thuy',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(), 
            ],    
            [
                'tags_name' => 'cay-duoi-cong',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(), 
            ],    
            [
                'tags_name' => 'huong-thao',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(), 
            ],    
            [
                'tags_name' => 'dua-canh-nen',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(), 
            ],    
            [
                'tags_name' => 'co-lan-chi',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(), 
            ],    
            [
                'tags_name' => 'hoa-su-quan-tu',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(), 
            ],    
            [
                'tags_name' => 'chuoi-re-quat',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(), 
            ],    
            [
                'tags_name' => 'hanh-phuc',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(), 
            ],    
            [
                'tags_name' => 'da-bup-do',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(), 
            ],    
            [
                'tags_name' => 'trau-ba-de-vuong',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(), 
            ],    
            [
                'tags_name' => 'truong-sinh',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(), 
            ],
            
            
            // CÂY TRONG NHÀ
            [
                'tags_name' => 'tuong-cay-xanh',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(), 
            ],    
            [
                'tags_name' => 'tung-la-han',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(), 
            ],    
            [
                'tags_name' => 'cay-canh-trong-nha',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(), 
            ],    
            [
                'tags_name' => 'lan-quan-tu',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(), 
            ],    
            [
                'tags_name' => 'bang-singapore',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(), 
            ],    
            [
                'tags_name' => 'cay-tung-thom',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(), 
            ],    
            [
                'tags_name' => 'hoa-trang-nguyen',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(), 
            ],    
            [
                'tags_name' => 'may-man-tai-loc',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(), 
            ],    
            [
                'tags_name' => 'tung-bong-lai',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(), 
            ],    
            [
                'tags_name' => 'hong-mon',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(), 
            ],    
            [
                'tags_name' => 'cau-tieu-tram',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(), 
            ],    
        ]);
    }
}

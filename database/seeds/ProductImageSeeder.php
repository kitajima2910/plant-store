<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class ProductImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_images')->insert([
            [ 
               'image_path' => '/public/uploads/products/3/8bHDgDk1weDKJT2jMvQUVGaqf8slDTXP.jpg',
               'image_name' => 'download.jpg',
               'product_id' => '1',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),   
            ],
        ]);
    }
    }


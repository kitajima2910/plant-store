<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;


class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [   'id' => '1',
                'name' => 'Product1',
                'price' => '500000',
                'feature_image' => 'https://via.placeholder.com/150',
                'content' => 'Make by abc',
                'user_id' => '001',
                'category_id' => '001',
                'created_at' => Carbon::now(),
                'updated_at' => carbon::now(),
            ],
            [   'id' => '2',
                'name' => 'Product2',
                'price' => '150000',
                'feature_image' => 'https://via.placeholder.com/150',
                'content' => 'Make by abc',
                'user_id' => '001',
                'category_id' => '002',
                'created_at' => Carbon::now(),
                'updated_at' => carbon::now(),
            ],
            [   'id' => '3',
                'name' => 'Product3',
                'price' => '160000',
                'feature_image' => 'https://via.placeholder.com/150',
                'content' => 'Make by abc',
                'user_id' => '001',
                '   ' => '002',
                'created_at' => Carbon::now(),
                'updated_at' => carbon::now(),
            ],
            [   'id' => '4',
                'name' => 'Product4',
                'price' => '260000',
                'feature_image' => 'https://via.placeholder.com/150',
                'content' => 'Make by abc',
                'user_id' => '002',
                'category_id' => '002',
                'created_at' => Carbon::now(),
                'updated_at' => carbon::now(),
            ],
            [   'id' => '5',
                'name' => 'Product5',
                'price' => '80000',
                'feature_image' => 'https://via.placeholder.com/150',
                'content' => 'Make by abc',
                'user_id' => '001',
                'category_id' => '001',
                'created_at' => Carbon::now(),
                'updated_at' => carbon::now(),
            ],
            [   'id' => '6',
                'name' => 'Product6',
                'price' => '100000',
                'feature_image' => 'https://via.placeholder.com/150',
                'content' => 'Make by abc',
                'user_id' => '001',
                'category_id' => '001',
                'created_at' => Carbon::now(),
                'updated_at' => carbon::now(),
            ],
        ]);
    }
}

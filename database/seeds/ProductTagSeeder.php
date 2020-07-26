<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;


class ProductTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
        public function run()
    {
        DB::table('product_tags')->insert([
           [
               'product_id' => '1',
               'tag_id' => '1',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(), 
           ],
           [
               'product_id' => '2',
               'tag_id' => '1',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(), 
           ],
           [
               'product_id' => '3',
               'tag_id' => '1',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(), 
           ],
           [
               'product_id' => '4',
               'tag_id' => '1',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(), 
           ],
           [
               'product_id' => '5',
               'tag_id' => '2',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(), 
           ],
           [
               'product_id' => '6',
               'tag_id' => '2',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(), 
           ],
           [
               'product_id' => '7',
               'tag_id' => '3',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(), 
           ],
           [
               'product_id' => '8',
               'tag_id' => '3',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(), 
           ],
           [
               'product_id' => '9',
               'tag_id' => '3',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(), 
           ],
           [
               'product_id' => '10',
               'tag_id' => '4',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(), 
           ],
           [
               'product_id' => '11',
               'tag_id' => '4',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(), 
           ],
           [
               'product_id' => '12',
               'tag_id' => '4',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(), 
           ],
           [
               'product_id' => '13',
               'tag_id' => '4',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(), 
           ],
           [
               'product_id' => '14',
               'tag_id' => '5',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(), 
           ],
           [
               'product_id' => '15',
               'tag_id' => '5',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(), 
           ],
           [
               'product_id' => '16',
               'tag_id' => '5',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(), 
           ],
           [
               'product_id' => '17',
               'tag_id' => '6',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(), 
           ],
           [
               'product_id' => '18',
               'tag_id' => '6',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(), 
           ],
           [
               'product_id' => '19',
               'tag_id' => '6',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(), 
           ],
           [
               'product_id' => '20',
               'tag_id' => '6',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(), 
           ],
        ]);
    }
    }


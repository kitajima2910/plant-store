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
               'product_id' => '1',
               'tag_id' => '2',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(), 
           ],
           [
               'product_id' => '1',
               'tag_id' => '3',
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
               'product_id' => '2',
               'tag_id' => '4',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(), 
           ],
           [
               'product_id' => '2',
               'tag_id' => '2',
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
               'product_id' => '3',
               'tag_id' => '2',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(), 
           ],
           [
               'product_id' => '3',
               'tag_id' => '5',
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
               'product_id' => '4',
               'tag_id' => '2',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(), 
           ],
           [
               'product_id' => '4',
               'tag_id' => '6',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(), 
           ],
           [
               'product_id' => '5',
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
               'product_id' => '5',
               'tag_id' => '7',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(), 
           ],
           [
               'product_id' => '6',
               'tag_id' => '1',
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
               'product_id' => '6',
               'tag_id' => '8',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(), 
           ],
           [
               'product_id' => '7',
               'tag_id' => '1',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(), 
           ],
           [
               'product_id' => '7',
               'tag_id' => '2',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(), 
           ],
           [
               'product_id' => '7',
               'tag_id' => '9',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(), 
           ],
           [
               'product_id' => '8',
               'tag_id' => '1',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(), 
           ],
           [
               'product_id' => '8',
               'tag_id' => '2',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(), 
           ],
           [
               'product_id' => '8',
               'tag_id' => '10',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(), 
           ],
           [
               'product_id' => '9',
               'tag_id' => '1',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(), 
           ],
           [
               'product_id' => '9',
               'tag_id' => '2',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(), 
           ],
           [
               'product_id' => '9',
               'tag_id' => '11',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(), 
           ],
           [
               'product_id' => '10',
               'tag_id' => '1',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(), 
           ],
           [
               'product_id' => '10',
               'tag_id' => '2',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(), 
           ],
           [
               'product_id' => '10',
               'tag_id' => '12',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(), 
           ],
           
           
           
        //    CÂY TRONG NHÀ
           [
               'product_id' => '11',
               'tag_id' => '1',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(), 
           ],
           [
               'product_id' => '11',
               'tag_id' => '13',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(), 
           ],
           [
               'product_id' => '11',
               'tag_id' => '15',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(), 
           ],
           [
               'product_id' => '12',
               'tag_id' => '1',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(), 
           ],
           [
               'product_id' => '12',
               'tag_id' => '14',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(), 
           ],
           [
               'product_id' => '12',
               'tag_id' => '15',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(), 
           ],
           [
               'product_id' => '13',
               'tag_id' => '1',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(), 
           ],
           [
               'product_id' => '13',
               'tag_id' => '15',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(), 
           ],
           [
               'product_id' => '13',
               'tag_id' => '16',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(), 
           ],
           [
               'product_id' => '14',
               'tag_id' => '1',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(), 
           ],
           [
               'product_id' => '14',
               'tag_id' => '15',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(), 
           ],
           [
               'product_id' => '14',
               'tag_id' => '17',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(), 
           ],
           [
               'product_id' => '15',
               'tag_id' => '1',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(), 
           ],
           [
               'product_id' => '15',
               'tag_id' => '15',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(), 
           ],
           [
               'product_id' => '15',
               'tag_id' => '18',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(), 
           ],
           [
               'product_id' => '16',
               'tag_id' => '1',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(), 
           ],
           [
               'product_id' => '16',
               'tag_id' => '15',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(), 
           ],
           [
               'product_id' => '16',
               'tag_id' => '19',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(), 
           ],
           [
               'product_id' => '17',
               'tag_id' => '1',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(), 
           ],
           [
               'product_id' => '17',
               'tag_id' => '15',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(), 
           ],
           [
               'product_id' => '17',
               'tag_id' => '20',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(), 
           ],
           [
               'product_id' => '18',
               'tag_id' => '1',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(), 
           ],
           [
               'product_id' => '18',
               'tag_id' => '15',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(), 
           ],
           [
               'product_id' => '18',
               'tag_id' => '21',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(), 
           ],
           [
               'product_id' => '19',
               'tag_id' => '1',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(), 
           ],
           [
               'product_id' => '19',
               'tag_id' => '15',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(), 
           ],
           [
               'product_id' => '19',
               'tag_id' => '22',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(), 
           ],
           [
               'product_id' => '20',
               'tag_id' => '1',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(), 
           ],
           [
               'product_id' => '20',
               'tag_id' => '15',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(), 
           ],
           [
               'product_id' => '20',
               'tag_id' => '23',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(), 
           ],
         
         
        ]);
    }
    }


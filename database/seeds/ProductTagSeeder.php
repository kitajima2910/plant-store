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
        ]);
    }
    }


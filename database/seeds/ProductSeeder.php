<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        DB::table('products')->insert([
            [ 
               'name' => 'Cây Bàng Singapore',
               'slug' => Str::of('Cây Bàng Singapore')->slug('-'), 
               'feature_image_path' => '/public/uploads/products/3/7cZlHinrAzxM3r9apxpFFWeMMALyB58W.jpg',
               'feature_image_name' => 'download.jpg',
               'price' => '189000',
               'sale_price' => '10',
               'content' => '<p><img alt="" src="http://localhost/plant-store/public/uploads/products/3/download.jpg" style="height:205px; width:280px" /></p>

               <p><img alt="" src="http://localhost/plant-store/public/uploads/products/3/download1.jpg" style="height:348px; width:280px" /></p>',
               'user_id' => '3',
               'category_id' => '2',
               'status' => '1',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),   
            ],
        ]);
    }
}

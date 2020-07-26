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
            [ 
               'name' => 'Cây Không Khí',
               'slug' => Str::of('Cây Không Khí')->slug('-'), 
               'feature_image_path' => '/public/uploads/products/3/OK5U8jQl3TVlFdwbGzJjmKI00eygRqBM.jpg',
               'feature_image_name' => 'hinh1.jpg',
               'price' => '49000',
               'sale_price' => '10',
               'content' => '<p><img alt="" src="http://localhost/plant-store/public/uploads/image/c%C3%A2y%20n%E1%BB%99i%20th%E1%BA%A5t/c%C3%A2y%20%C4%91%E1%BB%83%20b%C3%A0n/c%C3%A2y%20kh%C3%B4ng%20kh%C3%AD/content1.jpg" style="height:200px; width:280px" /></p>

               <p><img alt="" src="http://localhost/plant-store/public/uploads/image/c%C3%A2y%20n%E1%BB%99i%20th%E1%BA%A5t/c%C3%A2y%20%C4%91%E1%BB%83%20b%C3%A0n/c%C3%A2y%20kh%C3%B4ng%20kh%C3%AD/content2.jpg" style="height:210px; width:280px" /></p>',
               'user_id' => '3',
               'category_id' => '2',
               'status' => '1',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'name' => 'Lan Ý',
               'slug' => Str::of('Lan Ý')->slug('-'), 
               'feature_image_path' => '/public/uploads/products/3/eI8Traz5MxYuapA9oB4WB2O9C8r9UvPA.jpg',
               'feature_image_name' => 'image1.jpg',
               'price' => '189000',
               'sale_price' => '10',
               'content' => '<p><img alt="" src="http://localhost/plant-store/public/uploads/image/c%C3%A2y%20n%E1%BB%99i%20th%E1%BA%A5t/c%C3%A2y%20%C4%91%E1%BB%83%20b%C3%A0n/lan%20%20%C3%BD/content1.jpg" style="height:205px; width:280px" /></p>

               <p><img alt="" src="http://localhost/plant-store/public/uploads/image/c%C3%A2y%20n%E1%BB%99i%20th%E1%BA%A5t/c%C3%A2y%20%C4%91%E1%BB%83%20b%C3%A0n/lan%20%20%C3%BD/content2.jpg" style="height:348px; width:280px" /></p>',
               'user_id' => '3',
               'category_id' => '2',
               'status' => '1',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'name' => 'Vạn Lộc',
               'slug' => Str::of('Vạn Lộc')->slug('-'), 
               'feature_image_path' => '/public/uploads/products/3/f0MakZ8alA438EJ8iRj7wXorzsyWBjR3.jpg',
               'feature_image_name' => 'image1.jpg',
               'price' => '349000',
               'sale_price' => '10',
               'content' => '<p><img alt="" src="http://localhost/plant-store/public/uploads/image/c%C3%A2y%20n%E1%BB%99i%20th%E1%BA%A5t/c%C3%A2y%20%C4%91%E1%BB%83%20b%C3%A0n/v%E1%BA%A1n%20l%E1%BB%99c/content1.jpg" style="height:205px; width:280px" /></p>

               <p><img alt="" src="http://localhost/plant-store/public/uploads/image/c%C3%A2y%20n%E1%BB%99i%20th%E1%BA%A5t/c%C3%A2y%20%C4%91%E1%BB%83%20b%C3%A0n/v%E1%BA%A1n%20l%E1%BB%99c/content2.jpg" style="height:348px; width:280px" /></p>',
               'user_id' => '3',
               'category_id' => '2',
               'status' => '1',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'name' => 'Kim Ngân  Xoắn',
               'slug' => Str::of('Kim Ngân  Xoắn')->slug('-'), 
               'feature_image_path' => '/public/uploads/products/3/NqM1zGsn4NJ4jlWaEP8kNXK7LUsb4B1B.jpg',
               'feature_image_name' => 'image1.jpg',
               'price' => '189000',
               'sale_price' => '15',
               'content' => '<p><img alt="" src="http://localhost/plant-store/public/uploads/image/c%C3%A2y%20n%E1%BB%99i%20th%E1%BA%A5t/c%C3%A2y%20%C4%91%E1%BB%83%20s%C3%A0n/kim%20ng%C3%A2n%20xo%E1%BA%AFn/content1.jpg" style="height:205px; width:280px" /></p>

               <p><img alt="" src="http://localhost/plant-store/public/uploads/image/c%C3%A2y%20n%E1%BB%99i%20th%E1%BA%A5t/c%C3%A2y%20%C4%91%E1%BB%83%20s%C3%A0n/kim%20ng%C3%A2n%20xo%E1%BA%AFn/content2.jpg" style="height:348px; width:280px" /></p>
               
               <p>&nbsp;</p>',
               'user_id' => '3',
               'category_id' => '3',
               'status' => '1',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'name' => 'Lưỡi Hổ',
               'slug' => Str::of('Lưỡi Hổ')->slug('-'), 
               'feature_image_path' => '/public/uploads/products/3/Z2A5abAtTjU1qD1HSHhNAWsGS1S5dIOt.jpg',
               'feature_image_name' => 'image1.jpg',
               'price' => '349000',
               'sale_price' => '15',
               'content' => '<p><img alt="" src="http://localhost/plant-store/public/uploads/image/c%C3%A2y%20n%E1%BB%99i%20th%E1%BA%A5t/c%C3%A2y%20%C4%91%E1%BB%83%20s%C3%A0n/l%C6%B0%E1%BB%A1i%20h%E1%BB%95/content1.jpg" style="height:187px; width:280px" /></p>

               <p><img alt="" src="http://localhost/plant-store/public/uploads/image/c%C3%A2y%20n%E1%BB%99i%20th%E1%BA%A5t/c%C3%A2y%20%C4%91%E1%BB%83%20s%C3%A0n/l%C6%B0%E1%BB%A1i%20h%E1%BB%95/content2.jpg" style="height:258px; width:280px" /></p>',
               'user_id' => '3',
               'category_id' => '3',
               'status' => '1',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'name' => 'Kim Phát Tài',
               'slug' => Str::of('Kim Phát Tài')->slug('-'), 
               'feature_image_path' => '/public/uploads/products/3/1C7uxLoncD6GOBIitkzOzUydyIky0ABb.jpg',
               'feature_image_name' => 'image1.jpg',
               'price' => '150000',
               'sale_price' => '20',
               'content' => '<p><img alt="" src="http://localhost/plant-store/public/uploads/image/c%C3%A2y%20n%E1%BB%99i%20th%E1%BA%A5t/c%C3%A2y%20terrarium/kim%20ph%C3%A1t%20t%C3%A0i/content1.jpg" style="height:548px; width:280px" /></p>',
               'user_id' => '3',
               'category_id' => '4',
               'status' => '1',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'name' => 'Ngọc Ngân',
               'slug' => Str::of('Ngọc Ngân')->slug('-'), 
               'feature_image_path' => '/public/uploads/products/3/91Z2alWe7gGdKewfLHF6FVUWzMtnBi7P.jpg',
               'feature_image_name' => 'image1.jpg',
               'price' => '150000',
               'sale_price' => '20',
               'content' => '<p><img alt="" src="http://localhost/plant-store/public/uploads/image/c%C3%A2y%20n%E1%BB%99i%20th%E1%BA%A5t/c%C3%A2y%20terrarium/ng%E1%BB%8Dc%20ng%C3%A2n/content1.jpg" style="height:258px; width:280px" /></p>

               <p><img alt="" src="http://localhost/plant-store/public/uploads/image/c%C3%A2y%20n%E1%BB%99i%20th%E1%BA%A5t/c%C3%A2y%20terrarium/ng%E1%BB%8Dc%20ng%C3%A2n/content2.jpg" style="height:548px; width:280px" /></p>',
               'user_id' => '3',
               'category_id' => '4',
               'status' => '1',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'name' => 'Sao Băng',
               'slug' => Str::of('Sao Băng')->slug('-'), 
               'feature_image_path' => '/public/uploads/products/3/MjUs1mzb7UbFRxZ6SNSwLSDYtV1nHH7I.jpg',
               'feature_image_name' => 'image1.jpg',
               'price' => '189000',
               'sale_price' => '20',
               'content' => '<p><img alt="" src="http://localhost/plant-store/public/uploads/image/c%C3%A2y%20n%E1%BB%99i%20th%E1%BA%A5t/c%C3%A2y%20terrarium/sao%20b%C4%83ng/content1.jpg" style="height:205px; width:280px" /></p>

               <p><img alt="" src="http://localhost/plant-store/public/uploads/image/c%C3%A2y%20n%E1%BB%99i%20th%E1%BA%A5t/c%C3%A2y%20terrarium/sao%20b%C4%83ng/content2.jpg" style="height:354px; width:280px" /></p>',
               'user_id' => '3',
               'category_id' => '4',
               'status' => '1',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'name' => 'Terrarium Family  and Home',
               'slug' => Str::of('Terrarium Family  and Home')->slug('-'), 
               'feature_image_path' => '/public/uploads/products/3/IV7bH3Yy9WBa71uYPmsxPo7BAgaz3Y3y.jpg',
               'feature_image_name' => 'image1.jpg',
               'price' => '450000',
               'sale_price' => '5',
               'content' => '<p><img alt="" src="http://localhost/plant-store/public/uploads/image/Ti%E1%BB%83u%20c%E1%BA%A3nh/family%20%20and%20home/content1.jpg" style="height:309px; width:280px" /></p>

               <p><img alt="" src="http://localhost/plant-store/public/uploads/image/Ti%E1%BB%83u%20c%E1%BA%A3nh/family%20%20and%20home/content2.jpg" style="height:145px; width:280px" /></p>',
               'user_id' => '3',
               'category_id' => '5',
               'status' => '1',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'name' => 'Friends',
               'slug' => Str::of('Friends')->slug('-'), 
               'feature_image_path' => '/public/uploads/products/3/hdwGRm6btl2H9GwrVWK8lqnZIqQK5ojk.jpg',
               'feature_image_name' => 'image1.jpg',
               'price' => '360000',
               'sale_price' => '5',
               'content' => '<p><img alt="" src="http://localhost/plant-store/public/uploads/image/Ti%E1%BB%83u%20c%E1%BA%A3nh/freind/content1.jpg" style="height:309px; width:280px" /></p>

               <p><img alt="" src="http://localhost/plant-store/public/uploads/image/Ti%E1%BB%83u%20c%E1%BA%A3nh/freind/content2.jpg" style="height:145px; width:280px" /></p>',
               'user_id' => '3',
               'category_id' => '5',
               'status' => '1',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'name' => 'Sweet  Couple',
               'slug' => Str::of('Sweet  Couple')->slug('-'), 
               'feature_image_path' => '/public/uploads/products/3/iH0EijJYF1LLQbtRHZwYCRIcHQajz0dk.jpg',
               'feature_image_name' => 'image1.jpg',
               'price' => '360000',
               'sale_price' => '5',
               'content' => '<p><img alt="" src="http://localhost/plant-store/public/uploads/image/Ti%E1%BB%83u%20c%E1%BA%A3nh/sweet%20couple/content1.jpg" style="height:309px; width:280px" /></p>

               <p><img alt="" src="http://localhost/plant-store/public/uploads/image/Ti%E1%BB%83u%20c%E1%BA%A3nh/sweet%20couple/content2.jpg" style="height:145px; width:280px" /></p>',
               'user_id' => '3',
               'category_id' => '5',
               'status' => '1',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'name' => 'Tropical  Forest',
               'slug' => Str::of('Tropical  Forest')->slug('-'), 
               'feature_image_path' => '/public/uploads/products/3/LR2PnP4fbHWBLALbv6RuUFLonoErFoSk.jpg',
               'feature_image_name' => 'image1.jpg',
               'price' => '350000',
               'sale_price' => '5',
               'content' => '<p><img alt="" src="http://localhost/plant-store/public/uploads/image/Ti%E1%BB%83u%20c%E1%BA%A3nh/tropical%20%20forest/content1.jpg" style="height:309px; width:280px" /></p>

               <p><img alt="" src="http://localhost/plant-store/public/uploads/image/Ti%E1%BB%83u%20c%E1%BA%A3nh/tropical%20%20forest/content2.jpg" style="height:145px; width:280px" /></p>',
               'user_id' => '3',
               'category_id' => '5',
               'status' => '1',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'name' => 'Chậu Ami',
               'slug' => Str::of('Chậu Ami')->slug('-'), 
               'feature_image_path' => '/public/uploads/products/3/S9VqqSGdjfLAAPkY6rr1qrb9C78jN9Uo.jpg',
               'feature_image_name' => 'image1.jpg',
               'price' => '75000',
               'sale_price' => '5',
               'content' => '<p><img alt="" src="http://localhost/plant-store/public/uploads/image/Ch%E1%BA%ADu%20l%E1%BB%8D/ch%E1%BA%ADu%20ami/content1.jpg" style="height:413px; width:280px" /></p>

               <p><img alt="" src="http://localhost/plant-store/public/uploads/image/Ch%E1%BA%ADu%20l%E1%BB%8D/ch%E1%BA%ADu%20ami/content2.jpg" style="height:187px; width:280px" /></p>',
               'user_id' => '3',
               'category_id' => '6',
               'status' => '1',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'name' => 'Chậu Koshi',
               'slug' => Str::of('Chậu Koshi')->slug('-'), 
               'feature_image_path' => '/public/uploads/products/3/ixOPmZC77qwhzBzyYLHKFd1PP6L0pxKg.jpg',
               'feature_image_name' => 'image1.jpg',
               'price' => '75000',
               'sale_price' => '5',
               'content' => '<p><img alt="" src="http://localhost/plant-store/public/uploads/image/Ch%E1%BA%ADu%20l%E1%BB%8D/ch%E1%BA%ADu%20koshi/content1.jpg" style="height:239px; width:280px" /></p>

               <p><img alt="" src="http://localhost/plant-store/public/uploads/image/Ch%E1%BA%ADu%20l%E1%BB%8D/ch%E1%BA%ADu%20koshi/content2.jpg" style="height:280px; width:280px" /></p>',
               'user_id' => '3',
               'category_id' => '6',
               'status' => '1',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'name' => 'Giỏ  Gói HandCraft',
               'slug' => Str::of('Giỏ  Gói HandCraft')->slug('-'), 
               'feature_image_path' => '/public/uploads/products/3/JeMLDmsz6mGhiVcKsQTWIlsjKXXYQXQz.jpg',
               'feature_image_name' => 'image1.jpg',
               'price' => '80000',
               'sale_price' => '5',
               'content' => '<p><img alt="" src="http://localhost/plant-store/public/uploads/image/Ch%E1%BA%ADu%20l%E1%BB%8D/gi%E1%BB%8F%20%20g%C3%B3i%20handcraft/content1.jpg" style="height:273px; width:280px" /></p>

               <p><img alt="" src="http://localhost/plant-store/public/uploads/image/Ch%E1%BA%ADu%20l%E1%BB%8D/gi%E1%BB%8F%20%20g%C3%B3i%20handcraft/content2.jpg" style="height:187px; width:280px" /></p>',
               'user_id' => '3',
               'category_id' => '6',
               'status' => '1',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'name' => 'Bậc Cầu',
               'slug' => Str::of('Bậc Cầu')->slug('-'), 
               'feature_image_path' => '/public/uploads/products/3/VVk7iYhN0HtsuQqWrTGiz6lZjB9TsPz9.jpg',
               'feature_image_name' => 'image1.jpg',
               'price' => '15000',
               'sale_price' => '5',
               'content' => '<p><img alt="" src="http://localhost/plant-store/public/uploads/image/ph%E1%BB%A5%20ki%E1%BB%87n/b%E1%BA%ADc%20c%E1%BA%A7u/content1.jpg" style="height:187px; width:280px" /></p>

               <p><img alt="" src="http://localhost/plant-store/public/uploads/image/ph%E1%BB%A5%20ki%E1%BB%87n/b%E1%BA%ADc%20c%E1%BA%A7u/content2.jpg" style="height:187px; width:280px" /></p>',
               'user_id' => '3',
               'category_id' => '8',
               'status' => '1',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'name' => 'Ông Bà',
               'slug' => Str::of('Ông Bà')->slug('-'), 
               'feature_image_path' => '/public/uploads/products/3/Ons9H5MYPjXmStiSmyH98dD1dsxkiQN5.jpg',
               'feature_image_name' => 'image1.jpg',
               'price' => '18000',
               'sale_price' => '5',
               'content' => '<p><img alt="" src="http://localhost/plant-store/public/uploads/image/ph%E1%BB%A5%20ki%E1%BB%87n/%C3%B4ng%20b%C3%A0/content1.jpg" style="height:89px; width:280px" /></p>

               <p><img alt="" src="http://localhost/plant-store/public/uploads/image/ph%E1%BB%A5%20ki%E1%BB%87n/%C3%B4ng%20b%C3%A0/content2.jpg" style="height:183px; width:280px" /></p>',
               'user_id' => '3',
               'category_id' => '8',
               'status' => '1',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'name' => 'Đôn Gỗ',
               'slug' => Str::of('Đôn Gỗ')->slug('-'), 
               'feature_image_path' => '/public/uploads/products/3/einI0QuuLg0oSMB8TwpA98Gqg0jikPh4.jpg',
               'feature_image_name' => 'image1.jpg',
               'price' => '50000',
               'sale_price' => '5',
               'content' => '<p><img alt="" src="http://localhost/plant-store/public/uploads/image/ph%E1%BB%A5%20ki%E1%BB%87n/%C4%91%C3%B4n%20g%E1%BB%97/content1.jpg" style="height:187px; width:280px" /></p>

               <p><img alt="" src="http://localhost/plant-store/public/uploads/image/ph%E1%BB%A5%20ki%E1%BB%87n/%C4%91%C3%B4n%20g%E1%BB%97/content2.jpg" style="height:185px; width:280px" /></p>',
               'user_id' => '3',
               'category_id' => '8',
               'status' => '1',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'name' => 'Rùa  Con',
               'slug' => Str::of('Rùa  Con')->slug('-'), 
               'feature_image_path' => '/public/uploads/products/3/Z3eTRkbXN3HTqf8XU7qv2yas8gxCfJnc.jpg',
               'feature_image_name' => 'image1.jpg',
               'price' => '10000',
               'sale_price' => '5',
               'content' => '<p><img alt="" src="http://localhost/plant-store/public/uploads/image/ph%E1%BB%A5%20ki%E1%BB%87n/r%C3%B9a%20con/content1.jpg" style="height:187px; width:280px" /></p>

               <p><img alt="" src="http://localhost/plant-store/public/uploads/image/ph%E1%BB%A5%20ki%E1%BB%87n/r%C3%B9a%20con/content2.jpg" style="height:120px; width:280px" /></p>',
               'user_id' => '3',
               'category_id' => '8',
               'status' => '1',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),   
            ],
       
        ]);
    }
}

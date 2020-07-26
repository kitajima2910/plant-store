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
            [ 
               'image_path' => '/public/uploads/products/3/1ntWgKhOlx65cXVAI8doBy8tf1mdYsPc.jpg',
               'image_name' => 'hinh3.jpg',
               'product_id' => '2',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'image_path' => '/public/uploads/products/3/lwKZq2RN8iqGUhcBlNeOijwVjFutQdr1.jpg',
               'image_name' => 'image2.jpg',
               'product_id' => '3',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'image_path' => '/public/uploads/products/3/Cl4dyVCVkbBvl35OZN4iumXwhH5fuVly.jpg',
               'image_name' => 'image2.jpg',
               'product_id' => '4',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'image_path' => '/public/uploads/products/3/0DG9u2KBWJSDcnfYGPIJ4eixjbT2q5Wo.jpg',
               'image_name' => 'image4.jpg',
               'product_id' => '5',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'image_path' => '/public/uploads/products/3/2mM68BSEKD1dPYbzTT2ZxDl3TjQADCfe.jpg',
               'image_name' => 'img1.jpg',
               'product_id' => '6',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'image_path' => '/public/uploads/products/3/x1Df8JAKIJnSROhgU1nFboubWV7KhZAB.jpg',
               'image_name' => 'img1.jpg',
               'product_id' => '7',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'image_path' => '/public/uploads/products/3/rJBVHYtLWlwv9GK7Uz9mCKdijqVQRfUS.jpg',
               'image_name' => 'img1.jpg',
               'product_id' => '8',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'image_path' => '/public/uploads/products/3/BkONHOmKrXg7HTZH53u52zRytXcOg8pr.jpg',
               'image_name' => 'img1.jpg',
               'product_id' => '9',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'image_path' => '/public/uploads/products/3/TveV4Tcvz03Aiipfjte4k3jz2C3yu467.jpg',
               'image_name' => 'img1.jpg',
               'product_id' => '10',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'image_path' => '/public/uploads/products/3/QuBCvb3oK4oObCbv4Qf7I2HMCzhWCLub.jpg',
               'image_name' => 'img1.jpg',
               'product_id' => '11',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'image_path' => '/public/uploads/products/3/a6ei3dsCM1SzTPdjCLe0putsyqkJjSiB.jpg',
               'image_name' => 'img1.jpg',
               'product_id' => '12',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'image_path' => '/public/uploads/products/3/SP5HAwPeEL3z3xDXm3zB7KqCws352mAp.jpg',
               'image_name' => 'img1.jpg',
               'product_id' => '13',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'image_path' => '/public/uploads/products/3/7bRWNKtRcpKfx9aRuTapf4nC78qGNEFF.jpg',
               'image_name' => 'img1.jpg',
               'product_id' => '14',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'image_path' => '/public/uploads/products/3/VglpwFEON84KXH3FUhxGmfFIysUl9hvW.jpg',
               'image_name' => 'img1.jpg',
               'product_id' => '15',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'image_path' => '/public/uploads/products/3/hxAdVTamXFKZijmWogEycMkWjeqle06u.jpg',
               'image_name' => 'img1.jpg',
               'product_id' => '16',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'image_path' => '/public/uploads/products/3/t2FCXTBTHnBjs8uqFJJ57gTIbDpeZG2m.jpg',
               'image_name' => 'img1.jpg',
               'product_id' => '17',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'image_path' => '/public/uploads/products/3/DeE6hUyyNGtXvGbGNP29pLKhD50N3i0q.jpg',
               'image_name' => 'img1.jpg',
               'product_id' => '18',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'image_path' => '/public/uploads/products/3/LBxb1x0WTCUOUz4vkf2Cu4qcOTR2mso9.jpg',
               'image_name' => 'img1.jpg',
               'product_id' => '19',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'image_path' => '/public/uploads/products/3/Wdux7V5duMnlAHqjbTyYehOHfypPZihu.jpg',
               'image_name' => 'img1.jpg',
               'product_id' => '20',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),   
            ],
        ]);
    }
    }


<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class OrderDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('order_details')->insert([
            [   
                'order_id' => '1',
                'product_id' => '47',
                'quantity' => '1',
                'price' => '29000',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [   
                'order_id' => '1',
                'product_id' => '46',
                'quantity' => '1',
                'price' => '29000',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [   
                'order_id' => '1',
                'product_id' => '45',
                'quantity' => '1',
                'price' => '29000',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'order_id' => '1',
                'product_id' => '48',
                'quantity' => '1',
                'price' => '26100',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [    
                'order_id' => '2',
                'product_id' => '31',
                'quantity' => '1',
                'price' => '134100',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [    
                'order_id' => '2',
                'product_id' => '35',
                'quantity' => '1',
                'price' => '147250',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [    
                'order_id' => '2',
                'product_id' => '13',
                'quantity' => '2',
                'price' => '139000',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [    
                'order_id' => '3',
                'product_id' => '20',
                'quantity' => '2',
                'price' => '69000',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [    
                'order_id' => '3',
                'product_id' => '1',
                'quantity' => '1',
                'price' => '143100',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [    
                'order_id' => '3',
                'product_id' => '19',
                'quantity' => '1',
                'price' => '114750',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [    
                'order_id' => '3',
                'product_id' => '18',
                'quantity' => '1',
                'price' => '112500',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [    
                'order_id' => '4',
                'product_id' => '7',
                'quantity' => '1',
                'price' => '124000',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [    
                'order_id' => '4',
                'product_id' => '14',
                'quantity' => '3',
                'price' => '449100',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [    
                'order_id' => '4',
                'product_id' => '32',
                'quantity' => '1',
                'price' => '55250',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [    
                'order_id' => '5',
                'product_id' => '31',
                'quantity' => '3',
                'price' => '134100',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [    
                'order_id' => '5',
                'product_id' => '11',
                'quantity' => '3',
                'price' => '679150',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [    
                'order_id' => '5',
                'product_id' => '48',
                'quantity' => '1',
                'price' => '26100',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}

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
               'image_path' => '/public/uploads/products/3/q3uzRmmBDPVLLWxi3yCc545HmvfEtBgm.jpg',
               'image_name' => 'duoi-cong-2.jpg',
               'product_id' => '1',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'image_path' => '/public/uploads/products/3/xgj4zUfyZWqOMWTOPZm5wdNKfu5w3XWc.jpg',
               'image_name' => 'duoi-cong-3.jpg',
               'product_id' => '1',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'image_path' => '/public/uploads/products/3/5QLNR2JY9Y49SNYko0anclYetriEf7R9.jpg',
               'image_name' => 'duoi-cong-4.jpg',
               'product_id' => '1',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'image_path' => '/public/uploads/products/3/m4jyoTooA30imU0LPqECrRH74nXu8E9A.jpg',
               'image_name' => 'huong-thao-2.jpg',
               'product_id' => '2',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'image_path' => '/public/uploads/products/3/P31IjArUJ66XvjizCBfnDvAG0fAbryQp.jpg',
               'image_name' => 'huong-thao-3.jpg',
               'product_id' => '2',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'image_path' => '/public/uploads/products/3/Nt3mWQXwTiQbSJc51DTSn7P6Ul5pA7Uw.jpg',
               'image_name' => 'dua-canh-nen-2.jpg',
               'product_id' => '3',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'image_path' => '/public/uploads/products/3/DIB0qglYHJJelolE7qdNUQnufH6mXiMX.jpg',
               'image_name' => 'dua-canh-nen-3.jpg',
               'product_id' => '3',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'image_path' => '/public/uploads/products/3/uBb1QvoPIoai0ui1uAVtvc2G1L3MQ2Ke.jpg',
               'image_name' => 'dua-canh-nen-4.jpg',
               'product_id' => '3',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'image_path' => '/public/uploads/products/3/a7J7VBno61y1vWaYQ4dnOq65sIyWvoHG.jpg',
               'image_name' => 'cay-co-lan-chi-2.jpg',
               'product_id' => '4',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'image_path' => '/public/uploads/products/3/6Twvc0d6Z87L0kBGjiN1bMBwgQvHYBjP.jpg',
               'image_name' => 'cay-co-lan-chi-3.jpg',
               'product_id' => '4',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'image_path' => '/public/uploads/products/3/MjqEdxqOZI4btWfJp5WQUNBJ9zQMrCnU.jpg',
               'image_name' => 'cay-co-lan-chi-4.jpg',
               'product_id' => '4',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'image_path' => '/public/uploads/products/3/aeJTWlxO8OVIHYpB3fzk1cfxzoxYrgui.jpg',
               'image_name' => 'cay-hoa-su-quan-tu-3.jpg',
               'product_id' => '5',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'image_path' => '/public/uploads/products/3/3QNRWdtf6WRtbLqpl163DqGmf0ww7u41.jpg',
               'image_name' => 'cay-hoa-su-quan-tu-4.jpg',
               'product_id' => '5',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'image_path' => '/public/uploads/products/3/4TyPg0FAvFyMZM4XOKEng6QDEIbWW3E7.jpg',
               'image_name' => 'chuoi-re-quat-2.jpg',
               'product_id' => '6',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'image_path' => '/public/uploads/products/3/VXy73MSDPUY5varSUsVE5z6dRAsdHk1C.jpg',
               'image_name' => 'chuoi-re-quat-3.jpg',
               'product_id' => '6',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'image_path' => '/public/uploads/products/3/wtDMpjvCymGsz3UVIhrbjwAXkwPrGDPV.jpg',
               'image_name' => 'chuoi-re-quat-4.jpg',
               'product_id' => '6',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'image_path' => '/public/uploads/products/3/XMu5iCeP6TbgZUiZTCwCoIZE5hrbY9d6.jpg',
               'image_name' => 'hanh-phuc-2.jpg',
               'product_id' => '7',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'image_path' => '/public/uploads/products/3/Mwzore4ebd3gQPZlI4ScNA2CBnJS6424.jpg',
               'image_name' => 'hanh-phuc-3.jpg',
               'product_id' => '7',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'image_path' => '/public/uploads/products/3/YJMSt94SAf9zxmQNMySjumEweXlYuczK.jpg',
               'image_name' => 'hanh-phuc-4.jpg',
               'product_id' => '7',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'image_path' => '/public/uploads/products/3/UHSdUduAyycBsdt0YZc0oh5iknhkffKI.jpg',
               'image_name' => 'bup-da-do-2.jpg',
               'product_id' => '8',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'image_path' => '/public/uploads/products/3/68IiPyLHSrDJhq1hlc3bc7Doffe5UIG9.jpg',
               'image_name' => 'bup-da-do-3.jpg',
               'product_id' => '8',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'image_path' => '/public/uploads/products/3/FbrUrkB10UodTQYjOroYtoUz6p3h3gNS.jpg',
               'image_name' => 'trau-ba-de-vuong-2.jpg',
               'product_id' => '9',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'image_path' => '/public/uploads/products/3/8makTrl8js8x2ccetxDm1TpJSodQT5NX.jpg',
               'image_name' => 'trau-ba-de-vuong-3.jpg',
               'product_id' => '9',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'image_path' => '/public/uploads/products/3/QAjU0bMltmRQMFZvJGY9cG9INhqIayN6.jpg',
               'image_name' => 'truong-sinh-2.jpg',
               'product_id' => '10',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'image_path' => '/public/uploads/products/3/Uk43sxHYZImKm2xqMaIdMStu1lW8THjn.jpg',
               'image_name' => 'truong-sinh-3.jpg',
               'product_id' => '10',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'image_path' => '/public/uploads/products/3/Ih1wqj2CdH4CrsivND0n744jWnW6YEnK.jpg',
               'image_name' => 'truong-sinh-4.jpg',
               'product_id' => '10',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),   
            ],



            // CÂY ĐỂ BÀN
            [ 
               'image_path' => '/public/uploads/products/3/PfIexfR5WcVDO4FpXAZNmLPOE7c4HYwt.jpg',
               'image_name' => 'tuong-cay-xanh-2.jpg',
               'product_id' => '11',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'image_path' => '/public/uploads/products/3/VBhCSkvfmTWMg8V5zHLTCltt24D3oP8s.jpg',
               'image_name' => 'tuong-cay-xanh-3.jpg',
               'product_id' => '11',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'image_path' => '/public/uploads/products/3/avJMhvaQBL1Dwb7WAzaPFopjA4zbW6Xg.jpg',
               'image_name' => 'tuong-cay-xanh-4.jpg',
               'product_id' => '11',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'image_path' => '/public/uploads/products/3/BPdPsbkPNZ0Dv0fcQkX2cCFXPaN4mczD.jpg',
               'image_name' => 'tung-la-han-2.jpg',
               'product_id' => '12',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'image_path' => '/public/uploads/products/3/5YEkckjCQ5Vp1iRaRgZKrcnpWdOHzF6E.jpg',
               'image_name' => 'tung-la-han-3.jpg',
               'product_id' => '12',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'image_path' => '/public/uploads/products/3/N2KcT4Tt1Vjj7WyixHmZRXaivscryG7Y.jpg',
               'image_name' => 'tung-la-han-4.jpg',
               'product_id' => '12',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'image_path' => '/public/uploads/products/3/5x0IuR0jcnSAoPVH387pRgxNH80SFsML.jpg',
               'image_name' => 'lan-quan-tu-2.jpg',
               'product_id' => '13',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'image_path' => '/public/uploads/products/3/FGR6J86G7kAtj79uK7eVgJxvdxH8hGLM.jpg',
               'image_name' => 'lan-quan-tu-3.jpg',
               'product_id' => '13',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'image_path' => '/public/uploads/products/3/N0SDyL61C7qc02eUHTyqujcdqnek6Tiq.jpg',
               'image_name' => 'bang-sing-2.jpg',
               'product_id' => '14',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'image_path' => '/public/uploads/products/3/epkXd4VaVEXHJDCKnv8L18ZhCSoZbxUu.jpg',
               'image_name' => 'bang-sing-3.jpg',
               'product_id' => '14',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'image_path' => '/public/uploads/products/3/roUlZUHOuCecAWrwo1H233Ft4vCeCnAj.jpg',
               'image_name' => 'bang-sing-4.jpg',
               'product_id' => '14',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'image_path' => '/public/uploads/products/3/A23huqp9j7WyUWuOxgUvVXIoCDBiY9cV.jpg',
               'image_name' => 'tung-thon-2.jpg',
               'product_id' => '15',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'image_path' => '/public/uploads/products/3/mneyfkWrcGz3r6qud787dgUVQ9wxuuqy.jpg',
               'image_name' => 'tung-thon-3.jpg',
               'product_id' => '15',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'image_path' => '/public/uploads/products/3/Mvh7CRA4c2HH3BIUZkCeZNXwRUuyaEnj.jpg',
               'image_name' => 'tung-thon-4.jpg',
               'product_id' => '15',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'image_path' => '/public/uploads/products/3/RANkqV34DjYZGtaSeRF7sSgZqeXWhZai.jpg',
               'image_name' => 'trang-nguyen-2.jpg',
               'product_id' => '16',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'image_path' => '/public/uploads/products/3/MObindCyr3fJiyR8PZrIDVU9Qo9qarDx.jpg',
               'image_name' => 'trang-nguyen-3.jpg',
               'product_id' => '16',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'image_path' => '/public/uploads/products/3/uwZKKXA8BEx7GSVQrXc9gUrjYOqzIZv5.jpg',
               'image_name' => 'trang-nguyen-4.jpg',
               'product_id' => '16',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'image_path' => '/public/uploads/products/3/OXaYvBuZTm1Y4GF5JXDAlRRn6ESrwIji.jpg',
               'image_name' => 'may-man-tai-loc-3.jpg',
               'product_id' => '17',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'image_path' => '/public/uploads/products/3/DlyTFig9X46xPRcYsAlCPUg5Al1URZdi.jpg',
               'image_name' => 'tung-bong-lai-2.jpg',
               'product_id' => '18',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'image_path' => '/public/uploads/products/3/BTjTQRS2jVCDkb5dWdtCzNe3F6gLtMBH.jpg',
               'image_name' => 'tung-bong-lai-3.jpg',
               'product_id' => '18',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'image_path' => '/public/uploads/products/3/kr87dET5klMdMQn9xwN3R4V8v24YnDs9.jpg',
               'image_name' => 'hong-mon-2.jpg',
               'product_id' => '19',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'image_path' => '/public/uploads/products/3/uhYqpceV7kudkr96EG3drveQaglchUTG.jpg',
               'image_name' => 'hong-mon-3.jpg',
               'product_id' => '19',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'image_path' => '/public/uploads/products/3/4EG8jpRMG6BNR314p0I48RFZzcdv7O47.jpg',
               'image_name' => 'cau-tieu-tram-2.jpg',
               'product_id' => '20',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'image_path' => '/public/uploads/products/3/JiLwQE3dp2pZ5Gfb48EgzzoMwGHktd8X.jpg',
               'image_name' => 'cau-tieu-tram-3.jpg',
               'product_id' => '20',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),   
            ],
      
        ]);
    }
    }


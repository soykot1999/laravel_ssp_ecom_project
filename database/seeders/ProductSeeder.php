<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
                'name'=>'Walton mobile',
                'price'=>'16,000 BDT',
                'description'=>'4GB Ram ,128GB Rom ,Dual core processor ',
                'category'=>'Smart Phone',
                'gallery'=>'https://waltonbd.com/image/cache/catalog/Mobile/2021/ZX4/ID%20Image/ZX4_ID-364x364.jpg',
            ],

            [
                'name'=>'Walton mobile',
                'price'=>'25,000 BDT',
                'description'=>'4GB Ram ,256GB Rom ,Dual core processor ',
                'category'=>'Smart Phone',
                'gallery'=>'https://waltonbd.com/image/cache/catalog/Mobile/2021/RX9/ID%20Image/1-364x364.jpg',
            ],

            [
                'name'=>'Samsung 4k UHD TV',
                'price'=>'40,000 BDT',
                'description'=>'Dynamic Crystal Display: see crystal clear, lifelike colour. With more than one billion colours – 64 times more than conventional UHD TVs. ',
                'category'=>'Smart TV',
                'gallery'=>'https://www.startech.com.bd/image/cache/catalog/television/samsung/nu8500/nu8500-500x500.jpg',
            ],

            [
                'name'=>'LG Refrigerator',
                'price'=>'60,000 BDT',
                'description'=>'27 cu. ft. Side-By-Side InstaView™ Door-in-Door® Refrigerator ',
                'category'=>'Refrigerator',
                'gallery'=>'https://www.lg.com/us/images/refrigerators/md07000075/gallery/medium01.jpg',
            ],

            [
                'name'=>'LG AC',
                'price'=>'50,000 BDT',
                'description'=>'3TON air condition ',
                'category'=>'Air Conditionar',
                'gallery'=>'https://www.clickbd.com/global/classified/item_img/2449579_0_original.jpg',
              ]
        
    ]);
    }
}

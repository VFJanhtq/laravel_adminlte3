<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            [

                'item_name' => 'iphone',
                'item_price' => '1000',
                'category_id' => '1'
            ],
            [

                'item_name' => 'sony',
                'item_price' => '2000',
                'category_id' => '2'
            ],
            [

                'item_name' => 'dell',
                'item_price' => '3000',
                'category_id' => '3'
            ],
            [

                'item_name' => 'new book',
                'item_price' => '1000',
                'category_id' => '4'
            ],
            [

                'item_name' => 'drama',
                'item_price' => '1000',
                'category_id' => '5'
            ],
        ]);
    }
}

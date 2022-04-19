<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category')->insert([
            ['category_name' => 'phones'],
            ['category_name' => 'cameras'],
            ['category_name' => 'computers'],
            ['category_name' => 'books'],
            ['category_name' => 'movies']
        ]);
    }
}

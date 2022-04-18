<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('address')->insert([
            ['address' => 'tokyo'],
            ['address' => 'osaka'],
            ['address' => 'kyoto'],
            ['address' => 'fukuoka'],
            ['address' => 'okinawa']

        ]);
    }
}

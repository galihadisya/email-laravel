<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

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
            'product_name' => 'Hazel',
            'customer_email' => 'Email Anda!'
        ]);

        DB::table('products')->insert([
            'product_name' => 'Semsing',
            'customer_email' => 'Email Anda!'
        ]);

        DB::table('products')->insert([
            'product_name' => 'Howzer',
            'customer_email' => 'Email Anda!'
        ]);
    }
}

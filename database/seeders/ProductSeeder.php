<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
                'user_id' => 1, 
                'title' => 'ここタイトルが入ります',
                'information' => 'ここにテキストが入ります。ここにテキストが入ります。',
                'secondary_category_id' => 1, 
                'filename' => 'no_image.jpg',
            ],
            [
                'user_id' => 1, 
                'title' => 'ここタイトルが入ります',
                'information' => 'ここにテキストが入ります。ここにテキストが入ります。',
                'secondary_category_id' => 2, 
                'filename' => 'no_image.jpg',
            ],
            [
                'user_id' => 1, 
                'title' => 'ここタイトルが入ります',
                'information' => 'ここにテキストが入ります。ここにテキストが入ります。',
                'secondary_category_id' => 3, 
                'filename' => 'no_image.jpg',
            ],
            [
                'user_id' => 1, 
                'title' => 'ここタイトルが入ります',
                'information' => 'ここにテキストが入ります。ここにテキストが入ります。',
                'secondary_category_id' => 4, 
                'filename' => 'no_image.jpg',
            ],
            [
                'user_id' => 1, 
                'title' => 'ここタイトルが入ります',
                'information' => 'ここにテキストが入ります。ここにテキストが入ります。',
                'secondary_category_id' => 5, 
                'filename' => 'no_image.jpg',
            ],
        ]);
    }
}

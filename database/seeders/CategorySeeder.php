<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('primary_categories')->insert([
            [
                'name' => '野球', 
                'sort_order' => 1,
            ],
            [
                'name' => 'ウィンタースポーツ', 
                'sort_order' => 2,
            ],
            [
                'name' => 'サッカー', 
                'sort_order' => 3,
            ],
        ]);

        DB::table('secondary_categories')->insert([
            [
                'name' => 'グローブ', 
                'sort_order' => 1,
                'primary_category_id' => 1,
            ],
            [
                'name' => 'バット', 
                'sort_order' => 2,
                'primary_category_id' => 1,
            ],
            [
                'name' => 'スノーボード', 
                'sort_order' => 3,
                'primary_category_id' => 2,
            ],
            [
                'name' => 'スキー', 
                'sort_order' => 4,
                'primary_category_id' => 2,
            ],
            [
                'name' => 'サッカーボール', 
                'sort_order' => 5,
                'primary_category_id' => 3,
            ],
            [
                'name' => 'スパイク', 
                'sort_order' => 6,
                'primary_category_id' => 3,
            ],
        ]);
    }
}

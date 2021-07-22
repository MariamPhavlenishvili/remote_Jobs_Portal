<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'category_title'=> 'Social media manager'
            ],
            [
                'category_title'=> 'Virtual assistant'
            ],
            [
                'category_title'=> 'Copy editor'
            ],
            [
                'category_title'=> 'Copywriter'
            ],
            [
                'category_title'=> 'Data analyst'
            ],
            [
                'category_title'=> 'Project manager'
            ],
            [
                'category_title'=> 'Software engineer'
            ],
        ]);
    }
}

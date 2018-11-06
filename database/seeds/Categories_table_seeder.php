<?php

use Illuminate\Database\Seeder;
use phpDocumentor\Reflection\DocBlock\Tags\Return_;


class Categories_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'company_id' => 1,
            'name' => 'South_Indian',
            'nick_name' => 'South',
            'desc' => '',
            'img' => 'images/testFood.png',
        ]);
        DB::table('categories')->insert([
            'company_id' => 1,
            'name' => 'Panjabi',
            'nick_name' => 'Pnj',
            'desc' => '',
            'img' => 'images/testFood1.png',
        ]);
        DB::table('categories')->insert([
            'company_id' => 1,
            'name' => 'Chinese',
            'nick_name' => 'Chins',
            'desc' => '',
            'img' => 'images/testFood3.png',
        ]);
        
        DB::table('categories')->insert([
            'company_id' => 1,
            'name' => 'Chaat',
            'nick_name' => 'Chat',
            'desc' => '',
            'img' => 'images/testFood4.png',
        ]);

        DB::table('categories')->insert([
            'company_id' => 1,
            'name' => 'Tea Coffee',
            'nick_name' => 'TC',
            'desc' => '',
            'img' => 'images/testFood5.png',
        ]);

        DB::table('categories')->insert([
            'company_id' => 1,
            'name' => 'Dummy Category',
            'nick_name' => 'Dummy',
            'desc' => '',
            'img' => 'images/testFood6.png',
        ]);

    }
    
}

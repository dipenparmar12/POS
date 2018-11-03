<?php

use Illuminate\Database\Seeder;

class Companies_table_seeder extends Seeder
{
    // --------------
    // Artisan Commnad For Making Seeder Class
    // php artisan make:seeder SeederName_anything
        // ___ USER Define Data ________________
        // Table: users
        // insert: Sql Qry 
        // name,email,pass: table_fields 
        // str_random(6): genrate lenth of 6 random letter String     
    // --------------
    public function run()
    {
        DB::table('companies')->insert([
            'name' => 'Gdham',
            'type' => 'all',
        ]);

        DB::table('companies')->insert([
            'name' => 'Adipur',
            'type' => 'SouthIndian',
        ]);
    }

}
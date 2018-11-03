<?php

use Illuminate\Database\Seeder;

class Users_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert([
            'name' => 'Gdham',
            'type' => 'all',
        ]);
    }
}
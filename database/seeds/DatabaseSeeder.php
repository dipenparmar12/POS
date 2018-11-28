<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // $this->call([
        //     Companies_table_seeder::class,
        //     Categories_table_seeder::class,
        // ]);

        factory('App\User', 100)->create();
    }
}

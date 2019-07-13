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
        DB::table('users')->insert([
            'name' => 'Johann Schneider',
            'email' => 'j.schneider@gemuesering.de',
            'password' => bcrypt('123')
        ]);

        DB::table('users')->insert([
            'name' => 'Alexander Hartel',
            'email' => 'a.hartel@gemuesering.de',
            'password' => bcrypt('123')
        ]);

        DB::table('users')->insert([
            'name' => 'Isabel Schröder',
            'email' => 'i.schroeder@gemuesering.de',
            'password' => bcrypt('123')
        ]);
    }
}

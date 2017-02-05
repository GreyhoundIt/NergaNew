<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        $this->call(ClubTableSeeder::class);
        $this->call(LeagueTableSeeder::class);
        $this->call(ZoneTableSeeder::class);
        $this->call(FixtureTableSeeder::class);
    }
}

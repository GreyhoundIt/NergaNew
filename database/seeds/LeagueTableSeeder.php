<?php

use Illuminate\Database\Seeder;

class LeagueTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('leagues')->insert([

        ['id'=> '1', 'name' => 'Inter', 'created_at' => new DateTime, 'updated_at' => new DateTime,],
        ['id' => '2', 'name' =>'Nerga', 'created_at' => new DateTime, 'updated_at' => new DateTime,],

        ]);
    }
}

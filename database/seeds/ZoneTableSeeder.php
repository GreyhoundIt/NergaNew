<?php

use Illuminate\Database\Seeder;

class ZoneTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('zones')->insert([

            ['id'=> '1','league_id'=> '1','name' => 'Inter Blue', 'created_at' => new DateTime, 'updated_at' => new DateTime,],
            ['id'=> '2','league_id'=> '1','name' => 'Inter Red', 'created_at' => new DateTime, 'updated_at' => new DateTime,],
            ['id'=> '3','league_id'=> '1','name' => 'Inter Yellow', 'created_at' => new DateTime, 'updated_at' => new DateTime,],

            ['id'=> '4','league_id'=> '2','name' => 'NERGA Blue', 'created_at' => new DateTime, 'updated_at' => new DateTime,],
            ['id'=> '5','league_id'=> '2','name' => 'NERGA Green', 'created_at' => new DateTime, 'updated_at' => new DateTime,],
            ['id'=> '6','league_id'=> '2','name' => 'NERGA Red', 'created_at' => new DateTime, 'updated_at' => new DateTime,],
            ['id'=> '7','league_id'=> '2','name' => 'NERGA Yellow', 'created_at' => new DateTime, 'updated_at' => new DateTime,],


        ]);
    }
}

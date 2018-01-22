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

            ['id'=> '1','league_id'=> '1','name' => 'Inter Blue', 'rep_name' =>'Sammy Howarth', 'rep_club' =>'Crook','created_at' => new DateTime, 'updated_at' => new DateTime,],
            ['id'=> '2','league_id'=> '1','name' => 'Inter Red', 'rep_name' =>'Tony Creaser', 'rep_club' =>'Malton and Norton','created_at' => new DateTime, 'updated_at' => new DateTime,],
            ['id'=> '3','league_id'=> '1','name' => 'Inter Yellow', 'rep_name' =>'Steve Black', 'rep_club' =>'Bedale','created_at' => new DateTime, 'updated_at' => new DateTime,],

            ['id'=> '5','league_id'=> '2','name' => 'NERGA Blue', 'rep_name' =>'Mike Fox', 'rep_club' =>'Thirsk and Northallerton','created_at' => new DateTime, 'updated_at' => new DateTime,],
            ['id'=> '4','league_id'=> '2','name' => 'NERGA Green', 'rep_name' =>'Colin Healey', 'rep_club' =>'Richmond','created_at' => new DateTime, 'updated_at' => new DateTime,],
            ['id'=> '7','league_id'=> '2','name' => 'NERGA Red','rep_name' =>'Mike Walke', 'rep_club' =>'Blackwell Grange', 'created_at' => new DateTime, 'updated_at' => new DateTime,],
            ['id'=> '6','league_id'=> '2','name' => 'NERGA Yellow','rep_name' =>'Chris Woodcock', 'rep_club' =>'Boothferry', 'created_at' => new DateTime, 'updated_at' => new DateTime,],


        ]);
    }
}

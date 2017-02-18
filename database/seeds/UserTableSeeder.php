<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
           ['club_id' => '1','isAdmin' => '0' ,'name' => 'Crook', 'username' => 'Crook', 'password' => bcrypt('Crook2017'), 'created_at' => new DateTime, 'updated_at' => new DateTime ],
           ['club_id' => '2','isAdmin' => '0' ,'name' => 'Bedale', 'username' => 'Bedale', 'password' => bcrypt('Bedale2017'), 'created_at' => new DateTime, 'updated_at' => new DateTime ],
           ['club_id' => '3','isAdmin' => '0' ,'name' => 'SouthMoor', 'username' => 'SouthMoor', 'password' => bcrypt('SouthMoor2017'), 'created_at' => new DateTime, 'updated_at' => new DateTime ],
           ['club_id' => '4','isAdmin' => '0' ,'name' => 'Richmond', 'username' => 'Richmond', 'password' => bcrypt('SouthMoor2017'), 'created_at' => new DateTime, 'updated_at' => new DateTime ],
           ['club_id' => '5','isAdmin' => '0' ,'name' => 'Whitby', 'username' => 'Whitby', 'password' => bcrypt('Whitby2017'), 'created_at' => new DateTime, 'updated_at' => new DateTime ],
           ['club_id' => '6','isAdmin' => '0' ,'name' => 'Billingham', 'username' => 'Billingham', 'password' => bcrypt('Billingham2017'), 'created_at' => new DateTime, 'updated_at' => new DateTime ],
           ['club_id' => '7','isAdmin' => '0' ,'name' => 'Romanby', 'username' => 'Romanby', 'password' => bcrypt('Romanby017'), 'created_at' => new DateTime, 'updated_at' => new DateTime ],
           ['club_id' => '8','isAdmin' => '0' ,'name' => 'ChesterLeStreet', 'username' => 'ChesterLeStreet', 'password' => bcrypt('CLS2017'), 'created_at' => new DateTime, 'updated_at' => new DateTime ],
           ['club_id' => '9','isAdmin' => '0' ,'name' => 'DinsdaleSpa', 'username' => 'DinsdaleSpa', 'password' => bcrypt('Dinsdale2017'), 'created_at' => new DateTime, 'updated_at' => new DateTime ],
           ['club_id' => '10','isAdmin' => '0' ,'name' => 'Kirkbymoorside', 'username' => 'Kirkbymoorside', 'password' => bcrypt('Kirkbymoorside2017'), 'created_at' => new DateTime, 'updated_at' => new DateTime ],
           ['club_id' => '11','isAdmin' => '0' ,'name' => 'Catterick', 'username' => 'Catterick', 'password' => bcrypt('Catterick2017'), 'created_at' => new DateTime, 'updated_at' => new DateTime ],
           ['club_id' => '12','isAdmin' => '0' ,'name' => 'HortonLeSpring', 'username' => 'HortonLeSpring', 'password' => bcrypt('HLS2017'), 'created_at' => new DateTime, 'updated_at' => new DateTime ],
           ['club_id' => '13','isAdmin' => '0' ,'name' => 'BlackwellGrange', 'username' => 'BlackwellGrange', 'password' => bcrypt('Blackwell2017'), 'created_at' => new DateTime, 'updated_at' => new DateTime ],
           ['club_id' => '14','isAdmin' => '0' ,'name' => 'RiponCity', 'username' => 'RiponCity', 'password' => bcrypt('Ripon2017'), 'created_at' => new DateTime, 'updated_at' => new DateTime ],
           ['club_id' => '15','isAdmin' => '0' ,'name' => 'BishopAuckland', 'username' => 'BishopAuckland', 'password' => bcrypt('Bishop2017'), 'created_at' => new DateTime, 'updated_at' => new DateTime ],
           ['club_id' => '16','isAdmin' => '0' ,'name' => 'Prudhoe', 'username' => 'Prudhoe', 'password' => bcrypt('Prudhoe2017'), 'created_at' => new DateTime, 'updated_at' => new DateTime ],
           ['club_id' => '17','isAdmin' => '0' ,'name' => 'Darlington', 'username' => 'Darlington', 'password' => bcrypt('Darlington2017'), 'created_at' => new DateTime, 'updated_at' => new DateTime ],
           ['club_id' => '18','isAdmin' => '0' ,'name' => 'ThirskAndNorthallerton', 'username' => 'ThirskAndNorthallerton', 'password' => bcrypt('TAN2017'), 'created_at' => new DateTime, 'updated_at' => new DateTime ],
           ['club_id' => '19','isAdmin' => '0' ,'name' => 'RoseberryGrange', 'username' => 'RoseberryGrange', 'password' => bcrypt('Roseberry2017'), 'created_at' => new DateTime, 'updated_at' => new DateTime ],
           ['club_id' => '20','isAdmin' => '0' ,'name' => 'Seaham', 'username' => 'Seaham', 'password' => bcrypt('Seaham2017'), 'created_at' => new DateTime, 'updated_at' => new DateTime ],
           ['club_id' => '21','isAdmin' => '0' ,'name' => 'Boldon', 'username' => 'Boldon', 'password' => bcrypt('Boldon2017'), 'created_at' => new DateTime, 'updated_at' => new DateTime ],
           ['club_id' => '22','isAdmin' => '0' ,'name' => 'Wearside', 'username' => 'Wearside', 'password' => bcrypt('Wearside2017'), 'created_at' => new DateTime, 'updated_at' => new DateTime ],
           ['club_id' => '23','isAdmin' => '0' ,'name' => 'Parklands', 'username' => 'Parklands', 'password' => bcrypt('Parklands2017'), 'created_at' => new DateTime, 'updated_at' => new DateTime ],
           ['club_id' => '24','isAdmin' => '0' ,'name' => 'Garesfield', 'username' => 'Garesfield', 'password' => bcrypt('Garesfield2017'), 'created_at' => new DateTime, 'updated_at' => new DateTime ],
           ['club_id' => '25','isAdmin' => '0' ,'name' => 'Stocksfield', 'username' => 'Stocksfield', 'password' => bcrypt('Stocksfield2017'), 'created_at' => new DateTime, 'updated_at' => new DateTime ],
           ['club_id' => '26','isAdmin' => '0' ,'name' => 'Ravensworth', 'username' => 'Ravensworth', 'password' => bcrypt('Ravensworth2017'), 'created_at' => new DateTime, 'updated_at' => new DateTime ],
           ['club_id' => '27','isAdmin' => '0' ,'name' => 'AldwarkManor', 'username' => 'AldwarkManor', 'password' => bcrypt('Aldwark2017'), 'created_at' => new DateTime, 'updated_at' => new DateTime ],
           ['club_id' => '28','isAdmin' => '0' ,'name' => 'RuddingPark', 'username' => 'RuddingPark', 'password' => bcrypt('Rudding2017'), 'created_at' => new DateTime, 'updated_at' => new DateTime ],
           ['club_id' => '29','isAdmin' => '0' ,'name' => 'Filey', 'username' => 'Filey', 'password' => bcrypt('Filey2017'), 'created_at' => new DateTime, 'updated_at' => new DateTime ],
           ['club_id' => '30','isAdmin' => '0' ,'name' => 'ScarboroughNorth', 'username' => 'ScarboroughNorth', 'password' => bcrypt('Scarborough2017'), 'created_at' => new DateTime, 'updated_at' => new DateTime ],
           ['club_id' => '31','isAdmin' => '0' ,'name' => 'KPClub', 'username' => 'KPClub', 'password' => bcrypt('KPClub2017'), 'created_at' => new DateTime, 'updated_at' => new DateTime ],
           ['club_id' => '32','isAdmin' => '0' ,'name' => 'ForestPark', 'username' => 'ForestPark', 'password' => bcrypt('Forest2017'), 'created_at' => new DateTime, 'updated_at' => new DateTime ],
           ['club_id' => '33','isAdmin' => '0' ,'name' => 'Easingwold', 'username' => 'Easingwold', 'password' => bcrypt('Easingwold2017'), 'created_at' => new DateTime, 'updated_at' => new DateTime ],
           ['club_id' => '34','isAdmin' => '0' ,'name' => 'MaltonAndNorton', 'username' => 'MaltonAndNorton', 'password' => bcrypt('MAN2017'), 'created_at' => new DateTime, 'updated_at' => new DateTime ],
           ['club_id' => '35','isAdmin' => '0' ,'name' => 'Hunley', 'username' => 'Hunley', 'password' => bcrypt('Hunley2017'), 'created_at' => new DateTime, 'updated_at' => new DateTime ],
           ['club_id' => '999','isAdmin' => '1' ,'name' => 'Iwan', 'username' => 'Iwan', 'password' => bcrypt('IwanNERGA2017'), 'created_at' => new DateTime, 'updated_at' => new DateTime ],
           ['club_id' => '999','isAdmin' => '1' ,'name' => 'Matthew', 'username' => 'Matthew', 'password' => bcrypt('MatthewNERGA2017'), 'created_at' => new DateTime, 'updated_at' => new DateTime ],
        ]);
    }
}

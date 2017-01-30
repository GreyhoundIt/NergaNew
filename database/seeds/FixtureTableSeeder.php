<?php

use Illuminate\Database\Seeder;

class FixtureTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fixtures')->insert([
        ['zone_id'=> '1','club_id'=> '5','fixture_date' => '2017-04-23 10:00:00', 'bye_team'=> null, 'created_at' => new DateTime, 'updated_at' => new DateTime,],
        ['zone_id'=> '1','club_id'=> '34','fixture_date' => '2017-05-13 12:30:00', 'bye_team'=> null, 'created_at' => new DateTime, 'updated_at' => new DateTime,],
        ['zone_id'=> '1','club_id'=> '33','fixture_date' => '2017-05-21 10:30:00', 'bye_team'=> null, 'created_at' => new DateTime, 'updated_at' => new DateTime,],
        ['zone_id'=> '1','club_id'=> '7','fixture_date' => '2017-06-18 12:30:00', 'bye_team'=> null, 'created_at' => new DateTime, 'updated_at' => new DateTime,],
        ['zone_id'=> '1','club_id'=> '14','fixture_date' => '2017-06-25 11:00:00', 'bye_team'=> null, 'created_at' => new DateTime, 'updated_at' => new DateTime,],
        ['zone_id'=> '1','club_id'=> '27','fixture_date' => '2017-07-08 09:15:00', 'bye_team'=> null, 'created_at' => new DateTime, 'updated_at' => new DateTime,],
        ['zone_id'=> '1','club_id'=> '10','fixture_date' => '2017-07-23 13:00:00', 'bye_team'=> null, 'created_at' => new DateTime, 'updated_at' => new DateTime,],

        ['zone_id'=> '2','club_id'=> '22','fixture_date' => '2017-04-22 09:00:00', 'bye_team'=> null, 'created_at' => new DateTime, 'updated_at' => new DateTime,],
        ['zone_id'=> '2','club_id'=> '26','fixture_date' => '2017-05-14 10:30:00', 'bye_team'=> null, 'created_at' => new DateTime, 'updated_at' => new DateTime,],
        ['zone_id'=> '2','club_id'=> '17','fixture_date' => '2017-05-21 09:30:00', 'bye_team'=> null, 'created_at' => new DateTime, 'updated_at' => new DateTime,],
        ['zone_id'=> '2','club_id'=> '23','fixture_date' => '2017-07-02 12:00:00', 'bye_team'=> null, 'created_at' => new DateTime, 'updated_at' => new DateTime,],
        ['zone_id'=> '2','club_id'=> '1','fixture_date' => '2017-07-15 09:00:00', 'bye_team'=> null, 'created_at' => new DateTime, 'updated_at' => new DateTime,],
        ['zone_id'=> '2','club_id'=> '13','fixture_date' => '2017-07-29 12:30:00', 'bye_team'=> null, 'created_at' => new DateTime, 'updated_at' => new DateTime,],
        ['zone_id'=> '2','club_id'=> '25','fixture_date' => '2017-09-03 11:00:00', 'bye_team'=> null, 'created_at' => new DateTime, 'updated_at' => new DateTime,],

        ['zone_id'=> '3','club_id'=> '19','fixture_date' => '2017-04-22 10:30:00', 'bye_team'=> null, 'created_at' => new DateTime, 'updated_at' => new DateTime,],
        ['zone_id'=> '3','club_id'=> '9','fixture_date' => '2017-05-13 11:30:00', 'bye_team'=> null, 'created_at' => new DateTime, 'updated_at' => new DateTime,],
        ['zone_id'=> '3','club_id'=> '12','fixture_date' => '2017-06-17 10:30:00', 'bye_team'=> null, 'created_at' => new DateTime, 'updated_at' => new DateTime,],
        ['zone_id'=> '3','club_id'=> '35','fixture_date' => '2017-06-25 10:00:00', 'bye_team'=> null, 'created_at' => new DateTime, 'updated_at' => new DateTime,],
        ['zone_id'=> '3','club_id'=> '3','fixture_date' => '2017-07-29 09:00:00', 'bye_team'=> null, 'created_at' => new DateTime, 'updated_at' => new DateTime,],
        ['zone_id'=> '3','club_id'=> '2','fixture_date' => '2017-08-12 08:30:00', 'bye_team'=> null, 'created_at' => new DateTime, 'updated_at' => new DateTime,],
        ['zone_id'=> '3','club_id'=> '11','fixture_date' => '2017-09-10 09:00:00', 'bye_team'=> null, 'created_at' => new DateTime, 'updated_at' => new DateTime,],

        ['zone_id'=> '4','club_id'=> '7','fixture_date' => '2017-04-16 12:30:00', 'bye_team'=> "Crook", 'created_at' => new DateTime, 'updated_at' => new DateTime,],
        ['zone_id'=> '4','club_id'=> '4','fixture_date' => '2017-04-29 10:34:00', 'bye_team'=> "Bedale", 'created_at' => new DateTime, 'updated_at' => new DateTime,],
        ['zone_id'=> '4','club_id'=> '5','fixture_date' => '2017-05-14 10:00:00', 'bye_team'=> "South Moor", 'created_at' => new DateTime, 'updated_at' => new DateTime,],
        ['zone_id'=> '4','club_id'=> '9','fixture_date' => '2017-05-27 11:30:00', 'bye_team'=> "Richmond", 'created_at' => new DateTime, 'updated_at' => new DateTime,],
        ['zone_id'=> '4','club_id'=> '3','fixture_date' => '2017-06-17 09:00:00', 'bye_team'=> "Whitby", 'created_at' => new DateTime, 'updated_at' => new DateTime,],
        ['zone_id'=> '4','club_id'=> '8','fixture_date' => '2017-06-25 10:30:00', 'bye_team'=> "Billingham", 'created_at' => new DateTime, 'updated_at' => new DateTime,],
        ['zone_id'=> '4','club_id'=> '1','fixture_date' => '2017-07-15 02:00:00', 'bye_team'=> "Romanby", 'created_at' => new DateTime, 'updated_at' => new DateTime,],
        ['zone_id'=> '4','club_id'=> '6','fixture_date' => '2017-07-23 09:00:00', 'bye_team'=> "Chester Le Street", 'created_at' => new DateTime, 'updated_at' => new DateTime,],
        ['zone_id'=> '4','club_id'=> '2','fixture_date' => '2017-09-09 08:30:00', 'bye_team'=> "Dinsdale Spa", 'created_at' => new DateTime, 'updated_at' => new DateTime,],

        ['zone_id'=> '5','club_id'=> '17','fixture_date' => '2017-04-16 09:30:00', 'bye_team'=> "Catterick", 'created_at' => new DateTime, 'updated_at' => new DateTime,],
        ['zone_id'=> '5','club_id'=> '14','fixture_date' => '2017-05-07 11:00:00', 'bye_team'=> "Houghton Le Spring", 'created_at' => new DateTime, 'updated_at' => new DateTime,],
        ['zone_id'=> '5','club_id'=> '15','fixture_date' => '2017-05-21 09:30:00', 'bye_team'=> "Blackwell Grange", 'created_at' => new DateTime, 'updated_at' => new DateTime,],
        ['zone_id'=> '5','club_id'=> '12','fixture_date' => '2017-06-03 10:30:00', 'bye_team'=> "Ripon City", 'created_at' => new DateTime, 'updated_at' => new DateTime,],
        ['zone_id'=> '5','club_id'=> '13','fixture_date' => '2017-06-17 12:30:00', 'bye_team'=> "Bishop Auckland", 'created_at' => new DateTime, 'updated_at' => new DateTime,],
        ['zone_id'=> '5','club_id'=> '10','fixture_date' => '2017-07-01 13:00:00', 'bye_team'=> "Prudhoe", 'created_at' => new DateTime, 'updated_at' => new DateTime,],
        ['zone_id'=> '5','club_id'=> '18','fixture_date' => '2017-07-29 12:30:00', 'bye_team'=> "Darlington", 'created_at' => new DateTime, 'updated_at' => new DateTime,],
        ['zone_id'=> '5','club_id'=> '11','fixture_date' => '2017-08-13 09:00:00', 'bye_team'=> "Thirst and Northallerton", 'created_at' => new DateTime, 'updated_at' => new DateTime,],
        ['zone_id'=> '5','club_id'=> '16','fixture_date' => '2017-08-20 10:00:00', 'bye_team'=> "Kirkbymoorside", 'created_at' => new DateTime, 'updated_at' => new DateTime,],

        ['zone_id'=> '6','club_id'=> '19','fixture_date' => '2017-05-06 10:30:00', 'bye_team'=> null, 'created_at' => new DateTime, 'updated_at' => new DateTime,],
        ['zone_id'=> '6','club_id'=> '20','fixture_date' => '2017-05-20 12:00:00', 'bye_team'=> null, 'created_at' => new DateTime, 'updated_at' => new DateTime,],
        ['zone_id'=> '6','club_id'=> '21','fixture_date' => '2017-06-04 10:00:00', 'bye_team'=> null, 'created_at' => new DateTime, 'updated_at' => new DateTime,],
        ['zone_id'=> '6','club_id'=> '22','fixture_date' => '2017-06-17 09:00:00', 'bye_team'=> null, 'created_at' => new DateTime, 'updated_at' => new DateTime,],
        ['zone_id'=> '6','club_id'=> '23','fixture_date' => '2017-07-30 12:00:00', 'bye_team'=> null, 'created_at' => new DateTime, 'updated_at' => new DateTime,],
        ['zone_id'=> '6','club_id'=> '25','fixture_date' => '2017-08-13 11:00:00', 'bye_team'=> null, 'created_at' => new DateTime, 'updated_at' => new DateTime,],
        ['zone_id'=> '6','club_id'=> '24','fixture_date' => '2017-08-27 09:00:00', 'bye_team'=> null, 'created_at' => new DateTime, 'updated_at' => new DateTime,],
        ['zone_id'=> '6','club_id'=> '26','fixture_date' => '2017-09-10 10:30:00', 'bye_team'=> null, 'created_at' => new DateTime, 'updated_at' => new DateTime,],

        ['zone_id'=> '7','club_id'=> '27','fixture_date' => '2017-05-06 09:15:00', 'bye_team'=> null, 'created_at' => new DateTime, 'updated_at' => new DateTime,],
        ['zone_id'=> '7','club_id'=> '28','fixture_date' => '2017-05-13 10:30:00', 'bye_team'=> null, 'created_at' => new DateTime, 'updated_at' => new DateTime,],
        ['zone_id'=> '7','club_id'=> '29','fixture_date' => '2017-06-04 12:00:00', 'bye_team'=> null, 'created_at' => new DateTime, 'updated_at' => new DateTime,],
        ['zone_id'=> '7','club_id'=> '30','fixture_date' => '2017-06-17 10:00:00', 'bye_team'=> null, 'created_at' => new DateTime, 'updated_at' => new DateTime,],
        ['zone_id'=> '7','club_id'=> '31','fixture_date' => '2017-07-01 10:44:00', 'bye_team'=> null, 'created_at' => new DateTime, 'updated_at' => new DateTime,],
        ['zone_id'=> '7','club_id'=> '32','fixture_date' => '2017-07-16 11:30:00', 'bye_team'=> null, 'created_at' => new DateTime, 'updated_at' => new DateTime,],
        ['zone_id'=> '7','club_id'=> '33','fixture_date' => '2017-07-29 10:45:00', 'bye_team'=> null, 'created_at' => new DateTime, 'updated_at' => new DateTime,],
        ['zone_id'=> '7','club_id'=> '34','fixture_date' => '2017-09-09 12:00:00', 'bye_team'=> null, 'created_at' => new DateTime, 'updated_at' => new DateTime,],

         ]);
    }
}

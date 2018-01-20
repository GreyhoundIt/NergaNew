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
            ['zone_id' => '1', 'club_id' => '22', 'fixture_date' => '2018-04-14 09:00:00', 'bye_team' => 'Parklands', 'created_at' => new DateTime, 'updated_at' => new DateTime,],
            ['zone_id' => '1', 'club_id' => '26', 'fixture_date' => '2018-05-13 10:30:00', 'bye_team' => 'Crook', 'created_at' => new DateTime, 'updated_at' => new DateTime,],
            ['zone_id' => '1', 'club_id' => '19', 'fixture_date' => '2018-05-19 10:00:00', 'bye_team' => 'South Moor', 'created_at' => new DateTime, 'updated_at' => new DateTime,],
            ['zone_id' => '1', 'club_id' => '12', 'fixture_date' => '2018-06-16 10:30:00', 'bye_team' => 'Roseberry Grange', 'created_at' => new DateTime, 'updated_at' => new DateTime,],
            ['zone_id' => '1', 'club_id' => '35', 'fixture_date' => '2018-06-24 10:00:00', 'bye_team' => 'Houghton-Le-_Spring', 'created_at' => new DateTime, 'updated_at' => new DateTime,],
            ['zone_id' => '1', 'club_id' => '23', 'fixture_date' => '2018-07-01 12:00:00', 'bye_team' => 'Stocksfield', 'created_at' => new DateTime, 'updated_at' => new DateTime,],
            ['zone_id' => '1', 'club_id' => '3', 'fixture_date' => '2018-07-21 09:00:00', 'bye_team' => 'Hunley', 'created_at' => new DateTime, 'updated_at' => new DateTime,],
            ['zone_id' => '1', 'club_id' => '1', 'fixture_date' => '2018-08-04 10:30:00', 'bye_team' => 'Wearside', 'created_at' => new DateTime, 'updated_at' => new DateTime,],
            ['zone_id' => '1', 'club_id' => '25', 'fixture_date' => '2018-08-26 11:00:00', 'bye_team' => 'Ravensworth', 'created_at' => new DateTime, 'updated_at' => new DateTime,],


            ['zone_id' => '2', 'club_id' => '5', 'fixture_date' => '2018-04-21 10:000:00', 'bye_team' => 'Ripon city', 'created_at' => new DateTime, 'updated_at' => new DateTime,],
            ['zone_id' => '2', 'club_id' => '34', 'fixture_date' => '2018-05-13 12:00:00', 'bye_team' => 'Boothferry', 'created_at' => new DateTime, 'updated_at' => new DateTime,],
            ['zone_id' => '2', 'club_id' => '33', 'fixture_date' => '2018-05-20 10:30:00', 'bye_team' => 'Kirkbymoorside', 'created_at' => new DateTime, 'updated_at' => new DateTime,],
            ['zone_id' => '2', 'club_id' => '31', 'fixture_date' => '2018-06-09 10:44:00', 'bye_team' => 'Alwark Manor', 'created_at' => new DateTime, 'updated_at' => new DateTime,],
            ['zone_id' => '2', 'club_id' => '14', 'fixture_date' => '2018-06-24 12:00:00', 'bye_team' => 'Rudding Park', 'created_at' => new DateTime, 'updated_at' => new DateTime,],
            ['zone_id' => '2', 'club_id' => '37', 'fixture_date' => '2018-07-08 10:00:00', 'bye_team' => 'Whitby', 'created_at' => new DateTime, 'updated_at' => new DateTime,],
            ['zone_id' => '2', 'club_id' => '10', 'fixture_date' => '2018-07-22 12:00:00', 'bye_team' => 'Malton and Norton', 'created_at' => new DateTime, 'updated_at' => new DateTime,],
            ['zone_id' => '2', 'club_id' => '27', 'fixture_date' => '2018-07-28 09:30:00', 'bye_team' => 'Easingwold', 'created_at' => new DateTime, 'updated_at' => new DateTime,],
            ['zone_id' => '2', 'club_id' => '28', 'fixture_date' => '2018-09-02 10:30:00', 'bye_team' => 'KP Club', 'created_at' => new DateTime, 'updated_at' => new DateTime,],


            ['zone_id' => '3', 'club_id' => '7', 'fixture_date' => '2018-04-22 11:00:00', 'bye_team' => 'Blackwell Grange', 'created_at' => new DateTime, 'updated_at' => new DateTime,],
            ['zone_id' => '3', 'club_id' => '6', 'fixture_date' => '2018-04-29 09:00:00', 'bye_team' => 'Bedale', 'created_at' => new DateTime, 'updated_at' => new DateTime,],
            ['zone_id' => '3', 'club_id' => '17', 'fixture_date' => '2018-05-20 11:30:00', 'bye_team' => 'Catterick', 'created_at' => new DateTime, 'updated_at' => new DateTime,],
            ['zone_id' => '3', 'club_id' => '38', 'fixture_date' => '2018-06-10 12:00:00', 'bye_team' => 'Romanby', 'created_at' => new DateTime, 'updated_at' => new DateTime,],
            ['zone_id' => '3', 'club_id' => '15', 'fixture_date' => '2018-06-17 09:30:00', 'bye_team' => 'Billingham', 'created_at' => new DateTime, 'updated_at' => new DateTime,],
            ['zone_id' => '3', 'club_id' => '9', 'fixture_date' => '2018-06-30 11:30:00', 'bye_team' => 'Darlington', 'created_at' => new DateTime, 'updated_at' => new DateTime,],
            ['zone_id' => '3', 'club_id' => '13', 'fixture_date' => '2018-07-28 12:30:00', 'bye_team' => 'Oakleaf', 'created_at' => new DateTime, 'updated_at' => new DateTime,],
            ['zone_id' => '3', 'club_id' => '2', 'fixture_date' => '2018-08-11 08:30:00', 'bye_team' => 'Bishop Auckland', 'created_at' => new DateTime, 'updated_at' => new DateTime,],
            ['zone_id' => '3', 'club_id' => '11', 'fixture_date' => '2018-09-09 09:00:00', 'bye_team' => 'Dinsdale Spa', 'created_at' => new DateTime, 'updated_at' => new DateTime,],


            ['zone_id' => '4', 'club_id' => '17', 'fixture_date' => '2018-04-15 11:30:00', 'bye_team' => "Prudhoe", 'created_at' => new DateTime, 'updated_at' => new DateTime,],
            ['zone_id' => '4', 'club_id' => '22', 'fixture_date' => '2018-04-29 09:00:00', 'bye_team' => "Parklands", 'created_at' => new DateTime, 'updated_at' => new DateTime,],
            ['zone_id' => '4', 'club_id' => '9', 'fixture_date' => '2018-05-05 11:30:00', 'bye_team' => "Stockfield", 'created_at' => new DateTime, 'updated_at' => new DateTime,],
            ['zone_id' => '4', 'club_id' => '16', 'fixture_date' => '2018-05-20 10:00:00', 'bye_team' => "Darlington", 'created_at' => new DateTime, 'updated_at' => new DateTime,],
            ['zone_id' => '4', 'club_id' => '21', 'fixture_date' => '2018-06-16 12:00:00', 'bye_team' => "Dinsdale Spa", 'created_at' => new DateTime, 'updated_at' => new DateTime,],
            ['zone_id' => '4', 'club_id' => '4', 'fixture_date' => '2018-06-23 10:30:00', 'bye_team' => "Wearside", 'created_at' => new DateTime, 'updated_at' => new DateTime,],
            ['zone_id' => '4', 'club_id' => '1', 'fixture_date' => '2018-07-14 11:00:00', 'bye_team' => "Richmond", 'created_at' => new DateTime, 'updated_at' => new DateTime,],
            ['zone_id' => '4', 'club_id' => '23', 'fixture_date' => '2018-07-29 12:00:00', 'bye_team' => "Boldon", 'created_at' => new DateTime, 'updated_at' => new DateTime,],
            ['zone_id' => '4', 'club_id' => '25', 'fixture_date' => '2018-08-12 11:30:00', 'bye_team' => "Crook", 'created_at' => new DateTime, 'updated_at' => new DateTime,],

            ['zone_id' => '5', 'club_id' => '19', 'fixture_date' => '2018-04-28 10:00:00', 'bye_team' => "Weatherby", 'created_at' => new DateTime, 'updated_at' => new DateTime,],
            ['zone_id' => '5', 'club_id' => '28', 'fixture_date' => '2018-05-06 10:30:00', 'bye_team' => "Billingham", 'created_at' => new DateTime, 'updated_at' => new DateTime,],
            ['zone_id' => '5', 'club_id' => '12', 'fixture_date' => '2018-06-02 10:30:00', 'bye_team' => "Blackwell Grange", 'created_at' => new DateTime, 'updated_at' => new DateTime,],
            ['zone_id' => '5', 'club_id' => '30', 'fixture_date' => '2018-06-09 10:00:00', 'bye_team' => "Chester-Le-Street", 'created_at' => new DateTime, 'updated_at' => new DateTime,],
            ['zone_id' => '5', 'club_id' => '8', 'fixture_date' => '2018-06-24 10:30:00', 'bye_team' => "Scarbrough North", 'created_at' => new DateTime, 'updated_at' => new DateTime,],
            ['zone_id' => '5', 'club_id' => '6', 'fixture_date' => '2018-07-22 09:00:00', 'bye_team' => "rudding Park", 'created_at' => new DateTime, 'updated_at' => new DateTime,],
            ['zone_id' => '5', 'club_id' => '13', 'fixture_date' => '2018-08-11 12:30:00', 'bye_team' => "Bedale", 'created_at' => new DateTime, 'updated_at' => new DateTime,],
            ['zone_id' => '5', 'club_id' => '36', 'fixture_date' => '2018-09-02 10:30:00', 'bye_team' => "Roseberry Grange", 'created_at' => new DateTime, 'updated_at' => new DateTime,],
            ['zone_id' => '5', 'club_id' => '2', 'fixture_date' => '2018-09-08 09:00:00', 'bye_team' => "Houghton_le-Spring", 'created_at' => new DateTime, 'updated_at' => new DateTime,],

            ['zone_id' => '6', 'club_id' => 27, 'fixture_date' => '2018-04-28 09:30:00', 'bye_team' => null, 'created_at' => new DateTime, 'updated_at' => new DateTime,],
            ['zone_id' => '6', 'club_id' => '14', 'fixture_date' => '2018-05-06 12:00:00', 'bye_team' => null, 'created_at' => new DateTime, 'updated_at' => new DateTime,],
            ['zone_id' => '6', 'club_id' => '29', 'fixture_date' => '2018-06-03 10:30:00', 'bye_team' => null, 'created_at' => new DateTime, 'updated_at' => new DateTime,],
            ['zone_id' => '6', 'club_id' => '37', 'fixture_date' => '2018-06-17 10:00:00', 'bye_team' => null, 'created_at' => new DateTime, 'updated_at' => new DateTime,],
            ['zone_id' => '6', 'club_id' => '31', 'fixture_date' => '2018-07-07 10:44:00', 'bye_team' => null, 'created_at' => new DateTime, 'updated_at' => new DateTime,],
            ['zone_id' => '6', 'club_id' => '32', 'fixture_date' => '2018-07-29 12:00:00', 'bye_team' => null, 'created_at' => new DateTime, 'updated_at' => new DateTime,],
            ['zone_id' => '6', 'club_id' => '10', 'fixture_date' => '2018-08-05 12:00:00', 'bye_team' => null, 'created_at' => new DateTime, 'updated_at' => new DateTime,],
            ['zone_id' => '6', 'club_id' => '34', 'fixture_date' => '2018-09-09 12:00:00', 'bye_team' => null, 'created_at' => new DateTime, 'updated_at' => new DateTime,],

            ['zone_id' => '7', 'club_id' => '20', 'fixture_date' => '2018-04-28 09:15:00', 'bye_team' => 'Thirsk and Northallerton', 'created_at' => new DateTime, 'updated_at' => new DateTime,],
            ['zone_id' => '7', 'club_id' => '5', 'fixture_date' => '2018-05-13 10:30:00', 'bye_team' => 'Ravensworth', 'created_at' => new DateTime, 'updated_at' => new DateTime,],
            ['zone_id' => '7', 'club_id' => '15', 'fixture_date' => '2018-06-02 12:00:00', 'bye_team' => 'Romanby', 'created_at' => new DateTime, 'updated_at' => new DateTime,],
            ['zone_id' => '7', 'club_id' => '3', 'fixture_date' => '2018-06-16 10:00:00', 'bye_team' => 'Easingwold', 'created_at' => new DateTime, 'updated_at' => new DateTime,],
            ['zone_id' => '7', 'club_id' => '7', 'fixture_date' => '2018-06-30 10:44:00', 'bye_team' => 'Catterick', 'created_at' => new DateTime, 'updated_at' => new DateTime,],
            ['zone_id' => '7', 'club_id' => '18', 'fixture_date' => '2018-07-21 11:30:00', 'bye_team' => 'Seaham', 'created_at' => new DateTime, 'updated_at' => new DateTime,],
            ['zone_id' => '7', 'club_id' => '33', 'fixture_date' => '2018-07-28 10:45:00', 'bye_team' => 'South Moor', 'created_at' => new DateTime, 'updated_at' => new DateTime,],
            ['zone_id' => '7', 'club_id' => '11', 'fixture_date' => '2018-08-12 12:00:00', 'bye_team' => 'Bishop Auckland', 'created_at' => new DateTime, 'updated_at' => new DateTime,],
            ['zone_id' => '7', 'club_id' => '26', 'fixture_date' => '2018-09-09 10:45:00', 'bye_team' => 'Whitby', 'created_at' => new DateTime, 'updated_at' => new DateTime,],

        ]);
    }
}

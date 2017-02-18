<?php

use Illuminate\Database\Seeder;

class ClubTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clubs')->insert([
            ['id' =>'1','name' => 'Crook', 'post_code'=> 'DL15 9AA', 'website' => 'http://crookgolfclub.co.uk/','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' =>'2','name' => 'Bedale', 'post_code'=> 'Dl8 1EZ', 'website' => 'http://www.bedalegolfclub.com/','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' =>'3','name' => 'South Moor', 'post_code'=> 'DH9 6AS', 'website' => 'http://www.southmoorgc.co.uk/','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' =>'4','name' => 'Richmond', 'post_code'=> 'DL10 5EX', 'website' => 'http://www.richmondyorksgolfclub.co.uk/','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' =>'5','name' => 'Whitby', 'post_code'=> 'YO21 3JL', 'website' => 'http://whitbygolfclub.info/','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' =>'6','name' => 'Billingham', 'post_code'=> 'TS22 5NA', 'website' => 'http://www.billinghamgolfclub.com/','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' =>'7','name' => 'Romanby', 'post_code'=> 'DL7 0PE', 'website' => 'http://www.romanby.com/','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' =>'8','name' => 'Chester Le Street', 'post_code'=> 'DH3 4Ns', 'website' => 'http://www.clsgolfclub.co.uk/','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' =>'9','name' => 'Dinsdale Spa', 'post_code'=> 'DL2 1DW', 'website' => 'http://www.dinsdalespagolfclub.co.uk/','created_at' => new DateTime, 'updated_at' => new DateTime],

            ['id' =>'10','name' => 'Kirkbymoorside', 'post_code'=> 'YO62 6EG', 'website' => 'http://www.kirkbymoorsidegolf.co.uk/','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' =>'11','name' => 'Catterick', 'post_code'=> 'DL9 3QE', 'website' => 'http://www.catterickgolfclub.co.uk','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' =>'12','name' => 'Houghton Le Spring', 'post_code'=> 'DH5 8LU', 'website' => 'http://www.houghtongolfclub.co.uk/','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' =>'13','name' => 'Blackwell Grange', 'post_code'=> 'DL2 2SA', 'website' => 'http://www.blackwellgrangegolf.com/','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' =>'14','name' => 'Ripon City', 'post_code'=> 'HG4 3HH', 'website' => 'http://www.riponcitygolfclub.com/','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' =>'15','name' => 'Bishop Auckland', 'post_code'=> 'DL14 8DL', 'website' => 'http://www.bagc.co.uk/','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' =>'16','name' => 'Prudhoe', 'post_code'=> 'NE42 5DX', 'website' => 'http://www.prudhoegolfclub.co.uk/','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' =>'17','name' => 'Darlington', 'post_code'=> 'DL1 3JD', 'website' => 'http://www.darlington-gc.co.uk/','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' =>'18','name' => 'Thirsk and Northallerton', 'post_code'=> 'YO7 4AB', 'website' => 'http://www.tngc.co.uk/','created_at' => new DateTime, 'updated_at' => new DateTime],

            ['id' =>'19','name' => 'Roseberry Grange', 'post_code'=> 'DH2 3NF', 'website' => 'http://www.roseberrygrange.com/','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' =>'20','name' => 'Seaham', 'post_code'=> 'SR7 7UT', 'website' => 'http://www.seahamgolfclub.co.uk/','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' =>'21','name' => 'Boldon', 'post_code'=> 'NE36 0PQ', 'website' => 'http://boldongolfclub.co.uk/Intro.aspx','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' =>'22','name' => 'Wearside', 'post_code'=> 'SR4 9JT', 'website' => 'http://www.wearsidegc.co.uk/','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' =>'23','name' => 'Parklands', 'post_code'=> 'NE3 5HP', 'website' => 'http://parklandsgolf.co.uk/','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' =>'24','name' => 'Garesfield', 'post_code'=> 'NE17 7AP', 'website' => 'http://www.garesfieldgolfclub.co.uk/','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' =>'25','name' => 'Stocksfield', 'post_code'=> 'NE43 7RE', 'website' => 'https://www.stocksfieldgolfclub.co.uk/','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' =>'26','name' => 'Ravensworth', 'post_code'=> 'NE9 7NE', 'website' => 'http://www.ravensworthgolfclub.co.uk/','created_at' => new DateTime, 'updated_at' => new DateTime],

            ['id' =>'27','name' => 'Aldwark Manor', 'post_code'=> 'YO61 1UF', 'website' => 'http://www.aldwarkmanorgolfclub.co.uk/','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' =>'28','name' => 'Rudding Park', 'post_code'=> 'HG3 1JH', 'website' => 'https://www.ruddingpark.co.uk/play/','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' =>'29','name' => 'Filey', 'post_code'=> 'YO14 9BQ', 'website' => 'http://www.fileygolfclub.com/','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' =>'30','name' => 'Scarborough North', 'post_code'=> 'YO12 6PP', 'website' => 'http://www.northcliffgolfclub.com/','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' =>'31','name' => 'KP Club', 'post_code'=> 'YO42 1UF', 'website' => 'http://www.thekp.co.uk/golf','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' =>'32','name' => 'Forest Park', 'post_code'=> 'YO32 9WD', 'website' => 'http://www.forestparkgolfclub.co.uk/','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' =>'33','name' => 'Easingwold', 'post_code'=> 'YO61 3ET', 'website' => 'http://www.easingwoldgolfclub.co.uk/','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' =>'34','name' => 'Malton and Norton', 'post_code'=> 'YO17 9QE', 'website' => 'http://www.maltonandnortongolfclub.co.uk/','created_at' => new DateTime, 'updated_at' => new DateTime],
        ['id' =>'35','name' => 'Hunley', 'post_code'=> 'TS12 2FT', 'website' => 'http://www.hunleyhotel.co.uk/','created_at' => new DateTime, 'updated_at' => new DateTime],
        ['id' =>'999','name' => 'Google', 'post_code'=> 'AA12 2ZZ', 'website' => 'http://www.google.co.uk/','created_at' => new DateTime, 'updated_at' => new DateTime]
        ]);
    }
}

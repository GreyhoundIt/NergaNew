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
            ['name' => 'Crook', 'post_code'=> 'DL15 9AA', 'website' => 'http://crookgolfclub.co.uk/','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Bedale', 'post_code'=> 'Dl8 1EZ', 'website' => 'http://www.bedalegolfclub.com/','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'South Moor', 'post_code'=> 'DH9 6AS', 'website' => 'http://www.southmoorgc.co.uk/','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Richmond', 'post_code'=> 'DL10 5EX', 'website' => 'http://www.richmondyorksgolfclub.co.uk/','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Whitby', 'post_code'=> 'YO21 3JL', 'website' => 'http://whitbygolfclub.info/','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Billingham', 'post_code'=> 'TS22 5NA', 'website' => 'http://www.billinghamgolfclub.com/','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Romanby', 'post_code'=> 'DL7 0PE', 'website' => 'http://www.romanby.com/','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Chester Le Street', 'post_code'=> 'DH3 4Ns', 'website' => 'http://www.clsgolfclub.co.uk/','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Dinsdale Spa', 'post_code'=> 'DL2 1DW', 'website' => 'http://www.dinsdalespagolfclub.co.uk/','created_at' => new DateTime, 'updated_at' => new DateTime],

            ['name' => 'Kirkbymoorside', 'post_code'=> 'YO62 6EG', 'website' => 'http://www.kirkbymoorsidegolf.co.uk/','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Catterick', 'post_code'=> 'DL9 3QE', 'website' => 'http://www.catterickgolfclub.co.uk','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Houghton Le Spring', 'post_code'=> 'DH5 8LU', 'website' => 'http://www.houghtongolfclub.co.uk/','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Blackwell Grange', 'post_code'=> 'DL2 2SA', 'website' => 'http://www.blackwellgrangegolf.com/','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Ripon City', 'post_code'=> 'HG4 3HH', 'website' => 'http://www.riponcitygolfclub.com/','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Bishop Auckland', 'post_code'=> 'DL14 8DL', 'website' => 'http://www.bagc.co.uk/','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Prudhoe', 'post_code'=> 'NE42 5DX', 'website' => 'http://www.prudhoegolfclub.co.uk/','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Darlington', 'post_code'=> 'DL1 3JD', 'website' => 'http://www.darlington-gc.co.uk/','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Thirsk and Northallerton', 'post_code'=> 'YO7 4AB', 'website' => 'http://www.tngc.co.uk/','created_at' => new DateTime, 'updated_at' => new DateTime],

            ['name' => 'Roseberry Grange', 'post_code'=> 'DH2 3NF', 'website' => 'http://www.roseberrygrange.com/','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Seaham', 'post_code'=> 'SR7 7UT', 'website' => 'http://www.seahamgolfclub.co.uk/','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Boldon', 'post_code'=> 'NE36 0PQ', 'website' => 'http://boldongolfclub.co.uk/Intro.aspx','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Wearside', 'post_code'=> 'SR4 9JT', 'website' => 'http://www.wearsidegc.co.uk/','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Parklands', 'post_code'=> 'NE3 5HP', 'website' => 'http://parklandsgolf.co.uk/','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Garesfield', 'post_code'=> 'NE17 7AP', 'website' => 'http://www.garesfieldgolfclub.co.uk/','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Stocksfield', 'post_code'=> 'NE43 7RE', 'website' => 'https://www.stocksfieldgolfclub.co.uk/','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Ravensworth', 'post_code'=> 'NE9 7NE', 'website' => 'http://www.ravensworthgolfclub.co.uk/','created_at' => new DateTime, 'updated_at' => new DateTime],

            ['name' => 'Aldwark Manor', 'post_code'=> 'YO61 1UF', 'website' => 'http://www.aldwarkmanorgolfclub.co.uk/','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Rudding Park', 'post_code'=> 'HG3 1JH', 'website' => 'https://www.ruddingpark.co.uk/play/','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Filey', 'post_code'=> 'YO14 9BQ', 'website' => 'http://www.fileygolfclub.com/','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Scarborough North', 'post_code'=> 'YO12 6PP', 'website' => 'http://www.northcliffgolfclub.com/','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'KP Club', 'post_code'=> 'YO42 1UF', 'website' => 'http://www.thekp.co.uk/golf','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Forest Park', 'post_code'=> 'YO32 9WD', 'website' => 'http://www.forestparkgolfclub.co.uk/','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Easingwold', 'post_code'=> 'YO61 3ET', 'website' => 'http://www.easingwoldgolfclub.co.uk/','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Malton and Norton', 'post_code'=> 'YO17 9QE', 'website' => 'http://www.maltonandnortongolfclub.co.uk/','created_at' => new DateTime, 'updated_at' => new DateTime],

        ]);
    }
}

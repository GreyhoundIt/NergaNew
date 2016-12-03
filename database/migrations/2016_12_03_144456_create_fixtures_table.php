<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFixturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fixtures', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('zone_id')->unsigned()->index();
            $table->string('name');
            $table->string('postCode')->nullable();
            $table->date('fixtureDate')->nullable();
            $table->time('fixtureTime')->nullable();
            $table->string('startSheetSkeleton')->nullable();
            $table->string('startSheetOfficial')->nullable();;
            $table->string('team_overall')->nullable();
            $table->string('person_overall')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('fixtures');
    }
}

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
            $table->string('postcode')->nullable();
            $table->date('fixture_date')->nullable();
            $table->time('fixture_time')->nullable();
            $table->string('start_sheet_skeleton')->nullable();
            $table->string('start_sheet_official')->nullable();;
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

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamSheetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('team_sheets', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('fixture_id')->unsigned()->index();
            $table->integer('user_id')->unsigned()->index();
            $table->string('club')->nullable();
            $table->string('p1_first_name');
            $table->string('p1_last_name');
            $table->integer('p1_handicap')->unsigned()->default(0);
            $table->string('p2_first_name');
            $table->string('p2_last_name');
            $table->integer('p2_handicap')->unsigned()->default(0);
            $table->string('p3_first_name');
            $table->string('p3_last_name');
            $table->integer('p3_handicap')->unsigned()->default(0);
            $table->string('p4_first_name');
            $table->string('p4_last_name');
            $table->integer('p4_handicap')->unsigned()->default(0);
            $table->string('p5_first_name')->nullable();
            $table->string('p5_last_name')->nullable();
            $table->integer('p5_handicap')->unsigned()->default(0);
            $table->string('p6_first_name')->nullable();
            $table->string('p6_last_name')->nullable();
            $table->integer('p6_handicap')->unsigned()->default(0);
            $table->string('p7_first_name')->nullable();
            $table->string('p7_last_name')->nullable();
            $table->integer('p7_handicap')->unsigned()->default(0);
            $table->string('p8_first_name')->nullable();
            $table->string('p8_last_name')->nullable();
            $table->integer('p8_handicap')->unsigned()->default(0);
            $table->string('g1_first_name')->nullable();
            $table->string('g1_last_name')->nullable();
            $table->integer('g1_handicap')->unsigned()->default(0);
            $table->string('g2_first_name')->nullable();
            $table->string('g2_last_name')->nullable();
            $table->integer('g2_handicap')->unsigned()->default(0);
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
        Schema::drop('team_sheets');
    }
}

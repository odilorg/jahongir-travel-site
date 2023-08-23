<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateToursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tours', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('tour_title', 100);
            $table->string('tour_duration',80);
            $table->text('tour_description');
            $table->string('tour_start_end_points',100);
            $table->string('tour_departure_time',100);
            $table->json('tour_includes');
            $table->json('tour_not_includes');
            $table->string('tour_file',100);
            $table->string('tour_code',80);
            $table->json('tour_itinarary_title');
            $table->json('tour_itinarary_description');




        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tours');
    }
}

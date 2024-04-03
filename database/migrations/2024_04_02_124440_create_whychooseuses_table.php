<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWhychooseusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('whychooseuses', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('section_title_en');
            $table->string('section_title');
            $table->string('section_sub_en');
            $table->string('section_sub');
            $table->string('section_desc_en');
            $table->string('section_desc');
            $table->string('box_title_1_en');
            $table->string('box_title_2_en');
            $table->string('box_title_3_en');
            $table->string('box_title_4_en');
            $table->string('box_title_1');
            $table->string('box_title_2');
            $table->string('box_title_3');
            $table->string('box_title_4');
            $table->string('box_counter_1');
            $table->string('box_counter_2');
            $table->string('box_counter_3');
            $table->string('box_counter_4');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('whychooseuses');
    }
}

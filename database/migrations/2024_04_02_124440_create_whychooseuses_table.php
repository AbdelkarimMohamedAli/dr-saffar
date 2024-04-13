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
            $table->string('section_title_en')->nullable();
            $table->string('section_title')->nullable();
            $table->string('section_sub_en')->nullable();
            $table->string('section_sub')->nullable();
            $table->string('section_desc_en',1000)->nullable();
            $table->string('section_desc',1000)->nullable();
            $table->string('box_title_1_en',1000)->nullable();
            $table->string('box_title_2_en',1000)->nullable();
            $table->string('box_title_3_en',1000)->nullable();
            $table->string('box_title_4_en',1000)->nullable();
            $table->string('box_title_1',1000)->nullable();
            $table->string('box_title_2',1000)->nullable();
            $table->string('box_title_3',1000)->nullable();
            $table->string('box_title_4',1000)->nullable();
            $table->string('box_counter_1')->nullable();
            $table->string('box_counter_2')->nullable();
            $table->string('box_counter_3')->nullable();
            $table->string('box_counter_4')->nullable();
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
        Schema::dropIfExists('whychooseuses');
    }
}

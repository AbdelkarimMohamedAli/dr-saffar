<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('services_title_en')->nullable();
            $table->string('services_title')->nullable();
            $table->string('slug')->nullable();
            $table->string('services_img')->nullable();
            $table->string('services_desc_en',1000)->nullable();
            $table->string('services_desc',1000)->nullable();
            $table->string('services_icon')->nullable();
            $table->string('services_subtitle_en')->nullable();
            $table->string('services_subtitle')->nullable();
            $table->string('services_seo_keywords')->nullable();

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
        Schema::dropIfExists('services');
    }
}

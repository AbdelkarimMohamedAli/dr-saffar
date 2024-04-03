<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('title_en')->nullable();
            $table->string('title')->nullable();
            $table->string('seo_keywords')->nullable();
            $table->string('seo_desc')->nullable();
            $table->string('phone1')->nullable();
            $table->string('phone2')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('email')->nullable();
            $table->string('logo')->nullable();
            $table->string('open_hours_en')->nullable();
            $table->string('open_hours')->nullable();
            $table->string('location_en')->nullable();
            $table->string('location')->nullable();
            $table->string('subtitle_en')->nullable();
            $table->string('subtitle')->nullable();
            $table->string('favicon')->nullable();
            $table->string('dr_image')->nullable();
            $table->string('dr_name_en')->nullable();
            $table->string('dr_name')->nullable();
            $table->string('instagram')->nullable();
            $table->string('twitter')->nullable();
            $table->string('facebook')->nullable();
            $table->string('linkedin')->nullable();

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
        Schema::dropIfExists('settings');
    }
}

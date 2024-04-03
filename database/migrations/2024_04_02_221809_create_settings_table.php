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
            $table->string('title_en');
            $table->string('title');
            $table->string('seo_keywords');
            $table->string('seo_desc');
            $table->string('phone1');
            $table->string('phone2');
            $table->string('whatsapp');
            $table->string('email');
            $table->string('logo');
            $table->string('open_hours_en');
            $table->string('open_hours');
            $table->string('location_en');
            $table->string('location');
            $table->string('subtitle_en');
            $table->string('subtitle');
            $table->string('favicon');
            $table->string('dr_image');
            $table->string('dr_name_en');
            $table->string('dr_name');
            $table->string('instagram');
            $table->string('twitter');
            $table->string('facebook');
            $table->string('linkedin');
            $table->string('youtube');
            $table->string('snapchat');
            $table->string('map');

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

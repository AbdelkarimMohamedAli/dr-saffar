<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('blog_img')->nullable();
            $table->string('blog_title_en')->nullable();
            $table->string('blog_title')->nullable();
            $table->string('slug')->nullable();
            $table->string('blog_subtitle_en')->nullable();
            $table->string('blog_subtitle')->nullable();
            $table->string('blog_desc_en',1000)->nullable();
            $table->string('blog_desc',1000)->nullable();
            $table->string('blog_keywords')->nullable();
            
            $table->dateTime('blog_date')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));


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
        Schema::dropIfExists('blogs');
    }
}

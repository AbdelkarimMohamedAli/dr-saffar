<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctor_sections', function (Blueprint $table) {
            $table->id();
            $table->string('section_title_en')->nullable();
            $table->string('section_title')->nullable();
            $table->string('section_sub_en')->nullable();
            $table->string('section_sub')->nullable();
            $table->string('section_desc_en')->nullable();
            $table->string('section_desc')->nullable();
            $table->string('section_vector_img')->nullable();
            $table->string('section_dr_img')->nullable();
            $table->string('dr_name_en')->nullable();
            $table->string('dr_name')->nullable();
            $table->string('dr_medical_title_en')->nullable();
            $table->string('dr_medical_title')->nullable();
            $table->string('Qualification_en')->nullable();
            $table->string('Qualification')->nullable();

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
        Schema::dropIfExists('doctor_sections');
    }
}

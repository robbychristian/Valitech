<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subjects', function (Blueprint $table) {
            $table->id();
            $table->string('course_id');
            $table->string('subject_year');
            $table->string('subject_semester');
            $table->string('subject_name');
            $table->string('subject_code');
            $table->string('subject_price');
            $table->string('subject_lec_units');
            $table->string('subject_lab_units');
            $table->string('subject_prereq');
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
        Schema::dropIfExists('subjects');
    }
}

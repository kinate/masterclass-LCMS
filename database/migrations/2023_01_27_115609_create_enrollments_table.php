<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enrollments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('course_id');
            $table->foreign('course_id',)->references('id')->on('courses');
            $table->string('course');
            $table->string('applicant_name');
            $table->string('phone')->nullable();
            $table->string('email');
            $table->string('university')->nullable();
            $table->string('university_course')->nullable();
            $table->string('year')->nullable();
            $table->string('total_fee');
            $table->string('paid_amount');
            $table->string('status');
            $table->string('comment');
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
        Schema::dropIfExists('enrollments');
    }
};

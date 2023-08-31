<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('course_title');
            $table->string('course_slug');
            $table->text('course_description');
            $table->string('course_level');
            $table->string('course_category');
            $table->string('regular_price');
            $table->string('discounted_price');
            $table->string('free_course');
            $table->string('course_image');
            $table->string('course_video_source');
            $table->string('course_intro_video');
            $table->string('start_date');
            $table->string('course_language');
            $table->string('course_duration');
            $table->string('course_vendor');
            $table->string('course_vendor_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};

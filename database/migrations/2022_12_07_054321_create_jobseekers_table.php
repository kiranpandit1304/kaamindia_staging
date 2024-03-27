<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobseekersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobseekers', function (Blueprint $table) {
            $table->id();
            $table->string('full_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('email')->nullable();
            $table->string('mobile_number')->unique();
            $table->string('job_profile')->nullable();
            $table->string('date_of_birth')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->json('qualification')->nullable();
            $table->json('skill')->nullable();
            $table->string('state')->nullable();
            $table->string('city')->nullable();
            $table->string('experience')->nullable();
            $table->string('resume')->nullable();
            $table->enum('role', ['admin', 'jobseeker', 'employer'])->default('admin');
            $table->string('status')->default('in-active');
            $table->rememberToken();
            $table->softDeletes();
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
        Schema::dropIfExists('jobseekers');
    }
}

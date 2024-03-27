<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobseekerEmploymentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobseeker_employment', function (Blueprint $table) {
            $table->id();
            $table->foreignId('jobseeker_id');
            $table->enum('is_current_job', ['yes', 'no'])->default('yes');
            $table->string('company_name')->nullable();
            $table->string('designation')->nullable();
            $table->date('joining_date')->nullable();
            $table->longText('job_profile')->nullable();
            $table->integer('notice_period')->nullable();
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
        Schema::dropIfExists('jobseeker_employment');
    }
}

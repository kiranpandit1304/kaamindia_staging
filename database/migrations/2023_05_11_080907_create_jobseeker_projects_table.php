<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobseekerProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobseeker_projects', function (Blueprint $table) {
            $table->id();
            $table->foreignId('jobseeker_id');
            $table->string('title')->nullable();
            $table->string('tag')->nullable();
            $table->longText('project_detail')->nullable();
            $table->string('role')->nullable();
            $table->longText('role_description')->nullable();
            $table->string('skills')->nullable();
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
        Schema::dropIfExists('jobseeker_projects');
    }
}

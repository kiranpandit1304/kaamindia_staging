<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('company_id');
            $table->string('title', 100);
            $table->text('description');
            $table->string('role');
            $table->integer('openings');
            $table->json('job_type')->comment('Full Time OR Part Time');
            $table->json('salary');
            $table->string('job_working_type')->comment('WFH,WFO,Field');
            $table->json('locations')->nullable();
            $table->json('incentive');
            $table->string('interview_type')->comment('in-person,telephonic');
            $table->json('perks');
            $table->json('skills');
            $table->string('min_qualification');
            $table->enum('gender', ['male', 'female', 'both']);
            $table->json('experience');
            $table->json('security');
            $table->date('job_expiry_date')->nullable();
            $table->string('status')->comment('open,closed,dismissed');
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
        Schema::dropIfExists('jobs');
    }
}

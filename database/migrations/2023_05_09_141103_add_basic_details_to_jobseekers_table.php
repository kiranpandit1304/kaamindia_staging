<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddBasicDetailsToJobseekersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('jobseekers', function (Blueprint $table) {
            $table->string('first_name')->after('id')->nullable();
            $table->string('middle_name')->after('first_name')->nullable();
            $table->enum('experience_type', ['fresher', 'experienced'])->after('job_profile')->default('fresher');
            $table->integer('experience_year')->after('experience_type')->nullable();
            $table->integer('experience_month')->after('experience_year')->nullable();
            $table->enum('salary_type', ['monthly', 'yearly'])->after('experience_month')->default('yearly');
            $table->float('salary',8,2)->after('salary_type')->nullable();
            $table->string('availability')->after('salary')->nullable();
            $table->string('profile_pic')->after('resume')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('jobseekers', function (Blueprint $table) {
            $table->dropColumn(['first_name','middle_name','experience_type','experience_year','experience_month','salary_type','salary','availability','profile_pic']);
        });
    }
}

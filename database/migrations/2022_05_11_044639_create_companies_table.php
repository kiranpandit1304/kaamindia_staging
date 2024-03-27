<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('name', 100);
            $table->text('about')->nullable();
            $table->string('email', 100)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('phone_number', 12)->unique()->nullable();
            $table->string('landline_number', 12)->nullable();
            $table->string('website', 255)->nullable();
            $table->string('social_links')->nullable();
            $table->date('established_at')->nullable();
            $table->integer('company_size')->nullable();
            $table->string('gst_number')->nullable();
            $table->string('logo')->nullable();
            $table->string('gallery')->nullable();
            $table->string('status', 15)->default('active');
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
        Schema::dropIfExists('companies');
    }
}

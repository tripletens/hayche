<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->nullable();
            $table->string('email')->nullable();
            $table->string('mobile_phone')->nullable();
            $table->string('whatsapp_phone')->nullable();
            $table->date('dob')->nullable();
            $table->string('nationality')->nullable();
            $table->string('passport')->nullable();
            $table->string('cv')->nullable();
            $table->string('qualification')->nullable();
            $table->integer('experience')->nullable();
            $table->string('skills')->nullable();
            $table->string('refer')->nullable();
            $table->string('refer_others')->nullable();
            $table->integer('post_id')->nullable();
            $table->string('post_title')->nullable();
            $table->integer('employer_id')->nullable();
            $table->string('employer_message')->nullable();
            $table->string('employer_name')->nullable();
            $table->integer('status')->default('2'); // it should be accepted (1), rejected(0) or ongoing(2)
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
        Schema::dropIfExists('applications');
    }
}

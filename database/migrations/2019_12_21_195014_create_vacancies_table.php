<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVacanciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacancies', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('employer_id')->nullable();
            $table->string('employer_name')->nullable();
            $table->string('employer_about')->nullable();
            $table->string('empoyer_logo')->nullable();
            $table->string('employer_address')->nullable();
            $table->string('employer_state')->nullable();
            $table->string('employer_country')->nullable();
            $table->string('post_title')->nullable();
            $table->string('post_description')->nullable();
            $table->boolean('status')->nullable()->default(true);
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
        Schema::dropIfExists('vacancies');
    }
}

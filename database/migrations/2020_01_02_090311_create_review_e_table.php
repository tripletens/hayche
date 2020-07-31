<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewETable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('review_e', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('city')->nullable();
            $table->string('type')->nullable();
            $table->string('pdf')->nullable();
            $table->string('image1')->nullable();
            $table->string('image1_caption')->nullable();
            $table->string('image2')->nullable();
            $table->string('image2_caption')->nullable();
            $table->string('image3')->nullable();
            $table->string('image3_caption')->nullable();
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
        Schema::dropIfExists('review_e');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNewFieldsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->string('city')->nullable();
            $table->string('facility_type')->nullable();
            $table->string('stars')->nullable();
            $table->string('city')->nullable();
            // personal phone will act as company phone
            $table->string('contact_surname')->nullable();
            $table->string('contact_firstname')->nullable();
            $table->string('contact_position')->nullable();
            $table->string('contact_phone_one')->nullable();
            $table->string('contact_phone_two')->nullable();
            $table->string('contact_email')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->dropColumn('city');
        });
    }
}

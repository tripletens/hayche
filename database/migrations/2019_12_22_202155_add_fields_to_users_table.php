<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldsToUsersTable extends Migration
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
            $table->string('picture')->nullable();
            $table->string('about')->nullable();
            $table->string('address')->nullable();
            $table->string('education')->nullable();
            $table->string('skills')->nullable();
            $table->string('gender')->nullable();
            $table->string('dob')->nullable();
            $table->string('personal_phone')->nullable();
            $table->string('whatsapp_phone')->nullable();
            $table->string('skype')->nullable();
            $table->string('country')->nullable();
            $table->string('more_info')->nullable();
            $table->string('status')->nullable();
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
            $table->dropColumn('picture');
            $table->dropColumn('about');
            $table->dropColumn('address');
            $table->dropColumn('education');
            $table->dropColumn('skills');
            $table->dropColumn('gender');
            $table->dropColumn('dob');
            $table->dropColumn('personal_phone');
            $table->dropColumn('whatsapp_phone');
            $table->dropColumn('skype');
            $table->dropColumn('country');
            $table->dropColumn('more_info');
            $table->dropColumn('status');
        });
    }
}

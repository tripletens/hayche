<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldsToApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('applications', function (Blueprint $table) {
            //
            $table->string('refer1')->nullable();
            $table->string('refer2')->nullable();
            $table->string('refer3')->nullable();
            $table->string('refer4')->nullable();
            $table->string('refer5')->nullable();
            $table->string('refer6')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('applications', function (Blueprint $table) {
            //
            $table->dropColumn('refer1');
            $table->dropColumn('refer2');
            $table->dropColumn('refer3');
            $table->dropColumn('refer4');
            $table->dropColumn('refer5');
            $table->dropColumn('refer6');
        });
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDefaultToBoolean extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('members', function (Blueprint $table)
        {
            $table->boolean('drivers_license')->default(false)->change();
            $table->boolean('ss_card')->default(false)->change();
        });
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('members', function (Blueprint $table)
        {
            $table->boolean('drivers_license')->change();
            $table->boolean('ss_card')->change();
        });
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('emergency_contact_id')->unsigned();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('username');
            $table->string('password');
            $table->string('street');
            $table->string('city');
            $table->string('state');
            $table->mediumInteger('zipcode');
            $table->string('home_phone', 9);
            $table->string('work_phone', 9);
            $table->string('cell_phone', 9);
            $table->boolean('drivers_license');
            $table->boolean('ss_card');
            $table->string('approval_status');
            $table->timestamps();
        });

        Schema::table('members', function($table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('emergency_contact_id')->references('id')->on('emergency_contacts')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('members');
    }
}

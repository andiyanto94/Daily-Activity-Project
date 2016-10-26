<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
	        $table->increments('id');
	        $table->integer('superior_id');
	        $table->string('name');
	        $table->string('email')->unique()->nullable();
	        $table->string('password')->nullable();
	        $table->string('avatar')->nullable()->default('public/img/uploads/avatars/default.png');
	        $table->string('banner')->nullable()->default('public/img/uploads/img16.jpg');
	        $table->string('status')->default('pending');
	        $table->string('address');
	        $table->string('domicile_address');
	        $table->bigInteger('id_card')->unique()->nullable();
	        $table->string('boss_id');
	        $table->string('gender');
	        $table->string('mobile_1');
	        $table->string('mobile_2');
	        $table->string('place_of_birth');
	        $table->string('date_of_birth');
	        $table->integer('class_id');
	        $table->integer('grade_id');
	        $table->integer('position_id');
	        $table->integer('division_id');
	        $table->integer('dept_id');
	        $table->integer('section_id');
	        $table->integer('unit_id');
	        $table->string('followings');
	        $table->string('followers');
	        $table->rememberToken();
	        $table->timestampsTz();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
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
            $table->string('name');
            $table->string('email',150)->unique();
            $table->string('password')->nullable();
            $table->string('province_id')->nullable();
            $table->string('city_id')->nullable();
            $table->string('address')->nullable();
            $table->string('telp')->nullable();
            $table->string('handphone')->nullable();
            $table->string('foto')->nullable();
            $table->string('birthday')->nullable();
            $table->string('about_me')->nullable();
            $table->string('hobbies')->nullable();
			      $table->integer('point')->default('0');
            $table->string('hash')->nullable();
            $table->string('activation')->default('0');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}

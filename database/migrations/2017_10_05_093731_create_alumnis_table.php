<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code')->unique();
            $table->integer('sc');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('major');
            $table->text('address');
            $table->string('email')->nullable();
            $table->string('tel');
            $table->text('jobs')->nullable();
            $table->string('position')->nullable();
            $table->string('food');
            $table->integer('follower')->default(0);
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
        Schema::dropIfExists('alumnis');
    }
}

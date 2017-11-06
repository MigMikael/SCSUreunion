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
            $table->boolean('is_gratitude')->default(false);
            $table->boolean('is_party')->default(false);
            $table->boolean('is_attend')->default(false);
            $table->string('attach_payment')->nullable();
            $table->boolean('is_approve')->default(false);
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

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staffs', function (Blueprint $table) {
            $table->id('staffID');
            $table->integer('userID');
            $table->string('firstname');
            $table->string('middlename')->nullable(true);
            $table->string('lastname');
            $table->string('roledesc');
            $table->string('address');
            $table->string('gender');
            $table->date('birthdate');
            $table->string('contactNumber', 13);
            $table->date('dateHired');
            $table->boolean('isActive');
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
        Schema::dropIfExists('staffs');
    }
}

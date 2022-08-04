<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id('memberID');
            $table->string('firstName');
            $table->string('middleName');
            $table->string('lastName');
            $table->string('address');
            $table->string('contactNum', 13);
            $table->string('civilStat');
            $table->string('gender', 6);
            $table->string('birthPlace');
            $table->string('religion');
            $table->string('height');
            $table->string('weight');
            $table->integer('mop');
            $table->date('birthDate')->nullable(true);
            $table->string('dep1');
            $table->string('dep2')->nullable(true);
            $table->string('dep3')->nullable(true);
            $table->string('dep4')->nullable(true);
            $table->string('dep5')->nullable(true);
            $table->string('dep6')->nullable(true);
            $table->string('dep7')->nullable(true);
            $table->string('dep8')->nullable(true);
            $table->string('dep9')->nullable(true);
            $table->string('dep10')->nullable(true);
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
        Schema::dropIfExists('members');
    }
}

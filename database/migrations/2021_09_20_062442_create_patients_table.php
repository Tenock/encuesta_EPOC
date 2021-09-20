<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('lname1');
            $table->string('lname2');
            $table->string('email');
            $table->timestamp('email_verified_at')->nullable();
            $table->integer('day');
            $table->integer('month');
            $table->integer('year');
            $table->string('riskage')->nullable();
            $table->integer('cigsmoke');
            $table->integer('yearssmoke');
            $table->integer('hourswood');
            $table->integer('yearswood');
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
        Schema::dropIfExists('patients');
    }
}

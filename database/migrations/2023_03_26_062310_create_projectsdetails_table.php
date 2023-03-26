<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projectsdetails', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('typeRC');
            $table->string('location');
            $table->string('status');
            $table->string('typeconst');
            $table->string('budget');
            $table->string('coverdarea');
            $table->string('nofstories');
            $table->string('phone');
            $table->string('email');
            $table->string('description');
            $table->unsignedBigInteger('design_id');
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
        Schema::dropIfExists('projectsdetails');
    }
}

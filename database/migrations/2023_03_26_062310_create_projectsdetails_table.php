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
            $table->string('types');
            $table->string('location');
            $table->string('typeof');
            $table->string('budget');
            $table->string('area');
            $table->string('desc');
            $table->string('stories');
            $table->string('phone');
            $table->string('email');
            $table->string('status');
            $table->string('is_commerical')->nullable();
            $table->string('is_residential')->nullable();
            $table->string('is_maintaning')->nullable();
            $table->string('is_retrofitting')->nullable();
            $table->string('is_plumbing')->nullable();
            $table->string('category_id')->nullable();
            $table->string('userName');
            $table->string('userID');
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

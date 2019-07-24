<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConferencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conferences', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('organizationName');
            $table->string('city');
            $table->string('country')->nullable();
            $table->string('website')->nullable();
            $table->string('fax')->nullable();
            $table->string('designation');
            $table->string('state');
            $table->string('email')->unique();
            $table->string('phone')->nullable();
            $table->string('mobile');
            $table->string('firstName');
            $table->string('lastName');
            $table->string('addressLine1');
            $table->string('addressLine2')->nullable();
            $table->string('alternateEmail')->nullable();
            $table->string('conferenceTitle')->nullable();
            $table->string('title');
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
        Schema::dropIfExists('conferences');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisitorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visitors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('organizationName');
            $table->string('city');
            $table->string('country')->nullable();
            $table->string('website')->nullable();
            $table->string('fax')->nullable();
            $table->string('designation');
            $table->string('address')->nullable();
            $table->string('state');
            $table->string('email')->unique();
            $table->string('phone')->nullable();
            $table->string('mobile');
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
        Schema::dropIfExists('visitors');
    }
}

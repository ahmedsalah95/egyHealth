<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExhibitorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exhibitors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('OragnizationName') ;
            $table->string('ChiefExecutiveFirstName') ;
            $table->string('ChiefExecutiveDesignation') ;
            $table->string('ContactPersonFirstName') ;
            $table->string('ContactPersonDesignation');
            $table->string('ChiefExecutiveTitle');
            $table->string('ChiefExecutiveSecondName') ;
            $table->string('ContactPersonTitle');
            $table->string('ContactPersonLastName') ;
            $table->string('CorporateAddressLine1') ;
            $table->string('CorporateCity') ;
            $table->string('CorporateState') ;
            $table->string('CorporatePhone')->nullable() ;
            $table->string('CorporateMobile') ;
            $table->string('CorporateAlternateEmail')->nullable() ;
            $table->string('CorporateAddressLine2')->nullable() ;
            $table->string('CorporateZipCode') ;
            $table->string('CorporateCountry') ;
            $table->string('CorporateFax')->nullable() ;
            $table->string('CorporateEmail') ;
            $table->string('CorporateWebsite')->nullable() ;
            $table->enum('CorporateImportExportCode',['Exporters','NonExporters'])->default('NonExporters');
            $table->string('CorrespondenceAddressLine1') ;
            $table->string('CorrespondenceCity') ;
            $table->string('CorrespondenceState') ;
            $table->string('CorrespondencePhone')->nullable() ;
            $table->string('CorrespondenceMobile') ;
            $table->string('CorrespondenceAddressLine2')->nullable() ;
            $table->string('CorrespondenceZipCode') ;
            $table->string('CorrespondenceCountry') ;
            $table->string('CorrespondenceFax')->nullable() ;
            $table->string('CorrespondenceEmail') ;
            $table->string('CorrespondenceCompanyProfile') ;
            $table->string('Scheme') ;
            $table->string('AreaRequired') ;
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
        Schema::dropIfExists('exhibitors');
    }
}

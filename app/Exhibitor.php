<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exhibitor extends Model
{
    protected $fillable =['OragnizationName',
    'ChiefExecutiveFirstName',
    'ChiefExecutiveDesignation',
    'ContactPersonFirstName',
    'ContactPersonDesignation',
    'ChiefExecutiveTitle',
    "ChiefExecutiveSecondName",
    'ContactPersonTitle',
    'ContactPersonLastName',
    'CorporateAddressLine1',
    'CorporateCity',
    'CorporateState',
    'CorporatePhone',
    'CorporateMobile',
    'CorporateAlternateEmail',
    'CorporateAddressLine2',
    'CorporateZipCode',
    'CorporateCountry',
    'CorporateFax',
    'CorporateEmail',
    'CorporateWebsite',
    'CorporateImportExportCode',
    'CorrespondenceAddressLine1',
    'CorrespondenceCity',
    'CorrespondenceState',
    'CorrespondencePhone',
    'CorrespondenceMobile',
    'CorrespondenceAddressLine2',
    'CorrespondenceZipCode',
    'CorrespondenceCountry',
    'CorrespondenceFax',
    'CorrespondenceEmail',
    'CorrespondenceCompanyProfile',
    'Scheme',
    'AreaRequired',];
}

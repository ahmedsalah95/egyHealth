<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conference extends Model
{
    protected $fillable = [
       'organizationName',
       'city',
       'country',
       'website',
       'fax',
       'designation',
       'state',
       'email',
       'phone',
       'mobile',
       'firstName',
       'lastName',
       'addressLine1',
       'addressLine2',
       'alternateEmail',
       'conferenceTitle',
       'title',
    ];
}

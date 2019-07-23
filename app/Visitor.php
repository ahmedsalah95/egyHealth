<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    protected $fillable = [ 'name' ,'organizationName','city' ,'country','website','fax' ,"designation"  ,'address'  ,'state'   ,'email'  ,'phone'  ,'mobile' ];
}

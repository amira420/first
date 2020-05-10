<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DonerRegistration extends Model
{
    protected $fillable =["name","full address","phone number","another number","age","weight","blood type","Are you smoking?","time of calling","calling way","gander"]
    ;
    
}

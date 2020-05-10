<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DonerRequest extends Model
{
    protected $fillable =["name","full address","phone number","another number","blood type","time of calling","calling way","gander"];

}

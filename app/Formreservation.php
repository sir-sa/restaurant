<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formreservation extends Model
{
    protected $fillable =['name','phone','email','time','text'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Type_Blood extends Model 
{
    protected $fillable =['Name'];

    protected $table = 'Type_Bloods';
    public $timestamps = true;

}
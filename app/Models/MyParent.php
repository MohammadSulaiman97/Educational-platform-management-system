<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class MyParent extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $guarded=[];
    protected $table = 'my_parents';
    public $translatable = ['Name_Father','Job_Father','Name_Mother','Job_Mother'];

}

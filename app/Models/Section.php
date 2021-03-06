<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Section extends Model 
{

    use HasTranslations;
    public $translatable = ['Name_Section'];

    protected $fillable=['Name_Section','Grade_id','Class_id'];

    protected $table = 'Sections';
    public $timestamps = true;

    public function My_classs()
    {
        return $this->belongsTo(Classroom::class, 'Class_id');
    }

}
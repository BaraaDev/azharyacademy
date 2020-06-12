<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $table = 'categories';
    public $timestamps = true;
    protected $fillable = array('name', 'image');

    public function courss()
    {
        return $this->hasMany('App\Models\Cours');
    }

}
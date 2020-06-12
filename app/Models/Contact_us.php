<?php

namespace Models;

use Illuminate\Database\Eloquent\Model;

class Contact_us extends Model 
{

    protected $table = 'contact_us';
    public $timestamps = true;
    protected $fillable = array('name', 'email', 'phone', 'message', 'subject');

}
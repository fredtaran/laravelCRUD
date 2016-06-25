<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $table = 'people';

    protected $fillable = array('firstname', 'lastname', 'middlename', 'bday', 'age');
}

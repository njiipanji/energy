<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Volunteer extends Model
{
    //
    protected $table = 'volunteer';
    public $timestamps = false;
    protected $fillable = ['nama_volunteer'];
}

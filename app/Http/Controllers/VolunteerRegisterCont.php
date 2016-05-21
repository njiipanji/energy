<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Volunteer;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class VolunteerRegisterCont extends Controller
{
    //
    public function insertData(Request $request){
    	$new = new Volunteer;
    	$new->nama_volunteer = $request->nama_volunteer;
    	$new->save();

	return $request->nama_volunteer;
    }
}

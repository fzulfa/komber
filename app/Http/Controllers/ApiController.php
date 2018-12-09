<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sensor;
use App\Pothole;


class ApiController extends Controller
{
	public function sensor(Request $request)
	{
	    $Ax = $request->input('Ax');
	    $Ay = $request->input('Ay');
	    $Az = $request->input('Az');

	    $sensor = new Sensor();
	    $sensor->Ax = $Ax;
	    $sensor->Ay = $Ay;
	    $sensor->Az = $Az;

	    $sensor->save();

	}

	public function pothole(Request $request)
	{
	    $lat = $request->input('lat');
	    $lng = $request->input('lng');
	    $sts = $request->input('sts');

	    $pothole = new Pothole();
	    $pothole->lat = $lat;
	    $pothole->lng = $lng;
	    $pothole->status = $sts;

	    $pothole->save();

	}
}

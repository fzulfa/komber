<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sensor;
use App\Pothole;

class DashboardController extends Controller
{
    public function index(){
    	$datas = Pothole::all();
    	return view('welcome',['datas'=>$datas]);
    }
}

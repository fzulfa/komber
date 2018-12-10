<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sensor;
use App\Pothole;

class DashboardController extends Controller
{
    public function index(){
    	$datas = Pothole::all();
    	return view('index',['datas'=>$datas]);
    }
    public function sensor(){
    	$datas = Sensor::all();

    	return view('sensor',['datas'=>$datas]);
    }
    public function chart(){
    	$datas = Sensor::all();

    	return $datas;
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sensor;
use App\Pothole;
use App\Percobaan1;
use App\Percobaan2;

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

    public function history(Request $request){
    	$datas1 = Percobaan1::all();
    	$datas2 = Percobaan2::all();
    	if ($request->id == 1) 
    		return $datas1;
    	else return $datas2;
    }

    public function resetsensor(){
    	$sensor = Sensor::truncate();
    	return redirect('/sensor');
    }

    public function resetpothole(){
    	$pothole = Pothole::truncate();
    	return redirect('/');
    }
}

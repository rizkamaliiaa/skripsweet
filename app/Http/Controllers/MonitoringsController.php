<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Monitorings;
use App\Device;
use Auth;

class MonitoringsController extends Controller
{
 	public function monitoring(){
		$auth = Auth::user();      
		$data = Device::with('monitorings')->where('user_id', $auth->id)->get();	
		
   		return response()->json([
   			'status' =>  1,
   			'data' => $data
   		]);
	}
	
	public function jam_sekarang(){
		
		$jam = date('H:i');			
		return response()->json($jam);
	}

}

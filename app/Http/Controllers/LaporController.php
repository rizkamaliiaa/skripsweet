<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Device;
// use App\Unggas;
use App\Controlling;
use Auth;

class LaporController extends Controller
{
    public function index(){
    	$auth = Auth::user();      
        $lapor = Device::with('controlling')->where('user_id', $auth->id)->get();
       
        return view('user.userlaporan', compact('lapor'));
    }
}

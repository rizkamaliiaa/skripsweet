<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Device;
use App\Unggas;
use App\Controlling;
use Auth;

class UserController extends Controller
{
    public function index(){
        $user = auth()->user();
        $kode_alat = $user->kode_alat;

        $controlling = Controlling::where('kode_alat', $kode_alat)->get();

    	return view('user.userhome', compact('controlling'));
    }

    public function create(){
		
	}


		
		
		
}

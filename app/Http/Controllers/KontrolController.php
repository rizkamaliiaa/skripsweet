<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Device;
use App\Unggas;
use App\Controlling;
use Auth;

class KontrolController extends Controller
{
    public function index(){
    	$auth = Auth::user();      
		$device = Device::with('controlling')->where('user_id', $auth->id)->get();
		$unggas = Unggas::all();
       
        return view('user.userunggas', compact('device','unggas'));
    }

    public function create(){
		$kontrol = Controlling::all();
	}

    public function store(Request $request){

		
		$form_kontrol =array(
			'tanggal_mulai' 	=> $request->tanggal_mulai,
			'jam1' 				=> $request->jam1, 
			'jam2'  			=> $request->jam2,
			'jam3'  			=> $request->jam3,
			'jam4' 				=> $request->jam4,
			'jam5'  			=> $request->jam5,
			'k_min' 			=> $request->k_min,
			'k_max' 			=> $request->k_max,
			'jumlah_unggas' 	=> $request->jumlah_unggas
		);

		Controlling::create($form_kontrol);
		
		return redirect('kontrol')->with('success', 'Data Berhasil Ditambah');
    }
    
	public function edit($id){		
		$kontrol = Controlling::findOrFail($id);
		return redirect('kontrol', compact('kontrol'));
	}

	public function update(Request $request, $id){

		$form_kontrol =array(
			'tanggal_mulai' 	=> $request->tanggal_mulai,
			'jam1' 				=> $request->jam1, 
			'jam2'  			=> $request->jam2,
			'jam3'  			=> $request->jam3,
			'jam4'  			=> $request->jam4,
			'jam5'  			=> $request->jam5,
			'k_min' 			=> $request->k_min,
			'k_max' 			=> $request->k_max,
			'jumlah_unggas' 	=> $request->jumlah_unggas,
		);
		
		Controlling::whereId($id)->update($form_kontrol);
		
		return redirect('kontrol')->with('success', 'Data Berhasil Diupdate');
	}

	public function ketinggian(){
		
		return view('user.userhome');	

	}

	

	
}

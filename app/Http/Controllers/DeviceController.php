<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Device;
use App\Unggas;
use App\Controlling;
use Auth;

class DeviceController extends Controller
{
    
    public function index(){
        $device = Device::with('user', 'controlling')->get();	
        $users = User::all();
        $unggas = Unggas::all();
		return view('admin.admindevice', compact('device','users','unggas'));			
	}	

	public function create(){
		
	}

	public function store(Request $request){		
		$newdevice =array(
			'user_id'       => $request->user_id,
			'kode_alat'		=> $request->kode_alat,
			'unggas_id'       => $request->unggas_id,
		);

		$newcontrolling =array(
			'kode_alat'		=> $request->kode_alat,	
			'jam1' 			=> '00:00', 
			'jam2'  		=> '00:00',
			'jam3'  		=> '00:00',
			'jam4'  		=> '00:00',
			'jam5'  		=> '00:00',
			'k_min' 		=> 0,
			'k_max' 		=> 0		
		);

		$newmonitoring =array(
			'kode_alat'		=> $request->kode_alat,	
			'jam'  			=> '00:00:00',
			'ketinggian' 	=> 0,		
		);
	

		Device::create($newdevice);
		Controlling::create($newcontrolling);
		Monitorings::create($newmonitoring);
		return redirect()->back();
	}
	
	public function update(Request $request, $id){

		$newdevice =array(
			'user_id'       => $request->user_id,
			'kode_alat'		=> $request->kode_alat,
			'unggas_id'     => $request->unggas_id,
			
		);
		
		Device::whereId($id)->update($newdevice);
		return redirect()->back();
	}

    
    public function getdevice(Request $request, $id){
		$getdevice = Device::where('id', $id)->first();
		return response()->json($getdevice);
	}

	public function updateDevice(Request $request) {
		// dd($request);
        $device = Device::where('id', $request->id)->first()->update($request->all());
        return redirect()->back();
	}
	
	public function destroy($id){
		Device::find($id)->delete();
        return redirect()->back();
	}

		
		
		
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Device;
use App\Controlling;
use App\Monitorings;
use Auth;

class DeviceController extends Controller
{
    
    public function index(){
     	$device = Device::with('user', 'controlling')->get();	
        $users = User::where('roles', 2)->get();
        
		return view('admin.admindevice', compact('device','users'));			
	}	

	public function store(Request $request){		
		$newdevice =array(
			'user_id'       => $request->user_id,
			'kode_alat'		=> $request->kode_alat,
			'unggas' 		=> $request->unggas
		);

		$newcontrolling =array(
			'kode_alat'		=> $request->kode_alat,	
			'tanggal_mulai'	=> '2000-01-01',
			'jam1' 			=> '00:00', 
			'jam2'  		=> '00:00',
			'jam3'  		=> '00:00',
			'jam4'  		=> '00:00',
			'jam5'  		=> '00:00',
			'k_min' 		=> 0,
			'k_max' 		=> 0,
			'jumlah_unggas' => 0,
			'status'		=> 'OFF'
		);

		$newmonitoring =array(
			'kode_alat'		=> $request->kode_alat,	
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

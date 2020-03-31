<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Device;
use App\Role;
use App\Controlling;
use App\Monitorings;


class AdminController extends Controller
{
	// admin
	public function admin_home(){
		$data['admin'] = User::where('roles', 1)->count();
		$data['user'] = User::where('roles', 2)->count();
		// return $data;
		return view('admin.adminhome', compact('data'));
	}

	public function admin(){		
		$roles=Role::where('nama','admin')->pluck('id')->first();        
		$admin = User::where('roles',$roles)->get();
		return view('admin.admin', compact('admin'));
	}

	public function storeadmin(Request $request){		
		$newadmin =array(
			'nama_depan' 	=> $request->nama_depan, 
			'nama_belakang' => $request->nama_belakang,
			'email'  		=> $request->email,
			'no_hp'  		=> $request->no_hp,
			'alamat'  		=> $request->alamat,
			'unggas'  		=> null,
			'roles'  		=> 1,
			'kode_alat'		=> null,
			'password'      => bcrypt($request->nama_depan)
		);

		User::create($newadmin);
		return redirect()->back();
    }

    public function editadmin($id){
		$admin = User::findOrFail($id);
		return redirect()->back();
	}

	public function updateadmin(Request $request, $id){

		$newadmin =array(
			'nama_depan' 	=> $request->nama_depan, 
			'nama_belakang' => $request->nama_belakang,
			'email'  		=> $request->email,
			'no_hp'  		=> $request->no_hp,
			'alamat'  		=> $request->alamat		
		);
		
		User::whereId($id)->update($newadmin);
		return redirect()->back();
	}

	public function destroyadmin($id){
		User::find($id)->delete();
        return redirect()->back();
	}

	public function getadmin(Request $request, $id){
		$getadmin = User::where('id', $id)->first();
		return response()->json($getadmin);
	}

	public function updateadminbaru(Request $request) {
		// dd($request);
        $admin = User::where('id', $request->id)->first()->update($request->all());
        return redirect()->back();
    }
	

	// user
	public function index(){
		$role = Role::all();
		$roles=Role::where('nama','user')->pluck('id')->first();        
		$users = User::where('roles',$roles)->get();		
		return view('admin.adminusers', compact('users','role'));			
	}	

	public function create(){
		
	}

	public function store(Request $request){		
		$newusers =array(
			'nama_depan' 	=> $request->nama_depan, 
			'nama_belakang' => $request->nama_belakang,
			'email'  		=> $request->email,
			'no_hp'  		=> $request->no_hp,
			'alamat'  		=> $request->alamat,
			'roles'  		=> 2,
			'password'      => bcrypt($request->nama_depan)
		);

		User::create($newusers);
		return redirect()->back();
    }
    
    public function show($id){		
	}

	public function edit($id){
		
	}

	public function update(Request $request, $id){

		$newusers =array(
			'nama_depan' 	=> $request->nama_depan, 
			'nama_belakang' => $request->nama_belakang,
			'email'  		=> $request->email,
			'no_hp'  		=> $request->no_hp,
			'alamat'  		=> $request->alamat,			
		);
		
		User::whereId($id)->update($newusers);
		return redirect()->back();
	}

	public function destroy($id){
		User::find($id)->delete();
        return redirect()->back();
	}

	public function getuser(Request $request, $id){
		$getuser = User::where('id', $id)->first();
		return response()->json($getuser);
	}

	public function updateUser(Request $request) {
		// dd($request);
        $user = User::where('id', $request->id)->first()->update($request->all());
        return redirect()->back();
    }
	
}
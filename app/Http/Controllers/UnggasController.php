<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Unggas;
use App\User;

class UnggasController extends Controller
{

	public function index(){
		$data = Unggas::all();
		return view('admin/admindata', compact('data'));
	}

	public function store(Request $request){		

		$newdata =array(
			'nama' 			=> $request->nama, 
			'keterangan'	=> $request->keterangan,
			'berat_pakan' 	=> $request->berat_pakan
		);

		Unggas::create($newdata);
		return redirect('data')->with('success', 'User Berhasil Ditambah');
    }

    public function show($id){
		$data=Unggas::where('id')->get();
		return redirect('data');		
	}
    
	public function edit($id){
		$data = Unggas::findOrFail($id);
		return redirect()->back();
	}

	public function update(Request $request, $id){
		

		$form_data = array(
			'nama'			=> $request->nama,
			'keterangan'	=> $request->keterangan,
			'berat_pakan' 	=> $request->berat_pakan
		);
		
		Unggas::whereId($id)->update($form_data);
		return redirect('data')->with('success', 'Data Berhasil Diupdate');
	}
	public function destroy($id){
		Unggas::find($id)->delete();
        return redirect()->back();
	}

	public function berat(){
		return $berat=Unggas::get('berat_pakan');
	}
	
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Monitorings;

class SensorController extends Controller
{
    public function ultrasonik($kode, $tinggi){
    	$cek = Monitorings::where('kode_alat', $kode)->first();

    	if (isset($cek)) {
	    	$data = Monitorings::where('id', $cek->id)->update([
	    		'kode_alat' => $kode,
	    		'ketinggian' => $tinggi
	    	]);
    	} else {
    		$data = Monitorings::create([
	    		'kode_alat' => $kode,
	    		'ketinggian' => $tinggi
	    	]);
    	}
    	return $data;    	
    }
    
    public function dht($kode, $suhu){
        $cek = Monitorings::where('kode_alat', $kode)->first();

        if (isset($cek)) {
            $dht = Monitorings::where('id', $cek->id)->update([
                'kode_alat' => $kode,
                'suhu' => $suhu
            ]);
        } else {
            $dht = Monitorings::create([
                'kode_alat' => $kode,
                'suhu' => $suhu
            ]);
        }
        return $dht;       
    }
}

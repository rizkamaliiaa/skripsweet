<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Controlling;
use App\Device;
use App\Unggas;
use Auth;
use Carbon\Carbon;

class ControllingController extends Controller
{
	public function index(){
        $controlling=Controlling::all();
        return response()->json($controlling);
	}
	
	public function controlling(){
		$auth = Auth::user();      
		$data = Device::with('controlling')->where('user_id', $auth->id)->first();	
		
   		return response()->json([
   			'status' =>  1,
   			'data' => $data
   		]);
	}

    public function device(){
        $kode_alat = auth()->user()->kode_alat;
        $controlling = Device::where('kode_alat', $kode_alat)->with('controlling')->first();
        return response()->json($controlling);
    }

    // public function kmin($kode_alat){       
    //     $controlling = Device::where('kode_alat', $kode_alat)->with('controlling')->first();        
    //     return response()->json($controlling->controlling->k_min,200);
    // }

    // public function kmax($kode_alat){       
    //     $controlling = Device::where('kode_alat', $kode_alat)->with('controlling')->first();        
    //     return response()->json($controlling->controlling->k_max);
    // }

	public function jam($jam, $kode_alat){
		$controlling = Device::where('kode_alat', $kode_alat)->with('controlling')->first(); 
   		if ($jam==1) {
   			$jamkontrol = $controlling->controlling->jam1;
   		} elseif ($jam==2) {
   			$jamkontrol = $controlling->controlling->jam2;
   		} elseif ($jam==3) {
   			$jamkontrol = $controlling->controlling->jam3;
   		} elseif ($jam==4) {
   			$jamkontrol = $controlling->controlling->jam4;
   		} elseif ($jam==5) {
   			$jamkontrol = $controlling->controlling->jam5;
   		} else {
            return null;
        }
   		
 		return response()->json($jamkontrol);
	}    

	public function jam_sekarang(){
		$jam = date('H:i');
		return response()->json($jam);
	}
	
	public function pakan($kode_alat){

		$controlling = Device::with('controlling')->where('kode_alat', $kode_alat)->first(); 
		$jmlhUnggas = $controlling->controlling->jumlah_unggas;
		$tanggal = $controlling->controlling->tanggal_mulai;
		
		//jumlah perberian pakan berdasarkan jam yang di isi
		$jmlhPemberian  = 0;
		for ($i=1; $i <= 5 ; $i++) { 
			$jam = 'jam'.$i;                   
			if (isset($controlling->controlling->$jam)) {
				$jmlhPemberian = $jmlhPemberian + 1;
			}
		}

		$today = Carbon::now()->format('Y-m-d');
		$new = Carbon::createFromFormat('Y-m-d',$tanggal);
		$mingguPreeStarter = $new->addDayss(7)->format('Y-m-d');
		$mingguStarter = $new->addDays(21)->format('Y-m-d');
		$pakan = 0;

		//logika cek hari ini untuk pemberian pakan
		if ($today <= $mingguPreeStarter) {
			// return 'minggu prestartter';
			$pakanPrestarter = Unggas::where('id', 1)->first()->berat_pakan;
			$pakan = $jmlhUnggas * $pakanPrestarter / $jmlhPemberian; 
		} 
		else if ($today <= $mingguStarter) {
			// return 'minggu startter';
			$pakanStarter = Unggas::where('id', 2)->first()->berat_pakan;
			$pakan = $jmlhUnggas * $pakanStarter / $jmlhPemberian; 
		} 
		else {
			// return 'minggu finisher';
			$pakanFinisher = Unggas::where('id', 3)->first()->berat_pakan;
			$pakan = $jmlhUnggas * $pakanFinisher / $jmlhPemberian; 
		}

		return response()->json($pakan);	
	}
	
}

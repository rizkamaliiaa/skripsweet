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

    public function device(){
        $kode_alat = auth()->user()->kode_alat;
        $controlling = Device::where('kode_alat', $kode_alat)->with('controlling')->first();
        return response()->json($controlling);
    }

    public function kmin($kode_alat){       
        $controlling = Device::where('kode_alat', $kode_alat)->with('controlling')->first();        
        return response()->json($controlling->controlling->k_min,200);
    }

    public function kmax($kode_alat){       
        $controlling = Device::where('kode_alat', $kode_alat)->with('controlling')->first();        
        return response()->json($controlling->controlling->k_max);
    }

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

	public function jumlah_unggas($kode_alat){
		$controlling = Device::where('kode_alat', $kode_alat)->with('controlling')->first();    		
 		return response()->json($controlling->controlling->jumlah_unggas);
	}
	
	public function tanggal(){
		$auth = Auth::user();      
		$controlling = Device::with('controlling')->where('user_id', $auth->id)->first(); 
			$tanggal = $controlling->controlling->tanggal_mulai;
			$tz= 'Asia/Jakarta'; 		
			$new = Carbon::createFromFormat('Y-m-d',$tanggal);
			echo $seminggu = $new->addWeeks(1);
			echo "\n";
					$tgl=date_create($tanggal); 
					$tggl=date_create($seminggu);
					$diff=date_diff($tgl,$tggl);
					$tes=$diff->format("%a");
					echo $tes;
					echo "\n";
			echo $tigaminggu = $seminggu->addWeeks(3);
			echo "\n";			
					$date1=date_create($tanggal); 
					$date2=date_create($tigaminggu);
					$diff=date_diff($date1,$date2);
					$tes2=$diff->format("%a");
					echo $tes2;
					
			
			if($tes==7){
				$prestarter = Unggas::where('id', '1')->value('berat_pakan');
			}else{
				return back();	
			}				
	}

}

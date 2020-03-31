<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Controlling extends Model
{
   protected $table = 'controlling';
   
   protected $fillable = ['kode_alat','tanggal_mulai','tanggal_selesai','jam1','jam2','jam3','jam4','jam5','k_min','k_max','jumlah_unggas'];
   public $timesstamps = true;

   public function device()
   {
   		return $this->belongsTo('App\Device');
   }   
}

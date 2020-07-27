<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
   protected $table = 'device';
  
   protected $fillable = ['kode_alat','user_id','unggas'];
   
   public $timesstamps = true;

   public function monitorings()
   {
         return $this->hasOne('App\Monitorings','kode_alat', 'kode_alat');
         //ini penjelasan nye nan
   		// return $this->hasOne('App\Monitorings','foreign_key', 'source_key');
   }

   public function controlling()
   {
         return $this->hasOne('App\Controlling','kode_alat', 'kode_alat');
   } 
   
	public function user()
   {
   		return $this->belongsTo('App\User');
   }

   


   
}

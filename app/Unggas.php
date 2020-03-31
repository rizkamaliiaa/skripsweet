<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unggas extends Model
{
    protected $table = 'unggas';
   	protected $fillable = ['nama','keterangan','berat_pakan'];
   
   	public function device(){
        return $this->hasOne(Device::class);
    }
}

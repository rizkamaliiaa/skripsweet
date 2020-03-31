<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Monitorings extends Model
{
   protected $table = 'monitorings';

   protected $fillable = ['jam','ketinggian','kode_alat'];
   public $timesstamps = true;
}

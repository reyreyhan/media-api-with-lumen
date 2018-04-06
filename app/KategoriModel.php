<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriModel extends Model
{
   protected $table = 'kategori';
   protected $primaryKey = 'KAT_ID';

   public function penstv() {
     return $this->hasMany('App\PenstvModel','KAT_ID');
   }

}

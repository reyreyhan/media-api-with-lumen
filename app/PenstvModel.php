<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PenstvModel extends Model
{
   protected $table = 'penstv';
   protected $primaryKey = 'TV_ID';

   public function kategori() {
     return $this->belongsTo('App\KategoriModel','KAT_ID');
   }

   public function user() {
     return $this->belongsTo('App\UserModel','USER_ID');
   }
}

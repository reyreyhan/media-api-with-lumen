<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PenstoonModel extends Model
{
   protected $table = 'penstoon';
   protected $primaryKey = 'TOON_ID';

   public function user() {
     return $this->belongsTo('App\UserModel','USER_ID');
   }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PenspostModel extends Model
{
   protected $table = 'penspost';
   protected $primaryKey = 'POST_ID';

   public function user() {
     return $this->belongsTo('App\UserModel','USER_ID');
   }
}

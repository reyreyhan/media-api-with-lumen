<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
   protected $table = 'user';
   protected $primaryKey = 'USER_ID';

   public function penstv() {
     return $this->hasMany('App\PenstvModel','USER_ID');
   }

   public function penstoon() {
     return $this->hasMany('App\PenstoonModel','USER_ID');
   }

   public function penspost() {
     return $this->hasMany('App\PenspostModel','USER_ID');
   }

   public function core() {
     return $this->hasMany('App\CoreModel','USER_ID');
   }
}

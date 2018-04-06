<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CoreModel extends Model
{
   protected $table = 'coremagz';
   protected $primaryKey = 'CORE_ID';

   public function user() {
     return $this->belongsTo('App\UserModel','USER_ID');
   }

   public function page() {
     return $this->hasMany('App\PageModel','CORE_ID_PAGE');
   }
}

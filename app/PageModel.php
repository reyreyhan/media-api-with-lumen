<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PageModel extends Model
{
   protected $table = 'perpage_core';
   protected $primaryKey = 'PAGE_ID';

   public function core() {
     return $this->belongsTo('App\CoreModel','CORE_ID_PAGE');
   }
}

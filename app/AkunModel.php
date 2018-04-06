<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AkunModel extends Model
{
    protected $table = 'akun';

    protected $fillable = [
      'username', 'email'
    ];

    protected $hidden = [
      'password'
    ];
}

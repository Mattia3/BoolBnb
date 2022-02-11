<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    protected $fillable = [
      'name',
      'icon_path'
    ];

    public function users(){
      return $this->belongsToMany('App\User', 'user_language');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
      'name',
      'icon_class'
    ];

    public function apartments(){
      return $this->belongsToMany('App\Apartment', 'apartment_service');
    }
}

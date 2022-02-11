<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rule extends Model
{
    protected $fillable = [
      'name',
      'icon_class'
    ];

    public function apartments(){
      return $this->belongsToMany('App\Apartment', 'apartment_rule');
    }
}

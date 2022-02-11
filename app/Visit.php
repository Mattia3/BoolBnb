<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    protected $fillable = [
      'ip_address',
      'visit_date',
    ];

    public function apartments(){
      return $this->belongsTo('App\Apartment');
    }
}

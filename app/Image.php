<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [
      'apartment_id',
      'img_path'
    ];

    public function apartments(){
      return $this->belongsTo('App\Apartment');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = [
      'name',
      'last_name',
      'email',
      'body_email'
    ];

    public function apartments(){
      return $this->belongsTo('App\Apartment');
    }
}

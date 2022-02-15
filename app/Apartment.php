<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apartment extends Model
{
  protected $fillable = [
    'title',
    'address',
    'price',
    'lat',
    'lng',
    'square_mt',
    'n_rooms',
    'n_beds',
    'n_baths',
    'cover_img',
    'description',
    'visible',
    'place_description'
  ];

  public function users()
  {
    return $this->belongsTo('App\User');
  }

  public function services()
  {
    return $this->belongsToMany('App\Service', 'apartment_service')->withTimestamps();
  }

  public function messages()
  {
    return $this->hasMany('App\Message');
  }

  public function images()
  {
    return $this->hasMany('App\Image');
  }

  public function visits()
  {
    return $this->hasMany('App\Visit');
  }

  public function rules()
  {
    return $this->belongsToMany('App\Rule', 'apartment_rule');
  }

  public function sponsors()
  {
    return $this->belongsToMany('App\Sponsor', 'apartment_sponsor')->withPivot('starting_date', 'expire_date')->withTimestamps();
  }
}

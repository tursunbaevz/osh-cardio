<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    // protected $table = 'photos';
  
  	protected $fillable = array('album_id','image', 'size');

  	public function album() {
  		return $this->belongsTo('App\Album');
  	}
}

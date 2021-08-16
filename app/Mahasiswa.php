<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
	protected $fillable = [
	'nrp', 'nama', 'user_id'
	];
    public function user() {
    	return $this->belongsTo('App\User');
    }
    public function sharehostings() {
    	return $this->hasMany('App\Sharehosting');
    }
}

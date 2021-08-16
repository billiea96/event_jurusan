<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Komentar extends Model
{
	protected $fillable = [
	'isi', 'tgl_komentar', 'user_id', 'post_id'
	];
	public function post() {
		return $this->belongsTo('App\Post');
	}
	public function user() {
    	return $this->belongsTo('App\User');
    }
}

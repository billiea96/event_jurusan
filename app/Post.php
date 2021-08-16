<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	protected $fillable = [
	'judul', 'subjek', 'isi', 'tgl_posting', 'user_id', 'kategori_id'
	];

	protected $dateFormat = "Y-m-d h:i:s";
    public function kategori() {
    	return $this->belongsTo('App\Kategori');
    }
    public function user() {
    	return $this->belongsTo('App\User');
    }
    public function komentars() {
    	return $this->hasMany('App\Komentar');
    }
}

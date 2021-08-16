<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lab extends Model
{
	protected $fillable = [
	'nama', 'deskripsi'
	];
    public function matakuliahs() {
    	return $this->hasMany('App\Matakuliah');
    }
    public function karyawans() {
    	return $this->hasMany('App\Karyawan');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matakuliah extends Model
{
	protected $fillable = [
	'kode_mk', 'nama','jumlah_sks','deskripsi','lab_id'
	];
    public function lab() {
    	return $this->belongsTo('App\Lab');
    }
}

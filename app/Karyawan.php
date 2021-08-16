<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    protected $fillable = [
	'nip', 'nama', 'jabatan_id','lab_id','user_id'
	];
    public function user() {
    	return $this->belongsTo('App\User');
    }
    public function jabatan(){
    	return $this->belongsTo('App\Jabatan');
    }
    public function lab(){
    	return $this->belongsTo('App\Lab');	
    }
    public function sharehostings() {
        return $this->hasMany('App\Sharehosting');
    }
}

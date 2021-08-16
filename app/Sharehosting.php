<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sharehosting extends Model
{
	protected $fillable = [
	'tgl_permintaan', 'tgl_validasi_supervisor', 'tgl_validasi_kajur', 'tgl_akhir_permintaan', 'status_peminjaman', 'keterangan', 'mahasiswa_id', 'karyawan_id'
	];
    public function mahasiswa() {
    	return $this->belongsTo('App\Mahasiswa');
    }
    public function karyawan() {
    	return $this->belongsTo('App\Karyawan');
    }
}

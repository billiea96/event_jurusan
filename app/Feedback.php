<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Feedback extends Model
{
	protected $fillable = [
	'nama', 'alamat_email', 'isi', 'subject_id'
	];
	public function subject() {
    	return $this->belongsTo('App\Subject');
    }
}

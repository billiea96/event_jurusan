<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ProfilController extends Controller
{
    public function tentangKami() {
    	return view('profil.tentangkami');
    }
    public function visiMisi() {
    	return view('profil.visimisi');
    }
    public function sambutan() {
    	return view('profil.sambutan');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Mahasiswa;

use App\User;

use Illuminate\Support\Facades\Hash;

use App\Http\Requests\MahasiswaFormRequest;

use Gate;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Gate::denies('admin')) {
            abort(403, 'Anda tidak memiliki hak akses');
        }
        $mahasiswas = Mahasiswa::all();
        return view('admin.mahasiswa.index', ['mahasiswas' => $mahasiswas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MahasiswaFormRequest $request)
    {
        $temp = Mahasiswa::where('nrp', $request->get('nrp'))->first();
        $temp2 = User::where('email', $request->get('email'))->first();
        if($request->get('password') != $request->get('upassword')) {
            return redirect('mahasiswa')->with('error', 'Field password dan ulang password harus sama!');
        } else if($temp) {
            return redirect('mahasiswa')->with('error', 'Mahasiswa sudah terdaftar!');
        } else if($temp2) {
            return redirect('mahasiswa')->with('error', 'Email sudah terdaftar!');
        } else {
            $arrData = array('name'=>$request->get('username'), 'email'=>$request->get('email'), 'password'=>Hash::make($request->get('password')), 'hak_akses'=>'Mahasiswa');
            $user = new User($arrData);
            $user->save();

            $arrData = array('nrp'=>$request->get('nrp'), 'nama'=>$request->get('nama'), 'user_id'=>$user->id);
            $mahasiswa = new Mahasiswa($arrData);
            $mahasiswa->save();

            return redirect('mahasiswa')->with('status', 'Data mahasiswa berhasil tersimpan!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MahasiswaFormRequest $request, $id)
    {
        if($request->get('password') != $request->get('upassword')) {
            return redirect('mahasiswa')->with('error', 'Hasil Update: Field password dan ulang password harus sama!');
        } else {
            $mahasiswa = Mahasiswa::whereId($id)->firstOrFail();
            $mahasiswa->nama = $request->get('nama');

            $mahasiswa->user->name = $request->get('username');
            $mahasiswa->user->password = Hash::make($request->get('password'));
            $mahasiswa->user->email = $request->get('email');
            $mahasiswa->save();
            $mahasiswa->user->save();
            return redirect('mahasiswa')->with('status', 'Data mahasiswa berhasil terubah!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

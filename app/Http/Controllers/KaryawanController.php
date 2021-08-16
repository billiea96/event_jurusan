<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Karyawan;

use App\Lab;

use App\Jabatan;

use App\User;

use Illuminate\Support\Facades\Hash;

use App\Http\Requests\KaryawanFormRequest;

use Gate;

class KaryawanController extends Controller
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
        $jabatans = Jabatan::all();
        $labs = Lab::all();
        $karyawans = Karyawan::all();
        return view('admin.karyawan.index', ['karyawans' => $karyawans,'jabatans' => $jabatans,'labs' => $labs]);
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
    public function store(KaryawanFormRequest $request)
    {
        $temp = Karyawan::where('nip', $request->get('nip'))->first();
        $temp2 = User::where('email', $request->get('email'))->first();
        if($request->get('password') != $request->get('upassword')) {
            return redirect('karyawan')->with('error', 'Field password dan ulang password harus sama!');
        } else if($temp) {
            return redirect('karyawan')->with('error', 'Karyawan sudah terdaftar!');
        } else if($temp2) {
            return redirect('karyawan')->with('error', 'Email sudah terdaftar!');
        } else {
            $arrData = array('name'=>$request->get('username'), 'email'=>$request->get('email'), 'password'=>Hash::make($request->get('password')), 'hak_akses'=>'Dosen');
            $user = new User($arrData);
            $user->save();

            $arrData = array('nip'=>$request->get('nip'), 'nama'=>$request->get('nama'),'jabatan_id'=>$request->get('jabatan_id'),'lab_id'=>$request->get('lab_id') ,'user_id'=>$user->id);
            $karyawan = new Karyawan($arrData);
            $karyawan->save();

            return redirect('karyawan')->with('status', 'Data karyawan berhasil tersimpan!');
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
    public function update(KaryawanFormRequest $request, $id)
    {
        if($request->get('password') != $request->get('upassword')) {
            return redirect('karyawan')->with('error', 'Hasil Update: Field password dan ulang password harus sama!');
        } else {
            $karyawan = Karyawan::whereId($id)->firstOrFail();
            $karyawan->nama = $request->get('nama');
            $karyawan->jabatan_id = $request->get('jabatan_id');
            $karyawan->lab_id = $request->get('lab_id');

            $karyawan->user->name = $request->get('username');
            $karyawan->user->password = Hash::make($request->get('password'));
            $karyawan->user->email = $request->get('email');
            $karyawan->save();
            $karyawan->user->save();
            return redirect('karyawan')->with('status', 'Data karyawan berhasil terubah!');
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

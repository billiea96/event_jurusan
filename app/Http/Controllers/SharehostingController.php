<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Karyawan;

use App\Mahasiswa;

use App\Sharehosting;

use Gate;

use Auth;

use App\Http\Requests\SharehostingFormRequest;

use DateTime;

class SharehostingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Gate::denies('mahasiswa')) {
            abort(403, 'Anda tidak memiliki hak akses');
        }
        $karyawans = Karyawan::all();
        $mahasiswas = Mahasiswa::all();
        $id = Auth::user()->id;
        $mahasiswa = Mahasiswa::where('user_id', $id)->first();
        $sharehostings = $mahasiswa->sharehostings;
        return view('sharehosting.index', ['karyawans'=>$karyawans, 'mahasiswas'=>$mahasiswas, 'sharehostings' => $sharehostings]);
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
    public function store(SharehostingFormRequest $request)
    {
        if (Gate::denies('mahasiswa')) {
            abort(403, 'Anda tidak memiliki hak akses');
        }
        $arrData = array('tgl_permintaan'=>date('Y-m-d h:i:s'), 'status_peminjaman'=>'Draft', 'keterangan'=>$request->get('keterangan'), 'mahasiswa_id'=>$request->get('mahasiswa_id'), 'karyawan_id'=>$request->get('karyawan_id'));
        $sharehosting = new Sharehosting($arrData);
        $sharehosting->save();

        return redirect('share-hosting')->with('status', 'Data peminjaman hosting berhasil tersimpan!');
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
    public function update(SharehostingFormRequest $request, $id)
    {
        if (Gate::denies('dosen')) {
            abort(403, 'Anda tidak memiliki hak akses');
        }
        if($request->get('jabatan_id') != 1) {
            $sharehosting = Sharehosting::whereId($id)->firstOrFail();
            $sharehosting->tgl_validasi_supervisor = date('Y-m-d h:i:s');
            $sharehosting->status_peminjaman = 'Validasi oleh Supervisor';
            $sharehosting->save();

            return redirect('/validasi-hosting')->with('status', 'Peminjaman hosting telah berhasil tervalidasi!');
        } else {
            $sharehosting = Sharehosting::whereId($id)->firstOrFail();
            $sharehosting->tgl_validasi_kajur = date('Y-m-d h:i:s');
            $sharehosting->status_peminjaman = 'Validasi oleh Kajur';
            $harini = new DateTime();
            $harini->modify('+30 day');
            $sharehosting->tgl_akhir_peminjaman = $harini->format('Y-m-d h:i:s');
            $sharehosting->save();

            return redirect('/validasi-hosting')->with('status', 'Peminjaman hosting telah berhasil tervalidasi!');
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

    public function validasi() {
        if (Gate::denies('dosen')) {
            abort(403, 'Anda tidak memiliki hak akses');
        }
        $user = Auth::user();
        if($user->karyawan->jabatan_id != 1) {
            $id = Auth::user()->id;
            $karyawan = Karyawan::where('user_id', $id)->first();
            $sharehostings = $karyawan->sharehostings->where('status_peminjaman', 'Draft');
            return view('sharehosting.validasi', ['sharehostings' => $sharehostings]);
        } else {
            $sharehostings = Sharehosting::where('status_peminjaman', 'Validasi oleh Supervisor')->get();
            return view('sharehosting.validasi', ['sharehostings' => $sharehostings]);
        }
    }
}

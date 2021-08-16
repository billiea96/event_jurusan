<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Matakuliah;

use App\Lab;

use App\Http\Requests\MatakuliahFormRequest;

use Gate;

class MatakuliahController extends Controller
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
        $matakuliahs = Matakuliah::all();
        $labs = Lab::all();
        return view('admin.matakuliah.index', ['matakuliahs' => $matakuliahs, 'labs'=> $labs]);
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
    public function store(Request $request)
    {
        $temp = Matakuliah::where('kode_mk', $request->get('kode_mk'))->first();
        if($temp) {
            return redirect('matakuliah')->with('error', 'Matakuliah sudah terdaftar!');
        } else {
            $arrData = array('kode_mk'=>$request->get('kode_mk'), 'nama'=>$request->get('nama'),'jumlah_sks'=>$request->get('jumlah_sks'),'deskripsi'=>$request->get('deskripsi'),'lab_id'=>$request->get('lab_id'));
            $matakuliah = new Matakuliah($arrData);
            $matakuliah->save();

            return redirect('matakuliah')->with('status', 'Matakuliah baru berhasil tersimpan!');
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
    public function update(MatakuliahFormRequest $request, $id)
    {
        $matakuliah = Matakuliah::whereId($id)->firstOrFail();
        $matakuliah->nama = $request->get('nama');
        $matakuliah->jumlah_sks = $request->get('jumlah_sks');
        $matakuliah->lab_id = $request->get('lab_id');
        $matakuliah->deskripsi = $request->get('deskripsi');
        $matakuliah->save();
        return redirect('matakuliah')->with('status', 'Data Mata Kuliah berhasil terubah!');
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
    public function showAll() {
        $labs = Lab::all();
        return view('akademik.mata-kuliah', ['labs' => $labs]);
    }
}

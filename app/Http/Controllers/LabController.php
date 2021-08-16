<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Lab;

use App\User;

use Illuminate\Support\Facades\Hash;

use App\Http\Requests\LabFormRequest;

use Gate;

class LabController extends Controller
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
        $labs = Lab::all();
        return view('admin.lab.index', ['labs' => $labs]);
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
    public function store(LabFormRequest $request)
    {
        $arrData = array('nama'=>$request->get('nama'), 'deskripsi'=>$request->get('deskripsi'));
        $lab = new Lab($arrData);
        $lab->save();

        return redirect('laboratorium')->with('status', 'Laboratorium baru berhasil tersimpan!');
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
    public function update(LabFormRequest $request, $id)
    {
        $lab = Lab::whereId($id)->firstOrFail();
        $lab->nama = $request->get('nama');
        $lab->deskripsi = $request->get('deskripsi');
        $lab->save();
        return redirect('laboratorium')->with('status', 'Data laboratorium keahlian berhasil terubah!');
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
        return view('akademik.lab-keahlian', ['labs' => $labs]);
    }
}

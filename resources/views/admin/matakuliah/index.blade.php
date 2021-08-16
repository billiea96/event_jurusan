@extends('layouts.layoutadmin')

@section('content')
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Master Data <small>Mata Kuliah</small>
        </h1>
    </div>
</div>
<!-- /.row -->

<div class="row">
    <div class="col-sm-12">
        @if(session('status'))
        <div id="success">
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <strong>{{ session('status') }}</strong>
            </div>
        </div>
        @endif
        @if(session('error'))
        <div id="success">
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <strong>{{ session('error') }}</strong>
            </div>
        </div>
        @endif
        <form class="form-horizontal" action="{{ url('matakuliah') }}" method="POST">
            {!! csrf_field() !!}
            <div class="col-sm-offset-10 col-sm-1"></div><br>
            <div class="col-sm-offset-3 col-sm-6">
                <fieldset>
                <legend>Tambah Matakuliah baru</legend>
                <div class="form-group">
                    <label class="control-label col-sm-3" for="kodemk">Kode MK:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="kode_mk" id="kodemk" placeholder="Kode Matakuliah" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3" for="nama">Nama:</label>
                    <div class="col-sm-9">
                        <input type ="text" class="form-control" name="nama" id="nama" placeholder="Nama Matakuliah" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3" for="jumlahsks">Jumlah SKS:</label>
                    <div class="col-sm-9">
                        <input type ="number" class="form-control" name="jumlah_sks" id="jumlahsks" placeholder="Jumlah SKS" min='1' max='9' required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3" for="deskripsi">Deskripsi:</label>
                    <div class="col-sm-9">
                        <textarea class="form-control" name="deskripsi" id="deskripsi" placeholder="Tulis Deskripsi" required></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3" for="lab_id">Laboratorium:</label>
                    <div class="col-sm-5">
                        <select name="lab_id" class="form-control" placeholder="Laboratorium" id="lab_id" required data-validation-required-message="Please choose Jabatan.">
                            <option value="">[Pilih Laboratorium]</option>
                            @foreach($labs as $lab)
                            <option value="{{ $lab->id }}">{{ $lab->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                </fieldset>
            </div>
            <div class="col-sm-offset-4 col-sm-5">
                <div class="col-sm-offset-10 col-sm-1">
                    <input class="btn btn-success btn-md" type="submit" name="simpan" value="Simpan">
                </div>
            </div>
        </form>
    </div>
</div>
<!-- /.row -->
<hr>
<div class="row">
    <div class="box">
        <div class="col-sm-12">
            <!--container isi-->
            <div class="col-sm-12 table-responsive">
                <table class="table table-bordered table-hover text-center">
                    <thead>
                        <tr>
                            <th>Kode MK</th>
                            <th>Nama</th>
                            <th>Jumlah SKS</th>
                            <th>Deskripsi</th>
                            <th>Nama Laboratorium</th>
                            <th>Task</th>
                        </tr>
                    </thead>
                    <tbody>
                       @foreach($matakuliahs as $matakuliah)
                        <tr>
                            <td>{{ $matakuliah->kode_mk }}</td>
                            <td>{{ $matakuliah->nama }}</td>
                            <td>{{ $matakuliah->jumlah_sks }}</td>
                            <td>{{ $matakuliah->deskripsi }}</td>
                            <td>{{ $matakuliah->lab->nama }}</td>
                            <td><button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#{{ $matakuliah->id }}">Edit</button></td>
                            <!-- Modal -->
                            <div id="{{ $matakuliah->id }}" class="modal fade" role="dialog">
                                <div class="modal-dialog modal-lg">
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Edit Mata Kuliah</h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-sm-12 table-responsive">
                                                    <form class="form-horizontal" id="formUpdate{{ $matakuliah->id }}" action="{{ route('matakuliah.update', $matakuliah->id) }}" method="POST">
                                                        {{ method_field("PUT") }}
                                                        {!! csrf_field() !!}
                                                        <div class="col-sm-offset-10 col-sm-1"></div><br>
                                                        <div class="col-sm-8 col-sm-offset-2">
                                                            <fieldset>
                                                                <legend>Ubah Data Mata Kuliah</legend>
                                                                <div class="form-group">
                                                                    <label class="control-label col-sm-3" for="kodemk">Kode MK:</label>
                                                                    <div class="col-sm-5">
                                                                        <input type="text" class="form-control" name="kode_mk" id="kodemk" placeholder="Kode Matakuliah" value="{{ $matakuliah->kode_mk }}" disabled required>
                                                                    </div>
                                                                </div><br>
                                                                <div class="form-group">
                                                                    <label class="control-label col-sm-3" for="nama">Nama:</label>
                                                                    <div class="col-sm-9">
                                                                        <input type ="text" class="form-control" name="nama" id="nama" placeholder="Nama Matakuliah" value="{{ $matakuliah->nama }}" required>
                                                                    </div>
                                                                </div><br>
                                                                <div class="form-group">
                                                                    <label class="control-label col-sm-3" for="jumlahsks">Jumlah SKS:</label>
                                                                    <div class="col-sm-9">
                                                                        <input type ="number" class="form-control" name="jumlah_sks" id="jumlahsks" placeholder="Jumlah SKS" min='1' max='9' value="{{ $matakuliah->jumlah_sks }}" required>
                                                                    </div>
                                                                </div><br>
                                                                <div class="form-group">
                                                                    <label class="control-label col-sm-3" for="deskripsi">Deskripsi:</label>
                                                                    <div class="col-sm-9">
                                                                        <textarea class="form-control" name="deskripsi" id="deskripsi" placeholder="Tulis Deskripsi" required>{{ $matakuliah->deskripsi }}</textarea>
                                                                    </div>
                                                                </div><br>
                                                                <div class="form-group">
                                                                    <label class="control-label col-sm-3" for="lab_id">Laboratorium:</label>
                                                                    <div class="col-sm-5">
                                                                        <select name="lab_id" class="form-control" placeholder="Laboratorium" id="lab_id" required data-validation-required-message="Please choose Jabatan.">
                                                                            <option value="{{ $matakuliah->lab_id }}">{{ $matakuliah->lab->nama }}</option>
                                                                            @foreach($labs as $lab)
                                                                            <option value="{{ $lab->id }}">{{ $lab->nama }}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </fieldset>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <div class="col-sm-12">
                                                <div class="col-sm-offset-10 col-sm-1">
                                                    <input class="btn btn-success btn-md" type="submit" name="simpan" value="Simpan" form="formUpdate{{ $matakuliah->id }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.row -->

<div class="row">

</div>
<!-- /.row -->
@endsection
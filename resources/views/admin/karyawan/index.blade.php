@extends('layouts.layoutadmin')

@section('content')
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Master Data <small>Karyawan</small>
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
        <form class="form-horizontal" action="{{ url('karyawan') }}" method="POST">
            {!! csrf_field() !!}
            <div class="col-sm-offset-10 col-sm-1"></div><br>
            <div class="col-sm-6">
                <fieldset>
                <legend>Data Akun Karyawan</legend>
                <div class="form-group">
                    <label class="control-label col-sm-5" for="username">Username:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="username" id="username" placeholder="Username" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-5" for="password">Password:</label>
                    <div class="col-sm-5">
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-5" for="upassword">Ulangi Password:</label>
                    <div class="col-sm-5">
                        <input type="password" class="form-control" name="upassword" id="upassword" placeholder="Ulangi Password" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-5" for="email">Alamat Email:</label>
                    <div class="col-sm-5">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                    </div>
                </div>
                </fieldset>
            </div>
            <div class="col-sm-6">
                <fieldset>
                <legend>Data Pribadi Karyawan</legend>
                <div class="form-group">
                    <label class="control-label col-sm-5" for="nip">NIP:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="nip" id="nip" placeholder="NIP" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-5" for="namaLengkap">Nama Lengkap:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="nama" id="namaLengkap" placeholder="Nama Lengkap Karyawan" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-5" for="jabatan_id">Jabatan:</label>
                    <div class="col-sm-5">
                        <select name="jabatan_id" class="form-control" placeholder="Jabatan" id="jabatan_id" required data-validation-required-message="Please choose Jabatan.">
                            <option value="">[Pilih Jabatan]</option>
                            @foreach($jabatans as $jabatan)
                            <option value="{{ $jabatan->id }}">{{ $jabatan->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-5" for="lab_id">Laboratorium:</label>
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
            <div class="col-sm-12">
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
                            <th>NIP</th>
                            <th>Nama</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Jabatan</th>
                            <th>Nama Laboratorium</th>
                            <th>Task</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($karyawans as $karyawan)
                        <tr>
                            <td>{{ $karyawan->nip }}</td>
                            <td>{{ $karyawan->nama }}</td>
                            <td>{{ $karyawan->user->name }}</td>
                            <td>{{ $karyawan->user->email }}</td>
                            <td>{{ $karyawan->jabatan->nama }}</td>
                            <td>{{ $karyawan->lab->nama }}</td>
                            <td><button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#{{ $karyawan->user->id }}">Edit</button></td>
                            <!-- Modal -->
                            <div id="{{ $karyawan->user->id }}" class="modal fade" role="dialog">
                                <div class="modal-dialog modal-lg">
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Edit Karyawan</h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-sm-12 table-responsive">
                                                    <form class="form-horizontal" id="formUpdate{{ $karyawan->user->id }}" action="{{ route('karyawan.update', $karyawan->id) }}" method="POST">
                                                        {{ method_field("PUT") }}
                                                        {!! csrf_field() !!}
                                                        <div class="col-sm-offset-10 col-sm-1"></div><br>
                                                        <div class="col-sm-6">
                                                            <fieldset>
                                                            <legend>Data Akun Karyawan</legend>
                                                            <div class="form-group">
                                                                <label class="control-label col-sm-5" for="username">Username:</label>
                                                                <div class="col-sm-5">
                                                                    <input type="text" class="form-control" name="username" id="username" placeholder="Username" value="{{ $karyawan->user->name }}" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-sm-5" for="password">Password:</label>
                                                                <div class="col-sm-5">
                                                                    <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-sm-5" for="upassword">Ulangi Password:</label>
                                                                <div class="col-sm-5">
                                                                    <input type="password" class="form-control" name="upassword" id="upassword" placeholder="Ulangi Password" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-sm-5" for="email">Alamat Email:</label>
                                                                <div class="col-sm-5">
                                                                    <input type="email" class="form-control" name="email" id="email" placeholder="Email" value="{{ $karyawan->user->email }}" required>
                                                                </div>
                                                            </div>
                                                            </fieldset>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <fieldset>
                                                            <legend>Data Pribadi Karyawan</legend>
                                                            <div class="form-group">
                                                                <label class="control-label col-sm-5" for="nip">NIP:</label>
                                                                <div class="col-sm-5">
                                                                    <input type="text" class="form-control" name="nip" id="nip" placeholder="NIP" value="{{ $karyawan->nip }}" disabled required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-sm-5" for="namaLengkap">Nama Lengkap:</label>
                                                                <div class="col-sm-5">
                                                                    <input type="text" class="form-control" name="nama" id="namaLengkap" placeholder="Nama Lengkap Karyawan" value="{{ $karyawan->nama }}" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-sm-5" for="jabatan_id">Jabatan:</label>
                                                                <div class="col-sm-5">
                                                                    <select name="jabatan_id" class="form-control" placeholder="Jabatan" id="jabatan_id" required data-validation-required-message="Please choose Jabatan.">
                                                                        <option value="{{ $karyawan->jabatan_id }}">{{ $karyawan->jabatan->nama }}</option>
                                                                        @foreach($jabatans as $jabatan)
                                                                        <option value="{{ $jabatan->id }}">{{ $jabatan->nama }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-sm-5" for="lab_id">Laboratorium:</label>
                                                                <div class="col-sm-5">
                                                                    <select name="lab_id" class="form-control" placeholder="Laboratorium" id="lab_id" required data-validation-required-message="Please choose Jabatan.">
                                                                        <option value="{{ $karyawan->lab_id }}">{{ $karyawan->lab->nama }}</option>
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
                                                    <input class="btn btn-success btn-md" type="submit" name="simpan" value="Simpan" form="formUpdate{{ $karyawan->user->id }}">
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
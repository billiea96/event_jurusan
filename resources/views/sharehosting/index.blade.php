@extends('layouts.layouthome')

@section('content')
<!-- Page Header -->
<!-- Set your background image for this header on the line below. -->
<header class="intro-header" style="background-image: url('img/informatika.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="page-heading">
                    <h1>Registrasi Hosting</h1>
                    <hr class="small">
                    <span class="subheading">Daftarkan Diri Anda Untuk Peminjaman Hosting Jurusan</span>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="container">
                <div class="col-sm-12">
                    @if(session('status'))
                    <div id="success">
                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <strong>{{ session('status') }}</strong>
                        </div>
                    </div>
                    @endif
                    <legend><h3 style="color: tomato;">Isi Data Peminjaman</h3></legend>
                    <form class="form-horizontal" action="{{ url('share-hosting') }}" method="POST">
                        {!! csrf_field() !!}
                        <div class="col-sm-offset-10 col-sm-1"></div><br>
                            <fieldset>
                            <div class="form-group">
                                <label class="control-label col-sm-3" for="mahasiswa_id">Peminjam:</label>
                                <div class="col-sm-5">
                                    <select name="mahasiswa_id" class="form-control" placeholder="Laboratorium" id="mahasiswa_id" required data-validation-required-message="Please choose Jabatan.">
                                        <option value="">[Pilih Mahasiswa]</option>
                                        @foreach($mahasiswas as $mahasiswa)
                                        <option value="{{ $mahasiswa->id }}">({{ $mahasiswa->nrp }}) {{ $mahasiswa->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3" for="karyawan_id">Supervisor:</label>
                                <div class="col-sm-5">
                                    <select name="karyawan_id" class="form-control" placeholder="Laboratorium" id="karyawan_id" required data-validation-required-message="Please choose Jabatan.">
                                        <option value="">[Pilih Supervisor]</option>
                                        @foreach($karyawans as $karyawan)
                                        <option value="{{ $karyawan->id }}">({{ $karyawan->nip }}) {{ $karyawan->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3" for="keterangan">Keterangan Peminjaman:</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="keterangan" id="keterangan" placeholder="Tulis Keterangan" required></textarea>
                                </div>
                            </div>
                            </fieldset>
                        <div class="col-sm-offset-4 col-sm-5">
                            <div class="col-sm-offset-3 col-sm-1">
                                <input class="btn btn-success btn-md" type="submit" name="simpan" value="Simpan">
                            </div>
                        </div>
                    </form><br><br>
                    <legend><h3 style="color: tomato;">Status Peminjaman Share Hosting Anda</h3></legend>
                    <div class="col-sm-12 table-responsive">
                        <table class="table table-bordered table-hover text-center">
                            <thead>
                                <tr>
                                    <th>NIP Supervisor</th>
                                    <th>Nama Supervisor</th>
                                    <th>Tanggal Permintaan</th>
                                    <th>Tanggal Validasi Supervisor</th>
                                    <th>Tanggal Validasi Kajur</th>
                                    <th>Tanggal Akhir Peminjaman</th>
                                    <th>Status</th>
                                    <th>Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($sharehostings as $sharehosting)
                                <tr>
                                    <td>{{ $sharehosting->karyawan->nip }}</td>
                                    <td>{{ $sharehosting->karyawan->nama }}</td>
                                    <td>{{ $sharehosting->tgl_permintaan }}</td>
                                    <td>{{ $sharehosting->tgl_validasi_supervisor }}</td>
                                    <td>{{ $sharehosting->tgl_validasi_kajur }}</td>
                                    <td>{{ $sharehosting->tgl_akhir_peminjaman }}</td>
                                    <td>{{ $sharehosting->status_peminjaman }}</td>
                                    <td>{{ $sharehosting->keterangan }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<hr>
@endsection
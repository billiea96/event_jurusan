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
                    <legend><h3 style="color: tomato;">Validasi Peminjaman Hosting</h3></legend>
                    <div class="col-sm-13 table-responsive">
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
                                    <th>Task</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($sharehostings as $sharehosting)
                                <tr>
                                    <td>{{ $sharehosting->karyawan->nip }}</td>
                                    <td>{{ $sharehosting->karyawan->nama }}</td>
                                    <td>{{ $sharehosting->tgl_permintaan }}</td>
                                    <td>{{ $sharehosting->tgl_validasi_supervisor }}</td>
                                    <td>{{ $sharehosting->tgl_valdasi_kajur }}</td>
                                    <td>{{ $sharehosting->tgl_akhir_peminjaman }}</td>
                                    <td>{{ $sharehosting->status_peminjaman }}</td>
                                    <td>{{ $sharehosting->keterangan }}</td>
                                    <form action="{{ route('share-hosting.update', $sharehosting->id) }}" method="POST">
                                        {{ method_field("PUT") }}
                                        {!! csrf_field() !!}
                                        <input type="hidden" name="jabatan_id" value="{{ Auth::user()->karyawan->jabatan_id }}">
                                        <td><input type="submit" value="Validasi" class="btn btn-info"></td>
                                    </form>
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
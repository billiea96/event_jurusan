@extends('layouts.layouthome')

@section('content')
<!-- Page Header -->
<!-- Set your background image for this header on the line below. -->
<header class="intro-header" style="background-image: url('img/informatika.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="page-heading">
                    <h1>Lab. Keahlian</h1>
                    <hr class="small">
                    <span class="subheading">Daftar Lab. Keahlian di Jurusan Teknik Informatika Universitas Surabaya</span>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="container">
    <div class="row">
        <div class="col-lg-13">
            <div class="container">
                <div class="col-sm-12">
                    <div class="col-sm-12 text-justify">
                        <ol type="1">
                            @foreach($labs as $lab)
                            <li style="font-weight: 800;">&nbsp;&nbsp;{{ $lab->nama }}</li>
                            <p>{{ $lab->deskripsi }}</p>
                            @endforeach
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<hr>
@endsection

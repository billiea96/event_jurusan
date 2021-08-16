@extends('layouts.layouthome')

@section('content')
<header class="intro-header" style="background-image: url('img/berita.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="page-heading">
                    <h1>{{ $post->judul }}</h1>
                    <hr class="small">
                    <span class="subheading">{{ $post->subjek }}</span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-10 col-md-10 col-md-offset-1 text-justify">
            {!! $post->isi !!}
            <p class="post-meta"><span class="fa fa-user"></span> Dipost oleh <a href="#">{{ $post->user->name }}</a> pada {{ date('j F Y, H:i:s', strtotime($post->tgl_posting)) }}</p>
            <hr>
            <div>
                <h2>Tinggalkan Komentar</h2>
            </div>
            @if(Auth::guest())
            <p><a href="{{ url('/login') }}">Login</a> untuk Memberi Komentar</p>
            @else
            <div class="panel-body">
                <form method="post" action="{{ url('komentar') }}">
                    {!! csrf_field() !!}
                    <input type="hidden" name="post_id" value="{{ $post->id }}">
                    <div class="form-group">
                        <textarea required="required" placeholder="Masukkan Komentar Disini" name = "isi" class="form-control"></textarea>
                    </div>
                    <input type="submit" name='post_comment' class="btn btn-success" value = "Post"/>
                </form>
            </div>
            @endif

            <div>
                @if($komentars)
                <ul style="list-style: none; padding: 0">
                    @foreach($komentars as $komentar)
                        <li class="panel-body">
                            <div class="list-group">
                                <div class="list-group-item">
                                    <h3>{{ $komentar->user->name }}</h3>
                                    <p>{{ $komentar->created_at->format('M d,Y \a\t h:i a') }}</p>
                                </div>
                                <div class="list-group-item">
                                    <p>{{ $komentar->isi }}</p>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
                @endif
            </div>
        </div>
    </div>
</div>
<hr>
@endsection
@extends('layouts.layouthome')

@yield('header')

@section('content')
<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-10 col-md-10 col-md-offset-1">
            @foreach($posts as $post)
            <div class="post-preview text-justify">
                <h1 class="post-title">
                    {{ $post->judul }}
                </h1>
                <h4 class="post-subtitle">
                    {{ $post->subjek }}
                </h4>
                {!! $post->isi !!}
                <p class="post-meta"><span class="fa fa-user"></span> Dipost oleh <a href="#">{{ $post->user->name }}</a> pada {{ date('j F Y, H:i:s', strtotime($post->tgl_posting)) }}</p>
            </div>
            <hr>
            @endforeach
            <!-- Pager -->
            <ul class="pager">
                <li class="next">
                    <a href="#">Older Posts &rarr;</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<hr>
@endsection
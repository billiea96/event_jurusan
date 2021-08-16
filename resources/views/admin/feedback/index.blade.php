@extends('layouts.layoutadmin')

@section('content')
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Feedback <small>Pengunjung</small>
        </h1>
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
                            <th>Nama Pengirim</th>
                            <th>Email</th>
                            <th>Subject</th>
                            <th>Feedback</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($feedbacks as $feedback)
                        <tr>
                            <td>{{ $feedback->nama }}</td>
                            <td>{{ $feedback->alamat_email }}</td>
                            <td>{{ $feedback->subject->nama }}</td>
                            <td>{{ $feedback->isi }}</td>
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
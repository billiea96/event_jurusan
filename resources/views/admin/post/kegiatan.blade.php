@extends('layouts.layoutadmin')

@section('content')
<script type="text/javascript" src="{{ asset('js/tinymce/tinymce.min.js') }}"></script>
<script type="text/javascript">
    tinymce.init({
        selector : "textarea",
        plugins : ["advlist autolink lists link image charmap print preview anchor", "searchreplace visualblocks code fullscreen", "insertdatetime media table contextmenu paste jbimages"],
        toolbar : "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image jbimages",
    });
</script>
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Master Post <small>Kegiatan</small>
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

		<form action="{{ url('post') }}" method="POST">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<div class="form-group">
				<strong>Judul: </strong><input required="required" value="{{ old('judul') }}" placeholder="Judul Post" type="text" name = "judul" class="form-control" />
			</div>
			<div class="form-group">
				<strong>Subjek: </strong><input required="required" value="{{ old('subjek') }}" placeholder="Subjek Post" type="text" name = "subjek" class="form-control" />
			</div>
			<div class="form-group">
				<textarea name='isi' class="form-control">{{ old('isi') }}</textarea>
			</div>
            <input type="hidden" name="kategori_id" value="3">
			<input type="submit" name='publish' class="btn btn-success" value = "Publish"/>
		</form>
    </div>
</div>

@endsection
@extends('backend.layouts.layout')

@section('content')
<script src="{{ asset('assets/ck_editor/ckeditor.js') }}"></script>
<script src="{{ asset('assets/ck_editor/js/sample.js') }}"></script>
<link rel="stylesheet" href="{{ asset('assets/ck_editor/css/samples.css') }}">
<div class="right_col" role="main" style="min-height: 3576px;">
  <div class="">
	<div class="clearfix"></div>
	
	<div class="row">
	  <!--<div class="col-md-12 col-xs-12">-->
		<div class="x_panel">
		  <div class="x_title">
			<h2>Artikel</h2>
			<ul class="nav navbar-right panel_toolbox">
			  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
			  </li>
			  <li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
				<ul class="dropdown-menu" role="menu">
				  <li><a href="#">Settings 1</a>
				  </li>
				  <li><a href="#">Settings 2</a>
				  </li>
				</ul>
			  </li>
			  <li><a class="close-link"><i class="fa fa-close"></i></a>
			  </li>
			</ul>
			<div class="clearfix"></div>
		  </div>
		  <div class="x_content">
			<br>
			@if (count($errors) > 0)
				<div class="alert alert-danger">
					<ul>
						@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
			@endif
	
			<form class="form-horizontal form-label-left" method="POST" action="{{ route('store-article') }}" enctype="multipart/form-data">
				{{ csrf_field() }}
			  <div class="form-group">
				<label class="control-label col-md-2 col-sm-3 col-xs-12">Judul Artikel</label>
				<div class="col-md-5 col-sm-9 col-xs-12">
				  <input type="text" class="form-control" value="{{ old('title') }}" name="title" required>
				</div>
			  </div>
			  <div class="form-group">
				<label class="control-label col-md-2 col-sm-3 col-xs-12">Kategori</label>
				<div class="col-md-4 col-sm-9 col-xs-12">
				  <select class="form-control" name="category_id" required>
					<option value="">Choose option</option>
					@foreach($categories as $k => $category)
					<option value="{{ $category->id }}">{{ $category->name }}</option>
					@endforeach
				  </select>
				</div>
			  </div>
			  <div class="form-group">
				<label class="control-label col-md-2 col-sm-3 col-xs-12">Gambar</label>
				<div class="col-md-4 col-sm-9 col-xs-12">
				  <input type="file" class="form-control" value="{{ old('image') }}" name="image" required>
				</div>
			  </div>
			  <div class="form-group">
				<label class="control-label col-md-2 col-sm-3 col-xs-12">Konten Pendek</label>
				<div class="col-sm-10 col-xs-12">
				  <textarea name="short_content" class="form-control" required>{{ old('short_content') }}</textarea>
				</div>
			  </div>
			  <div class="form-group">
				<label class="control-label col-md-2 col-sm-3 col-xs-12">Konten</label>
				<div class="col-sm-10 col-xs-12">
				  <textarea id="editor" name="content" required>{{ old('content') }}</textarea>
				</div>
			  </div>
			  
			  <div class="ln_solid"></div>
			  <div class="form-group">
				<div class="col-md-9 col-sm-10 col-xs-12 col-md-offset-3">
				  <a type="button" class="btn btn-primary" href="{{ route('data-articles') }}">Cancel</a>
				  <button type="reset" class="btn btn-primary">Reset</button>
				  <button type="submit" class="btn btn-success">Submit</button>
				</div>
			  </div>

			</form>
		  </div>
		<!--</div>-->
	  </div>
	
  </div>
</div>

@endsection

@section('script')
<script src="{{ asset('/assets/backend//vendors/validator/validator.js') }}"></script>
<script>
	initSample();
</script>
@endsection
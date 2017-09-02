@extends('backend.layouts.layout')

@section('content')

<div class="right_col" role="main" style="min-height: 3576px;">
  <div class="">
	<div class="clearfix"></div>

	<div class="row">
	  <!--<div class="col-md-12 col-xs-12">-->
		<div class="x_panel">
		  <div class="x_title">
			<h2>Kategori</h2>
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

			<form class="form-horizontal form-label-left" method="POST" action="{{ route('store-admin') }}">
				{{ csrf_field() }}

			  <div class="form-group">
				<label class="control-label col-md-2 col-sm-3 col-xs-12">Nama</label>
				<div class="col-md-5 col-sm-9 col-xs-12">
				  <input type="text" class="form-control" value="{{ old('name') }}" name="name" required>
				</div>
			  </div>
        <div class="form-group">
				<label class="control-label col-md-2 col-sm-3 col-xs-12">Email</label>
				<div class="col-md-5 col-sm-9 col-xs-12">
				  <input type="email" class="form-control" value="{{ old('email') }}" name="name" required>
				</div>
			  </div>
			  <div class="form-group">
				<label class="control-label col-md-2 col-sm-3 col-xs-12">Level</label>
				<div class="col-md-4 col-sm-9 col-xs-12">
				  <select class="form-control" name="level" required>
					<option value="">Choose Status</option>
					<option value="1">Super Admin</option>
					<option value="2">Admin</option>
          <option value="3">Penulis Artikel</option>
				  </select>
				</div>
			  </div>
        <div class="form-group">
				<label class="control-label col-md-2 col-sm-3 col-xs-12">Status</label>
				<div class="col-md-4 col-sm-9 col-xs-12">
				  <select class="form-control" name="status" required>
					<option value="">Choose Status</option>
					<option value="0">Non Active</option>
					<option value="1">Active</option>
				  </select>
				</div>
			  </div>
        <div class="form-group">
				<label class="control-label col-md-2 col-sm-3 col-xs-12">Password</label>
				<div class="col-md-5 col-sm-9 col-xs-12">
				  <input type="password" class="form-control" value="{{ old('password') }}" name="name" required>
				</div>
			  </div>

			  <div class="ln_solid"></div>
			  <div class="form-group">
				<div class="col-md-9 col-sm-10 col-xs-12 col-md-offset-3">
				  <a type="button" class="btn btn-primary" href="{{ route('data-admins') }}">Cancel</a>
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
@endsection
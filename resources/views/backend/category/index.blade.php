

@extends('backend.layouts.dataTables')

@section('content')
<div class="right_col" role="main">
  <div class="">
	<div class="page-title">
	  <div class="title_left">
		<h3>&nbsp;</h3>
	  </div>

	  <div class="title_right hide">
		<div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
		  <div class="input-group">
			<input type="text" class="form-control" placeholder="Search for...">
			<span class="input-group-btn">
			  <button class="btn btn-default" type="button">Go!</button>
			</span>
		  </div>
		</div>
	  </div>
	</div>

	<div class="clearfix"></div>

	<div class="row">
	  
		<div class="x_panel">
			<div class="col-md-1">
			  <a type="button" class="btn btn-primary" href="{{ route('add-category') }}">Tambah Kategori</a>
			</div>
		  <div class="x_title">
			<h2>&nbsp; <small>&nbsp;</small></h2>
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
			<table id="datatable-fixed-header" class="table table-striped table-bordered articles">
			  <thead>
				<tr>
				  <th>ID</th>
				  <th>Kategori</th>
				  <th>Status</th>
				  <th>Tanggal</th>
				  <th>Sub Kategori</th>
				  <th>Seo</th>
				  <th>Action</th>
				</tr>
			  </thead>
			  <tbody>
				@foreach($categories as $k=>$category)
					<tr>
					  <td>{{ $category->id }}</td>
					  <td>{{ $category->name }}</td>
					  <td>
					  	@if($category->published == 1) 
					  		<input type="checkbox" name="published" id="published" value="{{ $category->published }}" checked="true"> publish
					   	@else
					   		<input type="checkbox" name="published" id="published" value="{{ $category->published }}"> Unpublish
					   	@endif </td>
					  <td>{{ $category->created_at }}</td>
					  <td><a href="{{ route('sub-category-per-category', ['id' => $category->id]) }}" class="btn btn-success btn-sm">View Sub Kategori</a></td>
					  <td>
						<a href="{{ route('edit-category-seo', ['slug'=> $category->slug]) }}" type="button" class="btn btn-success btn-sm">Edit SEO</a>
					  </td>
					  <td>
						<a href="{{ route('edit-category', ['id'=> $category->id]) }}" type="button" class="btn btn-success btn-sm">Edit</a>
						<button type="button" class="btn btn-sm btn-warning" onclick="sw_alert({{$category->id}})">Delete</button>
					  </td>
					</tr>
				@endforeach	
			  </tbody>
			</table>
		  </div>
		</div>
		
	</div>
  </div>
</div>

<!-- jQuery -->
<script src="{{ asset('/assets/backend/vendors/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('assets/sw_alert/dist/sweetalert-dev.js') }}"></script>
<link rel="stylesheet" href="{{ asset('assets/sw_alert/dist/sweetalert.css') }}">
<script type="text/javascript">
	$(document).ready(function() {
		$('#published').on('checked', function() {
			alert('ss');
		});
	});

	function sw_alert(id) {
		swal({
		  title: "",//"Apakah anda ingin menghapus data ini?",
		  text: "Apakah anda ingin menghapus data ini?",
		  type: "warning",
		  showCancelButton: true,
		  confirmButtonColor: "#DD6B55",
		  confirmButtonText: "Yes",
		  cancelButtonText: "No",
		  closeOnConfirm: false,
		  closeOnCancel: false
		},
		function(isConfirm){
		  if (isConfirm) {  
			window.location = 'category/'+id+'/delete';
		  } else {
			swal("Cancelled", "", "error");
		  }
		});
	}

</script>
@endsection
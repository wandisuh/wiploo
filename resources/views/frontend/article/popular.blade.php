@extends('frontend.layouts.layout')

@section('content')
<section id="blog-index" class="vertical-padding">
	<div class="container">
		<div class="row">
			<div class="col-md-9 cl-sm-9">
				<div class="col-md-12">
					<div class="section-title-container">
						<h4 class="section-title header-font">Artikel Populer</h4>
						<hr class="red-line-bg margin-left-22">
					</div>
				</div>
				<div id="blog-index-container">
					<div class="col-md-6 col-sm-6">
						<div class="news-container">
							<div class="news-image">
								<img src="{{ asset('assets/assets/images/dummy.jpg') }}" class="img-responsive width-100" alt="dummy news image">
							</div>
							<p class="news-date"> Date, May 06th 2017</p>
							<h3 class="news-title"><a href="single.php"> Dummy news title goes here </a></h3>
							<p class="news excerpt">Lorem ipsum dolor sit amet, dummy content will goes here, just read it and dont comment anything, it was just dummy</p>
						</div>
					</div>
					<div class="col-md-6 col-sm-6">
						<div class="news-container">
							<div class="news-image">
								<img src="{{ asset('assets/assets/images/dummy.jpg') }}" class="img-responsive width-100" alt="dummy news image">
							</div>
							<p class="news-date"> Date, May 06th 2017</p>
							<h3 class="news-title"><a href="#"> Dummy news title goes here </a></h3>
							<p class="news excerpt">Lorem ipsum dolor sit amet, dummy content will goes here, just read it and dont comment anything, it was just dummy</p>
						</div>
					</div>
					<div class="col-md-6 col-sm-6">
						<div class="news-container">
							<div class="news-image">
								<img src="{{ asset('assets/assets/images/dummy.jpg') }}" class="img-responsive width-100" alt="dummy news image">
							</div>
							<p class="news-date"> Date, May 06th 2017</p>
							<h3 class="news-title"><a href="#"> Dummy news title goes here </a></h3>
							<p class="news excerpt">Lorem ipsum dolor sit amet, dummy content will goes here, just read it and dont comment anything, it was just dummy</p>
						</div>
					</div>
					<div class="col-md-6 col-sm-6">
						<div class="news-container">
							<div class="news-image">
								<img src="{{ asset('assets/assets/images/dummy.jpg') }}" class="img-responsive width-100" alt="dummy news image">
							</div>
							<p class="news-date"> Date, May 06th 2017</p>
							<h3 class="news-title"><a href="#"> Dummy news title goes here </a></h3>
							<p class="news excerpt">Lorem ipsum dolor sit amet, dummy content will goes here, just read it and dont comment anything, it was just dummy</p>
						</div>
					</div>
				</div>
				<div class="col-md-12">
					<div class="text-center">
						<ul class="pagination">
							<li><a href="#"><<</a></li>
							<li><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">>></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-3">
				<div class="right-sidebar-container">
					<div class="section-title-container">
						<h4 class="section-title header-font">Featured</h4>
						<hr class="red-line-bg margin-left-60">
					</div>
				</div>

        <!--loop start here-->
				<div class="news-container-sidebar">
					<div class="row">
						<div class="col-md-4">
							<div class="news-image">
								<img src="{{ asset('assets/assets/images/dummy.jpg') }}" class="img-responsive width-100" alt="dummy news image">
							</div>
						</div>
						<div class="col-md-8">
							<p class="news-date"> Date, May 06th 2017</p>
							<h3 class="news-title"><a href="#"> Dummy news title goes here </a></h3>

						</div>
					</div>
				</div>
				<!--end-->
        <!--loop start here-->
				<div class="news-container-sidebar">
					<div class="row">
						<div class="col-md-4">
							<div class="news-image">
								<img src="{{ asset('assets/assets/images/dummy.jpg') }}" class="img-responsive width-100" alt="dummy news image">
							</div>
						</div>
						<div class="col-md-8">
							<p class="news-date"> Date, May 06th 2017</p>
							<h3 class="news-title"><a href="#"> Dummy news title goes here </a></h3>

						</div>
					</div>
				</div>
				<!--end-->
        <!--loop start here-->
				<div class="news-container-sidebar">
					<div class="row">
						<div class="col-md-4">
							<div class="news-image">
								<img src="{{ asset('assets/assets/images/dummy.jpg') }}" class="img-responsive width-100" alt="dummy news image">
							</div>
						</div>
						<div class="col-md-8">
							<p class="news-date"> Date, May 06th 2017</p>
							<h3 class="news-title"><a href="#"> Dummy news title goes here </a></h3>

						</div>
					</div>
				</div>
				<!--end-->
        <!--loop start here-->
				<div class="news-container-sidebar">
					<div class="row">
						<div class="col-md-4">
							<div class="news-image">
								<img src="{{ asset('assets/assets/images/dummy.jpg') }}" class="img-responsive width-100" alt="dummy news image">
							</div>
						</div>
						<div class="col-md-8">
							<p class="news-date"> Date, May 06th 2017</p>
							<h3 class="news-title"><a href="#"> Dummy news title goes here </a></h3>

						</div>
					</div>
				</div>
				<!--end-->
        <!--loop start here-->
				<div class="news-container-sidebar">
					<div class="row">
						<div class="col-md-4">
							<div class="news-image">
								<img src="{{ asset('assets/assets/images/dummy.jpg') }}" class="img-responsive width-100" alt="dummy news image">
							</div>
						</div>
						<div class="col-md-8">
							<p class="news-date"> Date, May 06th 2017</p>
							<h3 class="news-title"><a href="#"> Dummy news title goes here </a></h3>

						</div>
					</div>
				</div>
				<!--end-->
        <!--loop start here-->
				<div class="news-container-sidebar">
					<div class="row">
						<div class="col-md-4">
							<div class="news-image">
								<img src="{{ asset('assets/assets/images/dummy.jpg') }}" class="img-responsive width-100" alt="dummy news image">
							</div>
						</div>
						<div class="col-md-8">
							<p class="news-date"> Date, May 06th 2017</p>
							<h3 class="news-title"><a href="#"> Dummy news title goes here </a></h3>

						</div>
					</div>
				</div>
				<!--end-->

			</div>
		</div>
	</div>
</section>
@endsection

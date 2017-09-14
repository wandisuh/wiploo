@extends('frontend.layouts.layout')

@section('content')
<section id="single-article" class="vertical-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-9 cl-sm-9">
            <div class="single-article-container">
            <h1 class="news-title header-font">{{ $article->title }}</h1>
            <p class="news-date"> Tanggal, {{ $article->created_at }}</p>
            <p class="news-category">Kategori : <a href="#"> {{ $article->categories->name }}</a></p>
            <div class="clearfix"></div>

            <hr/>

            <div class="news-image">
            <img src="{{ asset('upload/img_artikel/'.$article->image) }}" class="img-responsive" alt="{{ $article->title }}">
            </div>
            <div class="news-full-content">
              @php echo $article->content @endphp
            </div>
            <!--Share Button Wudget Will Goes Here-->
            <hr/>
            <!--Credits Section-->
            <p><strong>Share :</strong> Facebook | Twitter | Google+</p>
            <p><strong>Author :</strong>&nbsp; {{ $article->author }}</p>

            </div>
            </div>
            <div class="col-md-3 col-sm-3">
                <div class="right-sidebar-container">
                    <div class="section-title-container">
                        <h4 class="section-title header-font">Popular Post</h4>
                        <hr class="red-line-bg margin-left-60">
                    </div>
                </div>
                <!-- Start Loop -->
                @foreach($popular as $key=>$item)
                <div class="news-container-sidebar">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="news-image">
                                <img src="{{ asset('upload/img_artikel/thumb_'.$item->image)}}" class="img-responsive width-100" alt="{{ $item->title }}">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <p class="news-date"> {{ $item->created_at }}</p>
                            <h3 class="news-title"><a href="#"> {{ $item->title }} </a></h3>
                        </div>
                    </div>
                </div>
                @endforeach
                <!-- end loop -->
            </div>
        </div>
    </div>
</section>
<!--Vertical banner ads-->
<div class="container">
    <div class="text-center">
        <div class="ads-banner-container width-100 ">
            <a href="#"><img src="{{ asset('assets/assets/images/horizontal-ads.jpg') }}" class="text-center" /></a>
        </div>
    </div>
</div>
<!--
==================================================
Related posts Section Start
================================================== -->
<section id="related-post-container" class="vertical-padding" >
<div class="container">
<div class="col-md-12 vertical-padding">
<div class="section-title-container">
<h4 class="center-section-title header-font">Related Post</h4>
<hr class="center-red-line-bg">
</div>
</div>
<div class="row">
  @foreach($related as $key=>$item)
	<div class="col-md-3 col-sm-3">
		<div class="news-container">
			<div class="news-image">
				<img src="{{ asset('upload/img_artikel/thumb_'.$item->image) }}" class="img-responsive width-100" alt="{{ $item->title }}">
			</div>
			<p class="news-date"> tanggal, {{ $item->created_at }}</p>
			<h3 class="news-title"><a href="single.php"> {{ $item->title }} </a></h3>

		</div>
	</div>
  @endforeach
</div>
</div>
</section>


@endsection

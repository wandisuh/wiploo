@extends('frontend.layouts.layout')

@section('content')
<!--  slide banner -->
<section id="main-slider-containers">
  <div class="container">
    <div class="top-banner vertical-padding">
      @foreach($banners[1] as $key=>$v)
      <div class="col-md-8 col-sm-8 no-padding">
        <div class="main-sliders">
          <div class="main-slider-container">
            <div class="main-slider-image">
              <!-- <img src="{{ asset('assets/frontend/assets/images/newslide.jpg')}}" class="width-100"> -->
              <img src="{{ asset('upload/img_artikel/'.$v->image)}}" class="width-100"  style="height: 390px;">
            </div>
            <div class="slider-title-container">
                  <div class="slider-content">
                    <p class="slider-date">{{ $v->created_at }}</p>
                    <a href="{{ route('article-show',['slug'=>$v->slug]) }}"> <h2 class="slider-title">{{ $v->title }}</h2></a>
                  </div>

            </div>
          </div>
        </div>
      </div>
      @endforeach
      <div class="col-md-4 col-sm-4 no-padding">
        @foreach($banners[0] as $k=>$v)
        <div class="main-sliders side-banner">
          <div class="main-slider-container">
            <div class="main-slider-image">
              <!-- <img src="{{ asset('assets/frontend/assets/images/sidebanner.jpg')}}" class="width-100"> -->
              <img src="{{ asset('upload/img_artikel/thumb_'.$v->image)}}" class="width-100" style="height: 195px;">
            </div>
            <div class="slider-title-container">

                  <div class="slider-content">
                    <p class="slider-date">{{ $v->created_at }}</p>
                    <a href="{{ route('article-show',['slug'=>$v->slug]) }}"> <h2 class="slider-title">{{ $v->title }}</h2></a>
                  </div>

            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</section>

<!--
==================================================
LAtest News Section Start
================================================== -->
<section id="main-content-containers" class="vertical-padding">
  <div class="container">
    <div class="row">
      <div class="col-md-9 col-sm-9">

      <div class="row">
        <div class="col-md-12">
          <div class="section-title-container">
            <h4 class="section-title header-font">Latest</h4>
            <hr class="red-line-bg margin-left-10">
          </div>
        </div>
      </div>

      <div class="row">
        @foreach($articles as $key=>$artikel)
        <div class="col-md-6 col-sm-6">
          <div class="news-container">
            <div class="news-image">
              <img src="{{ asset('upload/img_artikel/x_'.$artikel->image)}}" class="img-responsive width-100" alt="dummy news image">
            </div>
            <p class="news-date"> {{ $artikel->created_at }}</p>
            <h3 class="news-title"><a href="{{ route('article-show', ['slug'=>$artikel->slug]) }}"> {{ $artikel->title }} </a></h3>
            <p class="news excerpt">{{ $artikel->short_content }}</p>
          </div>
        </div>
        @endforeach
      </div>

      </div>
      <div class="col-md-3 col-sm-3">
        <div class="right-sidebar-container">
          <div class="section-title-container">
            <h4 class="section-title header-font">Popular Post</h4>
            <hr class="red-line-bg margin-left-60">
          </div>
        </div>
        <!--loop start here-->
          @foreach($popular as $key=>$item)
          <div class="news-container-sidebar">
            <div class="row">
              <div class="col-md-4">
                <div class="news-image">
                  <img src="{{ asset('upload/img_artikel/thumb_'.$item->image)}}" class="img-responsive width-100" alt="dummy news image">
                </div>
              </div>
              <div class="col-md-8">
                <p class="news-date"> Tanggal, {{ $item->created_at }}</p>
                <h3 class="news-title"><a href="#"> {{ $item->title }} </a></h3>

              </div>
            </div>
          </div>
          @endforeach
          <!--end-->

        <div class="ads-banner-container width-100 vertical-padding">
          <a href="#"><img src="{{ asset('assets/frontend/assets/images/square-ads.jpg')}}" class="width-100" /></a>
        </div>
      </div>
    </div>
  </div>
</section>

<!--Vertical banner ads-->
<div class="container">
  <div class="text-center">
    <div class="ads-banner-container width-100 ">
      <a href="#"><img src="{{ asset('assets/frontend/assets/images/horizontal-ads.jpg')}}" class="text-center" /></a>
    </div>
  </div>
</div>


<!--
==================================================
 Video and featured Section Start
================================================== -->
 <!-- /#feature & Video -->
<section id="video-featured-container" class="vertical-padding">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6">

      <div class="row">
          <div class="col-md-12">
            <div class="section-title-container">
              <h4 class="center-section-title header-font">Video</h4>
              <hr class="center-red-line-bg">
            </div>
          </div>
        <div class="video-container vertical-padding">
          <div class="col-md-12">
            <div class="video-content width-100">
              <!--video code goes here-->
                <img src="{{ asset('assets/frontend/assets/images/video-dummy.jpg')}}" class="width-100">
              <!--end-->
              <div class="video-title-container">
                <p class="news-date"> Date, May 06th 2017</p>
                <h3 class="news-title font-size-16"><a href="#"> Dummy video title goes here </a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="video-content width-100">
              <!--video code goes here-->
                <img src="{{ asset('assets/frontend/assets/images/video-dummy.jpg')}}" class="width-100">
              <!--end-->
              <div class="video-title-container">
                <p class="news-date"> Date, May 06th 2017</p>
                <h3 class="news-title font-size-16"><a href="#"> Dummy video title goes here </a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="video-content width-100">
              <!--video code goes here-->
                <img src="{{ asset('assets/frontend/assets/images/video-dummy.jpg')}}" class="width-100">
              <!--end-->

              <div class="video-title-container">
                <p class="news-date"> Date, May 06th 2017</p>
                <h3 class="news-title font-size-16"><a href="#"> Dummy video title goes here </a></h3>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
      <div class="col-md-6 col-sm-6">

      <div class="row">
        <div class="col-md-12">
          <div class="section-title-container">
            <h4 class="center-section-title header-font">Featured</h4>
            <hr class="center-red-line-bg">
          </div>
        </div>

        <div class="featured-news-container vertical-padding">
          <!--loop start here-->
          @foreach($featured as $key=>$feature)
          <div class="news-container">
            <div class="row">
              <div class="col-md-4">
                <div class="news-image">
                  <img src="{{ asset('upload/img_artikel/x_'.$feature->image)}}" class="img-responsive width-100" alt="dummy news image">
                </div>
              </div>
              <div class="col-md-8">
                <p class="news-date"> {{ $feature->created_at }}</p>
                <h3 class="news-title font-size-16"><a href="#"> {{ $feature->title }} </a></h3>
                <p class="news excerpt">{{ $feature->short_content }}</p>
              </div>
            </div>
          </div>
          @endforeach
          <!--end-->
        </div>
      </div>

      </div>
    </div>
  </div>
</section>

@endsection

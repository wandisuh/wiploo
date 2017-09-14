@extends('frontend.layouts.layout')

@section('content')
<section id="static-banner-container">
	<img src="{{ asset('assets/assets/images/aboutbanner.jpg') }}" class="width-100" />
</section>

<section id="one-column-template" class="vertical-padding">
   <div class="container">
        <div class="col-md-12 vertical-padding">
            <div class="section-title-container">
                <h4 class="center-section-title header-font">Karir</h4>
                <hr class="center-red-line-bg">
            </div>
        </div>
        <div class="col-md-12">
            <p>Lorem ipsum, Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        </div>

   </div>
</section>
@endsection

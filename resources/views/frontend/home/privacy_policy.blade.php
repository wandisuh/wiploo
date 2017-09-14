@extends('frontend.layouts.layout')

@section('content')
<section id="static-banner-container">
	<img src="{{ asset('assets/assets/images/aboutbanner.jpg') }}" class="width-100" />
</section>

<section id="one-column-template" class="vertical-padding">
   <div class="container">
        <div class="col-md-12 vertical-padding">
            <div class="section-title-container">
                <h4 class="center-section-title header-font">Kebijakan Privasi</h4>
                <hr class="center-red-line-bg">
            </div>
        </div>
        <div class="col-md-12">
            <p>Pertanyaan dari kamu sangat berarti bagi kami, hal yang mengenai dengan ketentuan pengguna dapat langsung dikirimkan ke abdul@wiploo.com,
							dan kami akan merespon kamu dengan secepatnya.</p>
							<p>Privasi pengunjung di wiploo.com merupakan tugas kami untuk menjaga keamananya.</p>
        </div>

   </div>
</section>
@endsection

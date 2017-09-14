@extends('frontend.layouts.layout')

@section('content')
<section id="static-banner-container">
	<img src="{{ asset('assets/assets/images/aboutbanner.jpg') }}" class="width-100" />
</section>

<section id="one-column-template" class="vertical-padding">
   <div class="container">
        <div class="col-md-12 vertical-padding">
            <div class="section-title-container">
                <h4 class="center-section-title header-font">FAQ</h4>
                <hr class="center-red-line-bg">
            </div>
        </div>
        <div class="col-md-12">
            <p>Apa itu wiploo network ? Jika sekarang anda memiliki akun di beberapa jejaring sosial besar di internet,
							seperti itulah nanti tujuan kami yaitu membangun jejaring sosial khas kaum millenial Indonesia.
							Yang nantinya setiap orang dapat saling berinteraksi dengan pengguna lainnya dalam satu platform,
							chatting atau comment di halaman profile. </p>

        </div>

   </div>
</section>
@endsection

@extends('frontend.layouts.layout')

@section('content')
<section id="static-banner-container">
	<img src="{{ asset('assets/assets/images/aboutbanner.jpg') }}" class="width-100" />
</section>

<section id="one-column-template" class="vertical-padding">
   <div class="container">
        <div class="col-md-12 vertical-padding">
            <div class="section-title-container">
                <h4 class="center-section-title header-font">Tentang Kami</h4>
                <hr class="center-red-line-bg">
            </div>
        </div>
        <div class="col-md-12">
            <p>
							Wiploo adalah sebuah startup media lifestyle dan hiburan multi platform untuk kaum netizen di Indonesia.
							Kami menyediakan konten yang bersifat khusus dimana visitor merasa nyaman ketika membaca tulisan dengan konten yang disajikan secara interaktif.
							Visi kami adalah menjadi sebuah wadah dimana nantinya Wiploo menjadi jejaring sosial sendiri di Indonesia.
						</p>
						<p>&nbsp;</p>
						<p>Hubungi Kami di: <br/>
							Telp: 0819-3358-0078<br/>
							Email: info@wiploo.com<br/>
						</p>
        </div>
        <div class="col-md-12 vertical-padding">
            <div class="section-title-container ">
                <h4 class="center-section-title header-font">Get In Touch</h4>
                <hr class="center-red-line-bg">
            </div>
        </div>
         <div class="col-md-6 col-sm-6">
            <p>If you have something to share with us, dont forget to leave your words by filling our contact form bellow, we'll make an appointment and meet so soon.</p>
            <form id="contact-form">
                <div class="form-wrapper vertical-padding">
                    <input type="text" name="name" placeholder="Nama lengkap*" class="width-100 " required>
                </div>
                <div class="form-wrapper">
                    <input type="email" name="name" placeholder="Email*" class="width-100" required>
                </div>
                <div class="form-wrapper vertical-padding">
                    <textarea rows="6" class="width-100" placeholder="  Isi pesan*" required></textarea>
                </div>
								<div class="form-wrapper">
                    <input type="submit" value="Kirim Pesan" class="">
                </div>
            </form>
        </div>
        <div class="col-md-6 col-sm-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.704936102214!2d106.89296721477686!3d-6.302445895438659!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ed50d076a261%3A0x73127b9ecf2da0c!2sTaman+Mini+Indonesia+Indah!5e0!3m2!1sid!2sid!4v1497257842461" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>

   </div>
</section>
@endsection

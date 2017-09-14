<!--
==================================================
Call To Action Section Start
================================================== -->
<section id="cta-container" class="vertical-padding dark-green-bg">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <p class="cta-headline text-center">Yuk langganan berita terbaru dari kami!</p>
      </div>
      <form id="cta-form" action="{{ route('subscribe-post') }}" method="post">
        {{ csrf_field() }}
        <div class="col-md-5 col-sm-5">
          <input type="name" name="fullName" placeholder="Your Name" value="{{ old('fullName') }}" required>
        </div>
        <div class="col-md-5 col-sm-5">
          <input type="email" name="email" placeholder="Your Email" value="{{ old('email') }}" required>
        </div>
        <div class="col-md-2 col-sm-2">
          <input type="submit" class="red-btn" />
        </div>
      </form>
    </div>
  </div>
</section>

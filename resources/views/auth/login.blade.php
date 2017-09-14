@extends('frontend.layouts.login')

@section('content')
<section id="section-wrapper">
      <!--
    ==================================================
    Header Section Start
    ================================================== -->
     <header id="logo-section">
        <div class="container">
            <div class="col-md-12 text-center vertical-padding">
                <img src="{{ asset('assets/member/assets/images/logo.png') }}" class="text-center" height="60px;">
            </div>
            <p class="header-font text-center" style="color: #fff;">Member Area</p>
        </div>
    </header>

       <div id="login-form-wrapper" class="vertical-padding">
           <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-md-offset-2 col-sm-offset-2">
                        <div class="login-section light-blue-bg">
                            <p class="header-font"><bold>Login</bold></p>
                            <hr />
                            <p>Already have an account? Login here</p>

                            <form id="login" class="form-wrapper" method="post" action="{{ route('login') }}">
                                {{ csrf_field() }}
                                <p><input type="email" placeholder="Your email" name="email" /></p>
                                <p><input type="password" name="password" placeholder="Password"></p>
                                <p><button name="submit" type="submit">Login</button></p>
                            </form>
                        </div>
                    </div>
                     <div class="col-md-4 col-sm-4">
                        <div class="signup-section light-blue-bg">
                            <p class="header-font"><bold>Signup</bold></p>
                            <hr />
                            <p>Don't have an account yet? Register Here</p>

                            <form id="signup" class="form-wrapper" method="post" action="{{ route('register') }}">
                                {{ csrf_field() }}
                                <p><input type="text" placeholder="Your Name" name="name" /></p>
                                <p><input type="email" placeholder="Your email" name="email" /></p>
                                <p><input type="phone" placeholder="Your phone number" name="handphone" /></p>
                                <p><input type="password" name="password" placeholder="Password"></p>
                                <p><input type="password" name="password_confirmation" placeholder="Confirm password"></p>
                                <p><button name="submit" type="submit">Register</button></p>
                            </form>
                        </div>
                    </div>
                </div>
           </div>
       </div>

</section>
@endsection

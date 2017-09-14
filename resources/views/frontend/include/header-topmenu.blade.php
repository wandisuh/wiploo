<header id="top-bar" class="">
    <div class="container top-bar-container">
        <div class="navbar-header">
            <!-- responsive nav button -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <!-- /responsive nav button -->

            <!-- logo -->
            <div class="navbar-brand">
                <a class="{{ \Request::is('/') ? 'red-color' : '' }}" href="{{ route('home') }}" >
                    <img src="{{ asset('assets/frontend/assets/images/logo.png')}}" alt="">
                </a>
            </div>
            <!-- /logo -->
        </div>
        <!-- main menu -->
        <nav class="collapse navbar-collapse navbar-left" role="navigation">
            <div class="main-menu">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="{{ \Request::is('/') ? 'red-color' : '' }}" href="{{ route('home') }}" >Home</a>
                    </li>
                    <li class="dropdown mega-dropdown {{ \Request::is('artikel/?') ? 'red-color' : '' }}">
                        <a href="{{ route('articles-list') }}" class="dropdown-toggle" data-toggle="dropdown">Article <span class="caret"></span></a>
                         <div class="dropdown-menu">
                            <ul>
                                @foreach($categories as $category)
                                    <li><a href="{{ route('articles-category',['slug'=>$category->slug]) }}">{{ $category->name }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a href="{{ route('videos-list') }}" class="dropdown-toggle" data-toggle="dropdown">Video <span class="caret"></span></a>
                        <div class="dropdown-menu">
                            <ul>
                              @foreach($categories as $category)
                                  <li><a href="{{ route('articles-category',['slug'=>$category->slug]) }}">{{ $category->name }}</a></li>
                              @endforeach
                            </ul>
                        </div>
                    </li>
                    <li><a class="{{ \Request::is('artikel/popular') ? 'red-color' : '' }}" href="{{ route('articles-popular') }}">Popular</a></li>
                    <li><a class="{{ \Request::is('komunitas') ? 'red-color' : '' }}" href="{{ route('community') }}">Community</a></li>
                    <li class="padding-left-20"><a href="{{ route('member-dashboard') }}" class="blue-bg round-btn btn">Tulis Artikel</a></li>
                    <li id="search-btn"><a class="ion-ios-search" href="#"></a></li>
                    <li id="link-form-login" class="dropdown"><a class="ion-android-person" href="javascript:void(0);"></a>
                        @if(Auth::user())
                        <div class="dropdown-menu" style="text-align: -webkit-right; background:aqua !important;">
                          <ul>
                            <li><form id="logout-form" action="{{ route('logout') }}" method="POST">
                                {{ csrf_field() }}Logout</form>
                          </li>
                          </ul>
                        </div>
                        @else
                        <div class="dropdown-menu">
                            <form id="login" class="form-wrapper-index" method="post" action="{{ route('login') }}">
                                {{ csrf_field() }}
                                <p><input type="email" placeholder="Your email" name="email-login" /></p>
                                <p><input type="password" name="password-login" placeholder="Password"></p>
                                <p><button name="submit">Login</button></p>
                                <hr/>
                                <p>Not registered yet?<a class="red-color" href="{{ url('/register') }}"> Signup Here</a></p>
                            </form>
                        </div>
                        @endif
                    </li>
                </ul>
            </div>
        </nav>
        <!-- /main nav -->
        <!--search bar-->
        <div id="top-search-bar" class="display-none">
            <form action="{{ route('search-article') }}" method="post">
                {{ csrf_field() }}
                <div class="input-group width-100">
                    <input type="text" class="form-control" name="keywords" placeholder="Search" aria-describedby="basic-addon2">
                    <span class="input-group-btn">
                        <button class="btn btn-default ion-ios-search" type="submit"></button>
                    </span>
                </div>
            </form>
        </div>
    </div>
</header>

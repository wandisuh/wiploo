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
                <a href="index.php" >
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
                        <a href="index.php" >Home</a>
                    </li>
                    <li class="dropdown mega-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Article <span class="caret"></span></a>
                         <div class="dropdown-menu">
                            <ul>
                                <li><a href="blog-index.php">Blog index</a></li>

                            </ul>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Video <span class="caret"></span></a>
                        <div class="dropdown-menu">
                            <ul>
                                <li><a href="blog-video.php">Video Index</a></li>

                            </ul>
                        </div>
                    </li>
                    <li><a class="red-color" href="#">Popular</a></li>
                    <li><a href="#">Community</a></li>
                    <li class="padding-left-20"><a href="admin" class="blue-bg round-btn btn">Tulis Artikel</a></li>
                    <li id="search-btn"><a class="ion-ios-search" href="#"></a></li>
                    <li id="link-form-login" class="dropdown"><a class="ion-android-person" href="#"></a>
                        <div class="dropdown-menu">
                            <form id="login" class="form-wrapper-index">
                                <p><input type="email" placeholder="Your email" name="email-login" /></p>
                                <p><input type="password" name="password-login" placeholder="Password"></p>
                                <p><button name="submit">Login</button></p>
                                <hr/>
                                <p>Not registered yet?<a class="red-color" href="admin/index.php"> Signup Here</a></p>
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- /main nav -->
        <!--search bar-->
         <div id="top-search-bar" class="display-none">
            <div class="input-group width-100">
              <input type="text" class="form-control" placeholder="Search" aria-describedby="basic-addon2">
              <span class="input-group-btn">
                <button class="btn btn-default ion-ios-search" type="button"></button>
              </span>
            </div>
        </div>
    </div>
</header>

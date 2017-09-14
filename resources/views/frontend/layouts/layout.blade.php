<!DOCTYPE html>
<html class="no-js">
    <head>
        @include('frontend.include.head')
    </head>
    <body>
        <!--
        ==================================================
        Header Section Start
        ================================================== -->

        @include('frontend.include.header-topmenu')

        @include('frontend.include.breaking-news')

        @yield('content')

		    @include('frontend.include.subscribe')

        @include('frontend.include.footer')

	</body>
</html>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">

<head>
    <meta charset="utf-8">
    <title>@yield('title') </title>

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Themesflat Modave, Multipurpose eCommerce Template">

    <!-- Head link Start -->

    @include('front.includes.head-link')
    <!-- Head link End -->

</head>

<body class="preload-wrapper">


    @include('front.includes.scoller')


    <div id="wrapper">

        <!-- Header -->

        @include('front.includes.header')

     
        @yield('content')

  
    </div>

      <!-- Footer Section Start -->
      @include('front.includes.footer')

<!-- Footer Sectuin End -->


    <!-- Footer Section Start -->
    @include('front.includes.footer-link')

    <!-- Footer Sectuin End -->
</body>

</html>
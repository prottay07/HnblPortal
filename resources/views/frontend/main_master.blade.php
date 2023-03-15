<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>HNBL Portal</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
        <!-- Place favicon.ico in the root directory -->

        

		<!-- CSS here -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
        <link rel="stylesheet" href="{{ asset ('frontend/assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{ asset ('frontend/assets/css/animate.min.css')}}">
        <link rel="stylesheet" href="{{ asset ('frontend/assets/css/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{ asset ('frontend/assets/css/fontawesome-all.min.css')}}">
        <link rel="stylesheet" href="{{ asset ('frontend/assets/css/slick.css')}}">
        <link rel="stylesheet" href="{{ asset ('frontend/assets/css/default.css')}}">
        <link rel="stylesheet" href="{{ asset ('frontend/assets/css/style.css')}}">
        <link rel="stylesheet" href="{{ asset ('frontend/assets/css/responsive.css')}}">
        
    </head>
    <body>

        <!-- preloader-start -->
        <div id="preloader">
            <div class="rasalina-spin-box"></div>
        </div>
        <!-- preloader-end -->

		<!-- Scroll-top -->
        <button class="scroll-top scroll-to-target" data-target="html">
            <i class="fas fa-angle-up"></i>
        </button>
        <!-- Scroll-top-end-->

        <!-- header-area -->
        @include('frontend.body.header')
        <!-- header-area-end -->

        <!-- main-area -->
        <main>

        @yield('main')
        
        </main>
        <!-- main-area-end -->



        <!-- Footer-area -->
        @include('frontend.body.footer')
        <!-- Footer-area-end -->




		<!-- JS here -->

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6"> </script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>  
  <script src="{{ asset ('frontend/assets/js/vendor/jquery-3.6.0.min.js')}}"></script>
        <script src="{{ asset ('frontend/assets/js/bootstrap.min.js')}}"></script>
        <script src="{{ asset ('frontend/assets/js/isotope.pkgd.min.js')}}"></script>
        <script src="{{ asset ('frontend/assets/js/imagesloaded.pkgd.min.js')}}"></script>
        <script src="{{ asset ('frontend/assets/js/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{ asset ('frontend/assets/js/element-in-view.js')}}"></script>
        <script src="{{ asset ('frontend/assets/js/slick.min.js')}}"></script>
        <script src="{{ asset ('frontend/assets/js/ajax-form.js')}}"></script>
        <script src="{{ asset ('frontend/assets/js/wow.min.js')}}"></script>
        <script src="{{ asset ('frontend/assets/js/plugins.js')}}"></script>
        <script src="{{ asset ('frontend/assets/js/main.js')}}"></script>
       
  
  
    </body>
</html>

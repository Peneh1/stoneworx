<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with LeadMark landing page.">
    <meta name="author" content="Devcrud">
    <title>{{$page_title}}</title>
    <!-- font icons -->
    <link rel="stylesheet" href="/assets/vendors/themify-icons/css/themify-icons.css">
    <!-- Bootstrap + LeadMark main styles -->
	<link rel="stylesheet" href="/assets/css/leadmark.css">


    <style>
        @font-face {
      font-family: 'raleway_regular';
      src: url('/assets/fonts/Raleway/static/Raleway-Regular.ttf');
    }
    
    @font-face {
      font-family: 'raleway_thin';
      src: url('/assets/fonts/Raleway/static/Raleway-Light.ttf');
    }
    
    @font-face {
      font-family: 'raleway_bold';
      src: url('/assets/fonts/Raleway/static/Raleway-Bold.ttf');
    }
    </style>


</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">

    <!-- page Navigation -->
    <nav class="navbar custom-navbar navbar-expand-md navbar-light fixed-top" data-spy="affix" data-offset-top="10">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="/assets/imgs/logo.png" alt="Stoneworx">
            </a>
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">                     
                    <li class="nav-item">
                        <a class="nav-link" href="/about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/brands">Brands</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="/portfolio">Portfolio</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="/contact">Contact</a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Of Second Navigation -->
     <!-- Page Header -->
  

    @yield('header')
    
<!-- End Of Page Header -->


    
@yield('page_content')
<div class="section with-img" style="padding: 0%">
            <footer class="mt-5 py-4 border-top border-secondary">
                <p class="mb-0 small" style="text-align:center">&copy; <script>document.write(new Date().getFullYear())</script>, StoneWorx Corp | All rights reserved </p>     
            </footer>
</div>
            <!-- End of Page Footer -->  
        
	
	<!-- core  -->
    <script src="/assets/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="/assets/vendors/bootstrap/bootstrap.bundle.js"></script>

    <!-- bootstrap 3 affix -->
	<script src="/assets/vendors/bootstrap/bootstrap.affix.js"></script>

    <!-- Isotope -->
    <script src="/assets/vendors/isotope/isotope.pkgd.js"></script>

    <!-- LeadMark js -->
    <script src="/assets/js/leadmark.js"></script>

</body>
</html>

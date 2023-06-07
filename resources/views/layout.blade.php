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
                <img src="/assets/imgs/logo3.png" alt="Stoneworx">
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
<div class="section with-img" style="padding: 0%; background: #322f30;
">
    {{-- Social media--}}
    <style>
@import url(https://fonts.googleapis.com/css?family=Lato);
@import url(https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css);

.footer-social-icons a {
    text-decoration: none;
    color: #fff;
}
.footer-social-icons p > a:hover{
    color: #d9d9d9;
    text-decoration:  underline;
}
.footer-social-icons h1,
.footer-social-icons h2,
.footer-social-icons h3,
.footer-social-icons h4,
.footer-social-icons h5,
.footer-social-icons h6 {
    margin:  1% 0 1% 0;
}
._12 {
    font-size: 1.2em;
}
._14 {
    font-size: 1.4em;
}
.footer-social-icons ul {
    padding:0;
    list-style: none;
}
.footer-social-icons {
    padding-top: 10px;
    width: 175px;
    display:block;
    margin: 0 auto;
}
.social-icon {
    color: #fff;
}
ul.social-icons {
    margin-top: 10px;
}
.social-icons li {
    vertical-align: top;
    display: inline;
    height: 100px;
}
.social-icons a {
    color: #fff;
    text-decoration: none;
}
.fa-facebook {
    padding:10px 14px;
    -o-transition:.5s;
    -ms-transition:.5s;
    -moz-transition:.5s;
    -webkit-transition:.5s;
    transition: .5s;
    background-color: #322f30;
}
.fa-facebook:hover {
    background-color: #3d5b99;
}
.fa-twitter {
    padding:10px 12px;
    -o-transition:.5s;
    -ms-transition:.5s;
    -moz-transition:.5s;
    -webkit-transition:.5s;
    transition: .5s;
    background-color: #322f30;
}
.fa-twitter:hover {
    background-color: #00aced;
}
.fa-instagram {
    padding:10px 14px;
    -o-transition:.5s;
    -ms-transition:.5s;
    -moz-transition:.5s;
    -webkit-transition:.5s;
    transition: .5s;
    background-color: #322f30;
}
.fa-instagram:hover {
    background-color: #FCAF45;
}
.fa-youtube {
    padding:10px 14px;
    -o-transition:.5s;
    -ms-transition:.5s;
    -moz-transition:.5s;
    -webkit-transition:.5s;
    transition: .5s;
    background-color: #322f30;
}
.fa-youtube:hover {
    background-color: #e64a41;
}
.fa-linkedin {
    padding:10px 14px;
    -o-transition:.5s;
    -ms-transition:.5s;
    -moz-transition:.5s;
    -webkit-transition:.5s;
    transition: .5s;
    background-color: #322f30;
}
.fa-linkedin:hover {
    background-color: #0073a4;
}
.fa-github {
    padding:10px 14px;
    -o-transition:.5s;
    -ms-transition:.5s;
    -moz-transition:.5s;
    -webkit-transition:.5s;
    transition: .5s;
    background-color: #322f30;
}
.fa-github:hover {
    background-color: #5a32a3;
}
        </style>
    <div class="footer-social-icons">
      
        <ul class="social-icons">
            <li><a href="" class="social-icon"> <i class="fa fa-facebook"></i></a></li>
            <li><a href="" class="social-icon"> <i class="fa fa-twitter"></i></a></li>
            <li><a href="" class="social-icon"> <i class="fa fa-instagram"></i></a></li>
            <li><a href="" class="social-icon"> <i class="fa fa-linkedin"></i></a></li>
        </ul>
    </div>
          {{-- End Social media--}}

            <footer class="py-4 border-top border-secondary" >
                <p class="mb-0 small text-white" style="text-align:center">&copy; <script>document.write(new Date().getFullYear())</script>, StoneWorx Corp | All rights reserved </p>     
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

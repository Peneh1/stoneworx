@extends('layout')

@section('header')
<div style="background: url(/assets/imgs/header.jpg) no-repeat center center fixed;   background-size: cover;">
<div style="width:100%; height:7vw; background: rgba(0,0,0,0.7); "></div>
</div>

@endsection

@section('page_content')
<style>
    @font-face {
  font-family: 'raleway_regular';
  src: url('/assets/fonts/Raleway/static/Raleway-Regular.ttf');
}

@font-face {
  font-family: 'raleway_thin';
  src: url('/assets/fonts/Raleway/static/Raleway-Thin.ttf');
}

@font-face {
  font-family: 'raleway_bold';
  src: url('/assets/fonts/Raleway/static/Raleway-Bold.ttf');
}
</style>

<!-- Portfolio Section -->
<section id="portfolio" class="section portfolio-section">
    <div class="container">
        <h6 class="section-title text-center">Our Portfolio</h6>
        <h6 class="section-subtitle mb-5 text-center">New stunning projects for our amazing clients</h6>

 
        <div class="filters">
           <a style="font-family: Raleway_Bold; font-size:24px;" href="#" data-filter=".new " class="active">
                All 
            </a>
            <a style="font-family: Raleway_Bold; font-size:24px;" href="#" data-filter=".commercial">
                Commercial 
            </a>
            <a style="font-family: Raleway_Bold; font-size:24px;" href="#" data-filter=".residential">
                Residential
            </a>
            
        </div>
 
        <div class="portfolio-container"> 
            @foreach ($portfolios as $portfolio)
                
            <div class="col-md-6 col-lg-4 new {{$portfolio['type']}} ">
                <div class="portfolio-item">
                    <img src="{{$portfolio['img_src']}}" class="img-fluid">
                    <div class="content-holder">
                        <a class="img-popup" href="{{$portfolio['img_src']}}"></a>
                        <div class="text-holder">
                          <h5  class="title">{!!$portfolio['title']!!}</h5>
                          <a style="font-family: Raleway_Bold" href="{{$portfolio['link']}}" class="btn btn-primary btn-lg">View Project</a>
                        </div>
                    </div>   
                </div>             
            </div>
            @endforeach
            {{--}}
            <div class="col-md-6 col-lg-4 web new">
                <div class="portfolio-item">
                    <img src="assets/imgs/web-2.jpg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
                    <div class="content-holder">
                        <a class="img-popup" href="assets/imgs/web-2.jpg"></a>
                        <div class="text-holder">
                            <h6 class="title">WEB</h6>
                            <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                        </div>
                    </div> 
                </div>                         
            </div>
            <div class="col-md-6 col-lg-4 advertising new">
                <div class="portfolio-item">
                    <img src="assets/imgs/advertising-2.jpg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">                         
                    <div class="content-holder">
                        <a class="img-popup" href="assets/imgs/advertising-2.jpg"></a>
                        <div class="text-holder">
                            <h6 class="title">ADVERSTISING</h6>
                            <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                        </div>
                    </div>    
                </div>              
            </div> 
            <div class="col-md-6 col-lg-4 web">
                <div class="portfolio-item">
                    <img src="assets/imgs/web-4.jpg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
                    <div class="content-holder">
                        <a class="img-popup" href="assets/imgs/web-4.jpg"></a>
                        <div class="text-holder">
                            <h6 class="title">WEB</h6>
                            <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                        </div>
                    </div>
                </div>                                                     
            </div>

            <div class="col-md-6 col-lg-4 advertising"> 
                <div class="portfolio-item">
                    <img src="assets/imgs/advertising-1.jpg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">                               
                    <div class="content-holder">
                        <a class="img-popup" href="assets/imgs/advertising-1.jpg"></a>
                        <div class="text-holder">
                            <h6 class="title">ADVERSITING</h6>
                            <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                        </div>
                    </div>
                </div>                                                       
            </div> 
            <div class="col-md-6 col-lg-4 web new">
                <div class="portfolio-item">
                    <img src="assets/imgs/web-3.jpg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">  
                   <div class="content-holder">
                        <a class="img-popup" href="assets/imgs/web-3.jpg"></a>
                        <div class="text-holder">
                            <h6 class="title">WEB</h6>
                            <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                        </div>
                    </div>
                </div>                                                     
            </div>
            <div class="col-md-6 col-lg-4 advertising new">
                <div class="portfolio-item">
                    <img src="assets/imgs/advertising-3.jpg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">       
                   <div class="content-holder">
                        <a class="img-popup" href="assets/imgs/advertising-3.jpg"></a>
                        <div class="text-holder">
                            <h6 class="title">ADVERSITING</h6>
                            <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                        </div>
                    </div>
                </div>                                                       
            </div> 
            <div class="col-md-6 col-lg-4 advertising new"> 
                <div class="portfolio-item">
                    <img src="assets/imgs/advertising-4.jpg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">            
                    <div class="content-holder">
                        <a class="img-popup" href="assets/imgs/advertising-4.jpg"></a>
                        <div class="text-holder">
                            <h6 class="title">ADVERTISING</h6>
                            <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                        </div>
                    </div>
                </div>
                        
            </div> 
            <div class="col-md-6 col-lg-4 branding new">
                <div class="portfolio-item">
                    <img src="assets/imgs/branding-1.jpg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">                        
                    <div class="content-holder">
                        <a class="img-popup" href="assets/imgs/branding-1.jpg"></a>
                        <div class="text-holder">
                            <h6 class="title">BRANDING</h6>
                            <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                        </div>
                    </div> 
                </div>
            </div> 
            <div class="col-md-6 col-lg-4 branding">
                <div class="portfolio-item">
                    <img src="assets/imgs/branding-2.jpg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">  
                    <div class="content-holder">
                        <a class="img-popup" href="assets/imgs/branding-2.jpg"></a>
                        <div class="text-holder">
                            <h6 class="title">BRANDING</h6>
                            <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                        </div>
                    </div>
                </div>                                                     
            </div> 
            <div class="col-md-6 col-lg-4 branding new">
                <div class="portfolio-item">
                    <img src="assets/imgs/branding-3.jpg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">   
                    <div class="content-holder">
                        <a class="img-popup" href="assets/imgs/branding-3.jpg"></a>
                        <div class="text-holder">
                            <h6 class="title">BRANDING</h6>
                            <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                        </div>
                    </div>
                </div>                                                    
            </div> 
            <div class="col-md-6 col-lg-4 branding">
                <div class="portfolio-item">
                    <img src="assets/imgs/branding-4.jpg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">                      
                    <div class="content-holder">
                        <a class="img-popup" href="assets/imgs/branding-4.jpg"></a>
                        <div class="text-holder">
                            <h6 class="title">BRANDING</h6>
                            <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                        </div>
                    </div>
                </div>                                                      
            </div> 
            <div class="col-md-6 col-lg-4 branding">
                <div class="portfolio-item">
                    <img src="assets/imgs/branding-5.jpg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">          
                    <div class="content-holder">
                        <a class="img-popup" href="assets/imgs/branding-5.jpg"></a>
                        <div class="text-holder">
                            <h6 class="title">BRANDING</h6>
                            <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                        </div>
                    </div>
                </div>                                                   
            </div>

            {{--}}
        </div>   
    </div>            
</section>
<!-- End of portfolio section -->



@endsection
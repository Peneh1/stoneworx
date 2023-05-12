@extends('layout')

@section('page_content')

<!-- Portfolio Section -->
<section id="portfolio" class="section portfolio-section">
    <div class="container">
        <h6 class="section-title text-center">Our Portfolio</h6>
        <h6 class="section-subtitle mb-5 text-center">New stunning projects for our amazing clients</h6>
{{--}}
 
        <div class="filters">
            <a href="#" data-filter=".new" class="active">
                New
            </a>
            <a href="#" data-filter=".advertising">
                Advertising
            </a>
            <a href="#" data-filter=".branding">
                Branding
            </a>
            <a href="#" data-filter=".web">
                Web
            </a>
        </div>
 {{--}}
        <div class="portfolio-container"> 

            <div class="col-md-6 col-lg-4 web new">
                <div class="portfolio-item">
                    <img src="assets/imgs/web-1.jpg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
                    <div class="content-holder">
                        <a class="img-popup" href="assets/imgs/web-1.jpg"></a>
                        <div class="text-holder">
                            <h6 class="title">WEB</h6>
                            <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                        </div>
                    </div>   
                </div>             
            </div>
            
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
        </div>   
    </div>            
</section>
<!-- End of portfolio section -->



@endsection
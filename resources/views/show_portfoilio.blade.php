@extends('layout')

@section('page_content')

<!-- Portfolio Section -->
<section id="portfolio" class="section portfolio-section">
    <div class="container">
        <h6 class="section-title text-center">{{$portfolio['title']}}</h6>
        <h6 class="section-subtitle mb-5 text-center">New stunning projects for our amazing clients</h6>

        <div class="portfolio-container"> 
           
                
            <div class="col-md-6 col-lg-6 web new">
                <div class="portfolio-item">
                    <img src="{{$portfolio['img_1']}}" class="img-fluid">
                    <div class="content-holder">
                        <a class="img-popup" href="{{$portfolio['img_1']}}"></a>
                        
                    </div>   
                </div>             
            </div>

            <div class="col-md-6 col-lg-6 web new">
                <div class="portfolio-item">
                    <img src="{{$portfolio['img_2']}}" class="img-fluid" >
                    <div class="content-holder">
                        <a class="img-popup" href="{{$portfolio['img_2']}}"></a>
                        
                    </div>   
                </div>             
            </div>
            
        </div>   
    </div>            
</section>
<!-- End of portfolio section -->



@endsection
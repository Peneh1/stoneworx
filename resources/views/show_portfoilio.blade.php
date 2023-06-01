@extends('layout')

@section('page_content')

<!-- Portfolio Section -->
<section id="" class="section portfolio-section">
    
    <div class="container">
        <a href="/portfolio">← Back to Portfolio</a>
        <h6 class="section-title text-center">{!!$portfolio['title']!!}</h6>
        <h6 class="section-subtitle mb-5 text-center">New stunning projects for our amazing clients</h6>

        <div class=""> 
           
                
            <div style="margin: 10px auto;  display:flex">
                <div >
                    <img style="margin: auto" src="{{$portfolio['img_1']}}" class="img-fluid">
                    <div class="content-holder">
                        <a style="margin: auto"  class="img-popup" href="{{$portfolio['img_1']}}"></a>
                        
                    </div>   
                </div>             
            </div>

            <div>
                <div style="margin: 10px auto;  display:flex">
                    <img style="margin: auto" src="{{$portfolio['img_2']}}" class="img-fluid" >
                    <div class="content-holder">
                        <a style="margin: auto" class="img-popup" href="{{$portfolio['img_2']}}"></a>
                        
                    </div>   
                </div>             
            </div>
            
        </div>   
    </div>            
</section>
<!-- End of portfolio section -->



@endsection
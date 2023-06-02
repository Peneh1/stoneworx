@extends('layout')

@section('header')
<div style="background: url(/assets/imgs/header.jpg) no-repeat center center fixed;   background-size: cover;">
<div style="width:100%; height:7vw; background: rgba(0,0,0,0.7); "></div>
</div>

@endsection

@section('page_content')

<!-- Portfolio Section -->
<section id="" class="section portfolio-section">
    
    <div class="container">
        
        <h6 class="section-title text-center">{!!$portfolio['title']!!}</h6>
        <h6 class="section-subtitle mb-5 text-center">New stunning projects for our amazing clients</h6>
        <a href="/portfolio">← Back to Portfolio</a>
        <div class=""> 
           
                
            <div style="margin: 10px auto;">
                <div >
                    <img style="margin: auto; width:100%" src="{{$portfolio['img_1']}}" >
                    <div class="content-holder">
                        <a style="margin: auto"  class="img-popup" href="{{$portfolio['img_1']}}"></a>
                        
                    </div>   
                </div>             
            </div>

            <div>
                <div style="margin: 10px auto;">
                    <img style="margin: auto; width:100%" src="{{$portfolio['img_2']}}" >
                    <div class="content-holder">
                        <a style="margin: auto" class="img-popup" href="{{$portfolio['img_2']}}"></a>
                        
                    </div>   
                </div>             
            </div>
            
        </div>  
        <a href="/portfolio">← Back to Portfolio</a>
 
    </div>            
</section>
<!-- End of portfolio section -->



@endsection
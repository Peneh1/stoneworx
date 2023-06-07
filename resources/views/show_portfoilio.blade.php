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
           
             @forelse($portfolio['inside_img_src'] as $src)   
            <div style="margin: 10px auto;">
                <div >
                    <img style="margin: auto; width:100%" src="{{$src}}" >
                    <div class="content-holder">
                        <a style="margin: auto"  class="img-popup" href="{{$src}}"></a>
                        
                    </div>   
                </div>             
            </div>
            @empty
                <p class="section-title text-center">Comming Soon</p>
            
            @endforelse
            
            
        </div>  
        <a href="/portfolio">← Back to Portfolio</a>
 
    </div>            
</section>
<!-- End of portfolio section -->



@endsection
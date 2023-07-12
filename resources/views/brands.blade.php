@extends('layout')

@section('header')
<div style="background: url(/assets/imgs/header.jpg) no-repeat center center fixed;   background-size: cover;">
<div style="width:100%; height:7vw; background: rgba(0,0,0,0.7); "></div>
</div>

@endsection

@section('page_content')


 <!-- Brands Section -->
 <section class="section portfolio-section"  id="portfolio">
    <div class="container">
        <div id="brands">
        <h6 class="section-title text-center mb-0"><a href="#brands"> Brands</a></h6>
        <h6 class="section-subtitle mb-5 text-center">We Carry</h6>
        </div>
        <div class="filters">
            <a style="font-family: Raleway_Bold; font-size:24px;" href="#" data-filter=".new " class="active">
             
                Quartz  
             </a>
             <a style="font-family: Raleway_Bold; font-size:24px;" href="#" data-filter=".stone">
                Natural
             </a>
             
         </div>
       
         
         <div class="portfolio-container" style="justify-content: center;"> 


        @foreach ($brands as $brand)


        <div class="row new" style="justify-content: center;">
            <div class=" my-3 my-md-0 portfolio-item">
                <div class="card">
                    <div class="card-body">
                        <div class="media mb-3">
                          <h1>&bull; </h1>
                           <img class="brand-img" style="margin:auto; width:120px; height:auto" src="{{$brand['img_url_1']}}" alt="{{$brand['company_name_1']}}">
                        </div>
                       
                    </div>
                </div>
            </div>
            <div class=" my-3 my-md-0 portfolio-item">
                <div class="card">
                    <div class="card-body">
                        <div class="media mb-3">
                            <h1>&bull; </h1>  <img class="brand-img" style="margin:auto; width:120px; height:auto" src="{{$brand['img_url_2']}}" alt="{{$brand['company_name_2']}}">

                           
                         
                        </div>
                        
                    </div>
                </div>
            </div>

                <div class=" my-3 my-md-0 portfolio-item">
                    <div class="card">
                        <div class="card-body">
                            <div class="media mb-3">
                              <h1>&bull; </h1>
                               <img class="brand-img" style="margin:auto; width:120px; height:auto" src="{{$brand['img_url_3']}}" alt="{{$brand['company_name_3']}}">
                            </div>
                           
                        </div>
                    </div>
                </div>
                <div class=" my-3 my-md-0">
                    <div class="card">
                        <div class="card-body">
                            <div class="media mb-3">
                                <h1>&bull; </h1>  <img class="brand-img" style="margin:auto; width:120px; height:auto" src="{{$brand['img_url_4']}}" alt="{{$brand['company_name_4']}}">
    
                               
                             
                            </div>
                            
                        </div>
                    </div>
                </div>
           
        </div>

        @endforeach
        
    
           <div class="row stone">

        <ul class="portfolio-item">

        @foreach($stones as $i => $stone)
        <div class="card" style="width: 400px;">
            <div class="card-body">
                <div class="media mb-3">
                      <img class="brand-img" style="width:50px; height:auto" src="{{$stone['img_src']}}" alt="{{$stone['name']}}"><br>
                      <h4 class="pl-3">{{$stone['name']}} </h4>

                   
                 
                </div>
                
            </div>
        </div>

                  
                 
        @endforeach
        </ul>
        </div>
    </div>{{--End perfolio cuntainer--}}
</section>


<!-- End of Brands Section -->


@endsection
@extends('layout')

@section('header')
<header class="header">
<div class="overlay">
    <h1 class="subtitle">{{$subtitle}}</h1>
    <h1 class="title">{{$title}}</h1>  
</div>  
{{--}}
<div class="shape">
    <svg viewBox="0 0 1500 200">
        <path d="m 0,240 h 1500.4828 v -71.92164 c 0,0 -286.2763,-81.79324 -743.19024,-81.79324 C 300.37862,86.28512 0,168.07836 0,168.07836 Z"/>
    </svg>
</div>  
<div class="mouse-icon"><div class="wheel"></div></div>
 {{--}}
</header>

@endsection

@section('page_content')
 

    <!-- Service Section -->
    <section  id="service" class="section pt-0" >
        <div class="container" style="padding-top:10%">
            <h6 class="section-title text-center">Our Service</h6>
            <h6 class="section-subtitle text-center mb-5 pb-3">Voluptates architecto provident deserunt.</h6>

            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4 mb-md-0">
                        <div class="card-body">
                            <small class="text-primary font-weight-bold">01</small>
                            <h5 class="card-title mt-3"> Beatae quo <h5>
                            <p class="mb-0">Lorem ipsum dolor sit amet, cquasi cupiditate voluptate debitis saepe dolorem totam dolor repudiandae quo nihil, repellendus nesciunt ab fuga quae, minima reprehenderit sequi fugit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 mb-md-0">
                        <div class="card-body">
                            <small class="text-primary font-weight-bold">02</small>
                            <h5 class="card-title mt-3">Delectus Suscipit<h5>
                            <p class="mb-0">Lorem ipsum dolor sit amet, cquasi cupiditate voluptate debitis saepe dolorem totam dolor repudiandae quo nihil, repellendus nesciunt ab fuga quae, minima reprehenderit sequi fugit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 mb-md-0">
                        <div class="card-body">
                            <small class="text-primary font-weight-bold">03</small>
                            <h5 class="card-title mt-3">Itaque harum<h5>
                            <p class="mb-0">Lorem ipsum dolor sit amet, cquasi cupiditate voluptate debitis saepe dolorem totam dolor repudiandae quo nihil, repellendus nesciunt ab fuga quae, minima reprehenderit sequi fugit.</p>
                        </div>
                    </div>
                </div>              
            </div>
        </div>
    </section>
    <!-- End OF Service Section -->

    <!-- About Section -->
    <section class="section" id="about">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-6 pr-md-5 mb-4 mb-md-0">
                    <h6 class="section-title mb-0">About Company</h6>
                    <h6 class="section-subtitle mb-4">Architecto provident deserunt</h6>
                    <p >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate molestiae temporibus et tenetur unde quasi, cum nemo quo, molestias architecto alias voluptatibus corrupti corporis earum. Necessitatibus maxime modi ipsam, quod!</p>
                    <img src="assets/imgs/about.jpg" alt="" class="w-100 mt-3 shadow-sm">
                </div>
                <div class="col-md-6 pl-md-5">
                    <div class="row">
                        <div class="col-6">
                            <img src="assets/imgs/about-1.jpg" alt="" class="w-100 shadow-sm">
                        </div>
                        <div class="col-6">
                            <img src="assets/imgs/about-2.jpg" alt="" class="w-100 shadow-sm">
                        </div>
                        <div class="col-12 mt-4">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo iusto quidem laborum atque, sapiente ipsa excepturi fuga cum sed in assumenda eos quasi harum culpa laboriosam nulla, incidunt quae. Voluptatum.</p>
                            <p><b>Aliquid fuga sunt velit, temporibus molestias ab. Ipsa nesciunt totam, aliquid dignissimos.</b><br>
                            </p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt ut a dolorem, consectetur, eos suscipit consequatur magnam est dolore obcaecati adipisci expedita, vero, iste ducimus qui numquam animi facilis officia?</p>
                        </div>
                    </div>
                </div>
            </div>              
        </div>
    </section>
    <!-- End OF About Section -->

    
    <!-- Testmonial Section -->
    <section class="section" id="testmonial">
        <div class="container">
            <h6 class="section-title text-center mb-0">Testmonials</h6>
            <h6 class="section-subtitle mb-5 text-center">What Our Clients Says</h6>
            <div class="row">
                <div class="col-md-4 my-3 my-md-0">
                    <div class="card">
                        <div class="card-body">
                            <div class="media align-items-center mb-3">
                                <img class="testmonials-img mr-3" src="assets/imgs/avatar.jpg" alt="">
                                <div class="media-body">
                                    <h6 class="mt-1 mb-0">John Doe</h6>
                                    <small class="text-muted mb-0">Business Analyst</small>     
                                </div>
                            </div>
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus enim modi, id dicta reiciendis itaque.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 my-3 my-md-0">
                    <div class="card">
                        <div class="card-body">
                            <div class="media align-items-center mb-3">
                                <img class="testmonials-img mr-3" src="assets/imgs/avatar-1.jpg" alt="">
                                <div class="media-body">
                                    <h6 class="mt-1 mb-0">Maria Garcia</h6>
                                    <small class="text-muted mb-0">Insurance Agent</small>      
                                </div>
                            </div>
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus enim modi, id dicta reiciendis itaque.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 my-3 my-md-0">
                    <div class="card">
                        <div class="card-body">
                            <div class="media align-items-center mb-3">
                                <img class="testmonials-img mr-3" src="assets/imgs/avatar-2.jpg" alt="">
                                <div class="media-body">
                                    <h6 class="mt-1 mb-0">Mason Miller</h6>
                                    <small class="text-muted mb-0">Residential Appraiser</small>        
                                </div>
                            </div>
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus enim modi, id dicta reiciendis itaque.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Testmonial Section -->

   
 @endsection
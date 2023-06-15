@extends('layout')

@section('header')
<header class="header">
<div class="overlay">
    <h1 class="title">{!!$title!!}</h1>  
    <h1 class="subtitle">{{$subtitle}}</h1>

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
            <h6 class="section-title text-center">OUR PROCESS</h6>

            <div class="row">
                <div class="col-md-3">
                    <div class="card mb-4 mb-md-0">

                        <div style="width: 40px; margin:auto"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--ph" width="100%" height="100%" preserveAspectRatio="xMidYMid meet" viewBox="0 0 256 256"><path fill="currentColor" d="M156.2 80H47.7A19.8 19.8 0 0 0 28 99.7v108.5A19.8 19.8 0 0 0 47.7 228h108.5a19.8 19.8 0 0 0 19.8-19.8V99.7A19.8 19.8 0 0 0 156.2 80ZM152 204H52V104h100ZM132 40a12 12 0 0 1 12-12h16a12 12 0 0 1 0 24h-16a12 12 0 0 1-12-12Zm96 8v8a12 12 0 0 1-24 0v-4h-4a12 12 0 0 1 0-24h8a20.1 20.1 0 0 1 20 20Zm0 48v16a12 12 0 0 1-24 0V96a12 12 0 0 1 24 0Zm0 56v8a20.1 20.1 0 0 1-20 20h-8a12 12 0 0 1 0-24h4v-4a12 12 0 0 1 24 0ZM76 56v-8a20.1 20.1 0 0 1 20-20h8a12 12 0 0 1 0 24h-4v4a12 12 0 0 1-24 0Z"></path></svg></div>
                       
                        <div class="card-body">
                            <small class="text-primary font-weight-bold">01</small>
                            <h5 class="card-title mt-3">SELECTION<h5>
                            <p class="mb-0">Once materials have been chosen,
                                our expert templators will visit the
                                job site, and use high-end laser
                                technology to ensure
                                measurement accuracy.
                                </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card mb-4 mb-md-0">

                        <div style="width: 40px; margin:auto"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--tabler" width="100%" height="100%" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.875 12c.621 0 1.125.512 1.125 1.143v5.714c0 .631-.504 1.143-1.125 1.143H4a1 1 0 0 1-1-1v-5.857C3 12.512 3.504 12 4.125 12h15.75zM9 12v2m-3-2v3m6-3v3m6-3v3m-3-3v2M3 3v4m0-2h18m0-2v4"></path></svg></div>

                        <div class="card-body">
                            <small class="text-primary font-weight-bold">02</small>
                            <h5 class="card-title mt-3">TEMPLATING<h5>
                            <p class="mb-0">Once materials have been chosen,
                                our expert templators will visit the
                                job site, and use high-end laser
                                technology to ensure
                                measurement accuracy.
                                </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card mb-4 mb-md-0">

                        <div style="width: 40px; margin:auto"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--carbon" width="100%" height="100%" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32"><path fill="currentColor" d="M30 30h-8V4h8zm-6-2h4V6h-4zm-4 2h-8V12h8zm-6-2h4V14h-4zm-4 2H2V18h8zm-6-2h4v-8H4z"></path></svg></div>

                        <div class="card-body">
                            <small class="text-primary font-weight-bold">03</small>
                            <h5 class="card-title mt-3">FABRICATION<h5>
                            <p class="mb-0">In the fabrication stage, our team
                                transforms raw marble and granite
                                slabs into the finished product.
                                This involves cutting, shaping, and
                                edge profiling, using the latest
                                cutting edge machinery.
                                </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card mb-4 mb-md-0">

                        <div style="width: 40px; margin:auto"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--ic" width="100%" height="100%" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="M14 12c0-1.1-.9-2-2-2s-2 .9-2 2s.9 2 2 2s2-.9 2-2zm-2-9a9 9 0 0 0-9 9H0l4 4l4-4H5c0-3.87 3.13-7 7-7s7 3.13 7 7a6.995 6.995 0 0 1-11.06 5.7l-1.42 1.44A9 9 0 1 0 12 3z"></path></svg></div>

                        <div class="card-body">
                            <small class="text-primary font-weight-bold">04</small>
                            <h5 class="card-title mt-3">INSTALLATION<h5>
                            <p class="mb-0">Our expert team will start the final
                                installation process which
                                includes site preparation, precise
                                placement and alignment, secure
                                attachment, seam treatment, edge
                                finishing, final inspection, and
                                finally, customer approval!</p>
                        </div>
                    </div>
                </div>              
            </div>
        </div>
    </section>
    <!-- End OF Service Section -->

    <!-- About Section --
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
    <-- End OF About Section -->

    
    <!-- Testmonial Section -->
    <section class="section" id="testmonial">
        <div class="container">
            <h6 class="section-title text-center mb-0">TESTIMONIALS</h6>
            <h6 class="section-subtitle mb-5 text-center">Hear what our clients say about us</h6>
            <div class="row">
                <div class="col-md-4 my-3 my-md-0">
                    <div class="card">
                        <div class="card-body">
                            <div class="media align-items-center mb-3">
                                <img class="testmonials-img mr-3" src="assets/imgs/avatar.jpg" alt="">
                                <div class="media-body">
                                    <h6 class="mt-1 mb-0">John Doe</h6>
                                    <small class="text-muted mb-0">Commercial Contractor</small>     
                                </div>
                            </div>
                            <p class="mb-0">"Working with Stoneworx was a
                                pleasure! Their team completed
                                our project ahead of schedule
                                without compromising quality.
                                Impressed by their efficiency and
                                attention to detail."</p>
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
                                    <small class="text-muted mb-0">Kitchen Company</small>      
                                </div>
                            </div>
                            <p class="mb-0">"Stoneworx is a top-notch marble
                                and granite company. Their
                                communication throughout the
                                project was exceptional, ensuring
                                a smooth workflow.”</p>
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
                                    <small class="text-muted mb-0">Commercial Contractor</small>        
                                </div>
                            </div>
                            <p class="mb-0">“The Stoneworx team exceeded
                                all expectations. Their work is
                                incredible, and they were always
                                available to address any
                                concerns. Their professionalism
                                and quality craftsmanship make
                                them my go-to choice for future
                                projects.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Testmonial Section -->

   
 @endsection
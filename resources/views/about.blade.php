@extends('layout')

@section('header')
<div style="background: url(/assets/imgs/header.jpg) no-repeat center center fixed;   background-size: cover;">
<div style="width:100%; height:7vw; background: rgba(0,0,0,0.7); "></div>
</div>

@endsection

@section('page_content')

<!-- About Section -->
    <section class="section" id="about">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-6 pr-md-5 mb-4 mb-md-0">
                    <h6 class="section-title mb-0">ABOUT US</h6>
                    <p >We’re Stoneworx - your premier destination for custom granite and marble solutions. We
                        specialize in both commercial and residential projects, offering a seamless process from start to
                        finish. Our team goes the extra mile by handling every step, from precise measurements and
                        laser templating to expert fabrication and meticulous installation</p>
            <img src="assets/imgs/about.jpg" alt="" class="w-100 mt-3 shadow-sm">
                </div>
                <div class="col-md-6 pl-md-5">
                    <div class="row">
                         {{--}}       <div class="col-6">
                            <img src="assets/imgs/about-1.jpg" alt="" class="w-100 shadow-sm">
                        </div>
                        <div class="col-6">
                            <img src="assets/imgs/about-2.jpg" alt="" class="w-100 shadow-sm">
                        </div>     {{--}}   
                        <div class="col-12 mt-4">
                            <p>While we excel in commercial projects, we also extend our expertise to private clients, including
                                designers, homeowners, and developers seeking exceptional marble and granite craftsmanship.
                                At Stoneworx, we understand the value of timing and speed, and ensure you that your project
                                will be completed efficiently without compromising quality.
                                </p>
                            <p>As one of the largest providers of commercial granite and marble services in the Brooklyn area,
                                we take pride in our ability to stand out by committing to effective communication and swift
                                execution.
                                </p>
                            <p>Whether you have a commercial project or a personal design vision, Stoneworx is here to bring
                                your dream countertops to life. Experience the warmth and professionalism of our team as we
                                transform your space into one of exceptional beauty.</p>
                                <p>As the famed sculptor Michelangelo once said, <b>“Every block of stone has a statue inside it and it
                                    is the task of the sculptor to discover it.”</b></p>
                                    <p>At Stoneworx, we take that block of stone, and transform it in to a true work of art.</p>
                        </div>
                    </div>
                </div>
            </div>              
        </div>
    </section>
    <!-- End OF About Section -->

    @endsection

@extends('layout')

@section('page_content')


 <!-- Brands Section -->
 <section class="section" id="testmonial">

   
        
    


    <div class="container">
        <h6 class="section-title text-center mb-0">Brands</h6>
        <h6 class="section-subtitle mb-5 text-center">We Carry</h6>

        @foreach ($brands as $brand)


        <div class="row">
            <div class="col-md-4 my-3 my-md-0">
                <div class="card">
                    <div class="card-body">
                        <div class="media align-items-center mb-3">
                            <img class="mr-3" src="{{$brand['img_url_1']}}" alt="">
                            <div class="media-body">
                                <h6 class="mt-1 mb-0">{{$brand['company_name_1']}}</h6>
                                     
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-3 my-md-0">
                <div class="card">
                    <div class="card-body">
                        <div class="media align-items-center mb-3">
                            <img class="mr-3" src="{{$brand['img_url_2']}}" alt="">
                            <div class="media-body">
                                <h6 class="mt-1 mb-0">{{$brand['company_name_2']}}</h6>
                                      
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-3 my-md-0">
                <div class="card">
                    <div class="card-body">
                        <div class="media align-items-center mb-3">
                            <img class="mr-3" src="{{$brand['img_url_3']}}" alt="">
                            <div class="media-body">
                                <h6 class="mt-1 mb-0">{{$brand['company_name_3']}}</h6>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>

        @endforeach
        
    </div>
</section>


<!-- End of Brands Section -->


@endsection
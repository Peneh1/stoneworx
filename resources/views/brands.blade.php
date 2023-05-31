@extends('layout')

@section('page_content')


 <!-- Brands Section -->
 <section class="section" id="testmonial">

   
        
    


    <div class="container">
        <h6 class="section-title text-center mb-0">Brands</h6>
        <h6 class="section-subtitle mb-5 text-center">We Carry</h6>

        @foreach ($brands as $brand)


        <div class="row">
            <div class="col-md-6 my-3 my-md-0">
                <div class="card">
                    <div class="card-body">
                        <div class="media mb-3">
                          {{--}}  <div class="media-body">
                                <h6 class="mt-1 mb-0" style="text-align: center">&bull;</h6>
                                      
                            </div> {{--}}
                           <img class="brand-img" style="margin:auto" src="{{$brand['img_url_1']}}" alt="{{$brand['company_name_1']}}">
                        </div>
                       
                    </div>
                </div>
            </div>
            <div class="col-md-6 my-3 my-md-0">
                <div class="card">
                    <div class="card-body">
                        <div class="media align-items-center mb-3">
                            <img class="brand-img" style="margin:auto" src="{{$brand['img_url_2']}}" alt="{{$brand['company_name_2']}}">

                           {{--}} <div class="media-body">
                                <h6 class="mt-1 mb-0" style="text-align: center">&bull;</h6>
                                      
                            </div> {{--}}
                         
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
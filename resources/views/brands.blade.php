@extends('layout')

@section('page_content')


 <!-- Brands Section -->
 <section class="section" id="testmonial">

   
        
    


    <div class="container">
        <h6 class="section-title text-center mb-0">Brands</h6>
        <h6 class="section-subtitle mb-5 text-center">We Carry</h6>

        @foreach ($brands as $brand)


        <div class="row" style="justify-content: center;">
            <div class=" my-3 my-md-0">
                <div class="card">
                    <div class="card-body">
                        <div class="media mb-3">
                          <h1>&bull; </h1>
                           <img class="brand-img" style="margin:auto; width:120px; height:auto" src="{{$brand['img_url_1']}}" alt="{{$brand['company_name_1']}}">
                        </div>
                       
                    </div>
                </div>
            </div>
            <div class=" my-3 my-md-0">
                <div class="card">
                    <div class="card-body">
                        <div class="media mb-3">
                            <h1>&bull; </h1>  <img class="brand-img" style="margin:auto; width:120px; height:auto" src="{{$brand['img_url_2']}}" alt="{{$brand['company_name_2']}}">

                           
                         
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
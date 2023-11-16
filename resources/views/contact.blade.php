@extends('layout')

@section('header')
<div style="background: url(/assets/imgs/header.jpg) no-repeat center center fixed;   background-size: cover;">
<div style="width:100%; height:7vw; background: rgba(0,0,0,0.7); "></div>
</div>
<meta name="csrf-token" content="{{ csrf_token() }}">

@endsection

@section('page_content')

 <!-- Contact Section -->
 <section id="contact" class="section pb-10">
    <div class="container" id="app">
        <div class="row align-items-center">

            <div class="col-md-7" style="padding-top: 10%; padding-bottom: 10%">
                
                <p style="color:red" v-text="error"></p>

                <p style="color:green" v-text="success"></p>

                <form @submit.prevent="send()">
                    
                    <h4 class="mb-4">Drop Us A Line</h4>
                    <div class="form-row" style="padding-top: 10%">
                        <div class="form-group col-sm-4 ">
                            <input type="text" class="form-control rounded-0 bg-transparent" name="name" placeholder="Name" v-model="model.name">
                        </div>
                        <div class="form-group col-sm-4 ">
                            <input type="email" class="form-control rounded-0 bg-transparent" name="email" placeholder="Email" v-model="model.email">
                        </div>
                        <div class="form-group col-sm-4 ">
                            <input type="text" class="form-control rounded-0 bg-transparent" name="subject" placeholder="Subject" v-model="model.subject">
                        </div>
                        <div class="form-group col-12 ">
                            <textarea name="message" id="" cols="30" rows="4" class="form-control rounded-0 bg-transparent" placeholder="Message" v-model="model.message"></textarea>

                        </div>
                        <div class="form-group col-12 mb-0">
                            <button type="submit" class="btn btn-primary rounded w-md mt-3" v-text="buttonText">Send</button>
                        </div>                          
                    </div>                          
                </form>
            </div>
            <div class="col-md-5 my-3">
                <h6 class="mb-0">Contact Us</h6>
                <p class="mb-4">Phone: <a href="tel:3476635860">347-663-5860</a> <br> Fax: 347-756-3448 <br> Email: <a href="mailto:info@stoneworxcorp.com">info@stoneworxcorp.com</a></p>

                <h6 class="mb-0">Location</h6>
                <p class="mb-4">We are conveniently located at <a href="https://maps.google.com/maps/dir//872+E+52nd+St+Brooklyn,+NY+11203/@40.6388476,-73.9273252,16z/data=!4m5!4m4!1m0!1m2!1m1!1s0x89c25ca583a8f199:0x50d8f28c5d98ec03">872 E 52 st Brooklyn NY 11203</a></p>

                <h6 class="mb-0">Show Room</h6>
                <p class="mb-4">Our showroom  is open Monday to Friday 8-5,<br> Please contact us to schedule a visit</p>

                
                <p></p>
            </div>

        </div>
    </div>
 </section>
{{--Maps--}}

<iframe src="https://www.google.com/maps/embed/v1/place?q=872+East+52nd+Street,+Brooklyn,+NY,+USA&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8" style="border:none;" allowfullscreen="" loading="lazy" class="map"></iframe>

        
{{--Maps Script--}}
        <script src="https://maps.googleapis.com/maps/api/js?client=google-maps-embed&amp;paint_origin=&amp;libraries=geometry,search&amp;v=3.exp&amp;language=en&amp;region=in&amp;callback=onApiLoad" nonce="" async="" defer=""></script>
        <script src="https://maps.gstatic.com/maps-api-v3/embed/js/53/3/init_embed.js"></script>

        <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

        <script>


let App = { 
    
    data() {
    return {
      model: {
        name: '',
        email: '',
        subject: '',
        message: '',
      },
      error: '',
      success: '',
      buttonText: 'Send',
    }
  },

  methods: {
    send(){
        this.buttonText = 'Sending...'
  fetch('contact/send', {
            method: 'POST',
            body: JSON.stringify(this.model),
            headers: { 
                "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').content
              },   
          })
          .then(res => res.json())
            .then(data => {
                if(data.success === true){
                    this.success = data.msg;
                    this.model.name = '';
                    this.model.email = '';
                    this.model.subject = '';
                    this.model.message = '';
                    this.buttonText = 'Send'

                } else {
                    this.error = data.msg
                    this.buttonText = 'Send Again'

                }
          })
            .catch(err => console.log())
},
  }
}

Vue.createApp(App).mount('#app');

           
            </script>

@endsection
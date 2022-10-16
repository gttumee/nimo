@extends('layouts.appz')
@yield('header')
@include('header')

@section('content')
<section class="contact_section ">

    <div class="container">

      <div class="row">
        <div class="col-md-6">
          <div class="d-flex justify-content-center d-md-block">
            <h2>
             Холбоо барих
            </h2>
            @if (session('flash_message'))  
           <p class="alert alert-success">{{ session('flash_message') }}</p> 
        @endif
          </div>
          <form action="{{route('contact')}}" method="POST">
     @csrf
            <div class="contact_form-container">
              <div>
                <div>
                  <input type="text" placeholder="Өөрийн нэр" name="name" required  oninvalid="this.setCustomValidity('Та нэрээ оруулана уу!')">
                </div>
                <div>
                  <input type="email" placeholder="И-мэйл" name="email" required  oninvalid="this.setCustomValidity('Та И-мэйл хаягаа оруулана уу!')" >
                </div>
                <div>
                  <input type="phone" placeholder="Утасны дугаар" name="phone" required  oninvalid="this.setCustomValidity('Та утасны дугаараа  оруулана уу!')"> 
                </div>
                <div class="mt-5">
                    <textarea cols="50" rows="5" placeholder="Захидал" name="post" required  oninvalid="this.setCustomValidity('Та захидалаа оруулана уу!')"></textarea>
                </div>
                <input type="text" id="username" required placeholder="Enter Name"
   
    oninput="this.setCustomValidity('')"  />
                <div class="mt-5">
                  <button type="submit">
                    Илгээх
                  </button>
                </div>
              </div>

            </div>

          </form>
        </div>
        <div class="col-md-6">
          <div class="contact_img-box">
            <img src="images/students.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>

@include('footer')

@endsection
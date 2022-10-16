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
          </div>
          @if (session('flash_message'))  
          <p class="alert alert-success col-md-7 col-md-offset-7">{{ session('flash_message') }}</p> 
       @endif
          <form action="{{route('contact')}}" method="POST">
     @csrf
            <div class="contact_form-container">
              <div>
                <div>
                  <input type="text" placeholder="Өөрийн нэр" name="name" required  oninvalid="this.setCustomValidity('Та нэрээ оруулана уу!')"  oninput="this.setCustomValidity('')" >
                </div>
                <div>
                  <input type="email" placeholder="И-мэйл" name="email" required  oninvalid="this.setCustomValidity('Та И-мэйл хаягаа оруулана уу!')"  oninput="this.setCustomValidity('')"   >
                </div>
                <div>
                  <input type="phone" placeholder="Утасны дугаар" name="phone" required  oninvalid="this.setCustomValidity('Та утасны дугаараа  оруулана уу!')"   oninput="this.setCustomValidity('')" > 
                </div>
                <div class="mt-5">
                    <textarea cols="42" rows="5" placeholder="Захидал" name="post"></textarea>
                </div>
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
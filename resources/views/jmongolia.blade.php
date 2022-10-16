@extends('layouts.appz')
@yield('header')
@include('header')
@section('content')
      <div class="common_style">
        <!-- admission section -->
        <section class="admission_section">
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <div class="admission_detail-box">
                  <form action="{{route('jlpt')}}" method="POST">
                    @csrf
                  <h3>
                    <input class="call_to-btn btn_white-border" type="submit" value="Консулны үйлчилгээ" name="jlpt-n5 ">
                  </h3>
                  <h3>
                    <input class="call_to-btn btn_white-border" type="submit" value="Зөвөлгөө" name="jlpt-n4">
       
                  </h3>
                  <h3>
                    <input class="call_to-btn btn_white-border" type="submit" value="Үйлчилгээ" name="jlpt-n3">
                     
                  </h3>
                  <h3>
                    <input class="call_to-btn btn_white-border" type="submit" value="Үйлчилгээний газарууд" name="jlpt-n2">
                  </h3>
                  <h3>
                    <input class="call_to-btn" type="submit" value="N1 (1235 Ханз)" name="jlpt-n1">
                  </h3>
                </form>
                </div>
              </div>
              <div class="col-md-6">
                <div class="admission_img-container">
                  <img src="images/admission.png" alt="">
                </div>
              </div>
            </div>
          </div>
        </section>
    
@include('footer')
@endsection
 
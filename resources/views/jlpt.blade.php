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
                    <input class="call_to-btn btn_white-border" type="submit" value="N5 (80 Ханз)" name="jlpt-n5 ">
                  </h3>
                  <h3>
                    <input class="call_to-btn btn_white-border" type="submit" value="N4 (167 Ханз)" name="jlpt-n4">
       
                  </h3>
                  <h3>
                    <input class="call_to-btn btn_white-border" type="submit" value="N3 (370 Ханз)" name="jlpt-n3">
                     
                  </h3>
                  <h3>
                    <input class="call_to-btn btn_white-border" type="submit" value="N2 (720 Ханз)" name="jlpt-n2">
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
 
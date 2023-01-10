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
                  <h3>
                    <button type="button" class="call_to-btn btn_white-border" id="n1" onclick="location.href='{{ route('jlpt-view',['id'=>'1']) }}' ">N1</button>                     
                  </h3>
                  <h3>
                    <button type="button" class="call_to-btn btn_white-border" id="n3" onclick="location.href='{{ route('jlpt-view',['id'=>'2']) }}' ">N2</button>                     
                  </h3>
                  <h3>
                    <button type="button" class="call_to-btn btn_white-border" id="n3" onclick="location.href='{{ route('jlpt-view',['id'=>'3']) }}' ">N3</button>                     
                  </h3>
                  <h3>
                    <button type="button" class="call_to-btn btn_white-border" id="n3" onclick="location.href='{{ route('jlpt-view',['id'=>'4']) }}' ">N4</button>                     
                  </h3>
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
      </div>
    
@include('footer')
@endsection
 
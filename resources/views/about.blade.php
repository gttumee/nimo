@extends('layouts.appz')
@yield('header')
@include('header')
@section('content')
<div class="common_style">

    <!-- about section -->
    <section class="about_section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="about_img-container">
              <img src="images/about.png" alt="">
            </div>
          </div>
          <div class="col-md-6">
            <div class="about_detail-box">
              <h3>
                Бидний тухай
              </h3>
              <p>
                Манай байгууллага нь 2020 онд Япон улсын Токио хотод байгуулагдсан бөгөөд Монголчууддаа хялбар хөгжилтэй аргаар 
                япон хэлийг заах зөвлөх японд ажиллаж амьдарч байгаа оюутан залуус шинээр ирж байгаа залууст санал зөвлөгөө өгөх японы мэдээ мэдээллийг 
                түгээх зорилготойгоор үүсгэн байгуулагдсан юм.
              </p>
              <div class="">
                <a href="" class="call_to-btn btn_white-border">
                  Илүү ихийг
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    @include('footer')

@endsection
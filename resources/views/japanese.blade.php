@extends('layouts.appz')
@yield('header')
@include('header')
@section('content')
<div class="common_style">

    <!-- why section -->
    <section class="why_section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="why_img-container">
              <img src="images/why.png" alt="">
            </div>
          </div>
          <div class="col-md-6">
            <div class="why_detail-box">
              <h3>
                Япон хэл
              </h3>
              <p>
                Нийт ярилцагчдын тооны хувьд тодорхой тооцоо байхгүй боловч, Япон улсын харьяат иргэд мөн Япон улсаас өөр нутагт амьдарч байгаа Япон хүн, Япон (Ямато) угсааны хүн гээд тооцвол 130 саяас илүү ярилцагчтай хэмээн үздэг. Нийт ярилцагчдын тоогоор дэлхийд 10-р байранд жагсах хэл ажээ. Японд төрж өссөн хүнд Япон хэл нь тэдний эх хэл болдог.

                Хэсэг эрдэмтэд өгүүлбэр зүй, дуудлага зэргийг харгалзан үзэж Алтай язгуурын хэлэнд хамааруулдаг боловч өөр эрдэмтэд онолын шатанд яваа Фүюү хэлний язгуур, Японик хэлний язгуурт хамаарна гэж үздэг (эдгээр нь албан ёсны бус юм).
              </p>
              <div class="">
                <a href="" class="call_to-btn btn_white-border">
                  Read More
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@include('footer')
@endsection

<section class="info_section layout_padding-top">
  <div class="info_logo-box">
    <h2>
      Нимо Япон хэл
    </h2>
  </div>
  <div class="container layout_padding2">
    <div class="row">
      <div class="col-md-3">
        <h5>
          Бидний тухай
        </h5>
        <p>
          Япон хэлийг хөгжилтэй аргаар суралцах тухай нийтлэл болон бусад сургалт хөтөлбөр
        </p>
      </div>
      <div class="col-md-3">
        <h5>
          Хэрэгсэл 
        </h5>
        <ul>
          <li>
            <a href="">
              Youtube видео
            </a>
          </li>
          <li>
            <a href="">
              facebook 
            </a>
          </li>
          <li>
            <a href="">
              Twitter
            </a>
          </li>
        </ul>
      </div>
      <div class="col-md-3">
        <h5>
          Холбоо барих
        </h5>
        <p>
          3-14-7-301 Aratacho Kobe Shi Hyogo Ku Hyogo Ken 652-0032 Japan
        </p>
      </div>
      <div class="col-md-3">
    <div class="subscribe_container">
          <h5>
            И-мэйлээр мэдээлэл авах
          </h5>
          <div class="form_container">
            <form action="{{route('index')}}" method="POST">
              @csrf
              <input type="email" placeholder="И-мэйл" name="email"  required placeholder="И-мэйл"
              oninvalid="this.setCustomValidity('И-мэйл оруулна уу')"
              oninput="this.setCustomValidity('')"/>
              <button type="submit" name="burtgel">Бүртгүүлэх</button>
            </form>
          </div>
        </div>

      </div>
    </div>
  </div>
  <div class="container">
    <div class="social_container">

      <div class="social-box">
        <a href="/https://www.facebook.com/profile.php?id=100045644083858">
          <img src="/images/fb.png" alt="">
        </a>

        <a href="">
          <img src="/images/twitter.png" alt="">
        </a>
        <a href="">
          <img src="/images/linkedin.png" alt="">
        </a>
        <a href="">
          <img src="/images/instagram.png" alt="">
        </a>
      </div>
    </div>
  </div>
</section>

<!-- footer section -->
<section class="container-fluid footer_section">
  <p>
    <script>document.write(new Date().getFullYear())</script> Нимо Япон хэл All rights reserved
  </p>
</section>
<!-- footer section -->

<script type="text/javascript" src="/js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="/js/bootstrap.js"></script>

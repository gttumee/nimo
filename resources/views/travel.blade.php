@extends('layouts.appz')
@yield('header')
@include('header')
@section('content')
<!DOCTYPE html>
    <body>
        <!-- Responsive navbar-->
        <!-- Header-->
        <header class="bg-dark py-5">
            <div class="container px-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-6">
                        <div class="text-center my-5">
                            <h1 class="display-5 fw-bolder text-white mb-2">Та Япон орны гайхамшигт газараас аялахыг хүсэж байна уу</h1>
                            <p class="lead text-white-50 mb-4">Та бидэнд аялах багцаа доорх хүсэлтээр илгээснээр бид танд аялалын багц санал болгох болно. </p>
                            <div class="d-grid gap-3 d-sm-flex justify-content-sm-center">
                                <a class="btn btn-primary btn-lg px-4 me-sm-3" href="#anket">Хүсэлт илгээх</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Features section-->
        <section class="py-5 border-bottom" id="features">
            <div class="container px-5 my-5">
                <div class="row gx-5">
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-collection"></i></div>
                        <h2 class="h4 fw-bolder">Үндсэн ажилтан</h2>
                        <p>Үндсэн ажилтнаар ажиллах давуу тал өөрийн гэр бүлээрээ 1 ээс 5 жилийн хугацаанд Япон улсад ажиллаж амьдар боломжтой виз юм. Япон улсын хуулийн дагуу бүх татвар хуулийн дагуу төлөгдөж явана.</p> 
                    </div>
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-building"></i></div>
                        <h2 class="h4 fw-bolder">Виз</h2>
                        <p>Үндсэн ажилтны виз бусад визнээс давуу тал япон хүнтэй адил төвшний цалин авж, гэр бүлээрээ амьдар боломжтой виз юм.</p>
                    </div>
                    <div class="col-lg-4">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-toggles2"></i></div>
                        <h2 class="h4 fw-bolder">Давуу тал</h2>
                        <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact section-->
        <section class="bg-light py-5" id="anket">
            <div class="container px-5 my-5 px-5">
                <div class="text-center mb-5">
                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-envelope"></i></div>
                    <h2 class="fw-bolder">Японд ажиллах хүсэлт илгээх</h2>
                    <p class="lead mb-0">танд амжилт хүсье!</p>
                </div>
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-6">
                        <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                            <!-- Name input-->
                            <div class="form-floating mb-3">
                              <label for="name">Овог</label>
                                <input class="form-control" id="name" type="text" placeholder="Овог" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <div class="form-floating mb-3">
                              <label for="name">Нэр</label>
                                <input class="form-control" id="name" type="text" placeholder="Нэр" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <div class="form-floating mb-3">
                              <label for="name">Нас </label>
                              <input class="form-control" id="name" type="text" placeholder="Нас" data-sb-validations="required" />
                            </div>
                            <div class="form-floating mb-3">
                            <label for="name">Хүйс </label>
                            <select  class="form-control" name="" id="">
                                <option value="">--Сонгох--</option>=
                                <option value="man">Эрэгтэй</option>
                                <option value="woman">Эмэгтэй</option>
                            </select>
                            <label for="name">Япон хэлний түвшин</label>
                            <select  class="form-control" name="" id="">
                                <option value="">--Сонгох--</option>=
                                <option value="N1">Н1-түвшин</option>
                                <option value="N2">Н2-түвшин</option>
                                <option value="N3">Н3-түвшин</option>
                                <option value="N4">Н4-түвшин</option>
                                <option value="N5">Н5-түвшин</option>
                                <option value="no_level_conver">Түвшин байхгүй ч ойлгоно</option>
                                <option value="no_no">Огт мэдэхгүй</option>
                            </select>
                            <label for="name">Сургууль</label>
                            <select  class="form-control" name="" id="">
                                <option value="">--Сонгох--</option>=
                                <option value="man">Их дээд сургууль</option>
                                <option value="woman">Коллеж</option>
                                <option value="woman">Анхлах сургууль</option>
                                <option value="woman">Дунд сургууль</option>
                            </select>
                            <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <div class="form-floating mb-3">
                                <label for="name">Мэргэжил</label>
                                <input class="form-control" id="name" type="text" placeholder="Нас" data-sb-validations="required" />
                              </div>
                            <!-- Email address input-->
                            <div class="form-floating mb-3">
                                <label for="email">Холбоо барих И-мэйл</label>
                                <input class="form-control" id="email" type="email" placeholder="name@example.mn" data-sb-validations="required,email" />
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>
                            <!-- Phone number input-->
                            <div class="form-floating mb-3">
                                <label for="phone">Холбоо барих утас</label>
                                <input class="form-control" id="phone" type="tel" placeholder="99889988" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                            </div>
                            <!-- Message input-->
                            <div class="form-floating mb-3">
                                <label for="message">Нэмэлт мэдээлэл</label>
                                <textarea class="form-control" id="message" type="text" placeholder="Танд нэмэлт бичих зүйл байвал энд бичнэ үү...." style="height: 10rem" data-sb-validations="required"></textarea>
                                <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                            </div>
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3">
                                    <div class="fw-bolder">Form submission successful!</div>
                                    To activate this form, sign up at
                                </div>
                            </div>
                            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                            <!-- Submit Button-->
                            <div class="d-grid"><button class="btn btn-primary btn-lg disabled" id="submitButton" type="submit">Илгээх</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>
@include('footer')
@endsection
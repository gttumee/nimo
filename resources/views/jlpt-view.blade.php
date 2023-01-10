@extends('layouts.appz')
@yield('header')
@include('header')
@section('content')
      <div class="common_style">
        <!-- admission section -->
        <section class="admission_section">
          <div class="container">
            Нийт ханзны тоо:{{count($result)}}
            <div class="row">
                  @foreach($result as $keys=>$kanjis)
                  <h3>
                    <input class="call_to-btn btn_white-border" type="submit" value="{{($kanjis->kanji)}}"data-toggle="modal" data-target="#exampleModalCenter{{$keys}}" id="ask-server">
                  </h3>
            <div class="modal fade" id="exampleModalCenter{{$keys}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLongTitle">{{($kanjis->kanji.' '.$kanjis->mon)}}</h3 >
                      <small class="text-muted">{{"N".$kanjis->jlpt}}</small>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <h5>
                    Он дуудлага:
                    <small class="text-muted">{{Str::replace(']', '',Str::replace('[', ' ', Str::replace('"', '', $kanjis->on_readings)))}}</small>
                  </h5>
                  <h5>
                    Күн дуудлага:
                    <small class="text-muted">{{Str::replace(']', '',Str::replace('[', ' ', Str::replace('"', '', $kanjis->kun_readings)))}}</small>
                  </h5>
                  <h5>
                    Монгол:
                    <small class="text-muted" id="hariult">{{$kanjis->mon}} </small>
                  </h5>
                  <h5>
                    Англи:
                    <small class="text-muted">{{$englishWord=Str::replace(']', '',Str::replace('[', ' ', Str::replace('"', '', $kanjis->meanings)))}}</small>
                  </h5>
                  <h5>
                    Зурлага:
                    <small class="text-muted">{{Str::replace(']', '',Str::replace('[', ' ', Str::replace('"', '', $kanjis->stroke_count)))}}</small>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Хаах</button>
                    <button type="button" class="btn btn-primary">Хадаглах</button>
                  </div>
                </div>
              </div>
            </div>
              @endforeach
            </div>
          </div>
        </section>
      </div>
@include('footer')
@endsection
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
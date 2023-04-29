@extends('layouts.appz')
@yield('header')
@include('header')
@section('content')
      <div class="p-4">
        <!-- admission section -->
        <section class="admission_section m-auto">
          <div class="container p-2">
            <div>
              {{-- {{dd($result['0']->jlpt)}} --}}
              <button class="btn btn-info">Ханз{{" N".$result['0']->jlpt}}</button>
              <button class="btn btn-info">Дүрэм{{" N".$result['0']->jlpt}}</button>
              <button class="btn btn-info">Тест{{" N".$result['0']->jlpt}}</button>
            </div>
            Нийт ханзны тоо:{{count($result)}}
            <div class="row">
                  @foreach($result as $keys=>$kanjis)
                  @if($kanjis->delete_flag == '1')
                  <h3>
                    <button class="btn btn-warning vertical" type="submit" data-toggle="modal" data-target="#exampleModalCenter{{$keys}}" id="ask-server">
                      {{($kanjis->kanji)}}<br>
                      <small class="text-muted-button">{{$kanjis->mon}}</small></button>
                  </h3>
                  @else
                  <h3>
                    <button class="btn btn-light vertical" type="submit" data-toggle="modal" data-target="#exampleModalCenter{{$keys}}" id="ask-server">
                      {{($kanjis->kanji)}}<br>
                      <small class="text-muted-button">{{$kanjis->mon}}</small></button>
                  </h3>
                  @endif
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
                  <div class="m-3">
                  <h5>
                    Он дуудлага:
                    <small class="text-muted ">{{Str::replace(']', '',Str::replace('[', ' ', Str::replace('"', '', $kanjis->on_readings)))}}</small>
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
                  </h5>
                  <form action="/hozon" method="get">
                    @csrf
                  <h5>
                    Цээжилчихсэн:
                    <input type="hidden" name="kanji" value="0"><input name="kanji" type="checkbox" value="1">
                    <input type="hidden" id="jlpt-level" name="jlpt-level" value="{{$kanjis->jlpt}}">
                    <input type="hidden" id="kanji_id" name="kanji_id" value="{{$kanjis->dummy_id}}">
                  </h5>
                  </div>
                  
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Хадгалах</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Хаах</button>
                  </form>
                  </div>
                </div>
              </div>
            </div>
              @endforeach
            </div>
             </div>
          </div>
        </section>
      </div>
@include('footer')
@endsection
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
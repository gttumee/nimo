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
                    <input class="call_to-btn btn_white-border" type="submit" value="{{($keys.'.'.$kanjis->kanji)}}"data-toggle="modal" data-target="#exampleModalCenter">
                  </h3>
                  @endforeach
            </div>
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
@include('footer')
@endsection
 
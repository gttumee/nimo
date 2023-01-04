@extends('layouts.appz')
@yield('header')
@include('header')
@section('content')
<section class="contact_section ">
  <div class="container">
    <div class="row">
        <div class="col-md-10">
          <div class="d-flex justify-content-center d-md-block">
            <h2>
             Ханз хайх
            </h2>
          </div>
          <form method="GET" action="{{route('kanjisearch')}}">
            <div class="contact_form-container">
              <div>
                <div>
                  <input type="text" name="search" placeholder="Хайх ханзаа бичнэ үү!" value="{{ old('result') }}"> <button type="submit">Хайх</button>
                </div>
                <div>
                  @if(isset($resp))
                  таны хайлт:{{$result}}
                  <table class="table table-hover">
                    <thead class="thead-dark">
                    <tr>
                      <th style="width:20%">Ханз</th>
                      <th style="width:20%">Унших</th>
                      <th style="width:30%">Монгол</th>
                      <th style="width:30%">Англи</th>
                      <th style="width:10%">jlpt</th>
                    </tr>
                  </thead>
                    @foreach ($resp as $item)
                    <tr>
                      <td>
                        @if(!isset($item['slug']))
                        {{""}}
                        @else
                        {{$item['slug']}}
                        @endif
                      </td>

                      <td>
                        @if(!isset($item['japanese']['0']['reading']))
                        {{""}}
                        @else
                        {{$item['japanese']['0']['reading']}}
                        @endif
                      </td>

                      <td>{{$convert($item['senses']['0']['english_definitions']['0'])}}</td>

                      <td>
                        @if(!isset($item['senses']['0']['english_definitions']['0']))
                        {{""}}
                        @else
                        {{$item['senses']['0']['english_definitions']['0']}}
                        @endif
                      </td>

                      <td>
                        @if($item['jlpt']==null)
                        {{""}}
                        @else
                        {{substr($item['jlpt']['0'],-2)}}
                        @endif
                      </td>    
                    </tr>
                    @endforeach
                  </table>       
                  @endif
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
@include('footer')
@endsection
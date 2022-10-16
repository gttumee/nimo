@extends('layouts.appz')
@yield('header')
@include('header')

@section('content')
<section class="contact_section ">

    <div class="container">

      <div class="row">
        <div class="col-md-6">
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
                  @if(count($resp)>0)
                  таны хайлт:{{$result}}
                  <table border="1">
                    <tr>
                      <th>Канжи</th>
                      <th>Унших</th>
                      <th>Монгол</th>
                      <th>Англи</th>
                      <th>jlpt</th>
                    </tr>
                    @foreach ($resp as $item)
                    <tr>
                      <td>{{$item['slug']}}</td>
                      <td>{{$item['japanese']['0']['reading']}}</td>
                      <td>{{$item['word']['0']['reading']}}</td>
                      <td>{{$convert($item['senses']['0']['english_definitions']['0'])}}</td>
                      <td>{{$item['senses']['0']['english_definitions']['0']}}</td>
                      <td>
                        @if($item['jlpt']==null)
                        {{""}}
                        @else
                        {{$item['jlpt']['0']}}
                        @endif
                      </td>    
                      @endforeach
                      
                    </tr>
                  </table>       
                  @else
                  <p>хайлт илэрсэнгүй</p>
                  @endif
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="col-md-4">
          <div class="contact_img-box">
            <img src="images/searchkanji.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>
@include('footer')
@endsection
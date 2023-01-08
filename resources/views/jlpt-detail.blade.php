@extends('layouts.appz')
@yield('header')
@include('header')
@section('content')
      <div class="common_style">
        <!-- admission section -->
        <section class="admission_section">
          <div class="container">
            <form action="{{route('search')}}" method="GET">
              <input type="text" name="search">
              <button type="submit">search</button>
              {{$response}}
            </form>
          </div>
        </section>
        <h3 class="question">How are you server ?</h3>
        <input type="button" id="aa">
    <input type="button" class="button1">
@include('footer')
@endsection
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
  $(document).ready(function(){
      $('#aa').click(function(){
          $.ajax({url: "/ask-server" }).done(function( data ) {
          $('.button1').val(data.answer);
          });
      });
  });
</script>    
 
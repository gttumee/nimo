<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Нимо</title>
    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.css" />
    <!-- Bootstrap -->
  <script src="https://kit.fontawesome.com/272a1c6b44.js" crossorigin="anonymous"></script>
    <!-- progress barstle -->
    <link rel="stylesheet" href="/css/css-circular-prog-bar.css">
    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Raleway:400,600&display=swap" rel="stylesheet">
    <!-- font wesome stylesheet -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <!-- Custom styles for this template -->
    <link href="/css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="/css/responsive.css" rel="stylesheet" />
    <link rel="stylesheet" href="/css/css-circular-prog-bar.css">  
  </head>
  <body class="sub_page">
    <div class="top_container ">
      <!-- header section strats -->
      <header class="header_section">
        <div class="container">
          <nav class="navbar navbar-expand-lg custom_nav-container">
            <a href="{{route('index')}}">
            <img src="/images/logo.png" class="logo" alt="">
            <a class="navbar-brand" href="{{route('index')}}">
              <span>
                Нимо Япон хэл            
              </span> 
            </a>
          </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
  
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
                <ul class="navbar-nav  ">
                  <li class="nav-item active">
                    <a class="nav-link" href="{{route('index')}}">Эхлэл<span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item ">
                    <a class="nav-link"href="{{route('about')}}"> Япон хэл </a>
                  </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    JLPT ханз
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="{{ route('jlpt-view',['id'=>'4'])}}">JLPTN4</a>
                    <a class="dropdown-item" href="{{ route('jlpt-view',['id'=>'3'])}}">JLPTN3</a>
                    <a class="dropdown-item" href="{{ route('jlpt-view',['id'=>'2'])}}">JLPTN2</a>
                    <a class="dropdown-item" href="{{ route('jlpt-view',['id'=>'1'])}}">JLPTN1</a>
                  </div>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Япон явах уу
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="{{ route('job')}}">Ажилах</a>
                    <a class="dropdown-item" href="{{ route('study')}}">Сурах</a>
                    <a class="dropdown-item" href="{{ route('travel')}}">Аялах</a>
                    <a class="dropdown-item" href="{{ route('event')}}">Event</a>
                  </div>
                </li>
                    <a class="nav-link" href="{{route('contact')}}">Холбоо барих</a>
                    <i class="bi bi-door-open"></i>
                  </li>
                  <li class="nav-item">
                    <a  class="nav-link" style="background-color: #3b5998;" href="{{ route('facebook.login') }}" role="button" ><i class="fab fa-facebook-f"> Нэвтрэх</i></i></a>
                  </li>
                </ul>
              </div>
          </nav>
        </div>
      </header>
    </div>
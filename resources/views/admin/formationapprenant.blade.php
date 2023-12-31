<!-- @extends('layouts.app') -->

<!-- @section('content') -->
@namespace App\Http\Middleware;

@use Closure;
@use Illuminate\Support\Facades\Auth;

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
  @yield('Titre')
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  
  <div class="wrapper ">
    <div class="sidebar" data-color="orange"><!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"-->
      <div class="logo">
        <a href="" class="simple-text logo-mini">
        
        </a>
        <a href="welcome" class="simple-text logo-normal">
          SELF-LEARNING 
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <li>
            <a href="homeDeveloppement_web_frontend_PHP">
              <i class="now-ui-icons design_app"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li>
            <a href="./icons.html">
              <i class="now-ui-icons education_atom"></i>
              <p>Formation</p>
            </a>
          </li>
          <li>
            <a href="./map.html">
              <i class="now-ui-icons location_map-big"></i>
              <p>Emploi du temps</p>
            </a>
          </li>
          <li>
            <a href="./notifications.html">
              <i class="now-ui-icons ui-1_bell-53"></i>
              <p>Notifications</p>
            </a>
          </li>
          <li>
            <a href="/role_devwebfullapprenant">
              <i class="now-ui-icons education_atom"></i>
              <p>Mes Formations</p>
            </a>
          </li>
          <li>
            
          </li>
          <li class="active-pro">
            
              <p></p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <!-- <div class="main-panel" id="main-panel"> -->
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar navbar-toggler bg-primary">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            <!-- </div>
            <a class="navbar-brand" href="#pablo"></a>
          </div> -->
          <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button> -->
        </div>
      </nav>
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                   
                </div>
            </div>
        </div>
    </div>
</div>
<br><br>
<br>
<div class="lesformation">
@if(Auth::user()->formation == 'Développement web fullstack PHP')
  <div>
      <a href="/index_uapprenant" class="Package">
          <div class=" formation">Dévelopement web  fullstack php</div>
      </a> 
  </div>
  @endif
  @if(Auth::user()->formation == 'Développement web frontend PHP')
  <div>
    <a href="" class="Package">
        <div class=" formation">Développement web frontend PHP</div>
    </a>
</div>
@endif 
@if(Auth::user()->formation == 'Développement web backend PHP')
<div>
    <a href="" class="Package">
        <div class=" formation">Développement web backend  php</div>
    </a>
</div> 
@endif

@if(Auth::user()->formation == 'Développement mobile')

<div>
    <a href="" class="Package">
        <div class=" formation">Développement mobile</div>
    </a>
    
</div>
@endif
</div>
 

<style>
    .lesformation{
        display:flex;
        justify-content:left;
        align-items:center;
        flex-direction:row;
        flex-wrap:wrap;
        gap:10px;
        margin-left:400px;
    }
    .formation{
        display:flex;
       justify-content:center;
        font-size:20px;
        background-color:gray;
       width:200px;
       height:20vh;
       color:white;
       align-items:center;
       text-align:center;
       box-shadow: -1px 9px 40px -12px rgba(0,0,0,1.75);
      -moz-box-shadow:-1px 9px 40px -12px rgba(0,0,0, 1.75);
      -webkit-box-shadow:-1px 9px 40px -12px rgba(0,0,0,1.75);

      
    }
    a:hover{
        text-decoration:none;
    }
    .Package{
        display:flex;
        justify-content:center;
        flex-direction:column;
        text-decoration:none;
    }
   
</style>

@endsection
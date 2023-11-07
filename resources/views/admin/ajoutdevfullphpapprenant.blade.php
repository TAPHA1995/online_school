
<!-- @extends('layouts.app') -->
<!-- @section('content') -->
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
<body>
     
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
    <br>
<div class="containercours bg">
@foreach($formation_devfullphps as $row)
    <div class="module1 srcoll-bar ">
        <div class="titrevideo">
             <p class="text">{{$row->titre}}</p>
        </div>
       
        <div class="textconsign">
             <p class="text">{{$row->consigne}} </p>
        </div>
        <div class="video">
            <iframe width="693" height="315" src="{{$row->video}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen controls>
            </iframe> 
        </div>
        <div class="validationcours" >
          
              <a href="{{$row->lienvc}}" class="btn bg-primary  text-dark" disabled>  
              <div class="validationcountdown">
                  <p> Valider le cours</p>
                  <div class="countdownvc">
                    <p id="days">00</p>
                    <p id="hours">00</p>
                    <p id="minutes">00</p>
                    <p id="seconds">00</p> 
                  </div>
               </div>
               </a>
            <a href="" class="btn btn-success text-light">Non validé</a>
        </div>
        <div class="testvalidation">
            <p class="text">{{$row->sujetvm}}</p>
            <a href="{{$row->lienvm}}" target="blank" class="" style="color:red; font-size:30px;" target="blank">Lien</a><br>
            <img src="imagesepreuve/{{$row->imagevm}}" style="width:520px; height:50vh; "alt="">
        </div>
        <div clss="envoiteste">
            <span>
            <a href="/soumettre/{{ Auth::user()->email}}" class="btn bg-primary text-dark">Soumettre le teste</a>
            <a href="" class="btn btn-success text-light">Non validé</a>
             </span>
        </div>
       
    </div>


    @endforeach
    </div>
  
    <!-- <div class="countdown">
                            <strong><p id="days">00</p></strong>
                            <span class="days">Days</span>
                        </div>
                        <div class="countdown">
                            <strong><p id="hours">00</p></strong>
                            <span class="hours">Hours</span>
                        </div>
                        <div class="countdown">
                            <strong><p id="minutes">00</p></strong>
                            <span class="minutes">Minutes</span>
                        </div>
                        <div class="countdown">
                            <strong><p id="seconds">00</p></strong>
                            <span class="minutes">Seconds</span>
                        </div> -->
</body>
</html>
<style>
.containercours{
display:flex;
justify-content:center;
width:100%;
overflow-y: scroll;
flex-wrap:wrap;
gap:100px;
/* background-color:#6610f2; */

}
.module1{
    display:flex;
    justify-content:center;
    flex-direction:column;
    flex-wrap:wrap;
    width:700px;
    border:2px solid white;
    margin-top:10px;
    margin-left:100px;
    box-shadow: -1px 9px 40px -12px rgba(0,0,0,1.75);
    -moz-box-shadow:-1px 9px 40px -12px rgba(0,0,0, 1.75);
    -webkit-box-shadow:-1px 9px 40px -12px rgba(0,0,0,1.75);

   

}
.ajoutfromation{
        display:flex;
        justify-content:right;
    }

    .testvalidation {
        display:flex;
        justify-content:center;
        flex-direction:column;
    }
    .countdownvc{
      display:flex;
      width:100px;
      gap:20px;
      line-height:-20px;
      color:white;
      font-size:20px;
      /* margin-left:80px; */
        /* line-height:20px; */


    }
.validationcountdown{
        display:flex;
        justify-content:center;
        align-items:center;
        flex-direction:column;
}
   

</style>



<script>
    var countDownDate = new Date("Nov 12. 2023 00:00:00").getTime();
    var x = setInterval(function(){
    var now = new Date().getTime();
    var distance = countDownDate - now;

    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60 ));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    document.getElementById("days").innerHTML = days;
    document.getElementById("hours").innerHTML = hours;
    document.getElementById("minutes").innerHTML = minutes;
    document.getElementById("seconds").innerHTML = seconds;
    
});
</script>
@endsection
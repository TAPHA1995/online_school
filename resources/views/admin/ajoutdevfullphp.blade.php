@include('layout.master')
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
    <br>
    <div class="ajoutfromation">
    <a href="/affiche_formationdevfullphp" class="btn btn-primary ">Ajouter une formation</a>
</div>
<div class="containercours bg">
@foreach($formation_devfullphps as $row)
    <div class="module1 srcoll-bar ">
        <div class="titrevideo">
             <p class="text-light">{{$row->titre}}</p>
        </div>
       
        <div class="textconsign">
             <p class="text-light">{{$row->consigne}} </p>
        </div>
        <div class="video">
            <video controls width="545" height="300" >
            <source src="/upload/{{$row->video}}" type="">
            </video>
        </div>
        <div class="validationcours">
            <a href="{{$row->lienvc}}" class="btn bg-primary  text-dark">Valider le cours</a>
            <a href="" class="btn btn-success text-light">Non validé</a>
        </div>
        <div class="testvalidation">
            <p class="text-light">{{$row->sujetvm}}</p>
            <a href="{{$row->lienvm}}" class="" style="color:red; font-size:30px;">Lien</a><br>
            <img src="images/{{$row->imagevm}}" style="width:520px; height:50vh; "alt="">
        </div>
        <div clss="envoiteste">
            <span>
            <a href="/soumettre/{{ Auth::user()->email}}" class="btn bg-primary text-dark">Soumettre le teste</a>
            <a href="" class="btn btn-success text-light">Non validé</a>
            <a href="role_editdevfull/{{$row->id}}" class="btn btn-danger text-light">Editer</a>
            <form action="devfullphp_delete/{{$row->id}}" method="post">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}
                        <button type="submit" class="btn btn-danger">Supprimer </button>
             </form>
             </span>
        </div>
       
    </div>
    @endforeach
    </div>
  
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
    width:550px;
    border:2px solid white;
    margin-top:10px;
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

   

</style>
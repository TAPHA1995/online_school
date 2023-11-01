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
  

    <br><br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Editez le profil</div>

                <div class="card-body">
                @if(session()->has('messageA'))
                <div class="alert alert-success" role="alert">
                     {{session()->get('messageA')}}
                </div>
                @endif
                    <form method="POST" action="/role_register_update/{{ $users->id }}">
                    {{  csrf_field() }}
                    {{  method_field('PUT') }}

                        <div class="form-group row">
                            <label for="photo" class="col-md-4 col-form-label text-md-right">Photo</label>

                            <div class="col-md-6">
                                <input id="photo" type="file" class="form-control" name="photo" value="{{ $users->photo }}" required autocomplete="photoe" autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nom" class="col-md-4 col-form-label text-md-right">Nom</label>

                            <div class="col-md-6">
                                <input id="nom" type="text" class="form-control" name="nom" value="{{ $users->nom }}" required autocomplete="nom" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="prenom" class="col-md-4 col-form-label text-md-right">Prenom</label>

                            <div class="col-md-6">
                                <input id="prenom" type="text" class="form-control" name="prenom" value="{{ $users->prenom }}" required autocomplete="prenom" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control" name="email" value="{{ $users->email }}" required autocomplete="email" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="telephone" class="col-md-4 col-form-label text-md-right">Telephone</label>

                            <div class="col-md-6">
                                <input id="telephone" type="number" class="form-control" name="telephone" value="{{ $users->telephone }}" required autocomplete="telephone" autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="formation" class="col-md-4 col-form-label text-md-right">Formation</label>
                            <div class="col-md-6">
                                <input id="formation" type="text" class="form-control " name="formation" value="{{ $users->formation }}" required autocomplete="formation" autofocus>
                            </div>
                        </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                   Editer
                                </button>
                                <a href="/role_apprenant" type="" class="btn btn-danger">
                                   Annuler</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Changez le mot de passe') }}</div>

                <div class="card-body"> 

                @if(session()->has('messageB'))
                <div class="alert alert-danger" role="alert">
                     {{session()->get('messageB')}}
                </div>
                @endif  

                @if(session()->has('messageC'))
                <div class="alert alert-success" role="alert">
                     {{session()->get('messageC')}}
                </div>
                @endif  
                    <form method="POST" action="/role_register_changePassword/{{$users->id}}">
                        @csrf
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Ancien Mot de Passe') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="ancienmotPasse" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Nouveau Mot de Passe') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="nouveaumotPasse" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmez le Mot de Passe') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                                <a href="/role_apprenant" type="" class="btn btn-danger">
                                   Annuler</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
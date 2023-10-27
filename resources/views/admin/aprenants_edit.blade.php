
@extends('layout.master')

@section('Titre')
 Dashboard | funda of web IT
@ensection

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Editer Un aprenant</div>

                <div class="card-body">
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
@endsection

@section('scripts')

@endsection
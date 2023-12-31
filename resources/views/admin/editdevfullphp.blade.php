@include('layout.master')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Ajouter un Professeur</div>

                <div class="card-body">
                    <form method="POST" action="/devfullphp_update/{{$formation_devfullphps->id}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label for="photo" class="col-md-4 col-form-label text-md-right">{{ __('Titre') }}</label>
                            <div class="col-md-6">
                                <input id="photo" type="text" class="form-control @error('titre') is-invalid @enderror" name="titre" value="{{$formation_devfullphps->titre }}" required autocomplete="titre" autofocus>
                            
                                @error('titre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="consigne" class="col-md-4 col-form-label text-md-right">{{ __('Consigne') }}</label>

                            <div class="col-md-6">
                                <textarea id="nom" type="text" cols="30" rows="10" class="form-control @error('nom') is-invalid @enderror" name="consigne" value="{{$formation_devfullphps->consigne}}" required autocomplete="consigne" autofocus>
                                </textarea>
                                @error('consigne')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="video" class="col-md-4 col-form-label text-md-right">{{ __('Video') }}</label>

                            <div class="col-md-6">
                                <input id="video" type="text" class="form-control @error('video') is-invalid @enderror" name="video" value="{{$formation_devfullphps->video }}" required autocomplete="video" autofocus>
                                <p>
                                    @if($errors->has('video'))
                                    {{$errors->first('video')}}
                                    @endif
                                    @error('video')
                                </p>
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="lienvc" class="col-md-4 col-form-label text-md-right">{{ __('lien de validation du cours') }}</label>

                            <div class="col-md-6">
                                <input id="lienvc" type="text" class="form-control @error('lienvc') is-invalid @enderror" name="lienvc" value="{{$formation_devfullphps->lienvc}}" required autocomplete="email" autofocus>

                                @error('lienvc')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="sujetvm" class="col-md-4 col-form-label text-md-right">{{ __('Sujet du teste de validation du module') }}</label>

                            <div class="col-md-6">
                                <textarea id="sujetvm" type="text" cols="30" rows="10" class="form-control @error('nom') is-invalid @enderror" name="sujetvm" value="{{$formation_devfullphps->sujetvm}}" required autocomplete="sujetvm" autofocus>
                                </textarea>
                                @error('sujetvm')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lienvm" class="col-md-4 col-form-label text-md-right">{{ __('Lien validation module') }}</label>

                            <div class="col-md-6">
                                <input id="lienvm" type="text" class="form-control @error('lienvm') is-invalid @enderror" name="lienvm" value="{{$formation_devfullphps->lienvm}}" required autocomplete="lienvm" autofocus>

                                @error('formation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="imagevm" class="col-md-4 col-form-label text-md-right">{{ __('Image de validation module') }}</label>

                            <div class="col-md-6">
                                <input id="imagevm" type="file" value="{{$formation_devfullphps->imagevm}}" class="form-control @error('imagevm') is-invalid  @enderror" name="imagevm" required autocomplete="imagevm">
                                @if($errors->has('imagevm'))
                                <div class="error text-danger">{{$errors->first('imagevm')}}</div>
                                @endif
                                @error('imagevm')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Ajouter') }}
                                </button>
                                <a href="/index_u" class="btn btn-danger">Retour</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<style>

</style>
@extends('layout.master')

@section('Titre')
 Dashboard | funda of web IT
@ensection

@section('content')
   <br><br>
   <p>Liste des aprenants</p>
<table class="table table-striped">
                    <tr>
                        <th>Photo</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Email</th>
                        <th>téléphone</th>
                        <th>Formation</th>
                        <th>Editer</th>
                        <th>Supprimer</th>
                    </tr>

                  @foreach($users as $aprenant)
                    <tr>
                        <td><img style="width:100px" src="/images/{{$aprenant->photo}}" alt=""></td>
                        <td>{{$aprenant->nom}}</td>
                        <td>{{$aprenant->prenom}}</td>
                        <td>{{$aprenant->email}}</td>
                        <td>{{$aprenant->telephone}}</td>
                        <td>{{$aprenant->formation}}</td>
                        <td><a href="role_edit/{{$aprenant->id}}" class="btn btn-info">Editer </a></td>
                        <td><a href="" class="btn btn-danger">Supprimer </a>
                       </td>
                    </tr>
                    @endforeach  
                    </table>

@endsection

@section('scripts')

@endsection
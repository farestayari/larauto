@extends('layouts.app')

@section('content')
  <div class="container">
      <div class="row">
          <div class="col-md-10 col-md-offset-1">
              <div class="panel panel-default">
                  <div class="panel-heading">Mes Candidats
                                      <a class="btn btn-info fa fa-plus" href="{{route('candidat.create')}}">Ajouter</a>
                    {{-- @if(Session::has('success_msg'))
                      <div class="alert alert-success">{{ Session::get('success_msg') }}</div>
                  @endif --}}

                  </div>
                  <div class="panel-body">
                      <table class="table">
          <thead>
              <tr>
                <th>nom</th>
                <th>prenom</th>
                <th>cin</th>
                <th>telephone</th>
                <th>adresse</th>
                <th>nationalité</th>
                <th>categorie</th>
                <th>type</th>
                <th>date_naissance</th>
                <th>Action</th>
              </tr>
          </thead>
          <tfoot>
              <tr>
                  <th>nom</th>
                  <th>prenom</th>
                  <th>cin</th>
                  <th>telephone</th>
                  <th>adresse</th>
                  <th>nationalité</th>
                  <th>categorie</th>
                  <th>type</th>
                  <th>date_naissance</th>
                  <th>Action</th>

              </tr>
          </tfoot>
           @if($candidats)
          <tbody>
             @foreach($candidats as $candidat)
              <tr>
                  <td>{{$candidat->nom}}</td>
                  <td>{{$candidat->prenom}}</td>
                  <td>{{$candidat->cin}}</td>
                  <td>{{$candidat->telephone}}</td>
                  <td>{{$candidat->adress}}</td>
                  <td>{{$candidat->nationalité}}</td>
                  <td>{{$candidat->categorie}}</td>
                  <td>{{$candidat->type}}</td>
                  <td>{{$candidat->date_naissance}}</td>
                  <th><a class="btn btn-info fa fa-edit" href="#"></a>
                  <a class="btn btn-info fa fa-trash" href="#"></a>

                </th>
              </tr>
              @endforeach
          </tbody>
          @endif
      </table>
                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection

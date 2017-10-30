@extends('layouts.app')
@section('content')
  <div class="container">
      <div class="row">
          <div class="col-md-8 col-md-offset-2">
              <div class="panel panel-default">
                  <div class="panel-heading">Mes personnels
                                      


                  </div>
                  <div class="panel-body">
                      <table class="table">
          <thead>
              <tr>
                  <th>prenom</th>
                  <th>nom</th>
                  <th>adresse</th>
                  <th>Cin</th>
                  <th>telephone</th>
                  <th>Action</th>
              </tr>
          </thead>
          <tfoot>
              <tr>
                  <th>prenom</th>
                  <th>nom</th>
                  <th>adress</th>
                  <th>cin</th>
                  <th>telephone</th>
                  <th>Action</th>

              </tr>
          </tfoot>

          @if($candidats)
         <tbody>
             <tr>
                 <td>{{$candidats->nom}}</td>
                 <td>{{$candidats->prenom}}</td>
                 <td>{{$candidats->cin}}</td>
                 <td>{{$candidats->telephone}}</td>
                 <td>{{$candidats->adress}}</td>
                 <td>{{$candidats->nationalité}}</td>
                 <td>{{$candidats->categorie}}</td>
                 <td>{{$candidats->type}}</td>
                 <td>{{$candidats->date_naissance}}</td>
                 <th><a class="btn btn-info fa fa-user" href="#"></a>
                 <a class="btn btn-info fa fa-trash" href="#"></a>
               </th>
             </tr>
         </tbody>
         @endif

      </table>
                  </div>
              </div>
          </div>
      </div>
  </div>


@endsection

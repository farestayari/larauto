@extends('layouts.app')
@section('content')
  <div class="container">


          <div class="col-md-4">
            <div class="panel panel-default">
              <div class="panel-heading">
                {{$candidats->nom}} {{$candidats->prenom}}
              </div>
              <div class="panel-body">
                CIN : {{$candidats->cin}}
                <br>
                telephone : {{$candidats->telephone}}
                <br>
                Adresse : {{$candidats->adress}}
                <br>
                Nationalité: {{$candidats->nationalité}}
                <br>
                Categorie : {{$candidats->categorie}}
                <br>
                Type :  {{$candidats->type}}
                <br>
              Date de naissance : {{$candidats->date_naissance}}
                <br>
              </div>
            </div>
          </div>
          <div class="col-md-8 ">
              <div class="panel panel-default">
                  <div class="panel-heading">
                    Mes personnels
                  </div>
                  <div class="panel-body">
                      test
                  </div>
              </div>
          </div>



  </div>

  {{-- <div class="container">
    <div class="col-md-4">
      <div class="panel panel-default">
        <div class="panel-heading">
          test
        </div>
        <div class="panel-body">
          another test
        </div>
      </div>
    </div>
  </div> --}}


@endsection

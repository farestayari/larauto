@extends('layouts.app')
@section('content')
  <div class="panel panel-default">
    <div class="panel-heading">
        créer votre candidat
    </div>
    <div class="panel-body">
      <form class="" action="{{route('candidat.store')}}" method="post">
        {{csrf_field()}}

        <div class="form-group">
          <label for="">nom</label>
          <input type="text" name="nom" value="" class="form-control">
        </div>

        <div class="form-group">
          <label for="">prenom</label>
          <input type="text" name="prenom" value="" class="form-control">
        </div>

        <div class="form-group">
          <label for="">CIN</label>
          <input type="text" name="cin" value="" class="form-control">
        </div>

        <div class="form-group">
          <label for="">Date de naissance</label>
          <input type="date" name="date_naissance" value="" class="form-control">
        </div>

        <div class="form-group">
          <label for="">address</label>
          <input type="text" name="adress" value="" class="form-control">
        </div>

        <div class="form-group">
          <label for="">Nationalité</label>
          <select class="form-control" name="nationalité_id" id="nationalité">
            <option value="tunisienne">Tunisienne</option>
            <option value="autre">Autre</option>
          </select>
        </div>

        <div class="form-group">
          <label for="">Catégorie</label>
          <select class="form-control" name="categorie_id" id="catgorie">
            <option value="a">A</option>
            <option value="a1">A1</option>
            <option value="be">B+E</option>
            <option value="c">C</option>
            <option value="ce">C+E</option>
            <option value="d">D</option>
            <option value="de">D+E</option>
            <option value="d1">D1</option>
            <option value="h">H</option>
          </select>
        </div>

        <div class="form-group">
          <label for="">Telephone</label>
          <input type="text" name="telephone" value="" class="form-control">
        </div>

        <div class="form-group">
          <label for="">type</label>
          <select class="form-control" name="type_id" id="type">
            <option value="code">code</option>
            <option value="conduite">conduite</option>
          </select>
        </div>

        <div class="form-group">
          <div class="text-center">
            <button type="submit" class="btn btn-success">Ajouter</button>
          </div>
        </div>

      </form>
    </div>
  </div>
@endsection

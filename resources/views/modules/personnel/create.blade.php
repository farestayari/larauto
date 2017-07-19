@extends('layouts.app')


@section('content')
<div class="container">
 <div class="row">
<!--
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Ajouter un personnel
                </div>
                <div class="panel-body">       
              <form   role="form" enctype="multipart/form-data" method="put" action="PersonnelController@store" >
                <fieldset class="form-group">
                   {{csrf_field()}}
                </fieldset>
            <fieldset class="form-group">
                 <label for="exampleInputEmail1">prenom</label>
                 <input type="text" class="form-control" id="prenom" placeholder="Entre le prenom">
             </fieldset>
             <fieldset class="form-group">
                 <label for="exampleInputEmail1">nom</label>
                 <input type="text" class="form-control" id="nom" placeholder="Entre le nom">
             </fieldset>
             <fieldset class="form-group">
                 <label for="exampleTextarea">adresse</label>
                 <textarea class="form-control" id="adresse" rows="3"></textarea>
             </fieldset>
            <fieldset class="form-group">
                 <label for="exampleInputEmail1">CIN</label>
                 <input type="text" class="form-control" id="cin" placeholder="Entre le nom">
             </fieldset>
             <fieldset class="form-group">
                 <label for="exampleInputEmail1">telephone</label>
                 <input type="text" class="form-control" id="telephone" placeholder="Entre le nom">
             </fieldset>
             <button type="submit" class="btn btn-primary">Submit</button>
         </form>
                </div>
                </div>
-->
               
     {!! Form::open(['method'=>'POST','action'=>'PersonnelController@store']) !!}
      <div class="form-group">
         {!! Form::hidden('user_id',Auth::user()->id) !!}
      </div>
      <div class="form-group">
        {!! Form::label('nom', 'Nom:') !!}
        {!! Form::text('nom',null,['class'=>'form-control']) !!}
      </div>
      <div class="form-group">
        {!! Form::label('prenom', 'Prenom:') !!}
        {!! Form::text('prenom',null,['class'=>'form-control']) !!}
      </div>
      <div class="form-group">
        {!! Form::label('adress', 'Adress:') !!}
        {!! Form::text('adress',null,['class'=>'form-control']) !!}
      </div>
      <div class="form-group">
        {!! Form::label('telephone', 'telephone:') !!}
        {!! Form::text('telephone',null,['class'=>'form-control']) !!}
      </div>
            <div class="form-group">
        {!! Form::label('cin,', 'CIN:') !!}
        {!! Form::text('cin',null,['class'=>'form-control']) !!}
      </div>
      <div class="form-group">
        {!! Form::submit('creer', ['class'=>'btn btn-primary']) !!}
      </div>

    {!! Form::close() !!}
               
                </div>
</div>


@endsection
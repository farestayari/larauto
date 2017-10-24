@extends('layouts.app')


@section('content')
<div class="container">
 <div class="row">

     {!! Form::open(['method'=>'POST','action'=>'PersonnelController@store']) !!}

        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Ajouter un personnel
                </div>
                <div class="panel-body">
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


                </div>
</div>


@endsection

@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Mes personnels
                                    <a class="btn btn-info fa fa-plus" href="{{route('personnel.create')}}">Ajouter</a> 
                                           
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
        <tbody>
            <tr>
                <td>[data]</td>
                <td>[data]</td>
                <td>[data]</td>
                <td>[data]</td>
                <td>[data]</td>
                <th><a class="btn btn-info fa fa-edit" href="#"></a>
                <a class="btn btn-info fa fa-trash" href="#"></a> </th>
            </tr>
            
        </tbody>
    </table>

                </div>
            </div>
        </div>
    </div>
</div>    
@endsection
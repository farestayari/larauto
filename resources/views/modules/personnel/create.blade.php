@extends('layouts.app')


@section('content')
<div class="container">
 <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Ajouter un personnel
                </div>
                <div class="panel-body">       
              <form   role="form" enctype="multipart/form-data">
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
                </div>
</div>


@endsection
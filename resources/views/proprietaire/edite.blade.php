{{-- @extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Product</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('propri.index') }}"> Back</a>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('propri.update',$proprietaire->id) }}" method="POST">
    @csrf
    @method('PUT')

     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="nom" value="{{ $proprietaire->nom }}" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Detail:</strong>
                <textarea class="form-control" style="height:150px" name="prenom" placeholder="Prenom">{{ $proprietaire->prenom }}</textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>

@endsection

 --}}

@extends('layouts.app')
@section('content')
<div class="content">
    <div class="container-fluid">
       <div class="row">
          <div class="col-lg-8 offset-lg-12 ">
            <div class="pull-left">
            <h2> édite Propriétaire N°{{ $proprietaire->id }}</h2>
            </div>
          </div>
          @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
       </div>
       <div class="row">
          <div class="col-lg-6">
             <div class="card-box">
                <form action="{{ route('propri.update',$proprietaire->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                
                   <div class="form-group">
                      <label for="userName"> Name</label>
                      <input type="text" value="{{ $proprietaire->nom }}" name="nom" placeholder="Entrer user name" class="form-control" id="userName">
                   </div>
                   <div class="form-group">
                      <label for="emailAddress"> Prenom</label>
                      <input type="text" value="{{ $proprietaire->email }}"  name="prenom" placeholder="Entrer Prenom" class="form-control" id="emailAddress">
                   </div>
                   <div class="form-group">
                      <label for="pass1"> Email</label>
                      <input id="adresse" value="{{ $proprietaire->email }}"  name="email" type="text" placeholder="Entrer Address" class="form-control">
                   </div>
                   <div class="form-group">
                      <label for="pass1"> Address</label>
                      <input id="adresse" value="{{ $proprietaire->adresse }}"  name="adresse" type="text" placeholder="Entrer Address" class="form-control">
                   </div>
                   <div class="form-group">
                      <label for="passWord1">Carte d'identite Nationale</label>
                      <input id="passWord1" value="{{ $proprietaire->cin }}"  name="cin" type="text" placeholder="Carte d'identite Nationale" class="form-control">
                   </div>
                
             </div>
             <!-- end card-box -->
          </div>
          <!-- end col -->
          <div class="col-lg-6">
             <div class="card-box">
               
                   <div class="form-group">
                      <label for="userName2"> ville</label>
                      <input type="text" value="{{ $proprietaire->ville }}"  name="ville" placeholder="Entrer ville" class="form-control" id="userName2">
                   </div>
                   <div class="form-group">
                      <label for="emailAddress2">Téléphone</label>
                      <input type="text" value="{{ $proprietaire->tel }}"  name="tel" placeholder="Entrer Téléphone" class="form-control" id="emailAddress2">
                   </div>
                   <div class="form-group">
                      <label for="pass12">description</label>
                      <textarea class="form-control" style="height:150px" name="description" placeholder="description"></textarea>
                   </div>
                   
              
             </div>
          </div>
          <!-- end col -->
       </div>
       <!-- end row -->
       <div class="row">
          <div class="col-lg-4 offset-lg-4 text-center">
             <button type="submit" class="btn btn-success btn-rounded waves-light waves-effect">Valider</button>
             {{-- <button type="button" class="btn btn-danger btn-rounded waves-light waves-effect">Supprimer</button> --}}
             <a class="btn btn-outline-info btn-rounded waves-light waves-effect" href="{{ route('propri.index') }}">Annuler</a>
             {{-- <button type="button" class="btn btn-outline-info btn-rounded waves-light waves-effect">Annuler</button> --}}
          </div>
       </div>
       <!-- end row -->
    </form>
    </div>
    <!-- container -->
 </div>

 @endsection
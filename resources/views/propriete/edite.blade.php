{{-- @extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Product</h2>
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
   
<form action="{{ route('propriete.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Typ propriété:</strong>
                <select  class="form-control" name="type_propriete" >
                    <option value=""></option> 
                    @foreach ($propriete_types as $propriete_type)
                    <option value="{{$propriete_type->proprietes_name}}">{{$propriete_type->proprietes_name}}</option>
                    @endforeach
                    </select>
                
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>batiment :</strong>
                <textarea class="form-control" style="height:150px" name="batiment" placeholder="Prenom"></textarea>
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
           <div class="col-lg-4 offset-lg-8 text-right">
              {{-- <p>
                 <button type="button" class="btn btn-icon waves-effect waves-light btn-pink pagination-maj"><i class="icon-arrow-left"></i></button>                                
                 <button type="button" class="btn btn-icon waves-effect waves-light btn-pink pagination-maj"><i class="icon-arrow-right"></i></button>
              </p> --}}
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
                <form action="{{ route('propriete.update',$propriete->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                   
                    <div class="form-group">
                       <label for="emailAddress"> Batiment</label>
                       <input type="text" name="batiment" placeholder="batiment" class="form-control" id="emailAddress">
                    </div>
                    <div class="form-group">
                       <label for="pass1"> Etage</label>
                       <input id="adresse" name="etage" type="text" placeholder="Etage" class="form-control">
                    </div>
                    <div class="form-group">
                       <label for="pass1"> Num titre</label>
                       <input id="adresse" name="num_titre" type="text" placeholder="Num titre" class="form-control">
                    </div>
                    <div class="form-group">
                       <label for="passWord1">Surfac</label>
                       <input id="passWord1" name="surfac" type="text" placeholder="Surfac" class="form-control">
                    </div>
                 
              </div>
              <!-- end card-box -->
           </div>
           <!-- end col -->
           <div class="col-lg-6">
              <div class="card-box">
                
                    <div class="form-group">
                       <label for="userName2"> Article impot</label>
                       <input type="text" name="article_impot" placeholder="article impot" class="form-control" id="userName2">
                    </div>
                    <div class="form-group">
                        <label for="userName"> Type propriete</label>
                        <select  class="form-control" name="type_propriete" >
                         <option value="">Coisire votre p : type</option> 
                         @foreach ($propriete_types as $propriete_type)
                         <option value="{{$propriete_type->proprietes_name}}">{{$propriete_type->proprietes_name}}</option>
                         @endforeach
                         </select>
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
              <a class="btn btn-outline-info btn-rounded waves-light waves-effect" href="{{ route('propriete.index') }}">Annuler</a>
              {{-- <button type="button" class="btn btn-outline-info btn-rounded waves-light waves-effect">Annuler</button> --}}
           </div>
        </div>
        <!-- end row -->
     </form>
     </div>
     <!-- container -->
  </div>
 
  @endsection
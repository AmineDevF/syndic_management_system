



@extends('layouts.app')
@section('content')
<div class="content">
    <div class="container-fluid">
       <div class="row">
          <div class="col-lg-12 ml-5 ">
             <h2>
                Creée un nouveaux Type Propriété
             </h2>
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
          <div class="col-lg-8">
             <div class="card-box">
                <form action="{{ route('p_t.store') }}" method="POST">
                    @csrf
                   <div class="col-lg-8 form-group">
                      <label for="userName"> Type Propriété </label>
                      <input type="text" name="proprietes_name" placeholder="Type Propriété" class="form-control" id="userName">
                   </div>
                   
                  
                   
                
             </div>
             <!-- end card-box -->
          </div>
         
       </div>
       <!-- end row -->
       <div class="row">
          <div class="col-lg-2 text-center">
             <button type="submit" class="btn btn-success btn-rounded waves-light waves-effect">Valider</button>
             {{-- <button type="button" class="btn btn-danger btn-rounded waves-light waves-effect">Supprimer</button> --}}
             <a class="btn btn-outline-info btn-rounded waves-light waves-effect" href="{{ route('p_t') }}">Annuler</a>
             {{-- <button type="button" class="btn btn-outline-info btn-rounded waves-light waves-effect">Annuler</button> --}}
          </div>
       </div>
       <!-- end row -->
    </form>
    </div>
    <!-- container -->
 </div>

 @endsection
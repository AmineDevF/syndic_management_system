
@extends('layouts.app')
@section('content')
<div class="content">
    <div class="container-fluid">
       <div class="row">
          <div class="col-lg-12 ml-5 ">
             <h2>
                Creée une nouvelle facture
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
                <form action="{{ route('facture.store') }}" method="POST">
                    @csrf
                   <div class="col-lg-8 form-group">
                      <label for="userName"> Prestation</label>
                      <input type="text" name="prestation" placeholder="Prestation" class="form-control" id="userName">
                   </div>
                   <div class="col-lg-8 form-group">
                      <label for="emailAddress"> Num facture</label>
                      <input type="text" name="num_facture" placeholder="num facture" class="form-control" id="emailAddress">
                   </div>
                   <div class="col-lg-8 form-group">
                      <label for="pass1"> Montant (MAD)</label>
                      <input id="adresse" name="montant" type="text" placeholder="Montant" class="form-control">
                   </div>
                   <div class="col-lg-8 form-group">
                      <label for="pass1">Date facture</label>
                      {{-- <input id="adresse" name="date_facture" type="text" placeholder="Date facture" class="form-control"> --}}
                      <input type="datetime-local" value="2022-01-01T00:00:00" name="date_facture" class="form-control" />
                   </div>
                   <div class="col-lg-8 form-group">
                    <label for="pass1">Propriétes ID</label>
                    <select  class="form-control" name="propriete_id" >
                     <option value=""></option> 
                     @foreach ($propriete_info as $info_pro)
                     <option value="{{$info_pro->id}}">{{$info_pro->num_titre}}</option>
                     @endforeach
                     </select>
                 </div>
                  
                   
                
             </div>
             <!-- end card-box -->
          </div>
          <!-- end col -->
          {{-- <div class="col-lg-6">
             <div class="card-box">
               
                   <div class="form-group">
                      <label for="userName2"> ville</label>
                      <input type="text" name="ville" placeholder="Entrer ville" class="form-control" id="userName2">
                   </div>
                   <div class="form-group">
                      <label for="emailAddress2">Téléphone</label>
                      <input type="text" name="tel" placeholder="Entrer Téléphone" class="form-control" id="emailAddress2">
                   </div>
                   <div class="form-group">
                      <label for="pass12">description</label>
                      <textarea class="form-control" style="height:150px" name="description" placeholder="description"></textarea>
                   </div>
                   
              
             </div>
          </div> --}}
          <!-- end col -->
       </div>
       <!-- end row -->
       <div class="row">
          <div class="col-lg-2 text-center">
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
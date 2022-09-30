@extends('layouts.app')
  
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> #{{ $propriete->id }} Propriété Information </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('propriete.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
  
            <div class="card" style="width: 100%;">
                <ul class="list-group list-group-flush">
                    <div class="card-footer">
                        Type propriete :
                      </div>
                  <li class="list-group-item">{{ $propriete->type_propriete }}</li>
                  <div class="card-footer">
                    Batiment :
                  </div>
                  <li class="list-group-item">{{ $propriete->batiment }}</li>
                  <div class="card-footer">
                    Num titre :
                  </div>
                  <li class="list-group-item">{{ $propriete->num_titre }}</li>
                </ul>
                <div class="card-footer">
                    Surfac
                </div>
                <li class="list-group-item">{{ $propriete->surfac }}</li>
                <div class="card-footer">
                    Article impot
                </div>
                <li class="list-group-item">{{ $propriete->article_impot }}</li>
                {{-- <div class="card-footer">
                    Propriétaire Adresse
                </div>
                <li class="list-group-item">{{ $propriete->adresse }}</li>
              </div>
                <div class="card-footer">
                    Propriétaire Téléphone
                </div>
                <li class="list-group-item">{{ $propriete->tel }}</li>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12">
  --}}
                <div class="card-footer mb-4">
                  <h2> Propriétaires info :</h2>  
                </div>
                <li class="list-group-item"><b>{{ $all_proprietaire->nom }}</b></li>
                <li class="list-group-item"><b>{{ $all_proprietaire->prenom }}</b></li>
                <li class="list-group-item"><b>{{ $all_proprietaire->tel }}</b></li>
                <li class="list-group-item"><b>{{ $all_proprietaire->ville }}</b></li>
                <li class="list-group-item"><b>{{ $all_proprietaire->adresse }}</b></li>
                <li class="list-group-item"><b>{{ $all_proprietaire->email }}</b></li>
                <li class="list-group-item"><b>{{ $all_proprietaire->cin }}</b></li>
         
               
    
           
    
    
    </div>
    

@endsection
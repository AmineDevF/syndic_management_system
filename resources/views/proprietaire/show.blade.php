@extends('layouts.app')
  
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> #{{ $proprietaire->id }} Propriétaire Information </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('propri.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
  
            <div class="card" style="width: 100%;">
                <ul class="list-group list-group-flush">
                    <div class="card-footer">
                        Propriétaire Nom :
                      </div>
                  <li class="list-group-item">{{ $proprietaire->nom }}</li>
                  <div class="card-footer">
                    Propriétaire Prenom :
                  </div>
                  <li class="list-group-item">{{ $proprietaire->prenom }}</li>
                  <div class="card-footer">
                    Propriétaire ville :
                  </div>
                  <li class="list-group-item">{{ $proprietaire->ville }}</li>
                </ul>
                <div class="card-footer">
                    Propriétaire email
                </div>
                <li class="list-group-item">{{ $proprietaire->email }}</li>
                <div class="card-footer">
                    Propriétaire Carte d'identité Nationale
                </div>
                <li class="list-group-item">{{ $proprietaire->cin }}</li>
                <div class="card-footer">
                    Propriétaire Adresse
                </div>
                <li class="list-group-item">{{ $proprietaire->adresse }}</li>
              </div>
                <div class="card-footer">
                    Propriétaire Téléphone
                </div>
                <li class="list-group-item">{{ $proprietaire->tel }}</li>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12">
  
                <div class="card-footer">
                    Propriétaire Description
                </div>

                <h3 class="list-group-item">{{ $proprietaire->description }}</h3> 
            </div> 
            {{-- @foreach ($proprietaire->proprietes as $item)
            {{$item->surfac}}
            @endforeach --}}
        </div> 
    </div>
@endsection
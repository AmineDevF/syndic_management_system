@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Tout les Propriétaire</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success btn-rounded waves-light waves-effect" href="{{ route('propri.create') }}"> Ajouter Nouveaux propriétaire</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered" style=" background-color: #02c0ce5c;">
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Prenom</th>
            <th>Téléphone</th>
            <th>Adresse</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($proprietaires as $proprietaire)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $proprietaire->nom }}</td>
            <td>{{ $proprietaire->prenom }}</td>
            <td>{{ $proprietaire->tel }}</td>
            <td>{{ $proprietaire->adresse }}</td>
            <td>
                <form action="{{ route('propri.destroy',$proprietaire->id) }}" method="POST">
   
                    <a class="btn btn-info btn-rounded waves-light waves-effect" href="{{ route('propri.show',$proprietaire->id) }}">Show</a>
    
                    <a class="btn btn-primary btn-rounded waves-light waves-effect" href="{{ route('propri.edit',$proprietaire->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger btn-rounded waves-light waves-effect">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $proprietaires->links("pagination::bootstrap-4") !!}
   

@endsection
@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Tout les Propriétaire</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('propri.create') }}"> Ajouter Nouveaux propriétaire</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Prenom</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($proprietaires as $proprietaire)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $proprietaire->nom }}</td>
            <td>{{ $proprietaire->prenom }}</td>
            <td>
                <form action="{{ route('propri.destroy',$proprietaire->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('propri.show',$proprietaire->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('propri.edit',$proprietaire->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $proprietaires->links(pagination::bootstrap-4) !!}
      

@endsection
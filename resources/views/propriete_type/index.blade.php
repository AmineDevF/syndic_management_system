

@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-8 margin-tb">
            <div class="pull-left">
                <h2>Propriété type</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('p_t.create') }}"> Ajouter Nouveaux propriété type</a>
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
            <th>#</th>
            <th>Prenom</th>
           
        </tr>
        @foreach ($propriete_type as $p)
        <tr>
            <td>{{ $p->id }}</td>
            <td>{{ $p->proprietes_name }}</td>
           
        </tr>
        @endforeach
    </table>
  
    
      

@endsection
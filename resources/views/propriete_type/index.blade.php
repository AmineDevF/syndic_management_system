@extends('layouts.app')

@section('content')
        <div class="col-lg-10 margin-tb">
            <div class="pull-left">
                <h2>Propriété type </h2>
            </div>
            <div class="pull-right">
                {{-- <a class="btn btn-success" href="{{ route('p_t.create') }}"> Create New Propriété type</a> --}}
      
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th> Nom Propriéte</th>
            
           
        </tr>
        @foreach ($propriete_type as $p)
        <tr>
            <td>{{ $p->id }}</td>
            <td>{{ $p->proprietes_name }}</td>
            
        </tr>      
    </div>
        </div>
        @endforeach
    </table>
  
   
      

@endsection
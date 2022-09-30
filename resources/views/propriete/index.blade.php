@extends('layouts.app')

@section('content')
<div class="container-fluid">



    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Liste des Propriétes</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('propriete.create') }}"> Create New Propriété</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif



    <div class="row">
       <div class="col-lg-12">
          <div class="card-box">
             <h4 class="header-title mb-3">Syndic Pro</h4>
             <div class="table-responsive">
                <table class="table table-hover table-centered m-0">
                   <thead>
                      <tr>
                         <th>ID</th>
                         <th>Type Propriété</th>
                         <th>Batiment</th>
                         <th>Etage</th>
                         <th>Nume Titre</th>
                         <th>Surfac</th>
                         <th>Article Importation</th>
                         <th>Action</th>
                      </tr>
                   </thead>
                   <tbody>
                    @foreach ($proprietes as $propriete)
                        
                   
                      <tr>
                        
                         <td>
                            {{$propriete->id}}
                         </td>
                         <td>
                            <h5 class="m-0 font-weight-normal">{{$propriete->type_propriete}}</h5>
                            
                         </td>
                         <td>
                            <i class="mdi mdi-currency-btc text-primary"></i> {{$propriete->batiment}}
                         </td>
                         <td>
                            {{$propriete->etage}}
                         </td>
                         <td>
                            {{$propriete->num_titre}}
                         </td>
                         <td>
                           
                            {{$propriete->surfac}}
                         </td>
                         <td>
                            {{$propriete->article_impot}}
                         </td>
                        
                         <td>
                           
                           <form action="{{ route('propriete.destroy',$propriete->id) }}" method="POST">
   
                              <a class="btn btn-primary btn-rounded waves-light waves-effect" href="{{ route('propriete.edit',$propriete->id) }}">Edit</a>
                              <a class="btn btn-info btn-rounded waves-light waves-effect" href="{{ route('propriete.show',$propriete->id) }}">Show</a>
                              @csrf
                              @method('DELETE')
                
                              <button type="submit" class="btn btn-danger btn-rounded waves-light waves-effect">Delete</button>
                          </form>
                         </td>
                      </tr>
                      
                     
                   </tbody>
                   @endforeach
                </table>
             </div>
          </div>
       </div>
    </div>
    <!-- end row -->
    {!! $proprietes->links("pagination::bootstrap-4") !!}
 </div>
 <!-- container -->
@endsection

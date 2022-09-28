@extends('layouts.app')

@section('content')
<div class="container-fluid">

    <div class="row">
       <div class="col-lg-12">
          <div class="card-box">
             <h4 class="header-title mb-3">Admine pannel</h4>
             <div class="table-responsive">
                <table class="table table-hover table-centered m-0">
                   <thead>
                      <tr>
                         <th>profeil</th>
                         <th>Nom copropiete</th>
                         <th>Email</th>
                         <th>Code postale</th>
                         <th>Ville</th>
                         <th>Pays</th>
                         <th>Adresse</th>
                         <th>Tel</th>
                      </tr>
                   </thead>
                   <tbody>
                    @foreach ($users as $user)
                        
                   
                      <tr>
                        
                         <td>
                            <img src="{{asset('assets/images/users/avatar-2.jpg') }}" alt="contact-img" title="contact-img" class="rounded-circle thumb-sm" />
                         </td>
                         <td>
                            <h5 class="m-0 font-weight-normal">{{$user->name}}</h5>
                            
                         </td>
                         <td>
                            <i class="mdi mdi-currency-btc text-primary"></i> {{$user->email}}
                         </td>
                         <td>
                            {{$user->code_postale}}
                         </td>
                         <td>
                            {{$user->ville}}
                         </td>
                         <td>
                            {{-- <a href="#" class="btn btn-sm btn-custom"><i class="mdi mdi-plus"></i></a>
                            <a href="#" class="btn btn-sm btn-danger"><i class="mdi mdi-minus"></i></a> --}}
                            {{$user->Pays}}
                         </td>
                         <td>
                            {{$user->adresse}}
                         </td>
                         <td>
                            {{$user->tel}}
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
 </div>
 <!-- container -->
@endsection

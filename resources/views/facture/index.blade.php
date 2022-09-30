{{-- @extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-4">
        <div class="card-box">
            <div class="text-center">
                <img src="assets/images/companies/airbnb.png" alt="logo" class="avatar-xl rounded-circle mb-3">
                <h4 class="mb-1">Airbnb Inc.</h4>
                <p class="text-muted">San Francisco, California</p>
            </div>

            <p class="font-14 text-center text-muted">
                A‌i‌r‌b‌n‌b‌, ‌ ‌I‌n‌c‌.‌ is a company based in San Francisco that operates an online marketplace and hospitality service
                for people to lease or rent..
            </p>

            <div class="text-center">
                <a href="javascript:void(0);" class="btn btn-sm btn-secondary">View more info</a>
            </div>

            <div class="row mt-5 text-center">
                <div class="col-6">
                    <h5 class="font-weight-normal text-muted">Revenue (USD)</h5>
                    <h3 class="m-b-30">260 cr</h3>
                </div>
                <div class="col-6">
                    <h5 class="font-weight-normal text-muted">Number of employees</h5>
                    <h3 class="m-b-30">3.1k</h3>
                </div>
            </div>

            <div id="company-1" class="text-center"></div>

        </div>
    </div><!-- end col -->

    <div class="col-md-4">
        <div class="card-box">
            <div class="text-center">
                <img src="assets/images/companies/apple.png" alt="logo" class="avatar-xl rounded-circle mb-3">
                <h4 class="mb-1">Apple Inc.</h4>
                <p class="text-muted  font-14">Cupertino, California</p>
            </div>

            <p class="font-14 text-center text-muted">
                Apple Inc. is an American multinational technology company headquartered in Cupertino, California, that designs, develops,
                and sells..
            </p>

            <div class="text-center">
                <a href="javascript:void(0);" class="btn btn-sm btn-secondary">View more info</a>
            </div>

            <div class="row mt-5 text-center">
                <div class="col-6">
                    <h5 class="font-weight-normal text-muted">Revenue (USD)</h5>
                    <h3 class="m-b-30">22,923.4 cr</h3>
                </div>
                <div class="col-6">
                    <h5 class="font-weight-normal text-muted">Number of employees</h5>
                    <h3 class="m-b-30">47k</h3>
                </div>
            </div>

            <div id="company-2" class="text-center"></div>

        </div>
    </div><!-- end col -->

    <div class="col-md-4">
        <div class="card-box">
            <div class="text-center">
                <img src="assets/images/companies/google.png" alt="logo" class="avatar-xl rounded-circle mb-3">
                <h4 class="mb-1">Google LLC</h4>
                <p class="text-muted  font-14">Menlo Park, California</p>
            </div>

            <p class="font-14 text-center text-muted">
                Google LLC is an American multinational technology company that specializes in Internet-related services and products, which
                include..
            </p>

            <div class="text-center">
                <a href="javascript:void(0);" class="btn btn-sm btn-secondary">View more info</a>
            </div>

            <div class="row mt-5 text-center">
                <div class="col-6">
                    <h5 class="font-weight-normal text-muted">Revenue (USD)</h5>
                    <h3 class="m-b-30">110 bn</h3>
                </div>
                <div class="col-6">
                    <h5 class="font-weight-normal text-muted">Number of employees</h5>
                    <h3 class="m-b-30">72k</h3>
                </div>
            </div>

            <div id="company-3" class="text-center"></div>

        </div>
    </div><!-- end col -->
</div>

@endsection --}}

@extends('layouts.app')

@section('content')
<div class="container-fluid">



    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Liste des Propriétes</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('facture.create') }}"> Create New facture</a>
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
             <h4 class="header-title mb-3">Syndic Pro facture</h4>
             <div class="table-responsive">
                <table class="table table-hover table-centered m-0">
                   <thead>
                      <tr>
                         <th>ID</th>
                         <th>Préstation</th>
                         <th>Num Facture</th>
                         <th>Montant</th>
                         <th>Date Facture</th>
                         <th>Action</th>
                      </tr>
                   </thead>
                   <tbody>
                    @foreach ($facturss as $facturs)
                        
                   
                      <tr>
                        
                         <td>
                            {{$facturs->id}}
                         </td>
                         <td>
                            <h5 class="m-0 font-weight-normal">{{$facturs->prestation}}</h5>
                            
                         </td>
                         <td>
                            <i class="mdi mdi-currency-btc text-primary"></i> {{$facturs->num_facture}}
                         </td>
                         <td>
                            {{$facturs->montant}}
                         </td>
                         <td>
                            {{$facturs->date_facture}}
                         </td>
                        
                        
                         <td>
                           
                           <form action="{{ route('propriete.destroy',$facturs->id) }}" method="POST">
   
                              <a class="btn btn-primary btn-rounded waves-light waves-effect" href="{{ route('propriete.edit',$facturs->id) }}">Edit</a>
                              <a class="btn btn-info btn-rounded waves-light waves-effect" href="{{ route('propriete.show',$facturs->id) }}">Show</a>
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
    {!! $facturss->links("pagination::bootstrap-4") !!}
 </div>
 <!-- container -->
@endsection

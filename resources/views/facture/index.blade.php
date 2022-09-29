@extends('layouts.app')

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

@endsection
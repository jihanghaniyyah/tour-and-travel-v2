@extends('customer.layouts.customer')

@push('style')
    <!-- CSS Libraries -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{asset('css/customer/header.css')}}">
    <link rel="stylesheet" href="{{asset('css/customer/footer.css')}}">
    <link rel="stylesheet" href="{{asset('css/customer/package-detail.css')}}">
@endpush

@section('content')

    <div class="container landing"> 
        <div class="row">
            <div class="col-4 title mt-5">
                <h2>Labuan Bajo Tour</h2>
                <p>Jalan Sejahtera <br/>Bandung, Jawa Barat</p>
                <h3 class="mt-5 card-price">Rp 1.090.000</h3>
                <a href="/checkout" class="btn btn-book btn-primary mt-4">Check Out</a>
            </div>
            <div class="col-4 mt-5">
                <img src="assets/images/carousel_1.png" class="card-img img-fluid">
            </div>
            <div class="col-4 mt-5">
                <img src="assets/images/carousel_1.png" class="card-img img-fluid">
            </div>
        </div>
        <div class="my-3">
            <h3>Destinasi</h3>
            <div class="d-flex justify-content-between">
                <a href="/destination-detail" class="button-card">
                    <div class="card card-image" style="width: 18rem;">
                        <img src="/assets/images/carousel_1.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Pantai Pink</h5>
                        </div>
                    </div>
                </a>
                <a href="/destination-detail" class="button-card">
                    <div class="card card-image" style="width: 18rem;">
                        <img src="/assets/images/carousel_1.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Pulau Komodo</h5>
                        </div>
                    </div>
                </a>
                <a href="/destination-detail" class="button-card">
                    <div class="card card-image" style="width: 18rem;">
                        <img src="/assets/images/carousel_1.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Labuan Bajo</h5>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="mb-5">
            <h3>Deskripsi</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse nibh purus, lacinia vel tempor interdum, 
                finibus ac nulla. Vestibulum consectetur magna eu eros consectetur, vel commodo sem vestibulum.
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse nibh purus, lacinia vel tempor interdum, 
                finibus ac nulla. Vestibulum consectetur magna eu eros consectetur, vel commodo sem vestibulum. 
            </p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse nibh purus, lacinia vel tempor interdum, 
                finibus ac nulla. Vestibulum consectetur magna eu eros consectetur, vel commodo sem vestibulum.
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse nibh purus, lacinia vel tempor interdum, 
                finibus ac nulla. Vestibulum consectetur magna eu eros consectetur, vel commodo sem vestibulum. 
            </p>
        </div>
    </div>

@endsection



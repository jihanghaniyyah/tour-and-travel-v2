@extends('customer.layouts.customer')

@push('style')
    <!-- CSS Libraries -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{asset('css/customer/header.css')}}">
    <link rel="stylesheet" href="{{asset('css/customer/footer.css')}}">
    <link rel="stylesheet" href="{{asset('css/customer/destination-detail.css')}}">
@endpush

@section('content')

    <div class="container landing"> 
        <div class="row">
            <div class="col-4 title mt-5">
                <h2>Gunung Tabuhan Perahu</h2>
                <p>Jalan Sejahtera <br/>Bandung, Jawa Barat</p>
                <h3 class="mt-5 card-price">Rp 1.090.000</h3>
                <a href="/" class="btn btn-book btn-primary mt-4">Book Now</a>
            </div>
            <div class="col-4 mt-5">
                <img src="assets/images/carousel_1.png" class="card-img img-fluid">
            </div>
            <div class="col-4 mt-5">
                <img src="assets/images/carousel_1.png" class="card-img img-fluid">
            </div>
        </div>
        <div>
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

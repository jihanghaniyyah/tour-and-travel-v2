@extends('customer.layouts.customer')

@push('style')
    <!-- CSS Libraries -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{asset('css/customer/header.css')}}">
    <link rel="stylesheet" href="{{asset('css/customer/footer.css')}}">
    <link rel="stylesheet" href="{{asset('css/customer/checkout.css')}}">
@endpush

@section('content')
    
    <div class="container landing"> 
        <div class="pt-5 pb-4">
            <h3>Pesanan Anda</h3>
            <p>Silakan tinjau kembali detail pesanan Anda</p>
            <div class="card-contact-detail">
                <p class="table-title">Informasi Pemesan</p>
                <table class="table">
                    <tbody>
                        <tr>
                            <td>Nama</td>
                            <td>Jihan Ghaniyyah</td>
                        </tr>
                        <tr>
                            <td>E-mail</td>
                            <td>jghaniyyah@gmail.com</td>
                        </tr>
                        <tr>
                            <td>No. Telepon</td>
                            <td>081230210480</td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>Surabaya, Jawa Timur</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="card-contact-detail">
                <p class="table-title">Pesanan</p>
                <table class="table">
                    <tbody>
                        <tr>
                            <td>Nama Paket</td>
                            <td>Labuan Bajo Tour</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-center">
                <a href="/destination-detail" class="btn btn-book btn-primary">Book Now</a>
            </div>
        </div>      
    </div>

@endsection



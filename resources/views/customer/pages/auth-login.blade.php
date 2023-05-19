<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Tour and Travel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('css/customer/header.css')}}">
    <link rel="stylesheet" href="{{asset('css/customer/footer.css')}}">
    <link rel="stylesheet" href="{{asset('css/customer/login-register.css')}}">
    
    @stack('style')
    
</head>
<body>

    <div class="wrapper">
        <div class="login">
            <div class="header container mt-3">
                <a href="/">
                    <img src="assets/logo.png" class="header-image">
                </a>
            </div>
            <img src="assets/images/background.png" class="bg-image"/>
            <div class="bg-form">
                <h3 class="title mb-3">Masuk</h3>
                <form>
                    <div class="mb-3">
                        <label for="default input example" class="form-label">Email</label>
                        <input class="form-control" type="text" aria-label="default input example">
                    </div>
                    <div class="mb-3">
                        <label for="default input example" class="form-label">Password</label>
                        <input class="form-control" type="text" aria-label="default input example">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <a href="/" class="btn-style d-flex justify-content-center">
                        <button class="btn btn-submit btn-primary mb-3">Login</button>
                    </a>
                    <p>
                        Belum punya akun? <a href="/register" class="bottom-text-style">Daftar disini</a>
                        </p>
                </form>
            </div>
        </div>
    </div>

    @include('customer.components.footer')

</body>
</html>
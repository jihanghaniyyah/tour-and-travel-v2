<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index() {
        return view ('customer.pages.landing');
    }

    public function package() {
        return view ('customer.pages.package');
    }

    public function destination() {
        return view ('customer.pages.destination');
    }

    public function destinationDetail() {
        return view ('customer.pages.destination-detail');
    }

    public function packageDetail() {
        return view ('customer.pages.package-detail');
    }

    public function checkout() {
        return view ('customer.pages.checkout');
    }

    public function register() {
        return view ('customer.pages.auth-register');
    }

    public function login() {
        return view ('customer.pages.auth-login');
    }
}

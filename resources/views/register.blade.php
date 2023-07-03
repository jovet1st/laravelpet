@extends('layout.auth')
@section('content')
<div class="content">
        <div class="wrapper">
            <div class="form-left bg-dark text-warning">
                <h2 class="text-uppercase text-warning">information</h2>
                <p>
                    The pet adoption system is a web-based application designed to facilitate the adoption process of pets, connecting adopters with pet owners in a secure and efficient manner. This documentation serves as a comprehensive guide for users, administrators, and developers of the system, outlining its functionalities, features, and usage.
                </p>
                <h5 class="text-uppercase fw-bold fs-6 mt-5">
                    Kong wa kay Uyab Pag Adopt og Pet !!
                </h5>
                <div class="form-field fw-bold">
                    <a href="{{ Route('login') }}" ><button type="submit" class="btn fw-bold p-3 bg-primary bg-warning mb-5 mt-2">Have an Account?</button></a>
                </div>
            </div>
            <form class="form-right bg-warning text-dark" action="{{ route('register') }}" method="post" >
                @csrf
                <h2 class="text-uppercase text-dark ms-5">Registration form</h2>
                <div class="row">
                    <div class="col-sm-6 mb-3">
                        <label class="fw-bold text-dark">First Name</label>
                        <input type="text" name="firstname" class="input-field rounded">
                    </div>
                    <div class="col-sm-6 mb-3">
                        <label class="fw-bold text-dark">Last Name</label>
                        <input type="text" name="lastname" class="input-field rounded">
                    </div>
                </div>
                <div class="mb-3">
                    <label class="fw-bold text-dark">Your Email</label>
                    <input type="email" class="input-field rounded" name="email" required>
                </div>
                <div class="row">
                    <div class="col-sm-12 mb-3">
                        <label class="fw-bold text-dark">Password</label>
                        <input type="password" name="password" id="pwd" class="input-field form-control rounded">
                    </div>
                </div>
                @if(Session::has('success'))
                    success
                @endif
                <div class="form-field">
                    <button class="btn btn-primary bg-dark text-warning">Register</button>
                </div>
            </form>
        </div>
    </div>
@endsection
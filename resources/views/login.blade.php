@extends('layout.auth')
@section('content')
<div class="container mt-5">
        <div class="row">
            <div class="col-4">

            </div>
            <div class="col-4 justify-content-center bg-dark text-white my-5 p-4">
                <div class="mb-4 text-center me-4 text-warning">
                    <h1>LOGIN</h1>
                </div>
                <form action="{{ route('login') }}" method="post">
                    @if(Session::has('error'))
                        Wrong email and Password
                    @endif
                    @csrf
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                    <label class="form-label text-warning fw-bold" for="form2Example1">Email address</label>
                        <input type="email" name="email" id="form2Example1" class="form-control" />
                    </div>
                
                    <!-- Password input -->
                    <div class="form-outline mb-4">
                    <label class="form-label text-warning fw-bold" for="form2Example2">Password</label>
                        <input type="password" name="password" id="form2Example2" class="form-control" />
                    </div>
                        <button  class="btn btn-primary btn-block mb-4 bg-warning text-dark fw-bold">Sign in</button>
                    <!-- Register buttons -->
                    <div class="text-center">
                    <p>Not a member? <a href="{{ Route('register') }}" class="text-warning fw-bold">Register</a></p>
                    </div>
                </form>
            </div>
            <div class="col-4">

            </div>
        </div>
    </div>
@endsection
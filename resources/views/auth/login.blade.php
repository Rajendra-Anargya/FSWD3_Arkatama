@extends('layouts.master')

@section('title', 'Login')

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-5 col-md-8 col-sm-10 col-12">
            <div class="card shadow-lg border-0 rounded-lg mt-5 mx-2 mx-sm-3 mx-md-4" style="background-color: #F3FEEA;">
                <div class="card-header">
                    <h3 class="text-center font-weight-light my-4">Login</h3>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-floating mb-3">
                            <input class="form-control" id="inputEmail" type="email" placeholder="name@example.com"
                                name="email" required autofocus>
                            <label for="inputEmail">Email address</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="inputPassword" type="password" placeholder="Password"
                                name="password" required>
                            <label for="inputPassword">Password</label>
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" id="inputRememberPassword" type="checkbox" value=""
                                name="remember">
                            <label class="form-check-label" for="inputRememberPassword">Remember Password</label>
                        </div>
                        <div class="d-flex align-items-center justify-content-center mt-4 mb-0">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

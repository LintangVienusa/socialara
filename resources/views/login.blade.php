@extends('layouts.master')
@section('content')
    <div class="container py-5">
        <div class="row">
            @auth
            <div class="col-lg-5 mx-auto" style="text-align:center; margin-top: 8em;">
                <h1 class="mb-4">Hello, {{ auth('web')->user()->name }} 👋</h1>
                <h3 class="mb-4">You are login via ✉️ using <b>{{ auth('web')->user()->email }}</b></h3>
                <form action="{{ route('logout') }}" method="post">
                    @csrf 
                    <button class="btn btn-dark" type="submit">Logout</button>
                </form>
            </div>
            @else
                <div class="col-lg-5 mx-auto">
                    <div class="card mt-5">
                        <div class="card-body">
                            <form class="mb-4">
                                <div class="mb-3">
                                    <label class="form-label">Email address</label>
                                    <input type="email" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Password</label>
                                    <input type="password" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Membership type</label>
                                    <select class="form-control" name="usertype" id="usertype">
                                        <option value="" disabled selected>Select your membership type</option>
                                        <option value="typeA">A</option>
                                        <option value="typeB">B</option>
                                        <option value="typeC">C</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-primary" style="width:100%">Register</button>
                                </div>
                            </form>
                            <div class="text-center">
                                <div class="mb-4">
                                    <hr>OR
                                </div>
                                <a href="{{ route('google-redirect') }}" class="btn btn-danger mb-2" style="width:100%"><i class="bi bi-google"></i> Login With Google</a>
                                <a href="{{ route('google-redirect') }}" class="btn btn-primary" style="width:100%"><i class="bi bi-facebook"></i> Login With Facebook</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endauth
        </div>
    </div>
@stop
@section('script-after')
    <script>
    </script>
@stop

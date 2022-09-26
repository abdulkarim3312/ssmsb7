@extends('website.master')

@section('title')
    Login Registration
@endsection

@section('body')
    <section class="py">
        <div class="container-fluid py-5 bg-secondary">
            <div class="row">
                <div class="col">
                    <h1 class="text-white text-center">Login or Registration</h1>
                </div>
            </div>
        </div>
        <div class="container py-5">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header"><h1 class="text-center">Login Form</h1></div>
                        <div class="card-body">
                            <h4 class="text-center text-danger">{{Session::get('message')}}</h4>
                            <form action="{{route('student-login')}}" method="post">
                                @csrf
                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Email Address</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="email"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Password</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="password"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-outline-success px-5" value="Login"/>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header"><h1 class="text-center">Registration Form</h1></div>
                        <div class="card-body">
                            <form action="{{route('register')}}" method="post">
                                @csrf
                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Full Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="name"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Email Address</label>
                                    <div class="col-md-9">
                                        <input type="email" class="form-control" name="email"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Password</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="password"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Mobile Number</label>
                                    <div class="col-md-9">
                                        <input type="number" class="form-control" name="mobile"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-outline-success px-5" value="Registration"/>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@extends('website.master')

@section('title')
    Enroll Page
@endsection

@section('body')
    <section class="py">
        <div class="container-fluid py-5 bg-secondary">
            <div class="row">
                <div class="col">
                    <h1 class="text-white text-center">Enroll Now of {{$course->title}}</h1>
                </div>
            </div>
        </div>
        <div class="container py-5">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header"><h1 class="text-center">Enroll Form</h1></div>
                        <div class="card-body">
                            <h5 class="text-center text-success">{{Session::get('message')}}</h5>
                            <form action="{{route('enroll.new', ['id' => $course->id])}}" method="post">
                                @csrf
                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Full Name</label>
                                    <div class="col-md-9">
                                        @if($student)
                                            <input type="text" value="{{$student->name}}" readonly class="form-control" name="name" required/>
                                        @else
                                            <input type="text" class="form-control" name="name"/>
                                        @endif
                                        <span class="text-danger">{{$errors->has('name') ? $errors->first('name') : ''}}</span>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Email Address</label>
                                    <div class="col-md-9">
                                        @if($student)
                                            <input type="email" value="{{$student->email}}" class="form-control" name="email" required/>
                                        @else
                                            <input type="text" class="form-control" name="email">
                                        @endif
                                        <span class="text-danger">{{$errors->has('email') ? $errors->first('email') : ''}}</span>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Mobile Number</label>
                                    <div class="col-md-9">
                                        @if($student)
                                            <input type="number" value="{{$student->mobile}}" class="form-control" name="mobile" required/>
                                        @else
                                            <input type="text" class="form-control" name="mobile">
                                        @endif

                                        <span class="text-danger">{{$errors->has('mobile') ? $errors->first('mobile') : ''}}</span>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Payment Option</label>
                                    <div class="col-md-9">
                                        <label><input type="radio" name="payment_type" checked value="cash"/>Cash</label>
                                        <label><input type="radio" name="payment_type" value="Online"/>Online</label>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-outline-success px-5" value="Enroll Now"/>
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


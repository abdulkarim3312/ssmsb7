@extends('website.master')
@section('title')
    Contact Us
@endsection
@section('body')
    <section>
        <div class="container-fluid py-5 bg-secondary">
            <div class="row">
                <div class="col">
                    <h1 class="text-center text-white">Contact With Us</h1>
                </div>
            </div>
        </div>
        <div class="container py-5">
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-body  h-100 shadow">
                        <h1 class="text-center">Send Us a Message</h1>
                        <hr>
                        <form action="" method="POST">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <input type="text" class="form-control" placeholder="Name">
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" placeholder="Email">
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" placeholder="Phone">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <textarea name="" class="form-control" placeholder="Message"></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-2">
                                    <input type="submit" class="btn btn-outline-success" value="Submit">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card card-body h-100 shadow">
                        <h4 class="text-uppercase fw-bold">Contact With Us</h4>
                        <hr>
                        <address>
                            <b>Address:</b>   House #420, Road #,40,Adabor, Mohammadpur,Dhaka.<br>
                            <b>Phone:</b>013654644, 021215646455<br>
                            <b>Email:</b> info@example.com
                        </address>
                        <ul class="nav">
                            <li><a href="" class="nav-link"> <i class="fab fa-facebook"></i></a></li>
                            <li><a href="" class="nav-link"> <i class="fab fa-twitter-square"></i></a></li>
                            <li><a href="" class="nav-link"> <i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="" class="nav-link"> <i class="fab fa-instagram-square"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row pt-5">
                <div class="col-md-12">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14607.610760834354!2d90.40275355!3d23.750849249999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1662529742012!5m2!1sen!2sbd" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>

    </section>
@endsection

@extends('layout.master')
@section('title','Register')
@section('content')
<section class="h-100 "style="background-color:#325288;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col">
                    <div class="card card-registration my-4">
                        <div class="row g-0">
                            <div class="col-xl-5 d-none d-xl-block">
                                <img src="https://images.pexels.com/photos/4016657/pexels-photo-4016657.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Sample photo" class="img-fluid" style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
                            </div>
                            <div class="col-xl-7">
                                <form action="register" method="post" >
                                    @csrf
                                <div class="card-body p-md-5 text-black">
                                    <h3 class="mb-5 text-uppercase text-center">Registration form</h3>

                                    <div class="row">
                                        <div class="col-md-6 mb-4">
                                            <div class="form-outline">
                                                <label class="form-label" for="form3Example1m">First name</label>
                                                <input type="text" name="firstname" value="{{ old('firstname') }}" id="form3Example1m" class="form-control form-control-lg" />
                                                <span style="color: red;">@error('firstname'){{$message}}@enderror </span>

                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <div class="form-outline"><label class="form-label" for="form3Example1n">Last name</label>
                                                <input type="text" name="lastname" value="{{ old('lastname') }}" id="form3Example1n" class="form-control form-control-lg" />
                                                <span style="color: red;">@error('lastname'){{$message}}@enderror </span>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-outline mb-4"><label class="form-label" for="form3Example8">E-mail</label>
                                        <input type="email" id="form3Example8" name="email" value="{{ old('email') }}" class="form-control form-control-lg" />
                                        <span style="color: red;">@error('email'){{$message}}@enderror </span>

                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 mb-4">
                                            <div class="form-outline"><label class="form-label" for="form3Example1m1">password</label>
                                                <input type="password" id="form3Example1m1" class="form-control form-control-lg" />
                                                <span style="color: red;">@error('password'){{$message}}@enderror </span>

                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <div class="form-outline"><label class="form-label" for="form3Example1n1">confirm password</label>
                                                <input type="password" id="form3Example1n1" class="form-control form-control-lg" />

                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-outline mb-4"><label class="form-label" for="form3Example8">Address</label>
                                        <input type="text" id="form3Example8" class="form-control form-control-lg" />

                                    </div>
                                    <div class="form-outline mb-4"><label class="form-label" for="form3Example8">Mobile Number</label>
                                        <input type="number" id="form3Example8" name="phonenumber" value="{{ old('phonenumber') }}" class="form-control form-control-lg" />
                                        <span style="color: red;">@error('phonenumber'){{$message}}@enderror </span>

                                    </div>

                                    <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">

                                        <h6 class="mb-0 me-4">Gender: </h6>

                                        <div class="form-check form-check-inline mb-0 me-4">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="femaleGender" value="option1" />
                                            <label class="form-check-label" for="femaleGender">Female</label>
                                        </div>

                                        <div class="form-check form-check-inline mb-0 me-4">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="maleGender" value="option2" />
                                            <label class="form-check-label" for="maleGender">Male</label>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-center pt-3">
                                        <!-- <button type="button" class="btn btn-light btn-lg">Reset all</button> -->
                                        <button type="button" class="btn btn-warning btn-lg ms-2">Submit Form</button>
                                    </div>
                                </div></form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection
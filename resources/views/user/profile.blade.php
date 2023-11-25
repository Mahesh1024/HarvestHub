@extends('layouts.main')
@section('content')
@include('sweetalert::alert')



<!-- breadcrumb section -->
<div class="breadcrumb-area breadcrumb-light py-3">
    <div class="container">
        <!-- row -->
        <div class="row ">
            <!-- col -->
            <div class="col-12">
                <!-- breadcrumb -->
                <div class="page-breadcrumb">
                    <div class="mt-0">
                        <ul class="list">
                            <li><a href="index.html">Home</a></li>
                            <li>Dashboard</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- dashboard section -->
<div class="py-5">
    <div class="container">
        <div class="row">
            <!-- dashboard nav section -->
            @include('layouts.nav_account')
            <!-- dashboard content section -->
            <!-- dashboard content section -->

            <div class="col-12 col-md-9">
                <!-- account setting -->
                <div align="center" class="mt-5">
                    <b>
                        <h3>Welcome, {{session('full_name')}}</h3>
                    </b>
                </div>

                <div class="d-flex flex-column theme-border-radius theme-bg-white theme-box-shadow mb-4 mt-5">
                    <!-- title section -->
                    <div class="d-flex justify-content-between p-3">
                        <span class="fw-bold">Personal Information</span>
                    </div>
                    <!-- dashboard section -->
                    <form action="/profile/update" method="POST">
                        @csrf
                        <div class="row g-0">

                            <div class="col-12 col-lg-6">
                                <div class="d-flex flex-column p-3">
                                    <span class="small fw-bold mb-3">Name</span>
                                    <input class="form-control" type="text" value="{{$user_details[0]->full_name}}" name="name" aria-label="Disabled input example">
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="d-flex flex-column p-3">
                                    <span class="small fw-bold mb-3">Address</span>
                                    <input class="form-control" type="text" value="{{$user_details[0]->address}}" name="address" aria-label="Disabled input example">
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="d-flex flex-column p-3">
                                    <span class="small fw-bold mb-3">Mobile Number</span>
                                    <input class="form-control" type="text" value="{{$user_details[0]->mobile_number}}" name="mobile" aria-label="Mobile Number" id="mobileInput">
                                    <small id="mobileError" class="text-danger"></small>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="d-flex flex-column p-3">
                                    <span class="small fw-bold mb-3">Email Address</span>
                                    <input class="form-control" type="text" value="{{$user_details[0]->email_id}}" name="email" readonly>
                                </div>
                            </div>
                            <div class="col-12 custom-button">
                                <input type="submit" class="custom-btn-primary font-small button-effect px-4" value="Update">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@extends('layouts.main')
@section('content')

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
            <div class="col-12 col-md-9">
                <!-- account balance -->
                <div class="d-flex align-self-center align-items-center mb-5">
                    <p class="fs-4 mb-0">Welcome to Dashboard</p>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4 mb-4">
                        <div class="theme-box-shadow theme-border-radius p-2 theme-bg-white">
                            <div class="row g-0">
                                <div class="col-4 overflow-hidden theme-border-radius text-center">
                                    <div class="overflow-hidden">
                                        <figure class="mt-3">
                                            <i class="fa-solid fa-truck-fast fa-2xl" style="color: #24c22e;"></i>
                                        </figure>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="ps-md-0 ps-xxl-3 d-flex justify-content-between align-items-center h-100">
                                        <div class="d-flex flex-column">
                                            <span class="d-flex">Your Orders</span>
                                            <span class="fw-bold price theme-text-secondary text-center">{{count($order)}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- dashboard features -->
                    <div class="col-12 col-md-6 col-lg-4 mb-4">
                        <div class="theme-box-shadow theme-border-radius p-2 theme-bg-white">
                            <div class="row g-0">
                                <div class="col-4 overflow-hidden theme-border-radius text-center">
                                    <div class="overflow-hidden">
                                        <figure class="mt-3">
                                            <i class="fa-solid fa-cart-shopping fa-2xl" style="color: #35b832;"></i>
                                        </figure>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="ps-md-0 ps-xxl-3 d-flex justify-content-between align-items-center h-100">
                                        <div class="d-flex flex-column">
                                            <span class="d-flex">Your Cart</span>
                                            <span class="fw-bold price theme-text-secondary text-center">{{count(session('cart_products'))}}</span>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- dashboard features -->
                    <div class="col-12 col-md-6 col-lg-4 mb-4">
                        <div class="theme-box-shadow theme-border-radius p-2 theme-bg-white">
                            <div class="row g-0">
                                <div class="col-4 overflow-hidden theme-border-radius text-center">
                                    <div class="overflow-hidden">
                                        <figure class="mt-3">
                                            <i class="fa-solid fa-heart fa-2xl" style="color:#1bd01e;"></i>
                                        </figure>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="ps-md-0 ps-xxl-3 d-flex justify-content-between align-items-center h-100">
                                        <div class="d-flex flex-column">
                                            <span class="d-flex">Your Wishlist</span>
                                            <span class="fw-bold price theme-text-secondary text-center">{{count($wish)}}</span>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- dashboard features -->
                    <!-- <div class="col-12 col-md-6 col-lg-3 mb-4">
                        <div class="theme-box-shadow theme-border-radius p-2 theme-bg-white">
                            <div class="row g-0">
                                <div class="col-4 overflow-hidden theme-border-radius">
                                    <div class="overflow-hidden">
                                        <figure class="mb-0">
                                            <img src="assets/images/icons/dashboard-icon04.png" class="img-fluid" alt="dashboard icon 04" title="dashboard icon 04">
                                        </figure>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="ps-md-0 ps-xxl-3 d-flex justify-content-between align-items-center h-100">
                                        <div class="d-flex flex-column">
                                            <span class="d-flex">Due Amount</span>
                                            <span class="fw-bold price theme-text-secondary"><i class="bi bi-currency-dollar"></i> 10</span>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- dashboard features -->
                </div>
                <!-- recent activity section -->
                <div class="d-flex flex-column theme-border-radius theme-bg-white theme-box-shadow mb-4">
                    <!-- title section -->
                    <div class="d-flex justify-content-between p-3">
                        <span class="fw-bold">Overview</span>
                    </div>
                    <!-- dashboard section -->
                    <div class="row g-0">
                        <div class="col-12 col-lg-6">
                            <div class="d-flex flex-column p-3">
                                <span class="small fw-bold">Personal Information</span>
                                <span class="small fw-normal">{{session('full_name')}}</span>
                                <span class="small fw-bold mt-3">Email Address</span>
                                <span class="small fw-normal">{{session('email_id')}}</span>
                                <span class="small fw-bold mt-3">Mobile Number</span>
                                <span class="small fw-normal">{{session('mobile_number')}}</span>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 mb-3 mb-lg-0">
                            @if(count($data)>0)
                            <div class="border mx-5 theme-border-radius">
                                <div class="d-flex flex-column p-3">
                                    <span class="small fw-bold text-uppercase theme-text-primary">Default</span>
                                    <span class="small fw-bold mt-3">{{$data[0]->full_name}}</span>
                                    {{$data[0]->address}}
                                    {{$data[0]->state}}
                                    {{$data[0]->{'city/town'} }}
                                    {{$data[0]->pin_code}}<br>
                                    {{$data[0]->mobile_number}}
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
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
            <div class="col-12 col-md-9">
                <!-- my wishlist section -->
                <div class="d-flex flex-column theme-border-radius theme-bg-white theme-box-shadow mb-4">
                    <!-- title section -->
                    <div class="d-flex justify-content-between p-3">
                        <span class="fw-bold"> My Wishlist ({{count($wishlist_product)}})</span>
                    </div>
                    <!-- my wishlist section -->
                    <div class="p-3">
                        @foreach($wishlist_product as $wish)
                        <div class="row g-0">
                            <div class="col-12 col-lg-12 mb-3">
                                <div class="border px-3">
                                    <div class="row g-0 align-items-center">
                                        <div class="col-12 col-md-6 col-lg-2">
                                            <img src="/products/{{$wish->product_image}}" alt="Parts" class="img-fluid">
                                        </div>
                                        <div class="col-12 col-md-6 col-lg-6 ps-3">
                                            <p class="mb-0 font-small fw-bold">{{$wish->product_name}}</p>
                                            <div class="mt-2 small lh-1 mb-3 mb-lg-0">
                                                <span class="theme-text-primary fw-bold">₹{{$wish->price}}</span>
                                            </div>
                                            <span class="badge bg-success">In Stock</span>
                                        </div>
                                        <div class="col-12 col-md-12 col-lg-4 text-lg-end text-start text-md-start">
                                            <div class="d-flex justify-content-end align-items-center font-small mb-3 mb-lg-0">
                                                @if(in_array($wish->id,$wish_id))
                                                <a href="/removecart/{{$wish->product_id}}" class="theme-border custom-btn-secondary font-small button-effect px-2">remove from cart
                                                </a>
                                                @else
                                                <a href="/addtocart/{{$wish->product_id}}" class="theme-border custom-btn-secondary font-small button-effect px-2">add to cart
                                                </a>
                                                @endif
                                                <a href="/removewishlist/{{$wish->product_id}}" class="ms-3"><i class="bi bi-trash ms-2"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
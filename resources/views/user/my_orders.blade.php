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
                <!-- order history section -->
                <div class="d-flex flex-column theme-border-radius theme-bg-white theme-box-shadow mb-4">
                    <!-- title section -->
                    <div class="d-flex justify-content-between p-3">
                        <span class="fw-bold">Order History</span>
                    </div>
                    <!-- order history section -->
                    <div class="p-3">
                        <div class="row g-0">
                            @forelse($orders as $order)
                            <div class="col-12 col-lg-12 mb-3">
                                <div class="border px-3 theme-border-radius">
                                    <div class="row g-0 align-items-center">
                                        <div class="col-12 col-md-6 col-lg-2">
                                            <img src="/products/{{$order->product->product_image}}" alt="Parts" class="img-fluid" style="width:100px; height:80px;" >
                                        </div>
                                        <div class="col-12 col-md-6 col-lg-6 ps-3">
                                            <p class="mb-0 font-small fw-bold"></p>
                                            <span><small class="text-muted font-extra-small">Order No. : {{$order->order_id}}</small></span>
                                            <!-- <div class="mt-2 small lh-1 mb-3 mb-lg-0"> <a href="javascript:void(0)" class="text-decoration-none text-inherit">
                                                    <span class="text-muted font-small">Status: <span class="text-success">Delivered</span>
                                                    </span></a>
                                            </div> -->
                                        </div>
                                        <div class="col-12 col-md-12 col-lg-4 text-lg-end text-start text-md-start">
                                            <div class="d-flex flex-column font-small">
                                                <span class="theme-text-primary">{{$order->price}}</span>
                                                <span class="theme-text-accent-one mt-2">Date: {{$order->created_at}}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @empty
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
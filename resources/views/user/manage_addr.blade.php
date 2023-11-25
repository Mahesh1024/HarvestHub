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
                <!-- manage address -->
                <div class="d-flex flex-column theme-border-radius theme-bg-white theme-box-shadow mb-4">
                    <!-- title section -->
                    <div class="d-flex justify-content-between p-3">
                        <span class="fw-bold">Manage Addresses</span>
                    </div>
                    <!-- manage address section -->
                    <div class="col-12 custom-button">
                        <button class="custom-btn-primary font-small button-effect px-4" type="submit" value="submit" id="add">Add New address</button>
                    </div>
                    <div class="d-flex flex-column justify-content-between p-3">
                        <div class="theme-bg-accent-two p-3 theme-border-radius" id="newaddress">
                            <span class="fw-bold theme-text-primary">Add a new address</span>
                            <form method="post" action="/manage/address">
                                @csrf
                                <div class="row g-3 mt-3">
                                    <div class="col-12 col-lg-6">
                                        <span class="small fw-bold mb-3">Name</span>
                                        <input type="text" class="form-control min-h" placeholder="Name" name="name" aria-label="name" required="">
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <span class="small fw-bold mb-3">Mobile Number</span>
                                        <input type="text" class="form-control min-h" placeholder="Mobile" name="mobile" aria-label="mobile" id="mobileInput" required="">
                                        <small id="mobileError" class="text-danger"></small>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <span class="small fw-bold mb-3">E mail</span>
                                        <input type="email" class="form-control min-h" name="email" placeholder="email" value="{{session('email_id')}}" disabled readonly>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <span class="small fw-bold mb-3">pin Code</span>
                                        <input type="text" class="form-control min-h" name="pincode" placeholder="Pin code">
                                    </div>
                                    <div class="col-12">
                                        <span class="small fw-bold mb-3">Address</span>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" name="address" rows="3" placeholder="Address (Area and street)"></textarea>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <span class="small fw-bold mb-3">City/Town/District</span>
                                        <input type="text" class="form-control min-h" name="city" placeholder="City/Town/District">
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <span class="small fw-bold mb-3">State</span>
                                        <input type="text" class="form-control min-h" name="state" placeholder="state">
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <span class="small fw-bold mb-3">Landmark</span>
                                        <input type="text" class="form-control min-h" name="landmark" placeholder="Landmark">
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <span class="small fw-bold mb-3">Alternative Phone</span>
                                        <input type="text" class="form-control min-h" name="alternative" placeholder="Alternate Phone(Optional)">
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <input type="checkbox" class="form-check-input" name="default" value="1">
                                        <label class="form-check-label font-small" for="exampleCheck1">Set as default
                                    </div>
                                    <div class="col-12 custom-button">
                                        <button class="custom-btn-primary font-small button-effect px-4" type="submit" value="submit">Save</button>
                                        <button type="button" class="custom-btn-secondary font-small button-effect px-4 ms-3" data-bs-dismiss="modal">Cancel</button>
                                    </div>

                                </div>
                            </form>
                        </div>
                        <div class="mt-3">
                            <!-- default address -->
                            <div class="row">
                                @foreach($data as $item)
                                <div class="col-md-6 mt-3">
                                    <div class="border theme-border-radius">
                                        <div class="d-flex flex-column p-4">
                                            <span class="small fw-bold text-uppercase theme-text-primary"></span>
                                            <span class="small fw-bold mt-2">Name : {{ $item ->full_name }}</span>
                                            <span class="small fw-bold my-2">Mobile Number : {{ $item ->mobile_number }}</span>
                                            <span class="small fw-bold my-1">Address : {{ $item ->address }}</span>
                                            <span class="small fw-bold mt-2">Pin code : {{ $item ->pin_code }}</span>
                                            <span class="small fw-bold mt-2">City/town : {{ $item ->{'city/town'} }}</span>
                                            <span class="small fw-bold mt-2">State : {{ $item ->state }}</span>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="d-flex p-4 font-small">

                                                    <a href="#" class="view-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal{{$item->id}}">Edit</a>
                                                    <a href="/removeaddress/{{$item->id}}" class="ms-3">Remove</a>
                                                </div>
                                            </div>
                                            @if(($item->default)==0)
                                            <div class="col-md-6">
                                                <div class="d-flex p-4 font-small">
                                                    <a href="setasdefault/{{$item->id}}"><i class="fa-solid fa-square-check fa-lg" style="color: #378c31;"></i> Set as default
                                                    </a>
                                                </div>
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="modal fade" id="quickViewModal{{$item->id}}" tabindex="-1" aria-labelledby="quickViewModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-xl modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-body p-5 pb-0">
                                                <div class="position-absolute top-0 end-0 me-3 mt-3" id="quickViewModalLabel">
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="row">
                                                    <div class="d-flex flex-column justify-content-between p-3">
                                                        <div class="theme-bg-accent-two p-3 theme-border-radius" id="newaddress">
                                                            <form method="post" action="/manage/address/get/">
                                                                @csrf
                                                                <div class="row g-3 mt-3">
                                                                    <div class="col-12 col-lg-6">
                                                                        <input type="text" class="form-control min-h" placeholder="id" name="id1" value="{{$item->id}}" id="id1" aria-label="name" hidden>
                                                                        <span class="small fw-bold mb-3">Name</span>
                                                                        <input type="text" class="form-control min-h" placeholder="Name" name="name1" value="{{$item->full_name}}" id="name1" aria-label="name" required="">
                                                                    </div>
                                                                    <div class="col-12 col-lg-6">
                                                                        <span class="small fw-bold mb-3">Mobile Number</span>
                                                                        <input type="text" class="form-control min-h" placeholder="Mobile" name="mobile1" value="{{$item->mobile_number}}" id="mobile1" aria-label="mobile" required="">
                                                                    </div>
                                                                    <div class="col-12 col-lg-6">
                                                                        <span class="small fw-bold mb-3">E mail</span>
                                                                        <input type="email" class="form-control min-h" name="email1" id="email1" placeholder="email" value="{{session('email_id')}}" disabled readonly>
                                                                    </div>
                                                                    <div class="col-12 col-lg-6">
                                                                        <span class="small fw-bold mb-3">pin Code</span>
                                                                        <input type="text" class="form-control min-h" name="pincode1" id="pincode1" value="{{$item->pin_code}}" placeholder="Pin code">
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <span class="small fw-bold mb-3">Address</span>
                                                                        <textarea class="form-control" name="address1" id="address1" rows="3" placeholder="Address (Area and street)">{{$item->address}}</textarea>
                                                                    </div>
                                                                    <div class="col-12 col-lg-6">
                                                                        <span class="small fw-bold mb-3">City/Town/District</span>
                                                                        <input type="text" class="form-control min-h" name="city1" value="{{$item->{'city/town'} }}" id="city1" placeholder="City/Town/District">
                                                                    </div>
                                                                    <div class="col-12 col-lg-6">
                                                                        <span class="small fw-bold mb-3">State</span>
                                                                        <input type="text" class="form-control min-h" name="state1" value="{{$item->state}}" id="state1" placeholder="state">
                                                                    </div>
                                                                    <div class="col-12 col-lg-6">
                                                                        <span class="small fw-bold mb-3">Landmark</span>
                                                                        <input type="text" class="form-control min-h" name="landmark1" value="{{$item->landmark}}" id="landmark1" placeholder="Landmark">
                                                                    </div>
                                                                    <div class="col-12 col-lg-6">
                                                                        <span class="small fw-bold mb-3">Alternative Phone</span>
                                                                        <input type="text" class="form-control min-h" name="alternative1" value="{{$item->alternative_phone}}" id="alternative1" placeholder="Alternate Phone(Optional)">
                                                                    </div>
                                                                    <div class="col-12 custom-button">
                                                                        <button class="custom-btn-primary font-small button-effect px-4" type="submit" value="submit">Save</button>
                                                                        <button type="button" class="custom-btn-secondary font-small button-effect px-4 ms-3" data-bs-dismiss="modal">Cancel</button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>

                        <!-- <div class="theme-bg-accent-two p-3 theme-border-radius mt-3" id="update">
                            <span class="fw-bold theme-text-primary">Update Address</span>
                            <form method="post" action="/manage/address/get/">
                                @csrf
                                <div class="row g-3 mt-3">
                                    <div class="col-12 col-lg-6">
                                        <input type="text" class="form-control min-h" placeholder="id" name="id1" id="id1" aria-label="name" hidden>
                                        <span class="small fw-bold mb-3">Name</span>
                                        <input type="text" class="form-control min-h" placeholder="Name" name="name1" id="name1" aria-label="name" required="">
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <span class="small fw-bold mb-3">Mobile Number</span>
                                        <input type="text" class="form-control min-h" placeholder="Mobile" name="mobile1" id="mobile1" aria-label="mobile" required="">
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <span class="small fw-bold mb-3">E mail</span>
                                        <input type="email" class="form-control min-h" name="email1" id="email1" placeholder="email" value="{{session('email_id')}}" disabled readonly>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <span class="small fw-bold mb-3">pin Code</span>
                                        <input type="text" class="form-control min-h" name="pincode1" id="pincode1" placeholder="Pin code">
                                    </div>
                                    <div class="col-12">
                                        <span class="small fw-bold mb-3">Address</span>
                                        <textarea class="form-control" name="address1" id="address1" rows="3" placeholder="Address (Area and street)"></textarea>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <span class="small fw-bold mb-3">City/Town/District</span>
                                        <input type="text" class="form-control min-h" name="city1" id="city1" placeholder="City/Town/District">
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <span class="small fw-bold mb-3">State</span>
                                        <input type="text" class="form-control min-h" name="state1" id="state1" placeholder="state">
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <span class="small fw-bold mb-3">Landmark</span>
                                        <input type="text" class="form-control min-h" name="landmark1" id="landmark1" placeholder="Landmark">
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <span class="small fw-bold mb-3">Alternative Phone</span>
                                        <input type="text" class="form-control min-h" name="alternative1" id="alternative1" placeholder="Alternate Phone(Optional)">
                                    </div>
                                    <div class="col-12 custom-button">
                                        <button class="custom-btn-primary font-small button-effect px-4" type="submit" value="submit">Save</button>
                                        <button type="button" class="custom-btn-secondary font-small button-effect px-4 ms-3" data-bs-dismiss="modal">Cancel</button>
                                    </div>
                                </div>
                            </form>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
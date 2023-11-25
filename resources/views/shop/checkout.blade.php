@extends('layouts.main')
@section('content')

<div class="py-5">
    <div class="container">
        <form method="post" action="/order">
            @csrf
            <div class="row">
                <!-- shop checkout section -->
                <div class="col-lg-8 mb-6 mb-md-0">
                    <div class="d-flex flex-column theme-border-radius theme-bg-white theme-box-shadow mb-4">
                        <!-- title section -->
                        <div class="d-flex justify-content-between p-3 border-bottom">
                            <span class="fs-4 fw-bold">Delivery Address</span>
                        </div>
                        <!-- manage address section -->
                        <div class="d-flex flex-column justify-content-between p-3">
                            <div class="mb-3">
                                <!-- default address -->

                                @foreach($data as $dt)
                                <div class="border theme-border-radius mt-2">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="d-flex flex-column p-4">
                                                <div class="form-check d-flex justify-content-between align-items-start">
                                                    @php($checked=($dt->default==1)?'checked':'')
                                                    <input class="form-check-input" type="radio" value="{{$dt->id}}" name="radio" {{$checked}}>
                                                    <label class="form-check-label d-flex justify-content-between align-items-start w-100">
                                                        <span class="small fw-bold text-uppercase theme-text-primary">{{$dt->full_name}} &nbsp;&nbsp;&nbsp;&nbsp; {{$dt->mobile_number}}</span>
                                                        <span class="fw-bold text-uppercase">
                                                            <a href="#" class="ml-auto">Edit</a>
                                                        </span>
                                                    </label>
                                                </div>
                                                <span class="small mr-4 mt-2" style="margin-left:25px;">{{$dt->address}}, {{$dt->landmark}}, {{$dt->{'city/town'} }}, {{$dt->state}} - {{$dt->pin_code}}</span>
                                            </div>
                                            <div class="d-flex font-small" style="margin-left:50px; margin-top:-10px;">
                                                <!-- <a href="#" class="ms-3">Remove</a> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-column theme-border-radius theme-bg-white theme-box-shadow">
                        <!-- title section -->
                        <div class="d-flex justify-content-between p-3 border-bottom">
                            <a class="fs-4 fw-bold" id="add">Add a new address</a>
                        </div>

                        <!-- manage address section -->
                        <div class="d-flex flex-column justify-content-between p-3">
                            <div class="theme-bg-accent-two p-3 theme-border-radius mt-3" id="newaddress">

                                <div class="row g-3 mt-3">
                                    <div class="col-12 col-lg-6">
                                        <input type="text" class="form-control min-h" name="name" placeholder="Name" aria-label="name">
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <input type="text" class="form-control min-h" name="mobile" placeholder="Mobile" aria-label="mobile">
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <input type="text" value="{{session('email_id')}}" class="form-control min-h" name="email" placeholder="E-mail" aria-label="mobile" disabled>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <input type="text" class="form-control min-h" name="pincode" placeholder="Pincode">
                                    </div>
                                    <div class="col-12">
                                        <textarea class="form-control" id="" rows="3" name="address" placeholder="Address (Area and street)"></textarea>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <input type="text" class="form-control min-h" name="city" placeholder="City/District/Town">
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <input type="text" class="form-control min-h" name="state" placeholder="State">
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <input type="text" class="form-control" name="landmark" placeholder="Landmark">
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <input type="text" class="form-control" name="alternative" placeholder="Alternate Phone">
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-check-label theme-text-accent-one">
                                                Address Type
                                            </label>
                                        </div>
                                        <div class="d-flex">
                                            <div class="d-flex">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                <label class="form-check-label ms-2" for="flexRadioDefault1">
                                                    Home
                                                </label>
                                            </div>
                                            <div class="d-flex ms-4">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3" checked>
                                                <label class="form-check-label ms-2" for="flexRadioDefault3">
                                                    Work
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 custom-button">
                                        <button class="custom-btn-primary font-small button-effect px-4" value="submit" type="submit">Save</button>
                                    </div>
                                </div>

                            </div>
                            <!-- <div class="mt-4">
                            <label for="exampleFormControlTextarea2" class="form-label font-small fw-bold">Additional
                                information</label>
                            <textarea class="form-control" id="exampleFormControlTextarea2" rows="3" placeholder="Special Information for delivery"></textarea>
                        </div> -->
                        </div>
                    </div>
                </div>
                <!-- product details section -->

                <?php
                $totalcost = 0;
                $disc = 0;
                $grandtotal = 0;
                ?>
                <div class="col-lg-4">
                    <div class="d-flex flex-column theme-border-radius theme-bg-white theme-box-shadow mb-4">
                        <!-- title section -->
                        <div class="d-flex justify-content-between p-3 border-bottom">
                            <span class="fs-4 fw-bold">Product Details</span>
                        </div>
                        <!-- product items -->
                        <div class="p-3">
                            @foreach(session('cart_products') as $prod)
                            <?php
                            $totalcost += $prod->price * $prod->quantity;
                            $disc += ($prod->price * $prod->discount / 100) * $prod->quantity;
                            $grandtotal = ($totalcost - $disc);
                            ?>
                            <div class="border-bottom pt-2">
                                <div class="row">
                                    <div class="col-12 col-md-6 col-lg-8 font-small">
                                        <p class="mb-2 text">{{$prod->product_name}}</p>
                                        <p class="mb-2 theme-text-accent-one">{{$prod->quantity}} x {{$prod->price}}</p>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4 font-small">
                                        <div class="d-flex justify-content-end align-items-end">
                                            <div class="product-price mb-3 fw-bold">
                                                <span class="ms-1">₹ {{$prod->price * $prod->quantity}}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <!-- title section -->
                        <div class="d-flex justify-content-between p-3 border-bottom">
                            <span class="fs-4 fw-bold">Price Details</span>
                        </div>
                        <!-- price details -->
                        <div class="p-3">
                            <div class="border-bottom pt-2">
                                <div class="row">
                                    <div class="col-12 col-md-6 col-lg-8 font-small">
                                        <p class="mb-2">Subtotal</p>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4 font-small">
                                        <div class="d-flex justify-content-end align-items-end">
                                            <div class="product-price mb-2">
                                                <span class="ms-1">₹ {{$totalcost}}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- repetable -->
                            <div class="border-bottom pt-2">
                                <div class="row">
                                    <div class="col-12 col-md-6 col-lg-8 font-small">
                                        <p class="mb-2 text-success">Discount</p>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4 font-small">
                                        <div class="d-flex justify-content-end align-items-end">
                                            <div class="product-price mb-2 text-success">
                                                <span class="ms-1">₹ {{$disc}}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- repetable -->
                            <div class="border-bottom pt-2">
                                <div class="row text-success">
                                    <div class="col-12 col-md-6 col-lg-8 font-small">
                                        <p class="mb-2">delivery Charge</p>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4 font-small">
                                        <div class="d-flex justify-content-end align-items-end">
                                            <div class="product-price mb-2">
                                                <span class="ms-1">Free</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- repetable -->
                            <div class="pt-2">
                                <div class="row">
                                    <div class="col-12 col-md-6 col-lg-8">
                                        <p class="mb-2 fw-bold">Total</p>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4">
                                        <div class="d-flex justify-content-end align-items-end">
                                            <div class="product-price mb-2 fw-bold">
                                                <span class="ms-1">₹ {{$grandtotal}}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="text" name="amount" value="{{$grandtotal}}" hidden>
                                </div>
                            </div>
                            <div class="border-bottom pt-2">
                            </div>

                            <div class="mt-3 text-success">
                                <b>You will save ₹{{ $disc }} on this order</b>
                            </div>
                            <!-- repetable -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- button section -->
            <div class="row mt-4">
                <div class="col">
                    <div class="col-12 custom-button">
                        <button class="custom-btn-primary font-small button-effect px-4" value="submit" type="submit">Place Order</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

</div>
@endsection
@extends('layouts.main')

@section('content')
<!-- <script>
    $(document).ready(function() {
        function update_quantity(prod_id, flag) {

            var quantity = $('#prod' + prod_id).val();

            if (flag == 0) {
                quantity = parseInt(quantity) - 1;
            } else {
                quantity = parseInt(quantity) + 1;
            }
            $.ajax({
                url: "/update_quantity/" + prod_id + "/" + quantity,
                method: 'get',
                success: function(res) {
                    console.log(res);

                    //     $('#offcanvasRight').offcanvas('hide');
                    //     
                }
            })
        }
        $('#offcanvasRight').offcanvas('show');
    });
</script> -->
<!-- breadcrumb section -->
<div class="breadcrumb-area">
    <div class="container">
        <!-- row -->
        <div class="row ">
            <!-- col -->
            <div class="col-12">
                <!-- breadcrumb -->
                <div class="page-breadcrumb">
                    <h2 class="heading">Checkout</h2>
                    <div class="mt-3">
                        <ul class="list">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="shop.html">Shop</a></li>
                            <li>View Cart</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- shop section -->
<?php
$totalcost = 0;
$disc = 0;
$grandtotal = 0;
?>
<div class="my-4">
    <div class="container">
        <div class="row">
            <!-- shopping cart section -->
            <div class="col-lg-8 mb-6 mb-md-0">
                <div class="d-flex flex-column theme-border-radius theme-bg-white theme-box-shadow mb-4">
                    <!-- title section -->
                    <div class="d-flex justify-content-between p-3 border-bottom align-items-center">
                        <span class="fs-4 fw-bold">My Shopping Cart <span class="fs-6 theme-text-accent-one">({{count(session('cart_products'))}} Items)</span></span>
                        <span class="fw-bold"></span>
                    </div>
                    <!-- manage address section -->
                    <div class="d-flex flex-column justify-content-between p-3">

                        <div class="mb-3">
                            <!-- items list -->

                            @foreach(session('cart_products') as $prod)
                            <?php
                            $totalcost += $prod->price * $prod->quantity;
                            $disc += ($prod->price * $prod->discount / 100) * $prod->quantity;
                            $grandtotal = ($totalcost - $disc);
                            ?>
                            <div class="list-group-item p-3 mb-3">
                                <!-- row -->
                                <div class="row align-items-center">
                                    <div class="col-6 col-md-2">
                                        <img src="/products/{{$prod->product_image}}" alt="Parts" class="img-fluid">
                                    </div>
                                    <div class="col-6 col-md-6 col-lg-5">
                                        <a href="javascript:void(0)" class="text-reset">
                                            <p class="mb-0 font-small fw-bold">{{$prod -> product_name}}</p>
                                        </a>
                                    </div>
                                    <div class="col-6 col-md-3 col-lg-3 px-0 d-flex flex-column align-items-center justify-content-center">
                                        <div class="input-group input-spinner d-inline-flex justify-content-center">
                                            <span class="button-minus btn btn-sm" onclick="update_quantity('{{$prod->prod_id}}',0)">-</span>
                                            <input type="text" value="{{ $prod->quantity }}" id='{{"prod".$prod->prod_id}}' class="quantity-field form-control-sm form-input">
                                            <span class="button-plus btn btn-sm" onclick="update_quantity('{{$prod->prod_id}}','{{$prod->price}}','{{$prod->discount}}',1)">+</span>
                                        </div>
                                        <div class="mt-2 small lh-1"> <a href="/removecart/{{$prod->prod_id}}" class="text-decoration-none text-inherit">
                                                <span class="me-1 align-middle"><i class="bi bi-trash"></i></span>
                                                <span class="text-muted font-extra-small">Remove</span></a>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-2">
                                        @if($prod->discount==0)
                                        <span class="fw-bold text-danger">{{$prod->price * $prod->quantity}}</span>
                                        @else
                                        <span class="fw-bold text-danger">{{($prod->price - ($prod->price*$prod->discount/100))*$prod->quantity}}</span>
                                        <div class="text-decoration-line-through text-muted small">{{$prod->price}}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            @endforeach

                        </div>
                        <!-- <div class="mt-4">
                            <label class="form-label font-small fw-bold">Have a Coupon Code?
                                Please provide below.</label>
                            <div class="row">
                                <div class="col-12 col-lg-5">
                                    <div class="input-group search-input coupon-input">
                                        <input type="text" class="form-control" placeholder="Coupon Code">
                                        <button class="d-flex justify-content-center align-items-center custom-btn-primary font-small button-effect" type="button">Apply</button>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-7">
                                    <div class="d-flex justify-content-end custom-button mt-3 mt-lg-0">
                                        <a href=" #" class="theme-border custom-btn-secondary font-small button-effect px-2">Update
                                            Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
            <!-- cart summary section -->
            <div class="col-lg-4">
                <div class="d-flex flex-column theme-border-radius theme-bg-white theme-box-shadow mb-4">
                    <!-- title section -->
                    <div class="d-flex justify-content-between p-3 border-bottom">
                        <span class="fs-4 fw-bold">Cart Summary</span>
                    </div>
                    <!-- price details -->
                    <div class="p-3">
                        <div class="pt-2">
                            <div class="row">
                                <div class="col-12 col-md-6 col-lg-8 font-small">
                                    <p class="mb-2">Price ({{count(session('cart_products'))}} Items)</p>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4 font-small">
                                    <div class="d-flex justify-content-end align-items-end">
                                        <div class="product-price mb-2">
                                            <span class="ms-1">₹ {{ $totalcost }} </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- repetable -->
                        <div class="pt-2">
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
                        <div class="pt-2">
                            <div class="row">
                                <div class="col-12 col-md-6 col-lg-8 font-small">
                                    <p class="mb-2 text-success">Delivery Charge</p>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4 font-small">
                                    <div class="d-flex justify-content-end align-items-end">
                                        <div class="product-price mb-2 text-success">
                                            <span class="ms-1">Free</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- repetable -->
                        <div class="border-bottom pt-2">
                        </div>
                        <!-- repetable -->
                        <div class="pt-2 mt-2">
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
                            </div>
                        </div>
                        <!-- repetable -->
                        <div class="border-bottom pt-2 mt-1">
                        </div>
                        <!-- line^ -->
                        <div class="mt-3 text-success">
                            <b>You will save ₹{{ $disc }} on this order</b>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- button section -->
        <div class="row mt-4">
            <div class="col">
                <div class="d-flex justify-content-center custom-button">
                    <a href="/checkout" class="d-flex justify-content-center align-items-center custom-btn-primary font-small button-effect px-5">Proceed
                        to checkout</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
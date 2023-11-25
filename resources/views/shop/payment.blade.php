@extends('layouts.main')

@section('content')

<!-- shop section -->
<div class="my-4">
    <div class="container">
        <div class="row">
            <!-- shopping cart section -->
            <div class="col-lg-12 col-xl-8 mb-6 mb-md-0">
                <div class="d-flex flex-column theme-border-radius theme-bg-white theme-box-shadow mb-4 mb-lg-0">
                    <!-- title section -->
                    <div class="d-flex justify-content-between p-3 border-bottom align-items-center">
                        <span class="fs-4 fw-bold">Payment Method</span>
                    </div>
                    <!-- manage address section -->
                    <div class="d-flex flex-column justify-content-between p-3">
                        <div class="p-3">
                            <!-- method body row -->
                            <div class="row my-3">
                                <div class="col-12 col-md-12 p-0">
                                    <div class="row g-0">
                                        <!-- payment tab section -->
                                        <div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 col-xxl-3">
                                            <div class="nav flex-column nav-pills me-1 custom-tab" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                                <button class="nav-link active" id="v-pills-credit-tab" data-bs-toggle="pill" data-bs-target="#v-pills-credit" type="button" role="tab" aria-controls="v-pills-credit" aria-selected="true"><i class="payment-icon credit"></i>Credit Card</button>

                                                <button class="nav-link" id="v-pills-debit-tab" data-bs-toggle="pill" data-bs-target="#v-pills-debit" type="button" role="tab" aria-controls="v-pills-debit" aria-selected="false"><i class="payment-icon debit"></i>Debit Card</button>

                                                <button class="nav-link" id="v-pills-net-banking-tab" data-bs-toggle="pill" data-bs-target="#v-pills-net-banking" type="button" role="tab" aria-controls="v-pills-net-banking" aria-selected="false"><i class="payment-icon net"></i>Net
                                                    Banking</button>

                                                <button class="nav-link" id="v-pills-upi-tab" data-bs-toggle="pill" data-bs-target="#v-pills-upi" type="button" role="tab" aria-controls="v-pills-upi" aria-selected="false"><i class="payment-icon upi"></i>UPI</button>

                                                <button class="nav-link" id="v-pills-appPay-tab" data-bs-toggle="pill" data-bs-target="#v-pills-appPay" type="button" role="tab" aria-controls="v-pills-appPay" aria-selected="false"><i class="payment-icon phone"></i>PhonePay/ Paytm</button>

                                                <button class="nav-link" id="v-pills-wallet-tab" data-bs-toggle="pill" data-bs-target="#v-pills-wallet" type="button" role="tab" aria-controls="v-pills-wallet" aria-selected="false"><i class="payment-icon wallet"></i>Mobile Wallet</button>

                                                <button class="nav-link" id="v-pills-payPal-tab" data-bs-toggle="pill" data-bs-target="#v-pills-payPal" type="button" role="tab" aria-controls="v-pills-payPal" aria-selected="false"><i class="payment-icon paypal"></i>Paypal</button>

                                                <button class="nav-link" id="v-pills-emi-tab" data-bs-toggle="pill" data-bs-target="#v-pills-emi" type="button" role="tab" aria-controls="v-pills-emi" aria-selected="false"><i class="payment-icon emi"></i>No
                                                    Cost
                                                    EMI</button>
                                            </div>
                                        </div>
                                        <!-- payment tab content section -->
                                        <div class="col-12 col-sm-8 col-md-10 col-lg-10 col-xl-10 col-xxl-9">
                                            <div class="tab-content p-4" id="v-pills-tabContent">
                                                <div class="tab-pane fade show active" id="v-pills-credit" role="tabpanel" aria-labelledby="v-pills-credit-tab">
                                                    <!-- credit card content -->
                                                    <div class="row">
                                                        <div class="col-12 mb-3">
                                                            <span class="d-flex fw-bold mb-3">Pay with Credit
                                                                Card</span>
                                                        </div>
                                                        <div class="col-12 col-xl-10">
                                                            <div class="mb-3">
                                                                <label for="exampleInputNumber" class="form-label">Card
                                                                    Number</label>
                                                                <input type="email" class="form-control min-h" id="exampleInputNumber" placeholder="Enter card number here">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="exampleInputName" class="form-label">Name on Card</label>
                                                                <input type="email" class="form-control min-h" id="exampleInputName" placeholder="Enter name here">
                                                            </div>
                                                            <div class="mb-3">
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <label class="form-label">Expiry
                                                                            Date</label>
                                                                        <div class="row">
                                                                            <div class="col-6 col-md-6 pe-0">
                                                                                <select class="border" aria-label="Default select example">
                                                                                    <option selected>Month
                                                                                    </option>
                                                                                    <option value="1">One
                                                                                    </option>
                                                                                    <option value="2">Two
                                                                                    </option>
                                                                                    <option value="3">Three
                                                                                    </option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="col-6 col-md-6 pe-3 pe-lg-0">
                                                                                <select class="border" aria-label="Default select example">
                                                                                    <option selected>Year
                                                                                    </option>
                                                                                    <option value="1">One
                                                                                    </option>
                                                                                    <option value="2">Two
                                                                                    </option>
                                                                                    <option value="3">Three
                                                                                    </option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 mt-3">
                                                                        <label for="exampleInputCVV2" class="form-label">CVV Code</label>
                                                                        <div class="d-flex align-items-center">
                                                                            <input type="email" class="form-control w-50 min-h" id="exampleInputCVV2" placeholder="CVV">
                                                                            <img src="assets/images/icons/cvv-code.jpg" alt="cvv image">
                                                                            <span class="font-extra-small ms-1">3 digits
                                                                                printed on the
                                                                                back of the card</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="mb-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                                                    <label class="form-check-label font-small theme-text-accent-one" for="flexCheckChecked">
                                                                        Save your card details for faster
                                                                        checkout.
                                                                        CVV
                                                                        is not saved.
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- credit card section end -->
                                                </div>

                                                <div class="tab-pane fade" id="v-pills-debit" role="tabpanel" aria-labelledby="v-pills-debit-tab">
                                                    <!-- Debit card content -->
                                                    <div class="row">
                                                        <div class="col-12 mb-3">
                                                            <span class="d-flex fw-bold mb-3">Pay with Debit
                                                                Card</span>
                                                        </div>
                                                        <div class="col-12 col-xl-10">
                                                            <div class="mb-3">
                                                                <label for="exampleInputNumber2" class="form-label">Card
                                                                    Number</label>
                                                                <input type="email" class="form-control min-h" id="exampleInputNumber2" placeholder="Enter card number here">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="exampleInputName2" class="form-label">Name on Card</label>
                                                                <input type="email" class="form-control min-h" id="exampleInputName2" placeholder="Enter name here">
                                                            </div>
                                                            <div class="mb-3">
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <label class="form-label">Expiry
                                                                            Date</label>
                                                                        <div class="row">
                                                                            <div class="col-6 col-md-6 pe-0">
                                                                                <select class="border" aria-label="Default select example">
                                                                                    <option selected>Month
                                                                                    </option>
                                                                                    <option value="1">One
                                                                                    </option>
                                                                                    <option value="2">Two
                                                                                    </option>
                                                                                    <option value="3">Three
                                                                                    </option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="col-6 col-md-6 pe-3 pe-lg-0">
                                                                                <select class="border" aria-label="Default select example">
                                                                                    <option selected>Year
                                                                                    </option>
                                                                                    <option value="1">One
                                                                                    </option>
                                                                                    <option value="2">Two
                                                                                    </option>
                                                                                    <option value="3">Three
                                                                                    </option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 mt-3">
                                                                        <label for="exampleInputCVV" class="form-label">CVV Code</label>
                                                                        <div class="d-flex align-items-center">
                                                                            <input type="email" class="form-control w-50 min-h" id="exampleInputCVV" placeholder="CVV">
                                                                            <img src="assets/images/icons/cvv-code.jpg" alt="cvv image">
                                                                            <span class="font-extra-small ms-1">3 digits
                                                                                printed on the
                                                                                back of the card</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="mb-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked2" checked>
                                                                    <label class="form-check-label font-small theme-text-accent-one" for="flexCheckChecked2">
                                                                        Save your card details for faster
                                                                        checkout.
                                                                        CVV
                                                                        is not saved.
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Debit card section end -->
                                                </div>

                                                <div class="tab-pane fade" id="v-pills-net-banking" role="tabpanel" aria-labelledby="v-pills-net-banking-tab">
                                                    <!-- Net Banking content -->
                                                    <div class="row">
                                                        <div class="col-12 mb-3">
                                                            <span class="d-flex fw-bold mb-3">Pay with Net
                                                                Banking
                                                                Card</span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="tab-pane fade" id="v-pills-upi" role="tabpanel" aria-labelledby="v-pills-upi-tab">
                                                    <!-- UPI content -->
                                                    <div class="row">
                                                        <div class="col-12 mb-3">
                                                            <span class="d-flex fw-bold mb-3">Pay with
                                                                UPI</span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="tab-pane fade" id="v-pills-appPay" role="tabpanel" aria-labelledby="v-pills-appPay-tab">
                                                    <!-- App content -->
                                                    <div class="row">
                                                        <div class="col-12 mb-3">
                                                            <span class="d-flex fw-bold mb-3">Pay with
                                                                Mobile App</span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="tab-pane fade" id="v-pills-wallet" role="tabpanel" aria-labelledby="v-pills-wallet-tab">
                                                    <!-- Wallet content -->
                                                    <div class="row">
                                                        <div class="col-12 mb-3">
                                                            <span class="d-flex fw-bold mb-3">Pay with
                                                                Wallet</span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="tab-pane fade" id="v-pills-payPal" role="tabpanel" aria-labelledby="v-pills-payPal-tab">
                                                    <!-- payPal content -->
                                                    <div class="row">
                                                        <div class="col-12 mb-3">
                                                            <span class="d-flex fw-bold mb-3">Pay with
                                                                PayPal</span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="tab-pane fade" id="v-pills-emi" role="tabpanel" aria-labelledby="v-pills-emi-tab">
                                                    <!-- EMI content -->
                                                    <div class="row">
                                                        <div class="col-12 mb-3">
                                                            <span class="d-flex fw-bold mb-3">Pay with
                                                                EMI</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- button section -->
                            <div class="row mt-4">
                                <div class="col">
                                    <div class="d-flex justify-content-center custom-button">
                                        <a href="#" class="d-flex justify-content-center align-items-center custom-btn-primary font-small button-effect px-4">Pay
                                            Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            $totalcost = 0;
            $disc = 0;
            $grandtotal = 0;
            
            ?>
            @foreach(session('cart_products') as $prod)
            <?php
            $totalcost += $prod->price * $prod->quantity;
            $disc += ($prod->price * $prod->discount / 100) * $prod->quantity;
            $grandtotal = ($totalcost - $disc);
            ?>
            @endforeach
            <!-- cart summary section -->
            <div class="col-lg-12 col-xl-4">
                <div class="d-flex flex-column theme-border-radius theme-bg-white theme-box-shadow mb-0 mb-lg-4">
                    <!-- title section -->
                    <div class="d-flex justify-content-between p-3 border-bottom align-items-center">
                        <span class="fs-4 fw-bold">Price Details <span class="fs-6 theme-text-accent-one">({{count(session('cart_products'))}} Items)</span></span>
                        <a href="/" class="fw-bold font-extra-small" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            View Details
                        </a>
                    </div>
                    <!-- price details -->
                    <div class="p-3">
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
                            </div>
                        </div>
                        <!-- repetable -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<!-- cart summery Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Price Details ({{count(session('cart_products'))}} Item)</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="m-0">
                <!-- price details -->
                <div class="p-3">
                    <div class="pt-2">
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-8 font-small">
                                <p class="mb-2">Subtotal</p>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4 font-small">
                                <div class="d-flex justify-content-end align-items-end">
                                    <div class="product-price mb-2">
                                        <span class="ms-1"> ₹ {{$totalcost}}</span>
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
                    
                    <div class="border-bottom pt-2">
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-8 font-small">
                                <p class="mb-2">Secured Packaging Fee</p>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4 font-small">
                                <div class="d-flex justify-content-end align-items-end">
                                    <div class="product-price mb-2">
                                        <span class="ms-1">₹ 20</span>
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
                                        <span class="ms-1"> ₹ {{$grandtotal}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- repetable -->
                </div>
            </div>
        </div>
    </div>
</div>
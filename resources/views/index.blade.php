@extends('layouts.main')
@section('content')
<section class="offer-banner py-5" id="offer-banner">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-4">
                <div class="row">
                    <div class="col-12">
                        <div class="offer-wrap card2">
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <div class="text-wrap">
                                        <h2 class="mb-3 text-uppercase fs-6 fw-bold">Packaged Foods</h2>
                                        <p class="mb-3 text-uppercase theme-text-primary">Starting ₹500</p>
                                        <div class="custom-button">
                                            <a href="/shopcatalog" class="btn custom-btn-primary font-small fw-bold button-effect py-3">
                                                Shop Now
                                                <i class="bi bi-basket fs-6 ms-2"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 align-self-center mt-4 mt-lg-0">
                                    <img src="assets/images/product/banner-product02.png" class="img-fluid mx-auto d-block" alt="product Banner">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- banner card 3-->
                    <div class="col-12 mt-4">
                        <div class="offer-wrap card3">
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <div class="text-wrap">
                                        <h2 class="mb-2 text-uppercase fs-6 fw-bold theme-text-primary">From Our Best Farmer's</h2>
                                        <p class="mb-2 text-uppercase fw-bold">Best Products</p>
                                        <p class="mb-2 text-uppercase fw-bold">15% OFF</p>
                                        <div class="custom-button">
                                            <a href="/shopcatalog" class="btn custom-btn-primary font-small fw-bold button-effect py-3">
                                                Shop Now
                                                <i class="bi bi-basket fs-6 ms-2"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 align-self-center mt-4 mt-lg-0">
                                    <img src="assets/images/product/banner-product03.png" class="img-fluid mx-auto d-block" alt="product Banner">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-8 mb-4 mb-lg-0">
                <section class="hero">
                    <div class="carouselhero">
                        <div class="offer-wrap card1">
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <div class="text-wrap">
                                        <h2 class="mb-3 text-uppercase fs-1 fw-bold theme-text-primary animate__animated" data-animation-in="animate__backInDown" data-delay-in="2.0">Mega Sale</h2>
                                        <p class="mb-3 text-uppercase fw-bold animate__animated" data-animation-in="animate__fadeInRightBig" data-delay-in="0.5">Fresh Vegitables</p>
                                        <p class=" mb-3 display-5 fw-bold  animate__animated" data-animation-in="animate__bounceInRight" data-delay-in="1.5">
                                            < 10% OFF</p>
                                                <div class="custom-button animate__animated" data-animation-in="animate__bounceInRight" data-delay-in="2.0">
                                                    <a href="/shopcatalog" class="btn custom-btn-primary font-small fw-bold button-effect py-3">
                                                        Shop Now
                                                        <i class="bi bi-basket fs-6 ms-2"></i>
                                                    </a>
                                                </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 align-self-center mt-4 mt-lg-0">
                                    <img src="/assets/images/product/banner-product.png" class="img-fluid mx-auto d-block" alt="product Banner">
                                </div>
                            </div>
                        </div>
                        <!-- slider item -->
                        <div class="offer-wrap card1-Sub">
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <div class="text-wrap">
                                        <h2 class="mb-3 text-uppercase fs-1 fw-bold theme-text-primary animate__animated" data-animation-in="animate__backInDown" data-delay-in="2.0">Top Quality</h2>
                                        <p class="mb-3 text-uppercase fw-bold animate__animated" data-animation-in="animate__bounceInLeft" data-delay-in="0.5">Fresh Fruits</p>
                                        <p class="mb-3 display-5 fw-bold animate__animated" data-animation-in="animate__bounceInRight" data-delay-in="1.5">10% OFF</p>
                                        <div class="custom-button animate__animated" data-animation-in="animate__bounceInRight" data-delay-in="2.0">
                                            <a href="/shopcatalog" class="btn custom-btn-primary font-small fw-bold button-effect py-3">
                                                Shop Now
                                                <i class="bi bi-basket fs-6 ms-2"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 align-self-center mt-4 mt-lg-0">
                                    <img src="/assets/images/product/banner-product-tyers.png" class="img-fluid mx-auto d-block" alt="product Banner">
                                </div>
                            </div>
                        </div>
                        <!-- slider item -->
                    </div>
                </section>
            </div>
        </div>
    </div>
</section>
<!-- product category section -->
<section class="py-5 cat-zone">
    <div class="container">
        <div class="row mb-4">
            <div class="col-6 animate__animated wow animate__backInUp">
                <h2 class="fs-1 fw-bold theme-text-secondary mb-0">Featured Categories</h2>
            </div>
            <section class="product-banner py-5">
                <div class="container">
                    <div class="row animate__animated wow animate__backInUp">
                        @foreach($ctcount as $type => $cnt)
                        <div class="col-12 col-md-3 mb-3 mb-md-0 overflow-hidden hoverShine">
                            <div class="box px-2 px-lg-0 shine" style="background-image:url('/assets/images/catagory/{{$type}}.png') ;">
                                <div class="content">
                                    <!-- <p class="theme-heading theme-text-white mb-4">Fresh Vegitable Items</p> -->
                                    <h1 class="mb-3 theme-text-white">{{$type}}</h1>
                                    <p class="my-0 theme-text-white">{{$cnt}} Items</p>
                                    <div class="custom-button mt-4">
                                        <a href="/shopcatalog/{{$type}}" class="custom-btn-secondary btn-shop font-small px-4 button-effect">
                                            Shop Now
                                            <i class="bi bi-arrow-right fs-6 ms-2"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </section>
        </div>
    </div>
</section>
<!-- product banner section -->

<!-- top categories section -->
<section class="topCategories py-5 theme-bg-transparent">
    <div class="container">
        <div class="row my-3">
            <div class="col-12 col-lg-6 animate__animated wow animate__backInUp">
                <h2 class="fs-1 fw-bold theme-text-secondary mb-0">Latest Products</h2>
            </div>
            <!-- tab section -->
            <!-- <div class="col-12 col-lg-6 justify-content-end animate__animated wow animate__backInUp">
                <ul class="nav nav-pills nav-justified" id="pills-tab" role="tablist">
                    <li class="nav-item mb-2 mb-md-0" role="presentation">
                        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                            All Products
                        </button>
                    </li>
                    <li class="nav-item mb-2 mb-md-0" role="presentation">
                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
                            Fruits
                        </button>
                    </li>
                    <li class="nav-item mb-2 mb-md-0" role="presentation">
                        <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">
                            Vegetables
                        </button>
                    </li>
                    <li class="nav-item mb-2 mb-md-0" role="presentation">
                        <button class="nav-link" id="pills-wheel-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-wheel" aria-selected="false">
                            Nuts
                        </button>
                    </li>
                </ul>
            </div> -->
        </div>
        <div class="row">
            <div class="col-12 animate__animated wow animate__backInUp">
                <div class="tab-content my-3" id="pills-tabContent">
                    <!-- tab content 01 -->
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                        <!-- tab 1 products -->
                        <div class="row mb-4">
                            @foreach($my_product as $prod)
                            <div class="col-12 col-md-6 col-lg-3 mb-4 mb-lg-0 mt-3">
                                <div class="card-wrap theme-border-radius px-4 py-4">
                                    <div class="con-img-wrap m-auto product-quick-view">
                                        <img src="/products/{{$prod->product_image}}" style="height:200px" class="img-fluid mx-auto d-block" alt="product picture">
                                        <div class="deal-badge">
                                            <span class="badge bg-success">{{round($prod->discount)}}% off</span>
                                        </div>
                                        <div class="view">
                                            <a class="view-btn">
                                                <i class="bi bi-eye-fill" onclick="viewprod('{{$prod->id}}')"></i>
                                            </a>
                                            <a class="view-btn wishlist" href="/addtowishlist/{{$prod->id}}">
                                                <i class="bi bi-heart-fill"></i>
                                            </a>

                                            <a class="view-btn add-to-cart" href="/addtocart/{{$prod->id}}">
                                                <i class="bi bi-basket" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add to cart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="con-wrap mt-2">
                                        <p class="text text-truncate text-center"><a href="javascript:void(0)">{{$prod->product_name}}<br>{{$prod->added_by}}</a>
                                        </p>
                                        <div class="justify-content-between bottom text-center">
                                            <div class="product-price">
                                                <span class="ms-1 fs-5 fw-bold">&#x20B9;{{$prod->price - ($prod->price*$prod->discount/100)}}{{$prod->kg}}</span>
                                                <del class="ms-1 fs-5 text-muted">&#x20B9;{{$prod->price}}</del>
                                                <small class="ms-1 text-danger">{{$prod->discount}}%off</small>
                                            </div>
                                        </div>
                                        @if(session('log_status'))
                                        <a href="/addtocart/{{$prod->id}}" class="custom-btn-secondary font-small button-effect justify-content-center align-items-center d-flex w-100">
                                            <i class="bi bi-basket me-2"></i>Add to cart
                                        </a>
                                        @else
                                        <a href="/login" class="custom-btn-secondary font-small button-effect justify-content-center align-items-center d-flex w-100">
                                            <i class="bi bi-basket me-2"></i>Login to continue
                                        </a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- view all category button -->
        <div class="row">
            <div class="col-12 text-center mt-4 animate__animated wow animate__backInUp">
                <div class="custom-button">
                    <a href="/shopcatalog" class="btn custom-btn-secondary theme-border fw-bold button-effect">
                        View More Category</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Deal  to action -->
<section class="deal-to-action">
    <div class="container">
        <div class="row animate__animated wow animate__backInUp">
            <div class="col-12 col-lg-8 position-relative align-self-center">
                <div class="d-flex align-items-center">
                    <div class="d-flex rounded-circle p-4 theme-bg-accent-two me-3">
                        <img src="assets/images/icons/hand-icon.svg" class="img-fluid " alt="basket deal">
                    </div>
                    <div class="ms-1">
                        <h4 class="fs-1 fw-bold theme-text-primary mb-1"> Big Sale on Vegetables, Fruits, Atta & Flours
                        </h4>
                        <p class="fs-4 theme-text-accent-one mb-0">Get 10% off order or store more...</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-xl-8">
                        <div class="theme-bg-white theme-border-radius theme-box-shadow p-4 mt-4 position-relative">
                            <p id="timer" class="m-auto"></p>
                        </div>
                        <a href="/shopcatalog" class="btn custom-btn-primary fw-bold button-effect mt-3">
                            Grab this deal
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4 text-center position-relative">
                <img src="assets/images/page/basket-deal-img.png" class="img-fluid" alt="basket deal">
            </div>
        </div>
    </div>
</section>
<!-- Featured products section -->
<section class="featuredProduct py-5">
    <div class="container">
        <div class="row animate__animated wow animate__backInUp">
            <div class="col-12">
                <h2 class="fs-1 fw-bold text-center theme-text-secondary mb-0">Featured Products</h2>
            </div>
        </div>
        <div class="row mt-5 animate__animated wow animate__backInUp">
            @foreach($randomRecords as $rr)
            <div class="col-12 col-sm-6 col-md-4 xol-lg-3 col-xl-2 mb-4">
                <div class="card-wrap theme-border-radius px-4 py-4 grow-box">
                    <div class="con-img-wrap small-img m-auto product-quick-view">
                        <img src="/products/{{$rr->product_image}}" class="img-fluid mx-auto d-block" alt="product picture">
                        <div class="view">
                            <a class="view-btn" onclick="viewprod('{{$rr->id}}')">
                                <i class="bi bi-eye-fill" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Quick View"></i>
                            </a>
                            <a class="view-btn wishlist" href="/addtowishlist/{{$prod->id}}">
                                <i class="bi bi-heart-fill" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Wishlist"></i>
                            </a>

                            <a class="view-btn add-to-cart" href="/addtocart/{{$prod->id}}">
                                <i class="bi bi-basket" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add to cart"></i>
                            </a>
                        </div>
                    </div>
                    <div class="con-wrap mt-3 text-center">
                        <p class="mb-4 text text-truncate"><a href="javascript:void(0)">{{$rr->product_type}}</a>
                        </p>
                        <div class="d-flex flex-column bottom" style="margin-top:-20px;">
                            <span class="fs-6 fw-bold">{{$rr->product_name}}</span>
                            <div class="align-self-center product-price">
                                <span class="ms-1 fs-6 fw-bold">₹ {{$rr->price - ($prod->price*$prod->discount/100)}} {{$rr->kg}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- repeatable-->
            @endforeach
        </div>
        <!-- view all Product button -->
        <div class="row">
            <div class="col-12 text-center mt-4 animate__animated wow animate__backInUp">
                <div class="custom-button">
                    <a href="javascript:void(0)" class="btn custom-btn-secondary theme-border fw-bold button-effect">
                        View More Product</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- latest blog section -->
<!-- <section class="blog py-5">
    <div class="container">
        <div class="row mb-5 animate__animated wow animate__backInUp">
            <div class=" col-12">
                <h2 class="fs-1 fw-bold text-center theme-text-secondary mb-0">Latest From Blog</h2>
            </div>
        </div>
        <div class="row mt-5 animate__animated wow animate__backInUp">
            <div class=" col-12 col-lg-4 mb-4">
                <div class="blog-card row g-0">
                    <div class="overflow-hidden position-relative col-12 theme-border-radius hoverShine">
                        <figure class="mb-0 img-effect shine">
                            <img src="assets/images/blog/blog-post01.jpg" class="img-fluid" alt="news articles">
                        </figure>
                    </div>
                    <div class="col-12 mt-3">
                        <a href="#"><span class="cat fw-bold fs-6">Organic</span></a>
                        <h2 class="fs-5 fw-bold theme-heading my-3">What is organic farming?</h2>
                        <div class="my-3">
                            <a href="javascript:void(0)" class="font-small fw-bold theme-text-accent-one">
                                <i class="bi bi-calendar4-week me-2 theme-text-primary"></i>
                                10th June 2022
                            </a>
                            <a href="javascript:void(0)" class="font-small fw-bold theme-text-accent-one">
                                <i class="bi bi-person-fill mx-2 theme-text-primary"></i>By Admin
                            </a>
                            <a href="javascript:void(0)" class="font-small fw-bold theme-text-accent-one">
                                <i class="bi bi-chat-dots mx-2 theme-text-primary"></i>
                                15 Comments
                            </a>
                        </div>
                        <p class="theme-text-accent-one mb-3">Vivamus in mollis lacus. Praesent nunc erat, eleifend sit amet
                            eleifend ac, scelerisque non dolor. </p>
                        <div class="d-flex">
                            <a href="javascript:void(0)" class="btn custom-btn-secondary theme-border font-small fw-bold button-effect">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4 mb-4">
                <div class="blog-card row g-0">
                    <div class="overflow-hidden position-relative col-12 theme-border-radius hoverShine">
                        <figure class="mb-0 img-effect shine">
                            <img src="assets/images/blog/blog-post02.jpg" class="img-fluid" alt="news articles">
                        </figure>
                    </div>
                    <div class="col-12 mt-3">
                        <a href="#"><span class="cat fw-bold fs-6">Fruits</span></a>
                        <h2 class="fs-5 fw-bold theme-heading my-3">Best organic fruits for womens</h2>
                        <div class="my-3">
                            <a href="javascript:void(0)" class="font-small fw-bold theme-text-accent-one">
                                <i class="bi bi-calendar4-week me-2 theme-text-primary"></i>
                                10th June 2022
                            </a>
                            <a href="javascript:void(0)" class="font-small fw-bold theme-text-accent-one">
                                <i class="bi bi-person-fill mx-2 theme-text-primary"></i>By Admin
                            </a>
                            <a href="javascript:void(0)" class="font-small fw-bold theme-text-accent-one">
                                <i class="bi bi-chat-dots mx-2 theme-text-primary"></i>
                                15 Comments
                            </a>
                        </div>
                        <p class="theme-text-accent-one mb-3">Vivamus in mollis lacus. Praesent nunc erat, eleifend sit amet
                            eleifend ac, scelerisque non dolor. </p>
                        <div class="d-flex">
                            <a href="javascript:void(0)" class="btn custom-btn-secondary theme-border font-small fw-bold button-effect">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4 mb-4">
                <div class="blog-card row g-0">
                    <div class="overflow-hidden position-relative col-12 theme-border-radius hoverShine">
                        <figure class="mb-0 img-effect shine">
                            <img src="assets/images/blog/blog-post03.jpg" class="img-fluid" alt="news articles">
                        </figure>
                    </div>
                    <div class="col-12 mt-3">
                        <a href="#"><span class="cat fw-bold fs-6">Vegitables</span></a>
                        <h2 class="fs-5 fw-bold theme-heading my-3">Is organic grapes better for you</h2>
                        <div class="my-3">
                            <a href="javascript:void(0)" class="font-small fw-bold theme-text-accent-one">
                                <i class="bi bi-calendar4-week me-2 theme-text-primary"></i>
                                10th June 2022
                            </a>
                            <a href="javascript:void(0)" class="font-small fw-bold theme-text-accent-one">
                                <i class="bi bi-person-fill mx-2 theme-text-primary"></i>By Admin
                            </a>
                            <a href="javascript:void(0)" class="font-small fw-bold theme-text-accent-one">
                                <i class="bi bi-chat-dots mx-2 theme-text-primary"></i>
                                15 Comments
                            </a>
                        </div>
                        <p class="theme-text-accent-one mb-3">Vivamus in mollis lacus. Praesent nunc erat, eleifend sit amet
                            eleifend ac, scelerisque non dolor. </p>
                        <div class="d-flex">
                            <a href="javascript:void(0)" class="btn custom-btn-secondary theme-border font-small fw-bold button-effect">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- subscription section -->
<section class="subscription py-5 animate__animated wow animate__backInUp">
    <div class="container">
        <div class="row justify-between items-center">
            <div class="col-12 col-lg-6">
                <div class="d-flex  align-items-center">
                    <div class="ms-3">
                        <h4 class="fs-1 fw-bold theme-text-white mb-3">Get 20% Discount For Subscriber</h4>
                        <p class="mb-4 mb-lg-0 theme-text-white">Lorem ipsum dolor consectetur adipisicing accusantium</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-5 offset-lg-1 align-self-center">
                <div class="input-group subs-form">
                    <input type="text" class="form-control border-0" placeholder="Your Email">
                    <button class="btn custom-btn-primary font-small fw-bold button-effect" type="button" id="button-addon2">Subscribe</button>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- features section -->
<section class="features py-5 animate__animated wow animate__backInUp">
    <div class="container">
        <div class="row g-0 position-relative">
            <div class="col-12 col-md-6 col-lg-3">
                <div class="left-icon align-items-center">
                    <div class="icon">
                        <img src="assets/images/icons/features-icon01.svg" alt="free shipping">
                    </div>
                    <div class="text">
                        <h3 class="icon-box-title">Free Shipping</h3>
                        <p>No extra cost</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="left-icon align-items-center">
                    <div class="icon">
                        <img src="assets/images/icons/features-icon02.svg" alt="free shipping">
                    </div>
                    <div class="text">
                        <h3 class="icon-box-title">100% Guarantee</h3>
                        <p>3 days return policy</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="left-icon align-items-center">
                    <div class="icon">
                        <img src="assets/images/icons/features-icon03.svg" alt="free shipping">
                    </div>
                    <div class="text">
                        <h3 class="icon-box-title">Need Assistence</h3>
                        <p>Contact us whole day</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="left-icon align-items-center">
                    <div class="icon">
                        <img src="assets/images/icons/features-icon04.svg" alt="free shipping">
                    </div>
                    <div class="text">
                        <h3 class="icon-box-title">Secure Payment</h3>
                        <p>Only secure payments</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
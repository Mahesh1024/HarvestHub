@extends('layouts.main')
@section('content')

<!-- shop grid view section -->
<div class="py-5">
    <div class="container">
        <div class="row">
            <!-- filter section -->
            <aside class="col-lg-3 col-md-4 mb-6 mb-md-0">
                <div class="offcanvas offcanvas-start offcanvas-collapse" tabindex="-1" id="offcanvasCategory" aria-labelledby="offcanvasCategoryLabel">
                    <div class="offcanvas-header d-lg-none">
                        <h5 class="offcanvas-title" id="offcanvasCategoryLabel">Filter</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body p-3">
                        <!-- filter clear section -->
                        <div class="mb-3 border-bottom pb-3 ">
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="fs-4 fw-bold">Filters</span>
                                <!-- <span class="font-extra-small theme-text-primary">Clear All</span> -->
                            </div>
                            <div class="mt-2">
                                <span class="badge theme-bg-accent-two theme-text-accent-one">Fruits</span>
                                <span class="badge theme-bg-accent-two theme-text-accent-one">Vegitable</span>
                                <span class="badge theme-bg-accent-two theme-text-accent-one">
                                    <label class="form-check-label" for="ratingFive">
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning "></i>
                                        <i class="bi bi-star-fill text-warning "></i>
                                        <i class="bi bi-star-fill text-warning "></i>
                                        <i class="bi bi-star-fill text-warning "></i>
                                    </label>
                                </span>
                            </div>
                        </div>
                        <div class="mb-5">
                            <!-- title -->
                            <h5 class="mb-3 fs-6">Categories</h5>
                            <!-- nav -->
                            <ul class="nav nav-category" id="categoryCollapseMenu">
                                <li class="nav-item border-bottom w-100 collapsed"><a href="/shopcatalog" class="nav-link">
                                        <i class="bi bi-chevron-right"></i> All Products
                                    </a>
                                </li>
                                <!-- repetable -->
                                <li class="nav-item border-bottom w-100 collapsed"><a href="/shopcatalog/vegetables" class="nav-link">
                                        <i class="bi bi-chevron-right"></i> Vegetables
                                    </a>
                                </li>
                                <!-- repetable -->
                                <li class="nav-item border-bottom w-100 collapsed"><a href="/shopcatalog/fruits" class="nav-link">
                                        <i class="bi bi-chevron-right"></i> Fruits
                                    </a>
                                </li>
                                <!-- repetable -->
                                <li class="nav-item border-bottom w-100 collapsed"><a href="/shopcatalog/oil" class="nav-link">
                                        <i class="bi bi-chevron-right"></i>Oil Items
                                    </a>
                                </li>
                                <!-- repetable -->
                                <li class="nav-item border-bottom w-100 collapsed"><a href="/shopcatalog/dairy" class="nav-link">
                                        <i class="bi bi-chevron-right"></i>Dairy Products
                                    </a>
                                </li>
                                <!-- repetable -->
                                <li class="nav-item border-bottom w-100 collapsed"><a href="/shopcatalog/atta&flour" class="nav-link">
                                        <i class="bi bi-chevron-right"></i>Atta & flours
                                    </a>
                                </li>
                                <!-- repetable -->
                                <li class="nav-item border-bottom w-100 collapsed"><a href="/shopcatalog/grains" class="nav-link">
                                        <i class="bi bi-chevron-right"></i>Grains
                                    </a>
                                </li>
                                <!-- repetable -->
                                <li class="nav-item border-bottom w-100 collapsed"><a href="/shopcatalog/spices" class="nav-link">
                                        <i class="bi bi-chevron-right"></i>Spices
                                    </a>
                                </li>
                                <!-- repetable -->
                            </ul>
                        </div>
                        <div class="mb-5">
                            <h5 class="mb-3 fs-6">Rating</h5>
                            <div>
                                <!-- form check -->
                                <div class="form-check mb-2">
                                    <!-- input -->
                                    <input class="form-check-input" type="checkbox" value="" id="ratingFive">
                                    <label class="form-check-label" for="ratingFive">
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning "></i>
                                        <i class="bi bi-star-fill text-warning "></i>
                                        <i class="bi bi-star-fill text-warning "></i>
                                        <i class="bi bi-star-fill text-warning "></i>
                                    </label>
                                </div>
                                <!-- form check -->
                                <div class="form-check mb-2">
                                    <!-- input -->
                                    <input class="form-check-input" type="checkbox" value="" id="ratingFour">
                                    <label class="form-check-label" for="ratingFour">
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning "></i>
                                        <i class="bi bi-star-fill text-warning "></i>
                                        <i class="bi bi-star-fill text-warning "></i>
                                        <i class="bi bi-star text-warning"></i>
                                    </label>
                                </div>
                                <!-- form check -->
                                <div class="form-check mb-2">
                                    <!-- input -->
                                    <input class="form-check-input" type="checkbox" value="" id="ratingThree">
                                    <label class="form-check-label" for="ratingThree">
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning "></i>
                                        <i class="bi bi-star-fill text-warning "></i>
                                        <i class="bi bi-star text-warning"></i>
                                        <i class="bi bi-star text-warning"></i>
                                    </label>
                                </div>
                                <!-- form check -->
                                <div class="form-check mb-2">
                                    <!-- input -->
                                    <input class="form-check-input" type="checkbox" value="" id="ratingTwo">
                                    <label class="form-check-label" for="ratingTwo">
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star text-warning"></i>
                                        <i class="bi bi-star text-warning"></i>
                                        <i class="bi bi-star text-warning"></i>
                                    </label>
                                </div>
                                <!-- form check -->
                                <div class="form-check mb-2">
                                    <!-- input -->
                                    <input class="form-check-input" type="checkbox" value="" id="ratingOne">
                                    <label class="form-check-label" for="ratingOne">
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star text-warning"></i>
                                        <i class="bi bi-star text-warning"></i>
                                        <i class="bi bi-star text-warning"></i>
                                        <i class="bi bi-star text-warning"></i>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="mb-0 position-relative">
                            <!-- Banner Content -->
                            <div class="position-absolute p-3 py-8">
                                <h3 class="mb-0">Foods Products</h3>
                                <p>Get Upto 25% Off</p>
                                <a href="#" class="btn btn-dark">Shop Now<i class="bi bi-arrow-right ms-1"></i></a>
                            </div>
                            <img src="assets/images/page/banner-filter.png" alt="" class="img-fluid rounded-3">
                        </div>
                    </div>
                </div>
            </aside>
            <div class="col-lg-9 col-md-12">
                <!-- sort & filter button -->
                <div class="d-lg-flex justify-content-between align-items-center align-items-center">
                    <div class="d-flex flex-column flex-sm-row mb-3 mb-lg-0">
                        <!-- select option -->
                        <!-- <select class="border theme-border-radius" aria-label="Default select example">
                            <option selected="" disabled>Sort by: Featured</option>
                            <option value="Low to High">Price: Low to High</option>
                            <option value="High to Low"> Price: High to Low</option>
                            <option value="Release Date"> Release Date</option>
                            <option value="Avg. Rating"> Avg. Rating</option>
                        </select> -->
                    </div>
                </div>
                <!-- products listing section -->
                <div class="row mt-4">
                    @foreach($my_product as $prod)
                    <div class="col-md-4 mt-3">
                        <div class="card-wrap theme-border-radius theme-box-shadow px-4 py-4">
                            <div class="con-img-wrap m-auto product-quick-view">
                                <img src="/products/{{$prod->product_image}}" style="height:150px" class="img-fluid mx-auto d-block" alt="product picture">
                                <div class="deal-badge">
                                    <span class="badge bg-danger">{{round($prod->discount)}}% Off</span>
                                </div>
                                <div class="view">
                                    <a class="view-btn">
                                        <i class="bi bi-eye-fill" onclick="viewprod('{{$prod->id}}')"></i>
                                    </a>
                                    <a href="/addtowishlist/{{$prod->id}}" class="view-btn wishlist">
                                        <i class="bi bi-heart-fill" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Wishlist"></i>
                                    </a>
                                    <a class="view-btn add-to-cart">
                                        <i class="bi bi-basket" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add to cart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="con-wrap mt-4">
                                <p class="mb-4 text text-truncate text-center"><a href="javascript:void(0)">{{$prod->product_name}}<br></a>
                                </p>
                                <div class="d-flex justify-content-between bottom mb-3">

                                    <div class="justify-content-between bottom text-center">
                                        <div class="product-price">
                                            @if($prod->discount == 0)
                                            <span class="ms-1 fs-4 fw-bold">&#x20B9;{{$prod->price}}</span>
                                            @else
                                            <span class="ms-1 fs-4 fw-bold">&#x20B9;{{$prod->price - ($prod->price*$prod->discount/100)}}</span>
                                            <del class="ms-1 fs-5 text-muted">&#x20B9;{{$prod->price}}</del>
                                            <small class="ms-1 text-danger">{{$prod->discount}}%off</small>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                @if(in_array($prod->id,$cart_ids))
                                <a href="/removecart/{{$prod->id}}" class="custom-btn-secondary font-small button-effect justify-content-center align-items-center d-flex w-100">
                                    <i class="bi bi-delete me-2"></i>Remove from cart
                                </a>
                                @else
                                <a href="/addtocart/{{$prod->id}}" class="custom-btn-secondary font-small button-effect justify-content-center align-items-center d-flex w-100">
                                    <i class="bi bi-basket me-2"></i>Add to cart
                                </a>
                                @endif
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <!-- pagination section -->
                <div class="row mt-4">
                    <div class="col">
                        <!-- nav -->
                        <div class="d-flex flex-column flex-md-row justify-content-between align-items-center">
                            <p class="font-extra-small mb-3 mb-lg-0 theme-text-accent-one">Result Page 1 of 3</p>
                            <nav>
                                <ul class="pagination justify-content-center">
                                    <li class="page-item disabled">
                                        <a class="page-link mx-1 rounded-3" href="#" aria-label="Previous">
                                            <i class="bi bi-arrow-left"></i>
                                        </a>
                                    </li>
                                    <li class="page-item"><a class="page-link  mx-1 rounded-3 active" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link mx-1 rounded-3 text-body" href="#">2</a></li>

                                    <li class="page-item"><a class="page-link mx-1 rounded-3 text-body" href="#">...</a></li>
                                    <li class="page-item"><a class="page-link mx-1 rounded-3 text-body" href="#">12</a></li>
                                    <li class="page-item">
                                        <a class="page-link mx-1 rounded-3 text-body" href="#" aria-label="Next">
                                            <i class="bi bi-arrow-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
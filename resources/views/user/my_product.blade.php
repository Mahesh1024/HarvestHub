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
                    <div class="row">
                        <div class="col-md-8">
                            <!-- title section -->
                            <div class="d-flex justify-content-between p-3">
                                <span class="fw-bold">Added Products</span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="col-12 custom-button p-3">
                                <button class="custom-btn-primary button-effect" type="submit" value="submit" id="add"><i class="bi bi-plus">Add </i></button>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-column justify-content-between p-3">
                        <div class="theme-bg-accent-two p-3 theme-border-radius" id="newaddress">
                            <form method="post" action="/add/product" enctype="multipart/form-data">
                                @csrf
                                <div class="row g-3 mt-3">
                                    <div class="col-12 col-lg-6">
                                        <span class="small fw-bold mb-3">Product Type</span>
                                        <input type="text" class="form-control min-h" placeholder="Eg: fruits,vegetables" name="pro_type" required="">
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <span class="small fw-bold mb-3">Product Name</span>
                                        <input type="text" class="form-control min-h" placeholder="Eg: Onion,Tomato" name="pro_name" required="">
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <span class="small fw-bold mb-3">Price</span>
                                        <input type="text" class="form-control min-h" name="price" placeholder="Price">
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <span class="small fw-bold mb-3">Discount</span>
                                        <input type="text" class="form-control min-h" name="discount" placeholder="discount in %">
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <div class="form-inner">
                                            <label>stock? *</label>
                                            <select id="myDropdown" name="stock" required>
                                                <option value="" selected disabled>select</option>
                                                <option>In Stock</option>
                                                <option>Out Of Stock</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <span class="small fw-bold mb-3">added By</span>
                                        <input type="text" class="form-control min-h" name="addedby" placeholder="Farmer Name">
                                    </div>
                                    <div class="col-12">
                                        <span class="small fw-bold mb-3">image upload</span>
                                        <input class="form-control" type="file" name="image" placeholder="Eg: Product Image">
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <span class="small fw-bold mb-3">discription</span>
                                        <input type="text" class="form-control min-h" name="discription" placeholder="discription">
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <span class="small fw-bold mb-3">Life Span</span>
                                        <input type="text" class="form-control min-h" name="lifespan" placeholder="Life Span">
                                    </div>
                                    <div class="col-12 custom-button">
                                        <button class="custom-btn-primary font-small button-effect px-4" type="submit" value="submit">Add Product</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- order history section -->
                    <div class="p-3">
                        <div class="row g-0">
                            <section class="topCategories py-5 theme-bg-transparent">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="tab-content my-3" id="pills-tabContent">
                                                <!-- tab content 01 -->
                                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                                    <!-- tab 1 products -->
                                                    <div class="row mb-4">
                                                        @foreach($my_products as $prod)
                                                        <div class="col-md-4 mt-3">
                                                            <div class="card-wrap theme-border-radius px-4 py-4">
                                                                <div class="con-img-wrap m-auto product-quick-view">
                                                                    <img src="/products/{{$prod->product_image}}" style="height:180px" class="img-fluid mx-auto d-block" alt="product picture">
                                                                    <div class="deal-badge">
                                                                        @if($prod->in_stock=='In Stock')
                                                                        <span class="badge bg-success">{{$prod->in_stock}}</span>
                                                                        @else
                                                                        <span class="badge bg-danger">{{$prod->in_stock}}</span>
                                                                        @endif
                                                                    </div>
                                                                    <div class="view">
                                                                        <a class="view-btn" onclick="viewprod('{{$prod->id}}')">
                                                                            <i class="bi bi-eye-fill" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Quick View"></i>
                                                                        </a>
                                                                        <a href="/deleteproduct/{{$prod->id}}" class="view-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                                            <i class="bi bi-trash" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete"></i>
                                                                        </a>
                                                                        <a class="view-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal{{$prod->id}}">
                                                                            <i class="bi bi-pencil-square" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="con-wrap mt-3  text-center">
                                                                    <label class="text text-truncate">{{$prod->product_name}}</label>
                                                                    <div class="justify-content-between bottom text-center">
                                                                        <div class="product-price">
                                                                            <span class="ms-1 fs-5 fw-bold">&#x20B9;{{$prod->price - ($prod->price*$prod->discount/100)}}</span>
                                                                            <del class="ms-1 fs-6 text-muted">&#x20B9;{{$prod->price}}</del>
                                                                            <small class="ms-1 text-danger">{{$prod->discount}}%off</small>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="modal fade" id="quickViewModal{{$prod->id}}" tabindex="-1" aria-labelledby="quickViewModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-xl modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-body p-5 pb-0">
                                                                        <div class="position-absolute top-0 end-0 me-3 mt-3" id="quickViewModalLabel">
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="d-flex flex-column justify-content-between p-3">
                                                                                <div class="theme-bg-accent-two p-3 theme-border-radius" id="newaddress">
                                                                                    <form method="post" action="/update/product" enctype="multipart/form-data">
                                                                                        @csrf
                                                                                        <div class="row g-3 mt-3">
                                                                                            <div class="col-12 col-lg-6">
                                                                                                <span class="small fw-bold mb-3">Product Type</span>
                                                                                                <input type="text" name="id1" value="{{$prod->id}}" hidden>
                                                                                                <input type="text" class="form-control min-h" value="{{$prod->product_type}}" placeholder="Eg: fruits,vegetables" name="pro_type1" required="">
                                                                                            </div>
                                                                                            <div class="col-12 col-lg-6">
                                                                                                <span class="small fw-bold mb-3">Product Name</span>
                                                                                                <input type="text" class="form-control min-h" value="{{$prod->product_name}}" placeholder="Eg: Onion,Tomato" name="pro_name1" required="">
                                                                                            </div>
                                                                                            <div class="col-12 col-lg-6">
                                                                                                <span class="small fw-bold mb-3">Price</span>
                                                                                                <input type="text" class="form-control min-h" value="{{$prod->price}}" name="price1" placeholder="Price">
                                                                                            </div>
                                                                                            <div class="col-12 col-lg-6">
                                                                                                <span class="small fw-bold mb-3">Discount</span>
                                                                                                <input type="text" class="form-control min-h" value="{{$prod->discount}}" name="discount1" placeholder="discount in %">
                                                                                            </div>
                                                                                            <div class="col-12 col-lg-6">
                                                                                                <div class="form-inner">
                                                                                                    <label>stock? *</label>
                                                                                                    <select id="myDropdown" name="stock1" required>
                                                                                                        <option value="{{$prod->in_stock}}" selected style="display:none;">{{$prod->in_stock}}</option>
                                                                                                        <option value="In Stock">In Stock</option>
                                                                                                        <option value="Out Of Stock">Out Of Stock</option>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-12 col-lg-6">
                                                                                                <span class="small fw-bold mb-3">added By</span>
                                                                                                <input type="text" class="form-control min-h" name="addedby1" value="{{$prod->added_by}}" placeholder="Farmer Name" disabled>
                                                                                            </div>
                                                                                            <!-- <div class="col-12">
                                                                                                <span class="small fw-bold mb-3">image upload</span>
                                                                                                <input class="form-control" type="file" name="image" placeholder="Eg: Product Image">
                                                                                            </div> -->
                                                                                            <div class="col-12 col-lg-6">
                                                                                                <span class="small fw-bold mb-3">discription</span>
                                                                                                <input type="text" class="form-control min-h" name="discription1" value="{{$prod->discription}}" placeholder="discription">
                                                                                            </div>
                                                                                            <div class="col-12 col-lg-6">
                                                                                                <span class="small fw-bold mb-3">Life Span</span>
                                                                                                <input type="text" class="form-control min-h" name="lifespan1" value="{{$prod->life_span}}" placeholder="Life Span">
                                                                                            </div>
                                                                                            <div class="col-12 custom-button">
                                                                                                <button class="custom-btn-primary font-small button-effect px-4" type="submit" value="submit">Update Product</button>
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
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
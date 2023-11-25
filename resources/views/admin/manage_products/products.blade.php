@extends('admin.layouts.main')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
    <meta name="author" content="AdminKit">
    <meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="img/icons/icon-48x48.png" />

    <link rel="canonical" href="https://demo-basic.adminkit.io/pages-sign-up.html" />

    <title>Sign Up | AdminKit Demo</title>

    <link href="css/app.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#newaddress').hide('fast');
            $('#add').click(function() {
                $('#newaddress').toggle();
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#newaddress1').hide('fast');
            $('#add1').click(function() {
                $('#newaddress1').toggle();
            });
        });
    </script>
</head>

<body>
    @include('sweetalert::alert')
    <main class="d-flex w-100">
        <div class="container d-flex flex-column">
            <div class="d-table-cell align-middle mt-6">
                <div class="row">
                    <div class="col-md-2">
                        <div class="d-grid gap-2">
                            <button class="btn btn-lg btn-primary" type="submit" id="add">Add Products</button>
                        </div>
                    </div>
                </div>
                <div class="card mt-4" id="newaddress">
                    <div class="card-body">
                        <div class="m-sm-3">
                            <form action="/productadd" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Product Type</label>
                                            <input class="form-control form-control-lg" type="text" name="pro_type" placeholder="Eg: Fruits">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Products Name</label>
                                            <input class="form-control form-control-lg" type="text" name="pro_name" placeholder="Eg: Mango">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Price</label>
                                            <input class="form-control form-control-lg" type="text" name="price" placeholder="price">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Discount</label>
                                            <input class="form-control form-control-lg" type="text" name="discount" placeholder="Eg: discount in %">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label>Stock?</label>
                                            <select name="stock" required>
                                                <option value="" selected disabled>select</option>
                                                <option>In Stock</option>
                                                <option>Out Of Stock</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">AddedBy</label>
                                            <input class="form-control form-control-lg" type="text" name="addedby" placeholder="Eg: Farmer Name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Discription</label>
                                            <input class="form-control form-control-lg" type="text" name="discription" placeholder="Eg: About product">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Life span</label>
                                            <input class="form-control form-control-lg" type="text" name="lifespan">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">Upload Image</label>
                                            <input class="form-control form-control-lg" type="file" name="image" placeholder="product image">
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="d-grid gap-2 mt-3">
                                            <button class="btn btn-lg btn-primary" type="submit">Add Product</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-12 col-lg-12 col-xxl-9 d-flex">
                        <div class="card flex-fill">
                            <div class="card-header">

                                <h5 class="card-title mb-0">Product Details</h5>
                            </div>
                            <table class="table table-hover my-0">
                                <thead>
                                    <tr>
                                        <th>Product Type</th>
                                        <th class="d-none d-xl-table-cell">Product Name</th>
                                        <th class="d-none d-xl-table-cell">Price</th>
                                        <th>Discount</th>
                                        <th>In Stock?</th>
                                        <th>Added By</th>
                                        <th>Life Span</th>
                                        <th class="d-none d-md-table-cell">Edit</th>
                                        <th class="d-none d-md-table-cell">Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($products as $product)
                                    <tr>
                                        <td>{{$product->product_type}}</td>
                                        <td class="d-none d-xl-table-cell">{{$product->product_name}}</td>
                                        <td class="d-none d-xl-table-cell">{{$product->price}}</td>
                                        <td class="d-none d-xl-table-cell">{{$product->discount}}%</td>
                                        <td class="d-none d-xl-table-cell">{{$product->in_stock}}</td>
                                        <td class="d-none d-xl-table-cell">{{$product->added_by}}</td>
                                        <td class="d-none d-xl-table-cell">{{$product->life_span}}</td>
                                        <td class="d-none d-md-table-cell"><a href="/productedit/{{$product->id}}" class="btn btn-primary">Edit</a>
                                        <td class="d-none d-md-table-cell"> <a href="/deleteuser/{{$product->id}}" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>



                                    <!-- <div class="card mt-4" id="newaddress1">
                                        <div class="card-body">
                                            <div class="m-sm-3">
                                                <form action="/addproduct" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label class="form-label">Product Type</label>
                                                                <input class="form-control form-control-lg" type="text" name="pro_type" placeholder="Eg: tablets, Syrup" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label class="form-label">Products Name</label>
                                                                <input class="form-control form-control-lg" type="text" name="pro_name" placeholder="Eg: Swasamrutha" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label class="form-label">Price</label>
                                                                <input class="form-control form-control-lg" type="text" name="price" placeholder="price" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label class="form-label">Discount</label>
                                                                <input class="form-control form-control-lg" type="text" name="Discount" placeholder="Eg: discount in %" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label>Stock?</label>
                                                                <select name="stock" required>
                                                                    <option value="" selected disabled>select</option>
                                                                    <option>In Stock</option>
                                                                    <option>Out Of Stock</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label class="form-label">Discription</label>
                                                                <input class="form-control form-control-lg" type="text" name="discription" placeholder="Eg: About product" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="mb-3">
                                                                <label class="form-label">Upload Image</label>
                                                                <input class="form-control form-control-lg" type="file" name="image" placeholder="product image" />
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label class="form-label">Manufacture date</label>
                                                                <input class="form-control form-control-lg" type="date" name="mf_date" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label class="form-label">Expire Date</label>
                                                                <input class="form-control form-control-lg" type="date" name="exp_date" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            <div class="d-grid gap-2 mt-3">
                                                                <button class="btn btn-lg btn-primary" type="submit">Add Product</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div> -->
                                    @endforeach
                                </tbody>

                            </table>

                        </div>
                    </div>
                </div>


            </div>

        </div>

    </main>

    <script src="{{asset ('adminassets/js/app.js')}}"></script>

</body>

</html>
@endsection
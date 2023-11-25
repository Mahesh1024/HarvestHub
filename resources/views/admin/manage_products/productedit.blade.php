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

</head>

<body>
    @include('sweetalert::alert')
    <main class="d-flex w-100">
        <div class="container d-flex flex-column">
            <div class="d-table-cell align-middle mt-6">
                <div class="card mt-4" id="newaddress">
                    <div class="card-body">
                        <div class="m-sm-3">
                            <form action="/productupdate" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Product Type</label>
                                            <input type="text" name="id1" value="{{$product[0]->id}}" hidden>
                                            <input class="form-control form-control-lg" type="text" value="{{$product[0]->product_type}}" name="pro_type1">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Products Name</label>
                                            <input class="form-control form-control-lg" type="text" value="{{$product[0]->product_name}}" name="pro_name1">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Price</label>
                                            <input class="form-control form-control-lg" type="text" value="{{$product[0]->price}}" name="price1">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Discount</label>
                                            <input class="form-control form-control-lg" type="text" value="{{$product[0]->discount}}" name="Discount1">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label>Stock?</label><br>
                                            <select name="stock1" required>
                                                <option value="{{$product[0]->in_stock}}" disabled>select</option>
                                                <option>In Stock</option>
                                                <option>Out Of Stock</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Addedby</label>
                                            <input class="form-control form-control-lg" type="text" value="{{$product[0]->added_by}}" name="addedby1" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Discription</label>
                                            <input class="form-control form-control-lg" type="text" value="{{$product[0]->discription}}" name="discription1">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Life Span</label>
                                            <input class="form-control form-control-lg" type="text" value="{{$product[0]->life_span}}" name="lifespan1">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="d-grid gap-2 mt-3">
                                            <button class="btn btn-lg btn-primary" type="submit">Update</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
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
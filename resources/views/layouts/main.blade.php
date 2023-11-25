<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="ThemesLay">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="50x50" href="/assets/images/favicon.png">

    <!-- theme CSS -->
    <link href="/assets/css/main.css" rel="stylesheet">
    <title>HarvestHub</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="https://kit.fontawesome.com/5da80804cc.js" crossorigin="anonymous"></script>

</head>
<script>
    function viewprod(id) {
        $.ajax({
            url: "/productview/" + id, // Replace with your API endpoint
            type: "GET", // HTTP method (GET, POST, PUT, DELETE, etc.)
            success: function(product) {
                console.log(product);
                $('#prod_image').attr('src', '/products/' + product[0].product_image);
                $('#div_image').css('background-image', 'url(/products/' + product[0].product_image + ')');
                $('#prod_name').html(product[0].product_name);

                if (product[0].discount != 0) {
                    $('#withdisc').show();
                    $('#withoutdisc').hide();
                    $('#dis_price').html('₹ ' + (product[0].price - (product[0].price * product[0].discount / 100)));
                    $('#ori_price').html(product[0].price);
                    $('#disc').html(product[0].discount + ' off');
                } else {
                    $('#withoutdisc').show();
                    $('#withdisc').hide();
                    $('#disc_pri').html(product[0].price);
                }

                $('#typ').html(product[0].product_type);
                $('#stock').html(product[0].in_stock);
                $('#type').html(product[0].product_type);
                $('#addcart').attr('href', 'addtocart/' + product[0].id);
                $('#addwish').attr('href', 'addtowishlist/' + product[0].id);

                $('#quickViewModal').modal('show');
            },
            error: function(xhr, status, error) {
                // Callback function when the AJAX request encounters an error
                console.log("Error: " + status + ", " + error);
            }
        });
    }

    function edit_address(id) {
        $('#update').hide('fast');
        $.ajax({
            url: '/manage/address/get/' + id,
            type: 'get',
            success: function(res) {
                console.log(res);
                $('#id1').val(res[0].id);
                $('#name1').val(res[0].full_name);
                $('#mobile1').val(res[0].mobile_number);
                $('#pincode1').val(res[0].pin_code);
                $('#address1').val(res[0].address);
                $('#city1').val(res[0]['city/town']);
                $('#state1').val(res[0].state);
                $('#landmark1').val(res[0].landmark);
                $('#alternative1').val(res[0].landmark);

                if (res.default_address) {
                    $('#default1').attr('checked', true);
                } else {
                    $('#default1').attr('checked', false);
                }

                $('#update').show('fast');
            }
        })
    }


    $(document).ready(function() {
        $('#newaddress').hide('fast');
        $('#update').hide('fast');

        $('#add').click(function() {
            $('#newaddress').toggle();
        });
    });

    function search() {
        var searchstr = $('#search-input').val()
        window.location.href = '/search/' + searchstr;
    }
</script>

<body>
    @include('sweetalert::alert')
    <!-- preloader section -->
    <div id="preloader">
        <div id="loader"></div>
    </div>
    <!-- page wrapper section -->
    <div id="wrapper"></div>
    <!-- Header Part -->
    @include('layouts.header')
    <!-- Body Part - hero section -->
    @yield('content')
    <!-- Footer Part -->
    @include('layouts.footer')
    <!-- Search model -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch"><i class="bi bi-x-lg"></i></div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
                <button onclick="search()" type="button" class="btn custom-btn-primary button-effect min-w-auto"><i class="bi bi-search"></i></button>
            </form>
        </div>
    </div>
    <!-- cart checkout section -->
    @if(session('log_status'))
    @include('layouts.sidecart')
    @endif
    <!-- wishlist notify -->
    <div class="wish-notify"></div>
    <!-- compare notify -->
    <div class="compare-notify"></div>
    <!-- add to cart notify -->
    <div class="cart-notify">
        <a href="javascript:void(0)" class="ms-cart-toggle">
            <i class="bi bi-basket fs-1"></i><span>3</span></a>
    </div>
    <!-- quick view modal -->
    <div class="modal fade" id="quickViewModal" tabindex="-1" aria-labelledby="quickViewModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body p-5 pb-0">
                    <div class="position-absolute top-0 end-0 me-3 mt-3" id="quickViewModalLabel">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <!-- product gallery -->
                            <div class="product-gallery position-relative">
                                <div class="deal-badge">
                                    <span class="badge bg-danger">Sale</span>
                                </div>
                                <div class="slider slider-for">
                                    <div class="zoom" onmousemove="zoom(event)" id="div_image">
                                        <img src="" id="prod_image" alt="solar">
                                    </div>

                                </div>
                                <!-- products thumb -->
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mt-6 mt-lg-0">
                                <a href="#!" class="mb-3 d-block" id="typ"></a>
                                <h2 class="mb-1 h4" id="prod_name"></h2>
                                <div class="row">

                                    <div class="col-6 fs-4" id="withdisc">
                                        <span class="fw-bold theme-text-secondary" id="dis_price"></span>
                                        <span class="text-decoration-line-through text-muted" id="ori_price"></span>
                                        <span><small class="fs-6 ms-2 text-danger" id="disc"></small></span>
                                    </div>

                                    <div class="col-6 fs-4" id="withoutdisc">
                                        <span class="fw-bold theme-text-secondary" id="disc_pri"></span>
                                    </div>

                                </div>
                                <hr class="my-6">

                                <div class="mt-3 row justify-content-start g-2 align-items-center">
                                    <div class="col-12 col-md-6">
                                        <a href="" id="addcart" type="button" class="custom-btn-primary font-small button-effect justify-content-center align-items-center d-flex w-100">
                                            <i class="feather-icon icon-shopping-bag me-2"></i>Add to
                                            cart
                                        </a>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <a class="theme-border custom-btn-secondary font-small button-effect px-2 d-inline-flex" href="" id="addwish" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Wishlist"><i class="bi bi-heart"></i></a>
                                    </div>
                                </div>
                                <hr class="my-6">
                                <div>
                                    <table class="table table-borderless">
                                        <tbody>
                                            <tr>
                                                <td>Availability:</td>
                                                <td><span class="badge text-bg-success" id="stock"></span></td>
                                            </tr>
                                            <tr>
                                                <td>Type:</td>
                                                <td id="type"></td>
                                            </tr>
                                            <tr>
                                                <td>Shipping:</td>
                                                <td>
                                                    <small>01 day shipping.<span class="text-muted">( Free pickup today)</span></small>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer text-center justify-content-center">
                    <p><a href="">See full details</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- modal box for Logout Profile-->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="p-5 text-center">
                    <h3 class="fs-2 fw-bold">Are you sure?
                        <br>
                        you want to log out.
                    </h3>
                    <p class="font-medium">You have successfully logged out.</p>
                    <div class="d-flex justify-content-between mt-4 custom-button">
                        <a href="/logout" class="d-flex align-items-center justify-content-center custom-btn-primary font-small button-effect px-2">
                            <span class="fw-bold">Yes Confirm</span></a>
                        <a data-bs-dismiss="modal" class="d-flex align-items-center justify-content-center theme-border custom-btn-secondary font-small button-effect px-2">No
                            Cancel
                            <i class="bi bi-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/js/nice-select.js"></script>
    <script src="/assets/js/slick.min.js"></script>
    <script src="/assets/js/slick-animation.min.js"></script>
    <script src="/assets/js/wow.min.js"></script>
    <script src="/assets/js/main.js"></script>
    <!-- deal counter js files -->
    <script src="/assets/js/deal.counter.js"></script>
</body>

</html>
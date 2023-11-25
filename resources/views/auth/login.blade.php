<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="ThemesLay">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="50x50" href="assets/images/favicon.png">

    <!-- theme CSS -->
    <link href="assets/css/main.css" rel="stylesheet">
    <title>HarvestHub</title>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- <script>
        $(document).ready(function() {
            $('#login').click(function() {
                var name = $('#name').val();
                var password = $('#password').val();
                var data = {
                    'name': name,
                    'password': password,
                    _token: '{{csrf_token()}}'
                }
                $.ajax({
                    url: "/login",
                    method: 'post',
                    data: data,
                    success: function(res) {
                        if (res.status == true) {
                            location.href = "/";
                        } else {
                            swal('HarvestHub', 'Invalid credentials', 'error');
                        }
                    }
                })
            });
        });
    </script> -->

</head>

<body>
    @include('sweetalert::alert')
    <!-- preloader section -->
    <div id="preloader">
        <div id="loader"></div>
    </div>
    <!-- page wrapper section -->
    <div id="wrapper"></div>
    <!-- signin section -->
    <div class="auth-area">
        <div class="d-flex align-items-center">
            <div class="w-50 text-center d-none d-lg-block">
                <a class="navbar-brand mb-5 d-block" href="/">
                    <img src="{{ asset('assets/images/logofinal.png') }}" width="300px" class="img-fluid" alt="Brand Logo" title="Brand Logo">
                </a>
            </div>
            <div style="padding: 20px;">
                <div class="d-flex flex-column theme-border-radius theme-bg-white theme-box-shadow mb-4">
                    <div class="w-lg-50 align-self-center p-4 me-0 me-lg-5">
                        <div class="p-0">
                            <div class="d-flex align-items-center mb-5">
                                <div class="flex-shrink-0">
                                    <div class="theme-bg-accent-two p-3 rounded-circle">
                                        <i class="bi bi-unlock lh-1 fs-4"></i>
                                    </div>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <span class="fs-4"><b><i>Sign in</i></b> &nbsp;to continue</span>
                                    <!-- <p class="font-medium mb-0 theme-text-accent-one">Sign in and
                                        Get lots of
                                        Cashback Rewards and
                                        Discount
                                    </p> -->
                                </div>
                            </div>
                            <div class="col-12">
                                <form class="needs-validation" action="/login" method="post" novalidate>
                                    @csrf
                                    <div class="mb-3 position-relative">
                                        @if(session('warning'))
                                        <div class="alert alert-warning alert-dismissible fade show">
                                            {{session('warning')}}
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                        @endif
                                        <label class="form-label fw-bold">User Name</label>
                                        <i class="bi bi-person-circle position-absolute top-50 end-1 fs-5 theme-text-accent-one"></i>
                                        <input type="text" class="form-control form-control-lg" id="name" name="name" placeholder="Enter User Name" required>
                                    </div>
                                    <div class="mb-4 position-relative">
                                        <label class="form-label fw-bold">Password</label>
                                        <i class="bi bi-lock-fill position-absolute top-50 end-1 fs-5 theme-text-accent-one"></i>
                                        <input type="password" class="form-control form-control-lg" id="password" name="password" placeholder="Enter Password" required>
                                    </div>
                                    <div class="mb-3 custom-button">
                                        <button type="submit" id="login" name="login" class="custom-btn-primary button-effect px-4">Sign In</button>
                                        <!-- <div class="d-flex flex-column">
                                            <span class="small mt-1">
                                                <a href="forgot-password.html" class="ps-3">Forgot password?</a>
                                            </span>
                                        </div> -->
                                    </div>
                                </form>
                            </div>
                            <br>
                            <div class="col-12 text-center">
                                <span class="login-app-title">Not yet registered?</span>
                                <ul class="mt-3">
                                    <li><a href="/register" class="ps-3">Register <i class="bi bi-arrow-right"></i></a></li>
                                </ul>
                            </div>

                        </div>
                        <!-- <div class="p-0 text-center">
                            <p class="mt-5 mb-0 font-extra-small">© Copyright 2023 by Grosy Store, All rights reserved.</p>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/nice-select.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/slick-animation.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>
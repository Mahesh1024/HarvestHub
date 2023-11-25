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
    <title>Grosy Store Signup - Grocery Store HTML5 Website Template</title>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<script>
    $(document).ready(function() {
        $('#farmer').on('click', function() {
            if ($(this).is(':checked')) {
                $('#label_name').html('Farmer Name');
                $('#name').attr('placeholder', 'Farmer Name');
            } else {
                $('#label_name').html('Full Name')
                $('#name').attr('placeholder', 'Full Name');
            }
        });
    });
</script>

<script>
    function validate_mobile(mobile) {
        var pattern = /^[0-9]+$/;
        if (!pattern.test(mobile) || mobile.length != 10) {
            return false;
        }
        return true;
    }

    function validate_name(name) {
        var namePattern = /^[a-zA-Z\s]+$/;
        if (!namePattern.test(name)) {
            return false;
        }
        return true;
    }

    function validate_email(email) {
        var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
        if (!emailPattern.test(email)) {
            return false;
        }
        return true;
    }

    function validate_password(password) {
        var minLength = 8; // At least one password length
        var hasUppercase = /[A-Z]/.test(password); // At least one uppercase letter
        var hasLowercase = /[a-z]/.test(password); // At least one lowercase letter
        var hasDigit = /[0-9]/.test(password); // At least one digit
        var hasSpecialChar = /[!@#$%^&*()_+{}\[\]:;<>,.?~\\-]/.test(password); // At least one special character

        // Check if the password meets all criteria
        if (password.length >= minLength && hasUppercase && hasLowercase && hasDigit && hasSpecialChar) {
            return true;
        }
        return false;
    }
    $(document).ready(function() {
        $('.error-message').hide('fast');
        $('#register').click(function() {
            $('.error-message').hide('fast');
            let name = $('#name').val();
            let email = $('#email').val();
            let mobile = $('#mobile').val();
            let password = $('#password').val();
            let address = $('#address').val();
            if (name == '') {
                $('#name').focus();
                $('#name-error').html('Please enter the Name');
                $('#name-error').show('fast');
            } else if (!validate_name(name)) {
                $('#name').focus();
                $('#name-error').html('Numbers and Special Characters are not allowed.');
                $('#name-error').show('fast');
            } else if (!validate_email(email)) {
                $('#email').focus();
                $('#email-error').html('Invalid Email ID');
                $('#email-error').show('fast');
            } else if (address == '') {
                $('#address').focus();
                $('#address-error').html('Please enter the address');
                $('#address-error').show('fast');
            } else if (!validate_mobile(mobile)) {
                $('#mobile').focus();
                $('#mobile-error').html('Invalid Mobile Number');
                $('#mobile-error').show('fast');
            } else if (!validate_password(password)) {
                $('#password').focus();
                $('#password-error').html('Password is not valid. Please follow the password requirements.');
                $('#password-error').append('At least 8 Characters. At least one Special Character, one digit, one Uppercase, one Lowercase');
                $('#password-error').show('fast');
            } else {
                $('#registerform').submit();
            }
        })
    });
</script>

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
                    <img src="assets/images/logofinal.png" class="img-fluid" alt="Brand Logo" title="Brand Logo" width="300px">
                </a>
            </div>
            <div style="padding: 20px;width:80rem">
                <div class="d-flex flex-column theme-border-radius theme-bg-white theme-box-shadow mb-4">
                    <div class="w-lg-50 align-self-center p-4 me-0 me-lg-8">

                        <div class="p-0">
                            <div class="d-flex align-items-center mb-5">
                                <div class="flex-shrink-0">
                                    <div class="theme-bg-accent-two p-3 rounded-circle">
                                        <i class="bi bi-unlock lh-1 fs-4"></i>
                                    </div>

                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <span class="fs-4 fw-bold">Create Account</span>

                                </div>
                            </div>

                            <div class="col-12">
                                <form method="post" action="/register" class="needs-validation" id="registerform" novalidate>
                                    @csrf
                                    <div class="row">
                                        @if(session('warning'))
                                        <div class="alert alert-warning alert-dismissible fade show ">
                                            {{ session('warning')}}
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                        @endif
                                        <div class="col-md-12">
                                            <div class="mb-3 form-check">
                                                <input type="checkbox" class="form-check-input" id="farmer" name="farmer" value="Farmer">
                                                <label class="form-check-label font-small" for="exampleCheck1">Are you a Farmer
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3 position-relative">
                                                <label class="form-label fw-bold" id="label_name">Full Name</label>
                                                <i class="bi bi-person-circle position-absolute top-50 end-1 fs-5 theme-text-accent-one"></i>
                                                <input type="text" class="form-control form-control-lg" name="name" id="name" placeholder="enter user name" required>
                                                <div class="error-message text-danger" id="name-error"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3 position-relative">
                                                <label class="form-label fw-bold">Email</label>
                                                <i class="bi bi-envelope-fill position-absolute top-50 end-1 fs-5 theme-text-accent-one"></i>
                                                <input type="email" class="form-control form-control-lg" id="email" name="email" placeholder="enter email" required>
                                                <div class="error-message text-danger" id="email-error"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-3 position-relative">
                                                <label class="form-label fw-bold">Address</label>
                                                <i class="bi bi-lock-fill position-absolute top-50 end-1 fs-5 theme-text-accent-one"></i>
                                                <textarea name="address" id="address" class="form-control form-control-lg" rows="1" placeholder="Address"></textarea>
                                                <div class="error-message text-danger" id="address-error"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3 position-relative">
                                                <label class="form-label fw-bold">Mobile Number</label>
                                                <i class="bi bi-envelope-fill position-absolute top-50 end-1 fs-5 theme-text-accent-one"></i>
                                                <input type="number" class="form-control form-control-lg" id="mobile" name="mobile" max="10" min="10" placeholder="enter mobile" required>
                                                <div class="error-message text-danger" id="mobile-error"></div>
                                            </div>
                                        </div>


                                        <div class="col-md-6">
                                            <div class="mb-3 position-relative">
                                                <label class="form-label fw-bold">Password</label>
                                                <i class="bi bi-lock-fill position-absolute top-50 end-1 fs-5 theme-text-accent-one"></i>
                                                <input type="password" class="form-control form-control-lg" id="password" name="password" placeholder="enter password" required>
                                                <div class="error-message text-danger" id="password-error"></div>
                                            </div>
                                        </div>

                                        <div class="col-md-12 mt-2">
                                            <div class="custom-button">
                                                <button type="button" id="register" name="register" class="custom-btn-primary button-effect px-4">Register</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-12 text-center mt-4">
                                <span class="login-app-title">Already Registered?</span>
                                <ul class="mt-3">
                                    <li><a href="/login" class="ps-3"> <i class="bi bi-arrow-left"></i>Login</a></li>
                                </ul>
                            </div>
                        </div>
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
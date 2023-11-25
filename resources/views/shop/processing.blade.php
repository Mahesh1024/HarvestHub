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


<body>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script>
        var options = {
            "key": "rzp_test_PgcjpQ48oMEMzP", // Enter the Key ID generated from the Dashboard
            "amount": "{{ $order_details->amount }}", // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
            "currency": "INR",
            "name": "HarvestHub",
            "description": "Test Transaction",
            "image": "/images/logo.jpeg",
            "order_id": "{{ $order_details->id }}", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
            "handler": function(response) {
                window.location.href = '/ordersuccess';
            },
            "prefill": {
                "name": "{{ $user_details[0]->name }}",
                "email": "{{ session('email_id') }}",
                "contact": "{{ $user_details[0]->mobile_number }}"
            },
            "notes": {
                "address": "{{ $user_details[0]->address }}"
            },
            "theme": {
                "color": "#00cc00"
            },
        };
        var rzp1 = new Razorpay(options);
        rzp1.on('payment.failed', function(response) {
            window.location.href = '/';
        });
        rzp1.open();
        e.preventDefault();
    </script>

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
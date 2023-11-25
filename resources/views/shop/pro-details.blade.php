<!doctype html>
<html lang="en">

<head>
    <title>Product Details</title>
    <link rel="icon" href="assets/images/fav.png" type="image/gif" sizes="20x20">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="assets/css/all.css">

    <link rel="stylesheet" href="assets/css/boxicons.min.css">


    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-icons.css">

    <link rel="stylesheet" href="assets/css/line-awesome.css">

    <link rel="stylesheet" href="assets/css/slick-theme.css">
    <link rel="stylesheet" href="assets/css/slick.css">

    <link rel="stylesheet" href="assets/css/nice-select.css">

    <link rel="stylesheet" href="assets/css/magnific-popup.css">

    <link rel="stylesheet" href="assets/sass/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    @include('layouts.subheader')

    <section class="prod-details pt-100">
        <div class="container">
            <div class="row">

                <div class="col-lg-6">
                    <div class="product-details-gallery">
                        <div class="row g-3">
                            <div class="col-sm-3">
                                <div class="nav flex-sm-column flex-row nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                    <button class="nav-link active mb-30" id="v-pills-img1-tab" data-bs-toggle="pill" data-bs-target="#v-pills-img1" type="button" role="tab" aria-controls="v-pills-img1" aria-selected="true">
                                        <img src="assets/images/products/big-apple.jpg" alt>
                                    </button>
                                    <button class="nav-link mb-30" id="v-pills-img2-tab" data-bs-toggle="pill" data-bs-target="#v-pills-img2" type="button" role="tab" aria-controls="v-pills-img2" aria-selected="false">
                                        <img src="assets/images/products/guava3.png" alt>
                                    </button>
                                    <button class="nav-link" id="v-pills-img3-tab" data-bs-toggle="pill" data-bs-target="#v-pills-img3" type="button" role="tab" aria-controls="v-pills-img3" aria-selected="false">
                                        <img src="assets/images/products/red-beat2.png" alt>
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-9">
                                <div class="tab-content" id="v-pills-tabContent">
                                    <span class="product-gallery-badge">-10%</span>
                                    <div class="tab-pane fade show active" id="v-pills-img1" role="tabpanel" aria-labelledby="v-pills-img1-tab">
                                        <div class="gallery-big-image">
                                            <img src="assets/images/products/big-apple.jpg" alt>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-img2" role="tabpanel" aria-labelledby="v-pills-img2-tab">
                                        <img src="assets/images/products/guava3.png" alt>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-img3" role="tabpanel" aria-labelledby="v-pills-img3-tab">
                                        <img src="assets/images/products/red-beat2.png" alt>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="prod-details-content">
                        <ul class="product-review2 d-flex flex-row align-items-center mb-25">
                            <li><i class="bi bi-star-fill"></i></li>
                            <li><i class="bi bi-star-fill"></i></li>
                            <li><i class="bi bi-star-fill"></i></li>
                            <li><i class="bi bi-star-fill"></i></li>
                            <li><i class="bi bi-star-fill"></i></li>
                            <li><a href="#" class="review-no"></a>(32 Review)</li>
                        </ul>
                        <h3 class="eg-title1 mb-25">Fresh organic Vegetable Fruit</h3>
                        <h4 class="price-title border--bottom2 mb-15">$41.36</h4>
                        <p class="para2 mb-15">RIBCAGE STR ANK RAINBOW - B lue High-rise straight-leg jeans Lorem ipsum
                            dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                            dolore magna aliqua.</p>
                        <div class="prod-quantity d-flex align-items-center justify-content-start mb-20">
                            <div class="quantity">
                                <input type="number" min="1" max="90" step="10" value="1">
                                <div class="quantity-nav">
                                    <div class="quantity-button quantity-up">
                                        <i class="bi bi-plus"></i>
                                    </div>
                                    <div class="quantity-button quantity-down">
                                        <i class="bi bi-dash"></i>
                                    </div>
                                </div>
                            </div>
                            <a href="#" class="eg-btn md--btn primary--btn">Add to cart</a>
                        </div>
                        <ul class="prod-info">
                            <li><span>Product Type:</span>Organic</li>
                            <li><span>MFG:</span>July 4.2021</li>
                            <li><span>Life:</span>05 Days</li>
                            <li><span>Category:</span>Grocery & Staples</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="prod-description pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="eg-title1 eg-title2 mb-50">Product Details</h3>
                    <div class="row g-4">
                        <div class="col-lg-3">
                            <div class="nav flex-column nav-pills me-3" id="v-pills-tab2" role="tablist" aria-orientation="vertical">
                                <button class="nav-link active btn--lg mb-20" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Discription
                                </button>
                                <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Our Review (2)
                                </button>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="tab-content" id="v-pills-tabContent2">
                                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                    <div class="description box--shadow">
                                        <p class="para-2 mb-2">Aenean dolor massa, rhoncus ut tortor in, pretium tempus
                                            neque. Vestibulum venenatis leo et dictum finibus. Nulla vulputate dolor sit
                                            amet tristique dapibus. Maecenas posuere luctus leo, non consequat felis ullamc
                                            orper non. Aliquam erat volutpat. Donec vitae porta enim. Cras eu volutpat
                                            dolor, vitae accumsan tellus. Donec pulvinar auctor nunc, et gravida elit porta
                                            non. Aliquam erat volutpat. Proin facilisis interdum felis, sit amet pretium
                                            purus feugiat ac. Donec in leo metus. Sed quis dui nec justo ullamcorper
                                            molestie. Mauris consequat lacinia est, eget tincidunt leo ornare sed</p>
                                        <p class="para-2">Aenean dolor massa, rhoncus ut tortor in, pretium tempus neque.
                                            Vestibulum venenatis leo et dictum finibus dapi bus Maecenas posuere luctus leo,
                                            non consequat felis ullamcorper non.</p>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                    <ul class="comment-area mb-50">
                                        <li class="mb-30">
                                            <div class="comment-box">
                                                <div class="comment-header d-flex justify-content-start align-items-center mb-30">
                                                    <div class="author-img">
                                                        <img src="assets/images/blog/commnt1.jpg" alt>
                                                    </div>
                                                    <div class="header-meta">
                                                        <h5>Jenny Wilson<span class="commnt-date"> - 8th Jan 2021</span>
                                                        </h5>
                                                        <ul class="product-review">
                                                            <li><i class="bi bi-star-fill"></i></li>
                                                            <li><i class="bi bi-star-fill"></i></li>
                                                            <li><i class="bi bi-star-fill"></i></li>
                                                            <li><i class="bi bi-star-fill"></i></li>
                                                            <li><i class="bi bi-star-fill"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="comment-body mb-30">
                                                    <p class="para">Aenean dolor massa, rhoncus ut tortor in, pretium tempus
                                                        neque. Vestibulum venenatis leo et dictum finibus. Nulla vulputate
                                                        dolor sit amet tristique dapibus.Gochujang ugh viral, butcher pabst
                                                        put a bird on it meditation austin.</p>
                                                </div>
                                                <div class="comment-footer">
                                                    <ul class="footer-icon-list d-flex justify-content-start align-items-center">
                                                        <li><a href="#"><i class="lar la-thumbs-up"></i></a></li>
                                                        <li><a href="#"><i class="lar la-heart"></i></a></li>
                                                        <li><a href="#" class="commnt-reply ms-2">Reply</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="comment-box">
                                                <div class="comment-header d-flex justify-content-start align-items-center mb-30">
                                                    <div class="author-img">
                                                        <img src="assets/images/blog/commnt2.jpg" alt>
                                                    </div>
                                                    <div class="header-meta">
                                                        <h5>Sara Waston<span class="commnt-date">- 10th Jan 2021</span></h5>
                                                        <ul class="product-review">
                                                            <li><i class="bi bi-star-fill"></i></li>
                                                            <li><i class="bi bi-star-fill"></i></li>
                                                            <li><i class="bi bi-star-fill"></i></li>
                                                            <li><i class="bi bi-star-fill"></i></li>
                                                            <li><i class="bi bi-star-fill"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="comment-body mb-30">
                                                    <p class="para">Aenean dolor massa, rhoncus ut tortor in, pretium tempus
                                                        neque. Vestibulum venenatis leo et dictum finibus. Nulla vulputate
                                                        dolor sit amet tristique dapibus.Gochujang ugh viral, butcher pabst
                                                        put a bird on it meditation austin.</p>
                                                </div>
                                                <div class="comment-footer">
                                                    <ul class="footer-icon-list d-flex justify-content-start align-items-center">
                                                        <li><a href="#"><i class="lar la-thumbs-up"></i></a></li>
                                                        <li><a href="#"><i class="lar la-heart"></i></a></li>
                                                        <li><a href="#" class="commnt-reply ms-2">Reply</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="comment-form-area">
                                        <div class="form-header mb-40">
                                            <h5>Leave A Comment</h5>
                                            <span>Your email address will not be published. Required fields are marked *</span>
                                        </div>
                                        <form>
                                            <div class="row g-4">
                                                <div class="col-lg-6">
                                                    <div class="form-inner">
                                                        <label>Your Name </label>
                                                        <input type="text" placeholder="Your name">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-inner">
                                                        <label>Email </label>
                                                        <input type="text" placeholder="Your email">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <textarea rows="6" placeholder="Your message"></textarea>
                                                </div>
                                                <div class="col-12">
                                                    <div class="comment-rate-area">
                                                        <p>Your Rating</p>
                                                        <div class="rate">
                                                            <input type="radio" id="star5" name="rate" value="5" />
                                                            <label for="star5" title="text">5 stars</label>
                                                            <input type="radio" id="star4" name="rate" value="4" />
                                                            <label for="star4" title="text">4 stars</label>
                                                            <input type="radio" id="star3" name="rate" value="3" />
                                                            <label for="star3" title="text">3 stars</label>
                                                            <input type="radio" id="star2" name="rate" value="2" />
                                                            <label for="star2" title="text">2 stars</label>
                                                            <input type="radio" id="star1" name="rate" value="1" />
                                                            <label for="star1" title="text">1 star</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="#" class="lg--btn primary--btn">Post Comment</a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="related-product pb-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="eg-title1 eg-title2 mb-50">Related Product</h3>
                </div>
            </div>
            <div class="row">
                <?php for ($i = 1; $i <= 4; $i++) { ?>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="eg-product-carde-alpha">
                            <ul class="product-card-lavels">
                                <li class="discount-percentage">-25% off</li>
                            </ul>
                            <div class="eg-porduct-thumb">
                                <a href="product-details.html">
                                    <img src="assets/images/products//pomegra.png" alt>
                                </a>
                                <div class="thumb-action">
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                </div>
                            </div>
                            <div class="eg-porduct-body">
                                <h5 class="eg-product-title"><a href="product-details.html">Fresh Organic Vegetable
                                        Package </a></h5>
                                <div class="eg-product-card-price">
                                    <del><span class="price-discounted-amount"><bdi>$3.15 <span class="price-meater">/kg</span></bdi></span>
                                    </del>
                                    <ins><span class="price-amount"><bdi>$15</bdi><span class="price-meater">/kg</span></span>
                                    </ins>
                                </div>
                                <div class="product-card-bottom">
                                    <ul class="product-rating">
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                    </ul>
                                    <div class="product-add-btn">
                                        <a href="cart.html">Add to cart <i class="fa fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>


    @include('layouts.footer')


    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/slick.js"></script>

    <script src="assets/js/jquery.nice-select.js"></script>

    <script src="assets/js/odometer.min.js"></script>
    <script src="assets/js/viewport.jquery.js"></script>

    <script src="assets/js/jquery.magnific-popup.min.js"></script>

    <script src="assets/js/jquery-ui.js"></script>

    <script src="assets/js/main.js"></script>
</body>

</html>
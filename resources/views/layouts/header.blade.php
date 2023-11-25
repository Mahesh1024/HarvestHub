<header>
    <div class="info-top py-3">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-4 align-self-center d-flex justify-content-lg-between align-items-center justify-content-center">
                    <div class="d-flex mb-2 mb-lg-0 ">
                        @if(session('log_status')!=true)
                        <div class="d-flex widget justify-content-center justify-content-md-end" style="margin:10px;">
                            <a href="/adminlogin" class="rounded-circle"><i class="fa fa-user-secret"></i></a>
                        </div>
                        @endif
                    </div>
                </div>
                <div class="col-12 col-md-4 text-center align-self-center">
                    <a class="navbar-brand py-0 m-0 d-block" href="/">
                        <img src="/assets/images/headerlogo.png" class="img-fluid" alt="Brand Logo" style="width:200px;" title="Brand Logo">
                    </a>
                </div>
                <div class="col-12 col-md-4 align-self-center mt-3 mt-md-0">
                    <div class="d-flex widget justify-content-center justify-content-md-end">
                        @if(session('log_status'))  
                        <a href="/account" class="rounded-circle"><i class="bi bi-person"></i></a>
                        <a href="javascript:void(0)" class="rounded-circle" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><i class="bi bi-basket"></i>
                            <sup>{{count(session('cart_products'))}}</sup>
                        </a>
                        @endif
                        <a href="javascript:void(0)" class="rounded-circle search-switch"><i class="bi bi-search"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- navigation section -->
    <div class="main-nav theme-box-shadow">
        <div class="container">
            <div class="row position-relative g-0">
                <div class="col-12">
                    <div class="wsmenucontainer clearfix">
                        <div class="overlapblackbg"></div>
                        <div class="wsmobileheader clearfix">
                            <a id="wsnavtoggle" class="animated-arrow"><span></span></a>
                        </div>
                        <div class="header">
                            <!--main mega menu -->
                            <nav class="wsmenu clearfix center">
                                <ul class="mobile-sub wsmenu-list">
                                    <li><a href="/">&nbsp;&nbsp;Home</a>
                                    </li>
                                    <li><a href="/shopcatalog">&nbsp;&nbsp;Shop </a>
                                    </li>
                                    <!-- <li><a href="/blog">&nbsp;&nbsp;Blog</a>
                                    </li> -->
                                    <li><a href="/about">&nbsp;&nbsp;About Us</a>
                                    </li>
                                    <li><a href="/contact">&nbsp;&nbsp;Contact Us</a>
                                    </li>
                                    @if(session('log_status'))
                                    <li><a href="/account"> <span class="bi bi-person"></span>{{session('full_name')}}</a>
                                    </li>
                                    <li><a href="/logout" data-bs-toggle="modal" data-bs-target="#exampleModal"><span class="bi bi-box-arrow-in-right"></span></a>
                                    </li>
                                    @else
                                    <li><a href="/login">&nbsp;&nbsp;Login</a>
                                    </li>
                                    @endif
                                </ul>
                            </nav>
                            <!--Menu HTML Code-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
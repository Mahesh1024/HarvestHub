@extends('layouts.main')
@section('content')
<!-- breadcrumb section -->
<div class="breadcrumb-area breadcrumb-light">
    <div class="container">
        <!-- row -->
        <div class="row ">
            <!-- col -->
            <div class="col-12">
                <!-- breadcrumb -->
                <div class="page-breadcrumb">
                    <h2 class="heading">Contact Us</h2>
                    <div class="mt-3">
                        <ul class="list">
                            <li><a href="index.html">Home</a></li>
                            <li>Contact Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact section -->
<section class="contact-sec pt-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-5 offset-lg-1 animate__animated wow animate__backInUp">
                <div class="row">
                    <div class="col-12 col-lg-12 contact-form">
                        <div class="mb-4 mb-lg-0 position-relative">
                            <h2 class="fs-1 mb-3 fw-bold theme-text-secondary mt-5 mt-lg-0">Fill the form <br>to Contact Us</h2>
                            <form method="post" action="contactreg">
                                @csrf
                                <div class="messages"></div>
                                <div class="controls">
                                    <div class="form-group mb-4">
                                        <input id="form_name" type="text" name="name" class="form-control custum-input" placeholder="Your Name" required="required" data-error="Name is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <input id="form_email" type="email" name="email" class="form-control custum-input" placeholder="Your Email" required="required" data-error="Valid Email is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <input id="form_phone" type="Number" name="phone" class="form-control custum-input" placeholder="Your Phone" required="required" data-error="Please specify your Phone.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <textarea id="form_message" name="message" class="form-control custum-input" placeholder="Message" rows="4" required="required" data-error="Please, leave us a message."></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="mb-1">
                                        <button type="Submit" class="w-50 btn custom-btn-primary button-effect fw-bold">
                                            Send Request
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-5 offset-lg-1 align-self-center position-relative mb-4">
                <div class="mb-5 animate__animated wow animate__backInUp">
                    <div class="d-flex mb-3">
                        <img src="assets/images/icons/need-help.svg" class="img-fluid" alt="Need Help">
                        <h3 class="fs-5 fw-bold theme-text-secondary mb-0 ms-2 align-self-center">Need specific help?</h3>
                    </div>
                    <p class="mb-0 theme-text-accent-one">If you don't want to contact us for an help, you can mail us via <a href="#" class="fw-bold">harvesthub@customer.com</a></p>
                </div>
                <div class="mb-5 animate__animated wow animate__backInUp">
                    <div class="d-flex mb-3">
                        <img src="assets/images/icons/support-center.svg" class="img-fluid" alt="Support Center">
                        <h3 class="fs-5 fw-bold theme-text-secondary mb-0 ms-2 align-self-center">Our Support Center</h3>
                    </div>
                    <p class="mb-0 theme-text-accent-one">Any query related productsyou can call our customer support at
                        <span class="fw-bold">+91 91643 61238</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- map -->
    <div class="d-flex flex-column theme-border-radius theme-bg-white theme-box-shadow mt-5">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3906.0310531075156!2d76.77801247332657!3d11.762863340228405!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3baf4b2a267a9ea5%3A0x473623927d215566!2sGNM%20Farm%2C%20Depapura!5e0!3m2!1sen!2sin!4v1691336388143!5m2!1sen!2sin" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>
@endsection
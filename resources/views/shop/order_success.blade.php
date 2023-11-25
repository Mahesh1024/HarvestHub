@extends('layouts.main')
@section('content')

<div class="my-4">
    <div class="container">
        <div class="row">
            <!-- order success section -->
            <div class="col-12 col-lg-10 offset-lg-1">
                <div class="d-flex flex-column">
                    <!-- title section -->
                    <div class="d-flex flex-column justify-content-center p-3 align-items-center">
                        <i class="bi bi-check-circle display-1 text-success"></i>
                        <span class="fs-2 theme-text-secondary mb-3">We’ve received your order</span>
                        <!-- <p class="fs-6 theme-text-accent-one fw-bold mb-4">Order no # 70018215551</p>
                        <p class="font-small theme-text-accent-one">A copy of your receipt has been sent to :
                            <a href="#">{{session('email_id')}}</a>
                        </p> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
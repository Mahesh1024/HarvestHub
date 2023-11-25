<script>
    function update_quantity(prod_id, flag) {

        var quantity = $('#prod' + prod_id).val();

        if (flag == 0) {
            quantity = parseInt(quantity) - 1;
        } else {
            quantity = parseInt(quantity) + 1;
        }
        $.ajax({
            url: "/update_quantity/" + prod_id + "/" + quantity,
            method: 'get',
            success: function(res) {
                console.log(res);
                location.reload();
                //$('#offcanvasRight').offcanvas('hide');
                //$('#offcanvasRight').offcanvas('show');
            }
        })

    }
</script>
<div class="offcanvas offcanvas-end cart-menu" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header border-bottom">
        <div class="text-start">
            <h5 id="offcanvasRightLabel" class="mb-0 fs-5 theme-text-primary fw-bold">Shop Cart</h5>
            <p class="mb-0 font-small theme-text-accent-one">Total Item ({{count(session('cart_products'))}})</p>
        </div>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <!-- cart content -->
        <div class="mb-2">
            <ul class="list-group list-group-flush">
                <!-- repetable -->
                @foreach(session('cart_products') as $prod)
                <li class="list-group-item py-3 ps-0">
                    <div class="row align-items-center">
                        <div class="col-3 col-md-2">
                            <img src="/products/{{$prod->product_image}}" alt="Parts" class="img-fluid">
                        </div>
                        <div class="col-4 col-md-6 col-lg-5">
                            <a href="javascript:void(0)" class="text-inherit">
                                <p class="mb-0 font-small fw-bold">{{ $prod->product_name }}</p>
                            </a>
                            <span><small class="text-muted font-extra-small" id='{{"prod_quant".$prod->prod_id}}'>{{ $prod->quantity }}</small></span>
                        </div>
                        <div class="col-3 col-md-3 col-lg-3 px-0">
                            <div class="input-group input-spinner">
                                <span class="button-minus btn btn-sm" onclick="update_quantity('{{$prod->prod_id}}',0)">-</span>
                                <input type="text" value="{{ $prod->quantity }}" id='{{"prod".$prod->prod_id}}' class="quantity-field form-control-sm form-input">
                                <span class="button-plus btn btn-sm" onclick="update_quantity('{{$prod->prod_id}}','{{$prod->price}}','{{$prod->discount}}',1)">+</span>
                            </div>
                            <div class="mt-2 small lh-1"> <a href="/removecart/{{$prod->prod_id}}" class="text-decoration-none text-inherit">
                                    <span class="me-1 align-middle"><i class="bi bi-trash"></i></span>
                                    <a href="/removecart/{{$prod->prod_id}}">
                                        <span class="text-muted font-extra-small">Remove</span>
                                    </a>
                            </div>
                        </div>
                        <div class="col-2 text-lg-end text-start text-md-end col-md-2">
                            @if($prod->discount == 0)
                            <span class="fw-bold text-danger" id='{{"prod_actual_price".$prod->prod_id}}'>&#x20B9;{{ $prod->price*$prod->quantity }}</span>
                            @else
                            <span class="fw-bold text-danger" id='{{"prod_disc_price".$prod->prod_id}}'>&#x20B9;{{($prod->price - ($prod->price*$prod->discount/100))*$prod->quantity}}</span>
                            <div class="text-decoration-line-through text-muted small" id='{{"prod_actual_price".$prod->prod_id}}'>&#x20B9;{{ $prod->price*$prod->quantity }}</div>
                            @endif
                        </div>
                    </div>
                </li>
                @endforeach
            </ul>
            <!-- alert -->
            <div class="alert alert-success p-2 font-extra-small rounded-pill" role="alert">
                You’ve got FREE delivery. Start <a href="javascript:void(0)" class="alert-link">checkout now!</a>
            </div>
            <!-- btn -->
            <div class="d-flex justify-content-between mt-4 custom-button">
                <a href="/checkout" class="d-flex align-items-center custom-btn-primary font-small button-effect px-4">Proceed to
                    checkout</a>
                <a href="/cart" class="theme-border custom-btn-secondary font-small button-effect px-2">View
                    Cart</a>



            </div>
        </div>
    </div>
</div>
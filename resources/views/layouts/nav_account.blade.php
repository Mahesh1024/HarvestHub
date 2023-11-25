            <div class="col-12 col-md-3">
                <div class="d-flex flex-column theme-border-radius theme-bg-white theme-box-shadow mb-3">
                    <div class="d-flex p-3 align-items-center">
                        <span class="text-center">
                            <i class="fa-solid fa-user fa-2xl" style="color: #15c118;"></i> </span>
                        <span class="ms-3"><span class="font-extra-small">Hello,</span> <br> <span class="font-small fw-bold">{{session('full_name')}}</span></span>
                    </div>
                </div>
                <div class="d-flex flex-column theme-border-radius theme-bg-white theme-box-shadow mb-3 mb-lg-0">
                    <ul id="dashboard">
                        <li class="fs-4 border-bottom py-4 ps-4 fw-bold">My Account</li>
                        <li>
                            <a href="/account" class="border-bottom p-2 theme-text-accent-one"><i class="bi bi-speedometer fs-4 mx-3 align-middle"></i>Dashboard</a>
                        </li>
                        <li><a href="/profile" class="border-bottom p-2 theme-text-accent-one"><i class="bi bi-gear fs-4 mx-3 align-middle"></i>Profile Setting</a>
                        </li>
                        <li><a href="/manage_addr" class="border-bottom p-2 theme-text-accent-one"><i class="bi bi-person-workspace fs-4 mx-3 align-middle"></i>Manage Address</a>
                        </li>
                        @if(session('user_type')!='User')
                        <li><a href="/my_product" class="border-bottom p-2 theme-text-accent-one"><i class="bi bi-box-seam fs-4 mx-3 align-middle"></i>My Products</a>
                        </li>
                        @endif
                        <li><a href="/my_orders" class="border-bottom p-2 theme-text-accent-one"><i class="bi bi-box-seam fs-4 mx-3 align-middle"></i>Order History</a>
                        </li>
                        <li><a href="/my_wishlist" class="border-bottom p-2 theme-text-accent-one"><i class="bi bi-bag-heart fs-4 mx-3 align-middle"></i>My Wish list</a>
                        </li>
                        <!-- <li><a href="dashboard-return-order.html" class="border-bottom p-2 theme-text-accent-one"><i class="bi bi-arrow-return-left fs-4 mx-3 align-middle"></i>Return</a>
                        </li>
                        <li><a href="dashboard-success-message-return.html" class="border-bottom p-2 theme-text-accent-one"><i class="bi bi-chat-text fs-4 mx-3 align-middle"></i>Return Sucess</a>
                        </li>
                        <li><a href="dashboard-track.html" class="border-bottom p-2 theme-text-accent-one"><i class="bi bi-truck fs-4 mx-3 align-middle"></i>Track Order</a>
                        </li> -->
                        <li><a href="#" class="p-2 theme-text-accent-one" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-box-arrow-right fs-4 mx-3 align-middle"></i>Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
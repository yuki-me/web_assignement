{{-- @extends('Login.loginlogup') --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Online Shops</title>
    <link rel="stylesheet" href="{{ asset('contant/style/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('contant/style/bootstrap_icon.css') }}">
    <link rel="stylesheet" href="{{ asset('contant/style/select2/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('contant/custome-style/home/home.css') }}">
    <script src="{{ asset('contant/script/bootstrap.js') }}"></script>
    <script src="{{ asset('contant/script/jquery-3.6.3.js') }}"></script>
    <script src="{{ asset('contant/script/jquery-ui.js') }}"></script>
    {{-- <script src="{{ asset('contant/script/jquery.js') }}"></script> --}}
    <script src="{{ asset('contant/style/select2/select2.min.js') }}"></script>
</head>

<body>
    <div class="main">
        <div class="container">
            <div class="header_page">
                <div class="out_nav d-flex">
                    <div class="title_web">Welcome to Electronic Shops</div>
                    <div class="menu_nav">
                        <ul class="d-flex menu_header">
                            <li>
                                <i class="bi bi-geo"></i>
                                <span>Store Location</span>
                            </li>
                            <li>
                                <span>|</span>
                            </li>
                            <li>
                                <i class="bi bi-truck"></i>
                                <span>Track Your Order</span>
                            </li>
                            <li>
                                <span>|</span>
                            </li>
                            <li>
                                <i class="bi bi-shop-window"></i>
                                <span>Shops</span>
                            </li>
                            <li>
                                <span>|</span>
                            </li>
                            <li>
                                <i class="bi bi-person"></i>
                                <span>My Account</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="main_menu d-flex">
                    <div class="left_menu d-flex">
                        <h4 class="logo_web">
                            <strong>Online Shops</strong>
                        </h4>
                        <div class="menu_main">
                            <ul class="d-flex menu_mains">
                                <li id="Home">
                                    <a href="http://127.0.0.1:8000/home">
                                        <span>
                                            <strong>Home</strong>
                                        </span>
                                    </a>
                                </li>
                                <li id="Feature">
                                    <a href="http://127.0.0.1:8000/categoryid/all">
                                        <span>
                                            <strong>Feature</strong>
                                        </span>
                                    </a>
                                </li>
                                <li id="Contact">
                                    <a href="http://127.0.0.1:8000/contact">
                                        <span>
                                            <strong>Contact Us</strong>
                                        </span>
                                    </a>
                                </li>
                                <li id="About" hidden>
                                    <span>
                                        <strong>About Us</strong>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="rigth_menu d-flex">
                        <div class="search_box d-flex">
                            <input type="text" class="search_box_input" placeholder="Search ...">
                            <i class="bi bi-search"></i>
                        </div>
                        <i class="bi bi-heart-fill" id="OpenFavorite" onclick="openFavoriteModal()"
                            title="Favorite"></i>
                        <i class="bi bi-person-circle" onclick="openMyAccountModal()" title="My Account"></i>
                        <i class="bi bi-cart3" onclick="openOrderModal()" title="My Orders"></i>
                    </div>
                </div>
            </div>

            @yield('content')

            {{-- Footer --}}
            <div class="footer">
                <div class="profile">
                    <h4 class="title_footer">Contact</h4>
                    <h4>
                        Address:
                        <p class="detail">
                            Russian Federation Boulevard, Toul Kork, Phnom Penh
                        </p>
                    </h4>
                    <h4>
                        Phone:
                        <p class="detail">097 566 8483</p>
                    </h4>
                    <h4>
                        Email:
                        <p class="detail">admin@gmail.com</p>
                    </h4>
                    <h4>Follow Us</h4>
                    <div class="follow">
                        <a href="https://www.facebook.com/pov.jb.1" class="icon">
                            <i class="bi bi-facebook"></i>
                        </a>
                        <a href="https://twitter.com/?lang=en" class="icon">
                            <i class="bi bi-twitter"></i>
                        </a>
                        <a href="https://www.instagram.com/" class="icon">
                            <i class="bi bi-instagram"></i>
                        </a>
                        <a href="https://www.youtube.com/channel/UCBH4fFwX_vk4OvcaMwsZwpg" class="icon">
                            <i class="bi bi-youtube"></i>
                        </a>
                        <a href="https://github.com/yuki-me?tab=repositories" class="icon">
                            <i class="bi bi-github"></i>
                        </a>
                    </div>
                </div>

                <div class="About">
                    <h3 class="title_About">About</h3>
                    <a href=""> Blog </a>
                    <a href=""> Contact Us </a>
                    <a href=""> About Us </a>
                </div>

                <div class="my_account">
                    <h3 class="title_my_account">My Account</h3>
                    <a href=""> Sign in </a>
                    <a href=""> View Cart </a>
                    <a href=""> My Wishlist </a>
                    <a href=""> Track My Order </a>
                    <a href=""> Help </a>
                </div>

                <div class="payment">
                    <h3 class="title_payment">We Accept Payment</h3>
                    <img src="../img/Payment/avalible-payment.png" alt="" />
                </div>
            </div>

            {{-- Bottom --}}
            <div class="bottom">
                <div>© 2022. Boy Svit-HTML CSS JavaScript Ecommerce</div>
            </div>
        </div>

    </div>


    {{-- Modal Favorite --}}
    <div class="modal fade" id="FavoriteModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="FavoriteModalTitle">Favorite Products</h5>
                    <button type="button" class="btn-close btn-sm" {{-- data-bs-dismiss="modal" aria-label="Close" --}}
                        onclick="closeFavoriteModal()"></button>
                </div>
                <div class="modal-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <td>#</td>
                                <td>Product Name</td>
                                <td>Description</td>
                                <td>Qty</td>
                                <td>Price</td>
                                <td>Amount</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody id="taFavorite">
                            {{-- <tr>
                                <td>1</td>
                                <td>I Phone 13 Pro</td>
                                <td>I Phone 13 Pro</td>
                                <td>5</td>
                                <td>$1200</td>
                                <td>$6000</td>
                                <td><label class="label-control-sm" title="Delete">Delete</label></td>
                            </tr> --}}
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer d-flex justify-content-between">
                    <div>
                        <label class="label-control-sm">Amount :</label>
                        <label class="label-control-sm" id="totalfav">$6000</label>
                    </div>
                    <div>
                        <button type="button" class="btn-sm btn-secondary" {{-- data-bs-dismiss="modal" --}}
                            onclick="closeFavoriteModal()" title="Close">Close</button>
                        <button type="button" class="btn-sm btn-danger" title="Buy Nows" onclick="getBuyNow()">Buy
                            Nows</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Modal Account --}}
    <div class="modal fade" id="MyAccountModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="FavoriteModalTitle">Favorite Products</h5>
                    <button type="button" class="btn-close btn-sm" {{-- data-bs-dismiss="modal" aria-label="Close" --}}
                        onclick="closeMyAccountModal()"></button>
                </div>
                <div class="modal-body">
                    <div class="profileAccount d-flex">
                        <div class="profilePic">
                            <img src="../img/logo.jpg" alt="" style="width: 100%; border-radius: 50%">
                        </div>
                        <div class="profileDetails">
                            <div>
                                <form>
                                    <div class="row">
                                        <div class="col fields d-flex align-middle">
                                            <label for="Name" class="form-label">Name</label>
                                            <input type="text" class="form-control" id="Name" disabled>
                                        </div>
                                        <div class="col fields d-flex align-middle">
                                            <label for="Email" class="form-label">Email</label>
                                            <input type="text" class="form-control" id="Email" disabled>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col fields d-flex align-middle">
                                            <label for="Orders" class="form-label">Orders</label>
                                            <input type="text" class="form-control" id="Orders" disabled>
                                        </div>
                                        <div class="col fields d-flex align-middle">
                                            <label for="Amount" class="form-label">Amount</label>
                                            <input type="text" class="form-control" id="Amount" disabled>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col fields d-flex align-middle">
                                            <label for="JobTitle" class="form-label">JobTitle</label>
                                            <input type="text" class="form-control" id="JobTitle" disabled>
                                        </div>
                                        <div class="col fields d-flex align-middle">
                                            <label for="Country" class="form-label">Country</label>
                                            <input type="text" class="form-control" id="Country" disabled>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col fields d-flex align-middle">
                                            <label for="Province" class="form-label">Province</label>
                                            <input type="text" class="form-control" id="Province" disabled>
                                        </div>
                                        <div class="col fields d-flex align-middle">
                                            <label for="District" class="form-label">District</label>
                                            <input type="text" class="form-control" id="District" disabled>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col fields d-flex align-middle">
                                            <label for="Commnues" class="form-label">Commnues</label>
                                            <input type="text" class="form-control" id="Commnues" disabled>
                                        </div>
                                        <div class="col fields d-flex align-middle">
                                            <label for="Villages" class="form-label">Villages</label>
                                            <input type="text" class="form-control" id="Villages" disabled>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col fields d-flex align-middle">
                                            <label for="Street" class="form-label">Street</label>
                                            <input type="text" class="form-control" id="Street" disabled>
                                        </div>
                                        <div class="col fields d-flex align-middle">
                                            <label for="House" class="form-label">House</label>
                                            <input type="text" class="form-control" id="House" disabled>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    {{-- <table class="table">
                        <thead>
                            <tr>
                                <td>#</td>
                                <td>Order Id</td>
                                <td>Date</td>
                                <td>Qty</td>
                                <td>Price</td>
                                <td>Amount</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody class="tFavorite">
                            <tr>
                                <td>1</td>
                                <td>#0000001</td>
                                <td>Date</td>
                                <td>5</td>
                                <td>$1200</td>
                                <td>$6000</td>
                                <td><label class="label-control-sm" title="View">View</label></td>
                            </tr>
                        </tbody>
                    </table> --}}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn-sm btn-secondary" {{-- data-bs-dismiss="modal" --}}
                        onclick="closeMyAccountModal()" title="Close">Close</button>
                </div>
            </div>
        </div>
    </div>

    {{-- Modal Order --}}
    <div class="modal fade" id="MyOrderModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="OrderModalTitle">Orders Line</h5>
                    <button type="button" class="btn-close btn-sm" {{-- data-bs-dismiss="modal" aria-label="Close" --}}
                        onclick="closeOrderModal()"></button>
                </div>
                <div class="modal-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <td>#</td>
                                <td>Order Id</td>
                                <td>LastName</td>
                                <td>FirstName</td>
                                <td>Date</td>
                                <td>Amount</td>
                                <td>Status</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody id="taOrderLine">
                            {{-- <tr>
                                <td>1</td>
                                <td>#0000001</td>
                                <td>Date</td>
                                <td>5</td>
                                <td>$1200</td>
                                <td>$6000</td>
                                <td>Panding</td>
                                <td><label class="label-control-sm" title="View">View</label></td>
                            </tr> --}}
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn-sm btn-secondary" {{-- data-bs-dismiss="modal" --}}
                        onclick="closeOrderModal()" title="Close">Close</button>
                </div>
            </div>
        </div>
    </div>


    <script src="{{ asset('contant/custome-style/home/home.js') }}"></script>
    <script src="{{ asset('contant/custome-style/home/silder_product.js') }}"></script>
    <script src="{{ asset('contant/custome-style/home/functionHome.js') }}"></script>
</body>

</html>

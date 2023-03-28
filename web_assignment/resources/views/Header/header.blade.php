@extends('layout.main')
{{-- @extends('Home.home') --}}

<link rel="stylesheet" href="{{ asset('contant/custome-style/home/home.css') }}">

@section('header_nav')
    <div class="container">
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
                        <li>
                            <span>
                                <strong>Home</strong>
                            </span>
                        </li>
                        <li>
                            <strong>Feature</strong>
                            </span>
                        </li>
                        <li>
                            <span>
                                <strong>Contact Us</strong>
                            </span>
                        </li>
                        <li>
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
                <i class="bi bi-heart-fill"></i>
                <i class="bi bi-person-circle"></i>
                <i class="bi bi-cart3"></i>
            </div>
        </div>
    </div>
    <script src="{{ asset('contant/custome-style/home/home.js') }}"></script>
@endsection

@extends('layouts.main')

<link rel="stylesheet" href="{{ asset('contant/custome-style/home/home.css') }}">

@section('content')
    {{-- <div class="container"> --}}
    {{-- <div class="header_page">
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
                    <i class="bi bi-heart-fill" id="OpenFavorite" onclick="openFavoriteModal()" title="Favorite"></i>
                    <i class="bi bi-person-circle" onclick="openMyAccountModal()" title="My Account"></i>
                    <i class="bi bi-cart3" onclick="openOrderModal()" title="My Orders"></i>
                </div>
            </div>
        </div> --}}
    <div class="category_box d-flex">
        <div class="left_category">
            <ul class="category_menu">
                {{-- <li class="d-flex singel_category">
                        <div class="left_singel_category">
                            <i class="bi bi-lightning-charge-fill"></i>
                            <span>Category</span>
                        </div>
                        <div class="arrow_sign">
                            <i class="bi bi-chevron-right category_open"></i>
                        </div>
                        <ul class="sub_category">
                            <li class="d-flex singel_category">
                                <div class="left_singel_category">
                                    <i class="bi bi-lightning-charge-fill"></i>
                                    <span>Sub Category</span>
                                </div>
                                <div class="arrow_sign">
                                    <i class="bi bi-chevron-right category_open"></i>
                                </div>
                            </li>
                            <li class="d-flex singel_category">
                                <div class="left_singel_category">
                                    <i class="bi bi-lightning-charge-fill"></i>
                                    <span>Sub Category</span>
                                </div>
                                <div class="arrow_sign">
                                    <i class="bi bi-chevron-right category_open"></i>
                                </div>
                            </li>
                            <li class="d-flex singel_category">
                                <div class="left_singel_category">
                                    <i class="bi bi-lightning-charge-fill"></i>
                                    <span>Sub Category</span>
                                </div>
                                <div class="arrow_sign">
                                    <i class="bi bi-chevron-right category_open"></i>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="d-flex singel_category">
                        <div class="left_singel_category">
                            <i class="bi bi-lightning-charge-fill"></i>
                            <span>Category</span>
                        </div>
                        <div class="arrow_sign">
                            <i class="bi bi-chevron-right category_open"></i>
                        </div>
                        <ul class="sub_category">
                            <li class="d-flex singel_category">
                                <div class="left_singel_category">
                                    <i class="bi bi-lightning-charge-fill"></i>
                                    <span>Sub Category</span>
                                </div>
                                <div class="arrow_sign">
                                    <i class="bi bi-chevron-right category_open"></i>
                                </div>
                            </li>
                            <li class="d-flex singel_category">
                                <div class="left_singel_category">
                                    <i class="bi bi-lightning-charge-fill"></i>
                                    <span>Sub Category</span>
                                </div>
                                <div class="arrow_sign">
                                    <i class="bi bi-chevron-right category_open"></i>
                                </div>
                            </li>
                            <li class="d-flex singel_category">
                                <div class="left_singel_category">
                                    <i class="bi bi-lightning-charge-fill"></i>
                                    <span>Sub Category</span>
                                </div>
                                <div class="arrow_sign">
                                    <i class="bi bi-chevron-right category_open"></i>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="d-flex singel_category">
                        <div class="left_singel_category">
                            <i class="bi bi-lightning-charge-fill"></i>
                            <span>Category</span>
                        </div>
                        <div class="arrow_sign">
                            <i class="bi bi-chevron-right category_open"></i>
                        </div>
                        <ul class="sub_category">
                            <li class="d-flex singel_category">
                                <div class="left_singel_category">
                                    <i class="bi bi-lightning-charge-fill"></i>
                                    <span>Sub Category</span>
                                </div>
                                <div class="arrow_sign">
                                    <i class="bi bi-chevron-right category_open"></i>
                                </div>
                            </li>
                            <li class="d-flex singel_category">
                                <div class="left_singel_category">
                                    <i class="bi bi-lightning-charge-fill"></i>
                                    <span>Sub Category</span>
                                </div>
                                <div class="arrow_sign">
                                    <i class="bi bi-chevron-right category_open"></i>
                                </div>
                            </li>
                            <li class="d-flex singel_category">
                                <div class="left_singel_category">
                                    <i class="bi bi-lightning-charge-fill"></i>
                                    <span>Sub Category</span>
                                </div>
                                <div class="arrow_sign">
                                    <i class="bi bi-chevron-right category_open"></i>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="d-flex singel_category">
                        <div class="left_singel_category">
                            <i class="bi bi-lightning-charge-fill"></i>
                            <span>Category</span>
                        </div>
                        <div class="arrow_sign">
                            <i class="bi bi-chevron-right category_open"></i>
                        </div>
                        <ul class="sub_category">
                            <li class="d-flex singel_category">
                                <div class="left_singel_category">
                                    <i class="bi bi-lightning-charge-fill"></i>
                                    <span>Sub Category</span>
                                </div>
                                <div class="arrow_sign">
                                    <i class="bi bi-chevron-right category_open"></i>
                                </div>
                            </li>
                            <li class="d-flex singel_category">
                                <div class="left_singel_category">
                                    <i class="bi bi-lightning-charge-fill"></i>
                                    <span>Sub Category</span>
                                </div>
                                <div class="arrow_sign">
                                    <i class="bi bi-chevron-right category_open"></i>
                                </div>
                            </li>
                            <li class="d-flex singel_category">
                                <div class="left_singel_category">
                                    <i class="bi bi-lightning-charge-fill"></i>
                                    <span>Sub Category</span>
                                </div>
                                <div class="arrow_sign">
                                    <i class="bi bi-chevron-right category_open"></i>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="d-flex singel_category">
                        <div class="left_singel_category">
                            <i class="bi bi-lightning-charge-fill"></i>
                            <span>Category</span>
                        </div>
                        <div class="arrow_sign">
                            <i class="bi bi-chevron-right category_open"></i>
                        </div>
                        <ul class="sub_category">
                            <li class="d-flex singel_category">
                                <div class="left_singel_category">
                                    <i class="bi bi-lightning-charge-fill"></i>
                                    <span>Sub Category</span>
                                </div>
                                <div class="arrow_sign">
                                    <i class="bi bi-chevron-right category_open"></i>
                                </div>
                            </li>
                            <li class="d-flex singel_category">
                                <div class="left_singel_category">
                                    <i class="bi bi-lightning-charge-fill"></i>
                                    <span>Sub Category</span>
                                </div>
                                <div class="arrow_sign">
                                    <i class="bi bi-chevron-right category_open"></i>
                                </div>
                            </li>
                            <li class="d-flex singel_category">
                                <div class="left_singel_category">
                                    <i class="bi bi-lightning-charge-fill"></i>
                                    <span>Sub Category</span>
                                </div>
                                <div class="arrow_sign">
                                    <i class="bi bi-chevron-right category_open"></i>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="d-flex singel_category">
                        <div class="left_singel_category">
                            <i class="bi bi-lightning-charge-fill"></i>
                            <span>Category</span>
                        </div>
                        <div class="arrow_sign">
                            <i class="bi bi-chevron-right category_open"></i>
                        </div>
                        <ul class="sub_category">
                            <li class="d-flex singel_category">
                                <div class="left_singel_category">
                                    <i class="bi bi-lightning-charge-fill"></i>
                                    <span>Sub Category</span>
                                </div>
                                <div class="arrow_sign">
                                    <i class="bi bi-chevron-right category_open"></i>
                                </div>
                            </li>
                            <li class="d-flex singel_category">
                                <div class="left_singel_category">
                                    <i class="bi bi-lightning-charge-fill"></i>
                                    <span>Sub Category</span>
                                </div>
                                <div class="arrow_sign">
                                    <i class="bi bi-chevron-right category_open"></i>
                                </div>
                            </li>
                            <li class="d-flex singel_category">
                                <div class="left_singel_category">
                                    <i class="bi bi-lightning-charge-fill"></i>
                                    <span>Sub Category</span>
                                </div>
                                <div class="arrow_sign">
                                    <i class="bi bi-chevron-right category_open"></i>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="d-flex singel_category">
                        <div class="left_singel_category">
                            <i class="bi bi-lightning-charge-fill"></i>
                            <span>Category</span>
                        </div>
                        <div class="arrow_sign">
                            <i class="bi bi-chevron-right category_open"></i>
                        </div>
                        <ul class="sub_category">
                            <li class="d-flex singel_category">
                                <div class="left_singel_category">
                                    <i class="bi bi-lightning-charge-fill"></i>
                                    <span>Sub Category</span>
                                </div>
                                <div class="arrow_sign">
                                    <i class="bi bi-chevron-right category_open"></i>
                                </div>
                            </li>
                            <li class="d-flex singel_category">
                                <div class="left_singel_category">
                                    <i class="bi bi-lightning-charge-fill"></i>
                                    <span>Sub Category</span>
                                </div>
                                <div class="arrow_sign">
                                    <i class="bi bi-chevron-right category_open"></i>
                                </div>
                            </li>
                            <li class="d-flex singel_category">
                                <div class="left_singel_category">
                                    <i class="bi bi-lightning-charge-fill"></i>
                                    <span>Sub Category</span>
                                </div>
                                <div class="arrow_sign">
                                    <i class="bi bi-chevron-right category_open"></i>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="d-flex singel_category">
                        <div class="left_singel_category">
                            <i class="bi bi-lightning-charge-fill"></i>
                            <span>Category</span>
                        </div>
                        <div class="arrow_sign">
                            <i class="bi bi-chevron-right category_open"></i>
                        </div>
                        <ul class="sub_category">
                            <li class="d-flex singel_category">
                                <div class="left_singel_category">
                                    <i class="bi bi-lightning-charge-fill"></i>
                                    <span>Sub Category</span>
                                </div>
                                <div class="arrow_sign">
                                    <i class="bi bi-chevron-right category_open"></i>
                                </div>
                            </li>
                            <li class="d-flex singel_category">
                                <div class="left_singel_category">
                                    <i class="bi bi-lightning-charge-fill"></i>
                                    <span>Sub Category</span>
                                </div>
                                <div class="arrow_sign">
                                    <i class="bi bi-chevron-right category_open"></i>
                                </div>
                            </li>
                            <li class="d-flex singel_category">
                                <div class="left_singel_category">
                                    <i class="bi bi-lightning-charge-fill"></i>
                                    <span>Sub Category</span>
                                </div>
                                <div class="arrow_sign">
                                    <i class="bi bi-chevron-right category_open"></i>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="d-flex singel_category">
                        <div class="left_singel_category">
                            <i class="bi bi-lightning-charge-fill"></i>
                            <span>Category</span>
                        </div>
                        <div class="arrow_sign">
                            <i class="bi bi-chevron-right category_open"></i>
                        </div>
                        <ul class="sub_category">
                            <li class="d-flex singel_category">
                                <div class="left_singel_category">
                                    <i class="bi bi-lightning-charge-fill"></i>
                                    <span>Sub Category</span>
                                </div>
                                <div class="arrow_sign">
                                    <i class="bi bi-chevron-right category_open"></i>
                                </div>
                            </li>
                            <li class="d-flex singel_category">
                                <div class="left_singel_category">
                                    <i class="bi bi-lightning-charge-fill"></i>
                                    <span>Sub Category</span>
                                </div>
                                <div class="arrow_sign">
                                    <i class="bi bi-chevron-right category_open"></i>
                                </div>
                            </li>
                            <li class="d-flex singel_category">
                                <div class="left_singel_category">
                                    <i class="bi bi-lightning-charge-fill"></i>
                                    <span>Sub Category</span>
                                </div>
                                <div class="arrow_sign">
                                    <i class="bi bi-chevron-right category_open"></i>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="d-flex singel_category">
                        <div class="left_singel_category">
                            <i class="bi bi-lightning-charge-fill"></i>
                            <span>Show More</span>
                        </div>
                        <div class="arrow_sign">
                            <i class="bi bi-three-dots-vertical category_open"></i>
                        </div>
                    </li> --}}

            </ul>
        </div>
        <div class="right_category">
            <div class="slide_box">
                <!-- Slideshow container -->
                <div class="slideshow-container">

                    <!-- Full-width images with number and caption text -->
                    <div class="mySlides fade_slider">
                        {{-- <div class="numbertext">1 / 3</div> --}}
                        <img src="../img/Banner/Apple_Banner.jpg" style="width:98.7%">
                        {{-- <div class="text">Caption Text</div> --}}
                    </div>

                    <div class="mySlides fade_slider">
                        {{-- <div class="numbertext">2 / 3</div> --}}
                        <img src="../img/Banner/LG_Banner.jpg" style="width:98.7%">
                        {{-- <div class="text">Caption Two</div> --}}
                    </div>

                    <div class="mySlides fade_slider">
                        {{-- <div class="numbertext">3 / 3</div> --}}
                        <img src="../img/Banner/Oppo_Banner.webp" style="width:98.7%">
                        {{-- <div class="text">Caption Three</div> --}}
                    </div>

                    <!-- Next and previous buttons -->
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                </div>
                {{-- <br> --}}

                <!-- The dots/circles -->
                <div style="text-align:center; margin-top: -40px; border: 1px solid white">
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
                </div>
            </div>
        </div>
    </div>

    {{-- promotion --}}
    <div class="promotion_display shadow-lg p-3 mb-5 bg-body"> {{-- rounded --}}
        <div class="header_display">
            <div class="left_header_display">
                <span>Promotion</span>
            </div>
            <div class="right_header_display">
                <button class="button_show_more btn btn-danger">Show More</button>
            </div>
        </div>
        <hr>
        <div class="body_display_promotion slider-wrapper ">
            <nav>
                <div class="btn_prev display_btn left disabled">
                    <i class="bi bi-arrow-left"></i>
                </div>

                <div class="btn_next display_btn right">
                    <i class="bi bi-arrow-right"></i>
                </div>
            </nav>

            <div class="card_promotion slider">
                <div class="wrapper" id="promo">
                    {{-- <div class="singel_promotion slide">
                        <div class="out_images_promotion">
                            <img src="../img/Promotion/AEON.jpg" alt="" class="promotion_icon">
                        </div>
                        <div class="title_promotion">
                            <span>
                                AEON 3
                            </span>
                        </div>
                    </div>

                    <div class="singel_promotion slide">
                        <div class="out_images_promotion">
                            <img src="../img/Promotion/AEON.jpg" alt="" class="promotion_icon">
                        </div>
                        <div class="title_promotion">
                            <span>
                                AEON 3
                            </span>
                        </div>
                    </div>

                    <div class="singel_promotion slide">
                        <div class="out_images_promotion">
                            <img src="../img/Promotion/AEON.jpg" alt="" class="promotion_icon">
                        </div>
                        <div class="title_promotion">
                            <span>
                                AEON 3
                            </span>
                        </div>
                    </div>

                    <div class="singel_promotion slide">
                        <div class="out_images_promotion">
                            <img src="../img/Promotion/AEON.jpg" alt="" class="promotion_icon">
                        </div>
                        <div class="title_promotion">
                            <span>
                                AEON 3
                            </span>
                        </div>
                    </div>

                    <div class="singel_promotion slide">
                        <div class="out_images_promotion">
                            <img src="../img/Promotion/AEON.jpg" alt="" class="promotion_icon">
                        </div>
                        <div class="title_promotion">
                            <span>
                                AEON 3
                            </span>
                        </div>
                    </div>

                    <div class="singel_promotion slide">
                        <div class="out_images_promotion">
                            <img src="../img/Promotion/AEON.jpg" alt="" class="promotion_icon">
                        </div>
                        <div class="title_promotion">
                            <span>
                                AEON 3
                            </span>
                        </div>
                    </div>

                    <div class="singel_promotion slide">
                        <div class="out_images_promotion">
                            <img src="../img/Promotion/AEON.jpg" alt="" class="promotion_icon">
                        </div>
                        <div class="title_promotion">
                            <span>
                                AEON 3
                            </span>
                        </div>
                    </div>

                    <div class="singel_promotion slide">
                        <div class="out_images_promotion">
                            <img src="../img/Promotion/AEON.jpg" alt="" class="promotion_icon">
                        </div>
                        <div class="title_promotion">
                            <span>
                                AEON 3
                            </span>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>

    {{-- Flash Sale --}}
    <div class="display_product shadow-lg p-3 mb-5 bg-body"> {{-- rounded disabled --}}
        <div class="header_display">
            <div class="left_header_display">
                <span>Flash Sale</span>
            </div>
            <div class="right_header_display">
                <button class="button_show_more btn btn-danger">Show More</button>
            </div>
        </div>
        <hr>
        <div class="body_display_product slider-wrapper">
            <nav>
                <div class="btn_prev display_btn left disabled">
                    <i class="bi bi-arrow-left"></i>
                </div>

                <div class="btn_next display_btn right">
                    <i class="bi bi-arrow-right"></i>
                </div>
            </nav>
            <div class="card_product slider">
                <div class="wrapper" id="flash">
                    {{-- 
                    <div class="singel_product slide">
                        <div class="out_images">
                            <img src="../img/logo.jpg" alt="" class="images_pro">
                        </div>
                        <div class="discount_side d-flex">
                            <div class="tage_text">OFF</div>
                            <div class="tage_number">
                                <span>20%</span>
                            </div>
                        </div>
                        <div class="alliconsingel">
                            <a href="#" class="iconpro">
                                <i class="bi bi-heart"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-arrow-repeat"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-cart-plus"></i>
                            </a>
                        </div>
                        <div class="details_pro">
                            <div class="price">
                                <div class="discount_price">
                                    <span><strike>$150.00</strike></span>
                                </div>
                                <div class="current_price">
                                    <span>$120.00</span>
                                </div>
                            </div>
                            <div class="star_rate">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                            </div>
                            <div class="title_pro">
                                <span class="title_product">
                                    Calvin Klein Women's Scuba Sleeveless Princess Seamed Sheath Dress
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="singel_product slide">
                        <div class="out_images">
                            <img src="../img/logo.jpg" alt="" class="images_pro">
                        </div>
                        <div class="discount_side d-flex">
                            <div class="tage_text">OFF</div>
                            <div class="tage_number">
                                <span>20%</span>
                            </div>
                        </div>
                        <div class="alliconsingel">
                            <a href="#" class="iconpro">
                                <i class="bi bi-heart"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-arrow-repeat"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-cart-plus"></i>
                            </a>
                        </div>
                        <div class="details_pro">
                            <div class="price">
                                <div class="discount_price">
                                    <span><strike>$150.00</strike></span>
                                </div>
                                <div class="current_price">
                                    <span>$120.00</span>
                                </div>
                            </div>
                            <div class="star_rate">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                            </div>
                            <div class="title_pro">
                                <span class="title_product">
                                    Calvin Klein Women's Scuba Sleeveless Princess Seamed Sheath Dress
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="singel_product slide">
                        <div class="out_images">
                            <img src="../img/logo.jpg" alt="" class="images_pro">
                        </div>
                        <div class="discount_side d-flex">
                            <div class="tage_text">OFF</div>
                            <div class="tage_number">
                                <span>20%</span>
                            </div>
                        </div>
                        <div class="alliconsingel">
                            <a href="#" class="iconpro">
                                <i class="bi bi-heart"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-arrow-repeat"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-cart-plus"></i>
                            </a>
                        </div>
                        <div class="details_pro">
                            <div class="price">
                                <div class="discount_price">
                                    <span><strike>$150.00</strike></span>
                                </div>
                                <div class="current_price">
                                    <span>$120.00</span>
                                </div>
                            </div>
                            <div class="star_rate">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                            </div>
                            <div class="title_pro">
                                <span class="title_product">
                                    Calvin Klein Women's Scuba Sleeveless Princess Seamed Sheath Dress
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="singel_product slide">
                        <div class="out_images">
                            <img src="../img/logo.jpg" alt="" class="images_pro">
                        </div>
                        <div class="discount_side d-flex">
                            <div class="tage_text">OFF</div>
                            <div class="tage_number">
                                <span>20%</span>
                            </div>
                        </div>
                        <div class="alliconsingel">
                            <a href="#" class="iconpro">
                                <i class="bi bi-heart"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-arrow-repeat"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-cart-plus"></i>
                            </a>
                        </div>
                        <div class="details_pro">
                            <div class="price">
                                <div class="discount_price">
                                    <span><strike>$150.00</strike></span>
                                </div>
                                <div class="current_price">
                                    <span>$120.00</span>
                                </div>
                            </div>
                            <div class="star_rate">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                            </div>
                            <div class="title_pro">
                                <span class="title_product">
                                    Calvin Klein Women's Scuba Sleeveless Princess Seamed Sheath Dress
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="singel_product slide">
                        <div class="out_images">
                            <img src="../img/logo.jpg" alt="" class="images_pro">
                        </div>
                        <div class="discount_side d-flex">
                            <div class="tage_text">OFF</div>
                            <div class="tage_number">
                                <span>20%</span>
                            </div>
                        </div>
                        <div class="alliconsingel">
                            <a href="#" class="iconpro">
                                <i class="bi bi-heart"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-arrow-repeat"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-cart-plus"></i>
                            </a>
                        </div>
                        <div class="details_pro">
                            <div class="price">
                                <div class="discount_price">
                                    <span><strike>$150.00</strike></span>
                                </div>
                                <div class="current_price">
                                    <span>$120.00</span>
                                </div>
                            </div>
                            <div class="star_rate">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                            </div>
                            <div class="title_pro">
                                <span class="title_product">
                                    Calvin Klein Women's Scuba Sleeveless Princess Seamed Sheath Dress
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="singel_product slide">
                        <div class="out_images">
                            <img src="../img/logo.jpg" alt="" class="images_pro">
                        </div>
                        <div class="discount_side d-flex">
                            <div class="tage_text">OFF</div>
                            <div class="tage_number">
                                <span>20%</span>
                            </div>
                        </div>
                        <div class="alliconsingel">
                            <a href="#" class="iconpro">
                                <i class="bi bi-heart"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-arrow-repeat"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-cart-plus"></i>
                            </a>
                        </div>
                        <div class="details_pro">
                            <div class="price">
                                <div class="discount_price">
                                    <span><strike>$150.00</strike></span>
                                </div>
                                <div class="current_price">
                                    <span>$120.00</span>
                                </div>
                            </div>
                            <div class="star_rate">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                            </div>
                            <div class="title_pro">
                                <span class="title_product">
                                    Calvin Klein Women's Scuba Sleeveless Princess Seamed Sheath Dress
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="singel_product slide">
                        <div class="out_images">
                            <img src="../img/logo.jpg" alt="" class="images_pro">
                        </div>
                        <div class="discount_side d-flex">
                            <div class="tage_text">OFF</div>
                            <div class="tage_number">
                                <span>20%</span>
                            </div>
                        </div>
                        <div class="alliconsingel">
                            <a href="#" class="iconpro">
                                <i class="bi bi-heart"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-arrow-repeat"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-cart-plus"></i>
                            </a>
                        </div>
                        <div class="details_pro">
                            <div class="price">
                                <div class="discount_price">
                                    <span><strike>$150.00</strike></span>
                                </div>
                                <div class="current_price">
                                    <span>$120.00</span>
                                </div>
                            </div>
                            <div class="star_rate">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                            </div>
                            <div class="title_pro">
                                <span class="title_product">
                                    Calvin Klein Women's Scuba Sleeveless Princess Seamed Sheath Dress
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="singel_product slide">
                        <div class="out_images">
                            <img src="../img/logo.jpg" alt="" class="images_pro">
                        </div>
                        <div class="discount_side d-flex">
                            <div class="tage_text">OFF</div>
                            <div class="tage_number">
                                <span>20%</span>
                            </div>
                        </div>
                        <div class="alliconsingel">
                            <a href="#" class="iconpro">
                                <i class="bi bi-heart"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-arrow-repeat"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-cart-plus"></i>
                            </a>
                        </div>
                        <div class="details_pro">
                            <div class="price">
                                <div class="discount_price">
                                    <span><strike>$150.00</strike></span>
                                </div>
                                <div class="current_price">
                                    <span>$120.00</span>
                                </div>
                            </div>
                            <div class="star_rate">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                            </div>
                            <div class="title_pro">
                                <span class="title_product">
                                    Calvin Klein Women's Scuba Sleeveless Princess Seamed Sheath Dress
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="singel_product slide">
                        <div class="out_images">
                            <img src="../img/logo.jpg" alt="" class="images_pro">
                        </div>
                        <div class="discount_side d-flex">
                            <div class="tage_text">OFF</div>
                            <div class="tage_number">
                                <span>20%</span>
                            </div>
                        </div>
                        <div class="alliconsingel">
                            <a href="#" class="iconpro">
                                <i class="bi bi-heart"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-arrow-repeat"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-cart-plus"></i>
                            </a>
                        </div>
                        <div class="details_pro">
                            <div class="price">
                                <div class="discount_price">
                                    <span><strike>$150.00</strike></span>
                                </div>
                                <div class="current_price">
                                    <span>$120.00</span>
                                </div>
                            </div>
                            <div class="star_rate">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                            </div>
                            <div class="title_pro">
                                <span class="title_product">
                                    Calvin Klein Women's Scuba Sleeveless Princess Seamed Sheath Dress
                                </span>
                            </div>
                        </div>
                    </div> --}}

                </div>
            </div>
        </div>
    </div>

    {{-- Feature Products --}}
    <div class="display_product shadow-lg p-3 mb-5 bg-body"> {{-- rounded  disabled --}}
        <div class="header_display">
            <div class="left_header_display">
                <span>Feature Products</span>
            </div>
            <div class="right_header_display">
                <button class="button_show_more btn btn-danger">Show More</button>
            </div>
        </div>
        <hr>
        <div class="body_display_product slider-wrapper">
            <nav>
                <div class="btn_prev display_btn left disabled">
                    <i class="bi bi-arrow-left"></i>
                </div>

                <div class="btn_next display_btn right">
                    <i class="bi bi-arrow-right"></i>
                </div>
            </nav>

            <div class="card_product slider">
                <div class="wrapper" id="featurepro">
                    {{-- <div class="singel_product slide">
                        <div class="out_images">
                            <img src="../img/logo.jpg" alt="" class="images_pro">
                        </div>
                        <div class="discount_side d-flex disabled">
                            <div class="tage_text">OFF</div>
                            <div class="tage_number">
                                <span>20%</span>
                            </div>
                        </div>
                        <div class="alliconsingel">
                            <a href="#" class="iconpro">
                                <i class="bi bi-heart"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-arrow-repeat"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-cart-plus"></i>
                            </a>
                        </div>
                        <div class="details_pro">
                            <div class="price">
                                <div class="discount_price">
                                    <span><strike>$150.00</strike></span>
                                </div>
                                <div class="current_price">
                                    <span>$120.00</span>
                                </div>
                            </div>
                            <div class="star_rate">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                            </div>
                            <div class="title_pro">
                                <span class="title_product">
                                    Calvin Klein Women's Scuba Sleeveless Princess Seamed Sheath Dress
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="singel_product slide">
                        <div class="out_images">
                            <img src="../img/logo.jpg" alt="" class="images_pro">
                        </div>
                        <div class="discount_side d-flex">
                            <div class="tage_text">OFF</div>
                            <div class="tage_number">
                                <span>20%</span>
                            </div>
                        </div>
                        <div class="alliconsingel">
                            <a href="#" class="iconpro">
                                <i class="bi bi-heart"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-arrow-repeat"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-cart-plus"></i>
                            </a>
                        </div>
                        <div class="details_pro">
                            <div class="price">
                                <div class="discount_price">
                                    <span><strike>$150.00</strike></span>
                                </div>
                                <div class="current_price">
                                    <span>$120.00</span>
                                </div>
                            </div>
                            <div class="star_rate">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                            </div>
                            <div class="title_pro">
                                <span class="title_product">
                                    Calvin Klein Women's Scuba Sleeveless Princess Seamed Sheath Dress
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="singel_product slide">
                        <div class="out_images">
                            <img src="../img/logo.jpg" alt="" class="images_pro">
                        </div>
                        <div class="discount_side d-flex disabled">
                            <div class="tage_text">OFF</div>
                            <div class="tage_number">
                                <span>20%</span>
                            </div>
                        </div>
                        <div class="alliconsingel">
                            <a href="#" class="iconpro">
                                <i class="bi bi-heart"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-arrow-repeat"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-cart-plus"></i>
                            </a>
                        </div>
                        <div class="details_pro">
                            <div class="price">
                                <div class="discount_price">
                                    <span><strike>$150.00</strike></span>
                                </div>
                                <div class="current_price">
                                    <span>$120.00</span>
                                </div>
                            </div>
                            <div class="star_rate">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                            </div>
                            <div class="title_pro">
                                <span class="title_product">
                                    Calvin Klein Women's Scuba Sleeveless Princess Seamed Sheath Dress
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="singel_product slide">
                        <div class="out_images">
                            <img src="../img/logo.jpg" alt="" class="images_pro">
                        </div>
                        <div class="discount_side d-flex">
                            <div class="tage_text">OFF</div>
                            <div class="tage_number">
                                <span>20%</span>
                            </div>
                        </div>
                        <div class="alliconsingel">
                            <a href="#" class="iconpro">
                                <i class="bi bi-heart"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-arrow-repeat"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-cart-plus"></i>
                            </a>
                        </div>
                        <div class="details_pro">
                            <div class="price">
                                <div class="discount_price">
                                    <span><strike>$150.00</strike></span>
                                </div>
                                <div class="current_price">
                                    <span>$120.00</span>
                                </div>
                            </div>
                            <div class="star_rate">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                            </div>
                            <div class="title_pro">
                                <span class="title_product">
                                    Calvin Klein Women's Scuba Sleeveless Princess Seamed Sheath Dress
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="singel_product slide">
                        <div class="out_images">
                            <img src="../img/logo.jpg" alt="" class="images_pro">
                        </div>
                        <div class="discount_side d-flex disabled">
                            <div class="tage_text">OFF</div>
                            <div class="tage_number">
                                <span>20%</span>
                            </div>
                        </div>
                        <div class="alliconsingel">
                            <a href="#" class="iconpro">
                                <i class="bi bi-heart"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-arrow-repeat"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-cart-plus"></i>
                            </a>
                        </div>
                        <div class="details_pro">
                            <div class="price">
                                <div class="discount_price">
                                    <span><strike>$150.00</strike></span>
                                </div>
                                <div class="current_price">
                                    <span>$120.00</span>
                                </div>
                            </div>
                            <div class="star_rate">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                            </div>
                            <div class="title_pro">
                                <span class="title_product">
                                    Calvin Klein Women's Scuba Sleeveless Princess Seamed Sheath Dress
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="singel_product slide">
                        <div class="out_images">
                            <img src="../img/logo.jpg" alt="" class="images_pro">
                        </div>
                        <div class="discount_side d-flex">
                            <div class="tage_text">OFF</div>
                            <div class="tage_number">
                                <span>20%</span>
                            </div>
                        </div>
                        <div class="alliconsingel">
                            <a href="#" class="iconpro">
                                <i class="bi bi-heart"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-arrow-repeat"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-cart-plus"></i>
                            </a>
                        </div>
                        <div class="details_pro">
                            <div class="price">
                                <div class="discount_price">
                                    <span><strike>$150.00</strike></span>
                                </div>
                                <div class="current_price">
                                    <span>$120.00</span>
                                </div>
                            </div>
                            <div class="star_rate">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                            </div>
                            <div class="title_pro">
                                <span class="title_product">
                                    Calvin Klein Women's Scuba Sleeveless Princess Seamed Sheath Dress
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="singel_product slide">
                        <div class="out_images">
                            <img src="../img/logo.jpg" alt="" class="images_pro">
                        </div>
                        <div class="discount_side d-flex">
                            <div class="tage_text">OFF</div>
                            <div class="tage_number">
                                <span>20%</span>
                            </div>
                        </div>
                        <div class="alliconsingel">
                            <a href="#" class="iconpro">
                                <i class="bi bi-heart"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-arrow-repeat"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-cart-plus"></i>
                            </a>
                        </div>
                        <div class="details_pro">
                            <div class="price">
                                <div class="discount_price">
                                    <span><strike>$150.00</strike></span>
                                </div>
                                <div class="current_price">
                                    <span>$120.00</span>
                                </div>
                            </div>
                            <div class="star_rate">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                            </div>
                            <div class="title_pro">
                                <span class="title_product">
                                    Calvin Klein Women's Scuba Sleeveless Princess Seamed Sheath Dress
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="singel_product slide">
                        <div class="out_images">
                            <img src="../img/logo.jpg" alt="" class="images_pro">
                        </div>
                        <div class="discount_side d-flex">
                            <div class="tage_text">OFF</div>
                            <div class="tage_number">
                                <span>20%</span>
                            </div>
                        </div>
                        <div class="alliconsingel">
                            <a href="#" class="iconpro">
                                <i class="bi bi-heart"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-arrow-repeat"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-cart-plus"></i>
                            </a>
                        </div>
                        <div class="details_pro">
                            <div class="price">
                                <div class="discount_price">
                                    <span><strike>$150.00</strike></span>
                                </div>
                                <div class="current_price">
                                    <span>$120.00</span>
                                </div>
                            </div>
                            <div class="star_rate">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                            </div>
                            <div class="title_pro">
                                <span class="title_product">
                                    Calvin Klein Women's Scuba Sleeveless Princess Seamed Sheath Dress
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="singel_product slide">
                        <div class="out_images">
                            <img src="../img/logo.jpg" alt="" class="images_pro">
                        </div>
                        <div class="discount_side d-flex">
                            <div class="tage_text">OFF</div>
                            <div class="tage_number">
                                <span>20%</span>
                            </div>
                        </div>
                        <div class="alliconsingel">
                            <a href="#" class="iconpro">
                                <i class="bi bi-heart"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-arrow-repeat"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-cart-plus"></i>
                            </a>
                        </div>
                        <div class="details_pro">
                            <div class="price">
                                <div class="discount_price">
                                    <span><strike>$150.00</strike></span>
                                </div>
                                <div class="current_price">
                                    <span>$120.00</span>
                                </div>
                            </div>
                            <div class="star_rate">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                            </div>
                            <div class="title_pro">
                                <span class="title_product">
                                    Calvin Klein Women's Scuba Sleeveless Princess Seamed Sheath Dress
                                </span>
                            </div>
                        </div>
                    </div> --}}

                </div>
            </div>
        </div>
    </div>

    {{-- Foods --}}
    <div class="display_product shadow-lg p-3 mb-5 bg-body"> {{-- rounded  disabled --}}
        <div class="header_display">
            <div class="left_header_display">
                <span>Foods</span>
            </div>
            <div class="right_header_display">
                <button class="button_show_more btn btn-danger">Show More</button>
            </div>
        </div>
        <hr>
        <div class="body_display_product slider-wrapper">
            <nav>
                <div class="btn_prev display_btn left disabled">
                    <i class="bi bi-arrow-left"></i>
                </div>

                <div class="btn_next display_btn right">
                    <i class="bi bi-arrow-right"></i>
                </div>
            </nav>

            <div class="card_product slider">
                <div class="wrapper" id="food">
                    {{-- <div class="singel_product slide">
                        <div class="out_images">
                            <img src="../img/logo.jpg" alt="" class="images_pro">
                        </div>
                        <div class="discount_side d-flex disabled">
                            <div class="tage_text">OFF</div>
                            <div class="tage_number">
                                <span>20%</span>
                            </div>
                        </div>
                        <div class="alliconsingel">
                            <a href="#" class="iconpro">
                                <i class="bi bi-heart"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-arrow-repeat"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-cart-plus"></i>
                            </a>
                        </div>
                        <div class="details_pro">
                            <div class="price">
                                <div class="discount_price">
                                    <span><strike>$150.00</strike></span>
                                </div>
                                <div class="current_price">
                                    <span>$120.00</span>
                                </div>
                            </div>
                            <div class="star_rate">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                            </div>
                            <div class="title_pro">
                                <span class="title_product">
                                    Calvin Klein Women's Scuba Sleeveless Princess Seamed Sheath Dress
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="singel_product slide">
                        <div class="out_images">
                            <img src="../img/logo.jpg" alt="" class="images_pro">
                        </div>
                        <div class="discount_side d-flex">
                            <div class="tage_text">OFF</div>
                            <div class="tage_number">
                                <span>20%</span>
                            </div>
                        </div>
                        <div class="alliconsingel">
                            <a href="#" class="iconpro">
                                <i class="bi bi-heart"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-arrow-repeat"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-cart-plus"></i>
                            </a>
                        </div>
                        <div class="details_pro">
                            <div class="price">
                                <div class="discount_price">
                                    <span><strike>$150.00</strike></span>
                                </div>
                                <div class="current_price">
                                    <span>$120.00</span>
                                </div>
                            </div>
                            <div class="star_rate">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                            </div>
                            <div class="title_pro">
                                <span class="title_product">
                                    Calvin Klein Women's Scuba Sleeveless Princess Seamed Sheath Dress
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="singel_product slide">
                        <div class="out_images">
                            <img src="../img/logo.jpg" alt="" class="images_pro">
                        </div>
                        <div class="discount_side d-flex disabled">
                            <div class="tage_text">OFF</div>
                            <div class="tage_number">
                                <span>20%</span>
                            </div>
                        </div>
                        <div class="alliconsingel">
                            <a href="#" class="iconpro">
                                <i class="bi bi-heart"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-arrow-repeat"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-cart-plus"></i>
                            </a>
                        </div>
                        <div class="details_pro">
                            <div class="price">
                                <div class="discount_price">
                                    <span><strike>$150.00</strike></span>
                                </div>
                                <div class="current_price">
                                    <span>$120.00</span>
                                </div>
                            </div>
                            <div class="star_rate">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                            </div>
                            <div class="title_pro">
                                <span class="title_product">
                                    Calvin Klein Women's Scuba Sleeveless Princess Seamed Sheath Dress
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="singel_product slide">
                        <div class="out_images">
                            <img src="../img/logo.jpg" alt="" class="images_pro">
                        </div>
                        <div class="discount_side d-flex">
                            <div class="tage_text">OFF</div>
                            <div class="tage_number">
                                <span>20%</span>
                            </div>
                        </div>
                        <div class="alliconsingel">
                            <a href="#" class="iconpro">
                                <i class="bi bi-heart"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-arrow-repeat"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-cart-plus"></i>
                            </a>
                        </div>
                        <div class="details_pro">
                            <div class="price">
                                <div class="discount_price">
                                    <span><strike>$150.00</strike></span>
                                </div>
                                <div class="current_price">
                                    <span>$120.00</span>
                                </div>
                            </div>
                            <div class="star_rate">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                            </div>
                            <div class="title_pro">
                                <span class="title_product">
                                    Calvin Klein Women's Scuba Sleeveless Princess Seamed Sheath Dress
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="singel_product slide">
                        <div class="out_images">
                            <img src="../img/logo.jpg" alt="" class="images_pro">
                        </div>
                        <div class="discount_side d-flex disabled">
                            <div class="tage_text">OFF</div>
                            <div class="tage_number">
                                <span>20%</span>
                            </div>
                        </div>
                        <div class="alliconsingel">
                            <a href="#" class="iconpro">
                                <i class="bi bi-heart"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-arrow-repeat"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-cart-plus"></i>
                            </a>
                        </div>
                        <div class="details_pro">
                            <div class="price">
                                <div class="discount_price">
                                    <span><strike>$150.00</strike></span>
                                </div>
                                <div class="current_price">
                                    <span>$120.00</span>
                                </div>
                            </div>
                            <div class="star_rate">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                            </div>
                            <div class="title_pro">
                                <span class="title_product">
                                    Calvin Klein Women's Scuba Sleeveless Princess Seamed Sheath Dress
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="singel_product slide">
                        <div class="out_images">
                            <img src="../img/logo.jpg" alt="" class="images_pro">
                        </div>
                        <div class="discount_side d-flex">
                            <div class="tage_text">OFF</div>
                            <div class="tage_number">
                                <span>20%</span>
                            </div>
                        </div>
                        <div class="alliconsingel">
                            <a href="#" class="iconpro">
                                <i class="bi bi-heart"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-arrow-repeat"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-cart-plus"></i>
                            </a>
                        </div>
                        <div class="details_pro">
                            <div class="price">
                                <div class="discount_price">
                                    <span><strike>$150.00</strike></span>
                                </div>
                                <div class="current_price">
                                    <span>$120.00</span>
                                </div>
                            </div>
                            <div class="star_rate">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                            </div>
                            <div class="title_pro">
                                <span class="title_product">
                                    Calvin Klein Women's Scuba Sleeveless Princess Seamed Sheath Dress
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="singel_product slide">
                        <div class="out_images">
                            <img src="../img/logo.jpg" alt="" class="images_pro">
                        </div>
                        <div class="discount_side d-flex">
                            <div class="tage_text">OFF</div>
                            <div class="tage_number">
                                <span>20%</span>
                            </div>
                        </div>
                        <div class="alliconsingel">
                            <a href="#" class="iconpro">
                                <i class="bi bi-heart"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-arrow-repeat"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-cart-plus"></i>
                            </a>
                        </div>
                        <div class="details_pro">
                            <div class="price">
                                <div class="discount_price">
                                    <span><strike>$150.00</strike></span>
                                </div>
                                <div class="current_price">
                                    <span>$120.00</span>
                                </div>
                            </div>
                            <div class="star_rate">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                            </div>
                            <div class="title_pro">
                                <span class="title_product">
                                    Calvin Klein Women's Scuba Sleeveless Princess Seamed Sheath Dress
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="singel_product slide">
                        <div class="out_images">
                            <img src="../img/logo.jpg" alt="" class="images_pro">
                        </div>
                        <div class="discount_side d-flex">
                            <div class="tage_text">OFF</div>
                            <div class="tage_number">
                                <span>20%</span>
                            </div>
                        </div>
                        <div class="alliconsingel">
                            <a href="#" class="iconpro">
                                <i class="bi bi-heart"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-arrow-repeat"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-cart-plus"></i>
                            </a>
                        </div>
                        <div class="details_pro">
                            <div class="price">
                                <div class="discount_price">
                                    <span><strike>$150.00</strike></span>
                                </div>
                                <div class="current_price">
                                    <span>$120.00</span>
                                </div>
                            </div>
                            <div class="star_rate">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                            </div>
                            <div class="title_pro">
                                <span class="title_product">
                                    Calvin Klein Women's Scuba Sleeveless Princess Seamed Sheath Dress
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="singel_product slide">
                        <div class="out_images">
                            <img src="../img/logo.jpg" alt="" class="images_pro">
                        </div>
                        <div class="discount_side d-flex">
                            <div class="tage_text">OFF</div>
                            <div class="tage_number">
                                <span>20%</span>
                            </div>
                        </div>
                        <div class="alliconsingel">
                            <a href="#" class="iconpro">
                                <i class="bi bi-heart"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-arrow-repeat"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-cart-plus"></i>
                            </a>
                        </div>
                        <div class="details_pro">
                            <div class="price">
                                <div class="discount_price">
                                    <span><strike>$150.00</strike></span>
                                </div>
                                <div class="current_price">
                                    <span>$120.00</span>
                                </div>
                            </div>
                            <div class="star_rate">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                            </div>
                            <div class="title_pro">
                                <span class="title_product">
                                    Calvin Klein Women's Scuba Sleeveless Princess Seamed Sheath Dress
                                </span>
                            </div>
                        </div>
                    </div> --}}

                </div>
            </div>
        </div>
    </div>

    {{-- Groceries --}}
    <div class="display_product shadow-lg p-3 mb-5 bg-body"> {{-- rounded  disabled --}}
        <div class="header_display">
            <div class="left_header_display">
                <span>Groceries</span>
            </div>
            <div class="right_header_display">
                <button class="button_show_more btn btn-danger">Show More</button>
            </div>
        </div>
        <hr>
        <div class="body_display_product slider-wrapper">
            <nav>
                <div class="btn_prev display_btn left disabled">
                    <i class="bi bi-arrow-left"></i>
                </div>

                <div class="btn_next display_btn right">
                    <i class="bi bi-arrow-right"></i>
                </div>
            </nav>

            <div class="card_product slider">
                <div class="wrapper" id="grocer">
                    {{-- <div class="singel_product slide">
                        <div class="out_images">
                            <img src="../img/logo.jpg" alt="" class="images_pro">
                        </div>
                        <div class="discount_side d-flex disabled">
                            <div class="tage_text">OFF</div>
                            <div class="tage_number">
                                <span>20%</span>
                            </div>
                        </div>
                        <div class="alliconsingel">
                            <a href="#" class="iconpro">
                                <i class="bi bi-heart"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-arrow-repeat"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-cart-plus"></i>
                            </a>
                        </div>
                        <div class="details_pro">
                            <div class="price">
                                <div class="discount_price">
                                    <span><strike>$150.00</strike></span>
                                </div>
                                <div class="current_price">
                                    <span>$120.00</span>
                                </div>
                            </div>
                            <div class="star_rate">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                            </div>
                            <div class="title_pro">
                                <span class="title_product">
                                    Calvin Klein Women's Scuba Sleeveless Princess Seamed Sheath Dress
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="singel_product slide">
                        <div class="out_images">
                            <img src="../img/logo.jpg" alt="" class="images_pro">
                        </div>
                        <div class="discount_side d-flex">
                            <div class="tage_text">OFF</div>
                            <div class="tage_number">
                                <span>20%</span>
                            </div>
                        </div>
                        <div class="alliconsingel">
                            <a href="#" class="iconpro">
                                <i class="bi bi-heart"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-arrow-repeat"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-cart-plus"></i>
                            </a>
                        </div>
                        <div class="details_pro">
                            <div class="price">
                                <div class="discount_price">
                                    <span><strike>$150.00</strike></span>
                                </div>
                                <div class="current_price">
                                    <span>$120.00</span>
                                </div>
                            </div>
                            <div class="star_rate">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                            </div>
                            <div class="title_pro">
                                <span class="title_product">
                                    Calvin Klein Women's Scuba Sleeveless Princess Seamed Sheath Dress
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="singel_product slide">
                        <div class="out_images">
                            <img src="../img/logo.jpg" alt="" class="images_pro">
                        </div>
                        <div class="discount_side d-flex disabled">
                            <div class="tage_text">OFF</div>
                            <div class="tage_number">
                                <span>20%</span>
                            </div>
                        </div>
                        <div class="alliconsingel">
                            <a href="#" class="iconpro">
                                <i class="bi bi-heart"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-arrow-repeat"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-cart-plus"></i>
                            </a>
                        </div>
                        <div class="details_pro">
                            <div class="price">
                                <div class="discount_price">
                                    <span><strike>$150.00</strike></span>
                                </div>
                                <div class="current_price">
                                    <span>$120.00</span>
                                </div>
                            </div>
                            <div class="star_rate">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                            </div>
                            <div class="title_pro">
                                <span class="title_product">
                                    Calvin Klein Women's Scuba Sleeveless Princess Seamed Sheath Dress
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="singel_product slide">
                        <div class="out_images">
                            <img src="../img/logo.jpg" alt="" class="images_pro">
                        </div>
                        <div class="discount_side d-flex">
                            <div class="tage_text">OFF</div>
                            <div class="tage_number">
                                <span>20%</span>
                            </div>
                        </div>
                        <div class="alliconsingel">
                            <a href="#" class="iconpro">
                                <i class="bi bi-heart"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-arrow-repeat"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-cart-plus"></i>
                            </a>
                        </div>
                        <div class="details_pro">
                            <div class="price">
                                <div class="discount_price">
                                    <span><strike>$150.00</strike></span>
                                </div>
                                <div class="current_price">
                                    <span>$120.00</span>
                                </div>
                            </div>
                            <div class="star_rate">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                            </div>
                            <div class="title_pro">
                                <span class="title_product">
                                    Calvin Klein Women's Scuba Sleeveless Princess Seamed Sheath Dress
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="singel_product slide">
                        <div class="out_images">
                            <img src="../img/logo.jpg" alt="" class="images_pro">
                        </div>
                        <div class="discount_side d-flex disabled">
                            <div class="tage_text">OFF</div>
                            <div class="tage_number">
                                <span>20%</span>
                            </div>
                        </div>
                        <div class="alliconsingel">
                            <a href="#" class="iconpro">
                                <i class="bi bi-heart"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-arrow-repeat"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-cart-plus"></i>
                            </a>
                        </div>
                        <div class="details_pro">
                            <div class="price">
                                <div class="discount_price">
                                    <span><strike>$150.00</strike></span>
                                </div>
                                <div class="current_price">
                                    <span>$120.00</span>
                                </div>
                            </div>
                            <div class="star_rate">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                            </div>
                            <div class="title_pro">
                                <span class="title_product">
                                    Calvin Klein Women's Scuba Sleeveless Princess Seamed Sheath Dress
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="singel_product slide">
                        <div class="out_images">
                            <img src="../img/logo.jpg" alt="" class="images_pro">
                        </div>
                        <div class="discount_side d-flex">
                            <div class="tage_text">OFF</div>
                            <div class="tage_number">
                                <span>20%</span>
                            </div>
                        </div>
                        <div class="alliconsingel">
                            <a href="#" class="iconpro">
                                <i class="bi bi-heart"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-arrow-repeat"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-cart-plus"></i>
                            </a>
                        </div>
                        <div class="details_pro">
                            <div class="price">
                                <div class="discount_price">
                                    <span><strike>$150.00</strike></span>
                                </div>
                                <div class="current_price">
                                    <span>$120.00</span>
                                </div>
                            </div>
                            <div class="star_rate">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                            </div>
                            <div class="title_pro">
                                <span class="title_product">
                                    Calvin Klein Women's Scuba Sleeveless Princess Seamed Sheath Dress
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="singel_product slide">
                        <div class="out_images">
                            <img src="../img/logo.jpg" alt="" class="images_pro">
                        </div>
                        <div class="discount_side d-flex">
                            <div class="tage_text">OFF</div>
                            <div class="tage_number">
                                <span>20%</span>
                            </div>
                        </div>
                        <div class="alliconsingel">
                            <a href="#" class="iconpro">
                                <i class="bi bi-heart"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-arrow-repeat"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-cart-plus"></i>
                            </a>
                        </div>
                        <div class="details_pro">
                            <div class="price">
                                <div class="discount_price">
                                    <span><strike>$150.00</strike></span>
                                </div>
                                <div class="current_price">
                                    <span>$120.00</span>
                                </div>
                            </div>
                            <div class="star_rate">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                            </div>
                            <div class="title_pro">
                                <span class="title_product">
                                    Calvin Klein Women's Scuba Sleeveless Princess Seamed Sheath Dress
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="singel_product slide">
                        <div class="out_images">
                            <img src="../img/logo.jpg" alt="" class="images_pro">
                        </div>
                        <div class="discount_side d-flex">
                            <div class="tage_text">OFF</div>
                            <div class="tage_number">
                                <span>20%</span>
                            </div>
                        </div>
                        <div class="alliconsingel">
                            <a href="#" class="iconpro">
                                <i class="bi bi-heart"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-arrow-repeat"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-cart-plus"></i>
                            </a>
                        </div>
                        <div class="details_pro">
                            <div class="price">
                                <div class="discount_price">
                                    <span><strike>$150.00</strike></span>
                                </div>
                                <div class="current_price">
                                    <span>$120.00</span>
                                </div>
                            </div>
                            <div class="star_rate">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                            </div>
                            <div class="title_pro">
                                <span class="title_product">
                                    Calvin Klein Women's Scuba Sleeveless Princess Seamed Sheath Dress
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="singel_product slide">
                        <div class="out_images">
                            <img src="../img/logo.jpg" alt="" class="images_pro">
                        </div>
                        <div class="discount_side d-flex">
                            <div class="tage_text">OFF</div>
                            <div class="tage_number">
                                <span>20%</span>
                            </div>
                        </div>
                        <div class="alliconsingel">
                            <a href="#" class="iconpro">
                                <i class="bi bi-heart"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-arrow-repeat"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-cart-plus"></i>
                            </a>
                        </div>
                        <div class="details_pro">
                            <div class="price">
                                <div class="discount_price">
                                    <span><strike>$150.00</strike></span>
                                </div>
                                <div class="current_price">
                                    <span>$120.00</span>
                                </div>
                            </div>
                            <div class="star_rate">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                            </div>
                            <div class="title_pro">
                                <span class="title_product">
                                    Calvin Klein Women's Scuba Sleeveless Princess Seamed Sheath Dress
                                </span>
                            </div>
                        </div>
                    </div> --}}

                </div>
            </div>
        </div>
    </div>

    {{-- Television --}}
    <div class="display_product shadow-lg p-3 mb-5 bg-body"> {{-- rounded  disabled --}}
        <div class="header_display">
            <div class="left_header_display">
                <span>Television</span>
            </div>
            <div class="right_header_display">
                <button class="button_show_more btn btn-danger">Show More</button>
            </div>
        </div>
        <hr>
        <div class="body_display_product slider-wrapper">
            <nav>
                <div class="btn_prev display_btn left disabled">
                    <i class="bi bi-arrow-left"></i>
                </div>

                <div class="btn_next display_btn right">
                    <i class="bi bi-arrow-right"></i>
                </div>
            </nav>

            <div class="card_product slider">
                <div class="wrapper" id="televi">
                    {{-- <div class="singel_product slide">
                        <div class="out_images">
                            <img src="../img/logo.jpg" alt="" class="images_pro">
                        </div>
                        <div class="discount_side d-flex disabled">
                            <div class="tage_text">OFF</div>
                            <div class="tage_number">
                                <span>20%</span>
                            </div>
                        </div>
                        <div class="alliconsingel">
                            <a href="#" class="iconpro">
                                <i class="bi bi-heart"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-arrow-repeat"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-cart-plus"></i>
                            </a>
                        </div>
                        <div class="details_pro">
                            <div class="price">
                                <div class="discount_price">
                                    <span><strike>$150.00</strike></span>
                                </div>
                                <div class="current_price">
                                    <span>$120.00</span>
                                </div>
                            </div>
                            <div class="star_rate">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                            </div>
                            <div class="title_pro">
                                <span class="title_product">
                                    Calvin Klein Women's Scuba Sleeveless Princess Seamed Sheath Dress
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="singel_product slide">
                        <div class="out_images">
                            <img src="../img/logo.jpg" alt="" class="images_pro">
                        </div>
                        <div class="discount_side d-flex">
                            <div class="tage_text">OFF</div>
                            <div class="tage_number">
                                <span>20%</span>
                            </div>
                        </div>
                        <div class="alliconsingel">
                            <a href="#" class="iconpro">
                                <i class="bi bi-heart"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-arrow-repeat"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-cart-plus"></i>
                            </a>
                        </div>
                        <div class="details_pro">
                            <div class="price">
                                <div class="discount_price">
                                    <span><strike>$150.00</strike></span>
                                </div>
                                <div class="current_price">
                                    <span>$120.00</span>
                                </div>
                            </div>
                            <div class="star_rate">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                            </div>
                            <div class="title_pro">
                                <span class="title_product">
                                    Calvin Klein Women's Scuba Sleeveless Princess Seamed Sheath Dress
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="singel_product slide">
                        <div class="out_images">
                            <img src="../img/logo.jpg" alt="" class="images_pro">
                        </div>
                        <div class="discount_side d-flex disabled">
                            <div class="tage_text">OFF</div>
                            <div class="tage_number">
                                <span>20%</span>
                            </div>
                        </div>
                        <div class="alliconsingel">
                            <a href="#" class="iconpro">
                                <i class="bi bi-heart"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-arrow-repeat"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-cart-plus"></i>
                            </a>
                        </div>
                        <div class="details_pro">
                            <div class="price">
                                <div class="discount_price">
                                    <span><strike>$150.00</strike></span>
                                </div>
                                <div class="current_price">
                                    <span>$120.00</span>
                                </div>
                            </div>
                            <div class="star_rate">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                            </div>
                            <div class="title_pro">
                                <span class="title_product">
                                    Calvin Klein Women's Scuba Sleeveless Princess Seamed Sheath Dress
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="singel_product slide">
                        <div class="out_images">
                            <img src="../img/logo.jpg" alt="" class="images_pro">
                        </div>
                        <div class="discount_side d-flex">
                            <div class="tage_text">OFF</div>
                            <div class="tage_number">
                                <span>20%</span>
                            </div>
                        </div>
                        <div class="alliconsingel">
                            <a href="#" class="iconpro">
                                <i class="bi bi-heart"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-arrow-repeat"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-cart-plus"></i>
                            </a>
                        </div>
                        <div class="details_pro">
                            <div class="price">
                                <div class="discount_price">
                                    <span><strike>$150.00</strike></span>
                                </div>
                                <div class="current_price">
                                    <span>$120.00</span>
                                </div>
                            </div>
                            <div class="star_rate">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                            </div>
                            <div class="title_pro">
                                <span class="title_product">
                                    Calvin Klein Women's Scuba Sleeveless Princess Seamed Sheath Dress
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="singel_product slide">
                        <div class="out_images">
                            <img src="../img/logo.jpg" alt="" class="images_pro">
                        </div>
                        <div class="discount_side d-flex disabled">
                            <div class="tage_text">OFF</div>
                            <div class="tage_number">
                                <span>20%</span>
                            </div>
                        </div>
                        <div class="alliconsingel">
                            <a href="#" class="iconpro">
                                <i class="bi bi-heart"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-arrow-repeat"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-cart-plus"></i>
                            </a>
                        </div>
                        <div class="details_pro">
                            <div class="price">
                                <div class="discount_price">
                                    <span><strike>$150.00</strike></span>
                                </div>
                                <div class="current_price">
                                    <span>$120.00</span>
                                </div>
                            </div>
                            <div class="star_rate">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                            </div>
                            <div class="title_pro">
                                <span class="title_product">
                                    Calvin Klein Women's Scuba Sleeveless Princess Seamed Sheath Dress
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="singel_product slide">
                        <div class="out_images">
                            <img src="../img/logo.jpg" alt="" class="images_pro">
                        </div>
                        <div class="discount_side d-flex">
                            <div class="tage_text">OFF</div>
                            <div class="tage_number">
                                <span>20%</span>
                            </div>
                        </div>
                        <div class="alliconsingel">
                            <a href="#" class="iconpro">
                                <i class="bi bi-heart"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-arrow-repeat"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-cart-plus"></i>
                            </a>
                        </div>
                        <div class="details_pro">
                            <div class="price">
                                <div class="discount_price">
                                    <span><strike>$150.00</strike></span>
                                </div>
                                <div class="current_price">
                                    <span>$120.00</span>
                                </div>
                            </div>
                            <div class="star_rate">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                            </div>
                            <div class="title_pro">
                                <span class="title_product">
                                    Calvin Klein Women's Scuba Sleeveless Princess Seamed Sheath Dress
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="singel_product slide">
                        <div class="out_images">
                            <img src="../img/logo.jpg" alt="" class="images_pro">
                        </div>
                        <div class="discount_side d-flex">
                            <div class="tage_text">OFF</div>
                            <div class="tage_number">
                                <span>20%</span>
                            </div>
                        </div>
                        <div class="alliconsingel">
                            <a href="#" class="iconpro">
                                <i class="bi bi-heart"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-arrow-repeat"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-cart-plus"></i>
                            </a>
                        </div>
                        <div class="details_pro">
                            <div class="price">
                                <div class="discount_price">
                                    <span><strike>$150.00</strike></span>
                                </div>
                                <div class="current_price">
                                    <span>$120.00</span>
                                </div>
                            </div>
                            <div class="star_rate">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                            </div>
                            <div class="title_pro">
                                <span class="title_product">
                                    Calvin Klein Women's Scuba Sleeveless Princess Seamed Sheath Dress
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="singel_product slide">
                        <div class="out_images">
                            <img src="../img/logo.jpg" alt="" class="images_pro">
                        </div>
                        <div class="discount_side d-flex">
                            <div class="tage_text">OFF</div>
                            <div class="tage_number">
                                <span>20%</span>
                            </div>
                        </div>
                        <div class="alliconsingel">
                            <a href="#" class="iconpro">
                                <i class="bi bi-heart"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-arrow-repeat"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-cart-plus"></i>
                            </a>
                        </div>
                        <div class="details_pro">
                            <div class="price">
                                <div class="discount_price">
                                    <span><strike>$150.00</strike></span>
                                </div>
                                <div class="current_price">
                                    <span>$120.00</span>
                                </div>
                            </div>
                            <div class="star_rate">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                            </div>
                            <div class="title_pro">
                                <span class="title_product">
                                    Calvin Klein Women's Scuba Sleeveless Princess Seamed Sheath Dress
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="singel_product slide">
                        <div class="out_images">
                            <img src="../img/logo.jpg" alt="" class="images_pro">
                        </div>
                        <div class="discount_side d-flex">
                            <div class="tage_text">OFF</div>
                            <div class="tage_number">
                                <span>20%</span>
                            </div>
                        </div>
                        <div class="alliconsingel">
                            <a href="#" class="iconpro">
                                <i class="bi bi-heart"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-arrow-repeat"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-cart-plus"></i>
                            </a>
                        </div>
                        <div class="details_pro">
                            <div class="price">
                                <div class="discount_price">
                                    <span><strike>$150.00</strike></span>
                                </div>
                                <div class="current_price">
                                    <span>$120.00</span>
                                </div>
                            </div>
                            <div class="star_rate">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                            </div>
                            <div class="title_pro">
                                <span class="title_product">
                                    Calvin Klein Women's Scuba Sleeveless Princess Seamed Sheath Dress
                                </span>
                            </div>
                        </div>
                    </div> --}}

                </div>
            </div>
        </div>
    </div>

    {{-- Appliances --}}
    <div class="display_product shadow-lg p-3 mb-5 bg-body"> {{-- rounded  disabled --}}
        <div class="header_display">
            <div class="left_header_display">
                <span>Appliances</span>
            </div>
            <div class="right_header_display">
                <button class="button_show_more btn btn-danger">Show More</button>
            </div>
        </div>
        <hr>
        <div class="body_display_product slider-wrapper">
            <nav>
                <div class="btn_prev display_btn left disabled">
                    <i class="bi bi-arrow-left"></i>
                </div>

                <div class="btn_next display_btn right">
                    <i class="bi bi-arrow-right"></i>
                </div>
            </nav>

            <div class="card_product slider">
                <div class="wrapper" id="appli">
                    {{-- <div class="singel_product slide">
                        <div class="out_images">
                            <img src="../img/logo.jpg" alt="" class="images_pro">
                        </div>
                        <div class="discount_side d-flex disabled">
                            <div class="tage_text">OFF</div>
                            <div class="tage_number">
                                <span>20%</span>
                            </div>
                        </div>
                        <div class="alliconsingel">
                            <a href="#" class="iconpro">
                                <i class="bi bi-heart"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-arrow-repeat"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-cart-plus"></i>
                            </a>
                        </div>
                        <div class="details_pro">
                            <div class="price">
                                <div class="discount_price">
                                    <span><strike>$150.00</strike></span>
                                </div>
                                <div class="current_price">
                                    <span>$120.00</span>
                                </div>
                            </div>
                            <div class="star_rate">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                            </div>
                            <div class="title_pro">
                                <span class="title_product">
                                    Calvin Klein Women's Scuba Sleeveless Princess Seamed Sheath Dress
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="singel_product slide">
                        <div class="out_images">
                            <img src="../img/logo.jpg" alt="" class="images_pro">
                        </div>
                        <div class="discount_side d-flex">
                            <div class="tage_text">OFF</div>
                            <div class="tage_number">
                                <span>20%</span>
                            </div>
                        </div>
                        <div class="alliconsingel">
                            <a href="#" class="iconpro">
                                <i class="bi bi-heart"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-arrow-repeat"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-cart-plus"></i>
                            </a>
                        </div>
                        <div class="details_pro">
                            <div class="price">
                                <div class="discount_price">
                                    <span><strike>$150.00</strike></span>
                                </div>
                                <div class="current_price">
                                    <span>$120.00</span>
                                </div>
                            </div>
                            <div class="star_rate">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                            </div>
                            <div class="title_pro">
                                <span class="title_product">
                                    Calvin Klein Women's Scuba Sleeveless Princess Seamed Sheath Dress
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="singel_product slide">
                        <div class="out_images">
                            <img src="../img/logo.jpg" alt="" class="images_pro">
                        </div>
                        <div class="discount_side d-flex disabled">
                            <div class="tage_text">OFF</div>
                            <div class="tage_number">
                                <span>20%</span>
                            </div>
                        </div>
                        <div class="alliconsingel">
                            <a href="#" class="iconpro">
                                <i class="bi bi-heart"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-arrow-repeat"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-cart-plus"></i>
                            </a>
                        </div>
                        <div class="details_pro">
                            <div class="price">
                                <div class="discount_price">
                                    <span><strike>$150.00</strike></span>
                                </div>
                                <div class="current_price">
                                    <span>$120.00</span>
                                </div>
                            </div>
                            <div class="star_rate">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                            </div>
                            <div class="title_pro">
                                <span class="title_product">
                                    Calvin Klein Women's Scuba Sleeveless Princess Seamed Sheath Dress
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="singel_product slide">
                        <div class="out_images">
                            <img src="../img/logo.jpg" alt="" class="images_pro">
                        </div>
                        <div class="discount_side d-flex">
                            <div class="tage_text">OFF</div>
                            <div class="tage_number">
                                <span>20%</span>
                            </div>
                        </div>
                        <div class="alliconsingel">
                            <a href="#" class="iconpro">
                                <i class="bi bi-heart"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-arrow-repeat"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-cart-plus"></i>
                            </a>
                        </div>
                        <div class="details_pro">
                            <div class="price">
                                <div class="discount_price">
                                    <span><strike>$150.00</strike></span>
                                </div>
                                <div class="current_price">
                                    <span>$120.00</span>
                                </div>
                            </div>
                            <div class="star_rate">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                            </div>
                            <div class="title_pro">
                                <span class="title_product">
                                    Calvin Klein Women's Scuba Sleeveless Princess Seamed Sheath Dress
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="singel_product slide">
                        <div class="out_images">
                            <img src="../img/logo.jpg" alt="" class="images_pro">
                        </div>
                        <div class="discount_side d-flex disabled">
                            <div class="tage_text">OFF</div>
                            <div class="tage_number">
                                <span>20%</span>
                            </div>
                        </div>
                        <div class="alliconsingel">
                            <a href="#" class="iconpro">
                                <i class="bi bi-heart"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-arrow-repeat"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-cart-plus"></i>
                            </a>
                        </div>
                        <div class="details_pro">
                            <div class="price">
                                <div class="discount_price">
                                    <span><strike>$150.00</strike></span>
                                </div>
                                <div class="current_price">
                                    <span>$120.00</span>
                                </div>
                            </div>
                            <div class="star_rate">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                            </div>
                            <div class="title_pro">
                                <span class="title_product">
                                    Calvin Klein Women's Scuba Sleeveless Princess Seamed Sheath Dress
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="singel_product slide">
                        <div class="out_images">
                            <img src="../img/logo.jpg" alt="" class="images_pro">
                        </div>
                        <div class="discount_side d-flex">
                            <div class="tage_text">OFF</div>
                            <div class="tage_number">
                                <span>20%</span>
                            </div>
                        </div>
                        <div class="alliconsingel">
                            <a href="#" class="iconpro">
                                <i class="bi bi-heart"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-arrow-repeat"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-cart-plus"></i>
                            </a>
                        </div>
                        <div class="details_pro">
                            <div class="price">
                                <div class="discount_price">
                                    <span><strike>$150.00</strike></span>
                                </div>
                                <div class="current_price">
                                    <span>$120.00</span>
                                </div>
                            </div>
                            <div class="star_rate">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                            </div>
                            <div class="title_pro">
                                <span class="title_product">
                                    Calvin Klein Women's Scuba Sleeveless Princess Seamed Sheath Dress
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="singel_product slide">
                        <div class="out_images">
                            <img src="../img/logo.jpg" alt="" class="images_pro">
                        </div>
                        <div class="discount_side d-flex">
                            <div class="tage_text">OFF</div>
                            <div class="tage_number">
                                <span>20%</span>
                            </div>
                        </div>
                        <div class="alliconsingel">
                            <a href="#" class="iconpro">
                                <i class="bi bi-heart"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-arrow-repeat"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-cart-plus"></i>
                            </a>
                        </div>
                        <div class="details_pro">
                            <div class="price">
                                <div class="discount_price">
                                    <span><strike>$150.00</strike></span>
                                </div>
                                <div class="current_price">
                                    <span>$120.00</span>
                                </div>
                            </div>
                            <div class="star_rate">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                            </div>
                            <div class="title_pro">
                                <span class="title_product">
                                    Calvin Klein Women's Scuba Sleeveless Princess Seamed Sheath Dress
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="singel_product slide">
                        <div class="out_images">
                            <img src="../img/logo.jpg" alt="" class="images_pro">
                        </div>
                        <div class="discount_side d-flex">
                            <div class="tage_text">OFF</div>
                            <div class="tage_number">
                                <span>20%</span>
                            </div>
                        </div>
                        <div class="alliconsingel">
                            <a href="#" class="iconpro">
                                <i class="bi bi-heart"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-arrow-repeat"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-cart-plus"></i>
                            </a>
                        </div>
                        <div class="details_pro">
                            <div class="price">
                                <div class="discount_price">
                                    <span><strike>$150.00</strike></span>
                                </div>
                                <div class="current_price">
                                    <span>$120.00</span>
                                </div>
                            </div>
                            <div class="star_rate">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                            </div>
                            <div class="title_pro">
                                <span class="title_product">
                                    Calvin Klein Women's Scuba Sleeveless Princess Seamed Sheath Dress
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="singel_product slide">
                        <div class="out_images">
                            <img src="../img/logo.jpg" alt="" class="images_pro">
                        </div>
                        <div class="discount_side d-flex">
                            <div class="tage_text">OFF</div>
                            <div class="tage_number">
                                <span>20%</span>
                            </div>
                        </div>
                        <div class="alliconsingel">
                            <a href="#" class="iconpro">
                                <i class="bi bi-heart"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-arrow-repeat"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-cart-plus"></i>
                            </a>
                        </div>
                        <div class="details_pro">
                            <div class="price">
                                <div class="discount_price">
                                    <span><strike>$150.00</strike></span>
                                </div>
                                <div class="current_price">
                                    <span>$120.00</span>
                                </div>
                            </div>
                            <div class="star_rate">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                            </div>
                            <div class="title_pro">
                                <span class="title_product">
                                    Calvin Klein Women's Scuba Sleeveless Princess Seamed Sheath Dress
                                </span>
                            </div>
                        </div>
                    </div> --}}

                </div>
            </div>
        </div>
    </div>

    {{-- Brand --}}
    <div class="promotion_display shadow-lg p-3 mb-5 bg-body"> {{-- rounded --}}
        <div class="header_display">
            <div class="left_header_display">
                <span>Brand</span>
            </div>
            <div class="right_header_display">
                <button class="button_show_more btn btn-danger" id="btn_show_brand">Show More</button>
            </div>
        </div>
        <hr>
        <div class="body_display_promotion slider-wrapper ">
            <nav>
                <div class="btn_prev display_btn left disabled">
                    <i class="bi bi-arrow-left"></i>
                </div>

                <div class="btn_next display_btn right">
                    <i class="bi bi-arrow-right"></i>
                </div>
            </nav>

            <div class="card_promotion slider">
                <div class="wrapper" id="branchsh">
                    {{-- <div class="singel_promotion slide">
                        <div class="out_images_promotion">
                            <img src="../img/Promotion/AEON.jpg" alt="" class="promotion_icon">
                        </div>
                        <div class="title_promotion">
                            <span>
                                AEON 3
                            </span>
                        </div>
                    </div>

                    <div class="singel_promotion slide">
                        <div class="out_images_promotion">
                            <img src="../img/Promotion/AEON.jpg" alt="" class="promotion_icon">
                        </div>
                        <div class="title_promotion">
                            <span>
                                AEON 3
                            </span>
                        </div>
                    </div>

                    <div class="singel_promotion slide">
                        <div class="out_images_promotion">
                            <img src="../img/Promotion/AEON.jpg" alt="" class="promotion_icon">
                        </div>
                        <div class="title_promotion">
                            <span>
                                AEON 3
                            </span>
                        </div>
                    </div>

                    <div class="singel_promotion slide">
                        <div class="out_images_promotion">
                            <img src="../img/Promotion/AEON.jpg" alt="" class="promotion_icon">
                        </div>
                        <div class="title_promotion">
                            <span>
                                AEON 3
                            </span>
                        </div>
                    </div>

                    <div class="singel_promotion slide">
                        <div class="out_images_promotion">
                            <img src="../img/Promotion/AEON.jpg" alt="" class="promotion_icon">
                        </div>
                        <div class="title_promotion">
                            <span>
                                AEON 3
                            </span>
                        </div>
                    </div>

                    <div class="singel_promotion slide">
                        <div class="out_images_promotion">
                            <img src="../img/Promotion/AEON.jpg" alt="" class="promotion_icon">
                        </div>
                        <div class="title_promotion">
                            <span>
                                AEON 3
                            </span>
                        </div>
                    </div>

                    <div class="singel_promotion slide">
                        <div class="out_images_promotion">
                            <img src="../img/Promotion/AEON.jpg" alt="" class="promotion_icon">
                        </div>
                        <div class="title_promotion">
                            <span>
                                AEON 3
                            </span>
                        </div>
                    </div>

                    <div class="singel_promotion slide">
                        <div class="out_images_promotion">
                            <img src="../img/Promotion/AEON.jpg" alt="" class="promotion_icon">
                        </div>
                        <div class="title_promotion">
                            <span>
                                AEON 3
                            </span>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>

    {{-- Air Conditioners --}}
    <div class="display_product shadow-lg p-3 mb-5 bg-body"> {{-- rounded  disabled --}}
        <div class="header_display">
            <div class="left_header_display">
                <span>Air Conditioners</span>
            </div>
            <div class="right_header_display">
                <button class="button_show_more btn btn-danger">Show More</button>
            </div>
        </div>
        <hr>
        <div class="body_display_product slider-wrapper">
            <nav>
                <div class="btn_prev display_btn left disabled">
                    <i class="bi bi-arrow-left"></i>
                </div>

                <div class="btn_next display_btn right">
                    <i class="bi bi-arrow-right"></i>
                </div>
            </nav>

            <div class="card_product slider">
                <div class="wrapper" id="aircon">
                    {{-- <div class="singel_product slide">
                        <div class="out_images">
                            <img src="../img/logo.jpg" alt="" class="images_pro">
                        </div>
                        <div class="discount_side d-flex disabled">
                            <div class="tage_text">OFF</div>
                            <div class="tage_number">
                                <span>20%</span>
                            </div>
                        </div>
                        <div class="alliconsingel">
                            <a href="#" class="iconpro">
                                <i class="bi bi-heart"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-arrow-repeat"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-cart-plus"></i>
                            </a>
                        </div>
                        <div class="details_pro">
                            <div class="price">
                                <div class="discount_price">
                                    <span><strike>$150.00</strike></span>
                                </div>
                                <div class="current_price">
                                    <span>$120.00</span>
                                </div>
                            </div>
                            <div class="star_rate">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                            </div>
                            <div class="title_pro">
                                <span class="title_product">
                                    Calvin Klein Women's Scuba Sleeveless Princess Seamed Sheath Dress
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="singel_product slide">
                        <div class="out_images">
                            <img src="../img/logo.jpg" alt="" class="images_pro">
                        </div>
                        <div class="discount_side d-flex">
                            <div class="tage_text">OFF</div>
                            <div class="tage_number">
                                <span>20%</span>
                            </div>
                        </div>
                        <div class="alliconsingel">
                            <a href="#" class="iconpro">
                                <i class="bi bi-heart"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-arrow-repeat"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-cart-plus"></i>
                            </a>
                        </div>
                        <div class="details_pro">
                            <div class="price">
                                <div class="discount_price">
                                    <span><strike>$150.00</strike></span>
                                </div>
                                <div class="current_price">
                                    <span>$120.00</span>
                                </div>
                            </div>
                            <div class="star_rate">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                            </div>
                            <div class="title_pro">
                                <span class="title_product">
                                    Calvin Klein Women's Scuba Sleeveless Princess Seamed Sheath Dress
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="singel_product slide">
                        <div class="out_images">
                            <img src="../img/logo.jpg" alt="" class="images_pro">
                        </div>
                        <div class="discount_side d-flex disabled">
                            <div class="tage_text">OFF</div>
                            <div class="tage_number">
                                <span>20%</span>
                            </div>
                        </div>
                        <div class="alliconsingel">
                            <a href="#" class="iconpro">
                                <i class="bi bi-heart"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-arrow-repeat"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-cart-plus"></i>
                            </a>
                        </div>
                        <div class="details_pro">
                            <div class="price">
                                <div class="discount_price">
                                    <span><strike>$150.00</strike></span>
                                </div>
                                <div class="current_price">
                                    <span>$120.00</span>
                                </div>
                            </div>
                            <div class="star_rate">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                            </div>
                            <div class="title_pro">
                                <span class="title_product">
                                    Calvin Klein Women's Scuba Sleeveless Princess Seamed Sheath Dress
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="singel_product slide">
                        <div class="out_images">
                            <img src="../img/logo.jpg" alt="" class="images_pro">
                        </div>
                        <div class="discount_side d-flex">
                            <div class="tage_text">OFF</div>
                            <div class="tage_number">
                                <span>20%</span>
                            </div>
                        </div>
                        <div class="alliconsingel">
                            <a href="#" class="iconpro">
                                <i class="bi bi-heart"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-arrow-repeat"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-cart-plus"></i>
                            </a>
                        </div>
                        <div class="details_pro">
                            <div class="price">
                                <div class="discount_price">
                                    <span><strike>$150.00</strike></span>
                                </div>
                                <div class="current_price">
                                    <span>$120.00</span>
                                </div>
                            </div>
                            <div class="star_rate">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                            </div>
                            <div class="title_pro">
                                <span class="title_product">
                                    Calvin Klein Women's Scuba Sleeveless Princess Seamed Sheath Dress
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="singel_product slide">
                        <div class="out_images">
                            <img src="../img/logo.jpg" alt="" class="images_pro">
                        </div>
                        <div class="discount_side d-flex disabled">
                            <div class="tage_text">OFF</div>
                            <div class="tage_number">
                                <span>20%</span>
                            </div>
                        </div>
                        <div class="alliconsingel">
                            <a href="#" class="iconpro">
                                <i class="bi bi-heart"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-arrow-repeat"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-cart-plus"></i>
                            </a>
                        </div>
                        <div class="details_pro">
                            <div class="price">
                                <div class="discount_price">
                                    <span><strike>$150.00</strike></span>
                                </div>
                                <div class="current_price">
                                    <span>$120.00</span>
                                </div>
                            </div>
                            <div class="star_rate">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                            </div>
                            <div class="title_pro">
                                <span class="title_product">
                                    Calvin Klein Women's Scuba Sleeveless Princess Seamed Sheath Dress
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="singel_product slide">
                        <div class="out_images">
                            <img src="../img/logo.jpg" alt="" class="images_pro">
                        </div>
                        <div class="discount_side d-flex">
                            <div class="tage_text">OFF</div>
                            <div class="tage_number">
                                <span>20%</span>
                            </div>
                        </div>
                        <div class="alliconsingel">
                            <a href="#" class="iconpro">
                                <i class="bi bi-heart"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-arrow-repeat"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-cart-plus"></i>
                            </a>
                        </div>
                        <div class="details_pro">
                            <div class="price">
                                <div class="discount_price">
                                    <span><strike>$150.00</strike></span>
                                </div>
                                <div class="current_price">
                                    <span>$120.00</span>
                                </div>
                            </div>
                            <div class="star_rate">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                            </div>
                            <div class="title_pro">
                                <span class="title_product">
                                    Calvin Klein Women's Scuba Sleeveless Princess Seamed Sheath Dress
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="singel_product slide">
                        <div class="out_images">
                            <img src="../img/logo.jpg" alt="" class="images_pro">
                        </div>
                        <div class="discount_side d-flex">
                            <div class="tage_text">OFF</div>
                            <div class="tage_number">
                                <span>20%</span>
                            </div>
                        </div>
                        <div class="alliconsingel">
                            <a href="#" class="iconpro">
                                <i class="bi bi-heart"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-arrow-repeat"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-cart-plus"></i>
                            </a>
                        </div>
                        <div class="details_pro">
                            <div class="price">
                                <div class="discount_price">
                                    <span><strike>$150.00</strike></span>
                                </div>
                                <div class="current_price">
                                    <span>$120.00</span>
                                </div>
                            </div>
                            <div class="star_rate">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                            </div>
                            <div class="title_pro">
                                <span class="title_product">
                                    Calvin Klein Women's Scuba Sleeveless Princess Seamed Sheath Dress
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="singel_product slide">
                        <div class="out_images">
                            <img src="../img/logo.jpg" alt="" class="images_pro">
                        </div>
                        <div class="discount_side d-flex">
                            <div class="tage_text">OFF</div>
                            <div class="tage_number">
                                <span>20%</span>
                            </div>
                        </div>
                        <div class="alliconsingel">
                            <a href="#" class="iconpro">
                                <i class="bi bi-heart"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-arrow-repeat"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-cart-plus"></i>
                            </a>
                        </div>
                        <div class="details_pro">
                            <div class="price">
                                <div class="discount_price">
                                    <span><strike>$150.00</strike></span>
                                </div>
                                <div class="current_price">
                                    <span>$120.00</span>
                                </div>
                            </div>
                            <div class="star_rate">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                            </div>
                            <div class="title_pro">
                                <span class="title_product">
                                    Calvin Klein Women's Scuba Sleeveless Princess Seamed Sheath Dress
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="singel_product slide">
                        <div class="out_images">
                            <img src="../img/logo.jpg" alt="" class="images_pro">
                        </div>
                        <div class="discount_side d-flex">
                            <div class="tage_text">OFF</div>
                            <div class="tage_number">
                                <span>20%</span>
                            </div>
                        </div>
                        <div class="alliconsingel">
                            <a href="#" class="iconpro">
                                <i class="bi bi-heart"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-arrow-repeat"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-cart-plus"></i>
                            </a>
                        </div>
                        <div class="details_pro">
                            <div class="price">
                                <div class="discount_price">
                                    <span><strike>$150.00</strike></span>
                                </div>
                                <div class="current_price">
                                    <span>$120.00</span>
                                </div>
                            </div>
                            <div class="star_rate">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                            </div>
                            <div class="title_pro">
                                <span class="title_product">
                                    Calvin Klein Women's Scuba Sleeveless Princess Seamed Sheath Dress
                                </span>
                            </div>
                        </div>
                    </div> --}}

                </div>
            </div>
        </div>
    </div>

    {{-- Mobile --}}
    <div class="display_product shadow-lg p-3 mb-5 bg-body"> {{-- rounded  disabled --}}
        <div class="header_display">
            <div class="left_header_display">
                <span>Mobile</span>
            </div>
            <div class="right_header_display">
                <button class="button_show_more btn btn-danger">Show More</button>
            </div>
        </div>
        <hr>
        <div class="body_display_product slider-wrapper">
            <nav>
                <div class="btn_prev display_btn left disabled">
                    <i class="bi bi-arrow-left"></i>
                </div>

                <div class="btn_next display_btn right">
                    <i class="bi bi-arrow-right"></i>
                </div>
            </nav>

            <div class="card_product slider">
                <div class="wrapper" id="mobi">
                    {{-- <div class="singel_product slide">
                        <div class="out_images">
                            <img src="../img/logo.jpg" alt="" class="images_pro">
                        </div>
                        <div class="discount_side d-flex disabled">
                            <div class="tage_text">OFF</div>
                            <div class="tage_number">
                                <span>20%</span>
                            </div>
                        </div>
                        <div class="alliconsingel">
                            <a href="#" class="iconpro">
                                <i class="bi bi-heart"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-arrow-repeat"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-cart-plus"></i>
                            </a>
                        </div>
                        <div class="details_pro">
                            <div class="price">
                                <div class="discount_price">
                                    <span><strike>$150.00</strike></span>
                                </div>
                                <div class="current_price">
                                    <span>$120.00</span>
                                </div>
                            </div>
                            <div class="star_rate">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                            </div>
                            <div class="title_pro">
                                <span class="title_product">
                                    Calvin Klein Women's Scuba Sleeveless Princess Seamed Sheath Dress
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="singel_product slide">
                        <div class="out_images">
                            <img src="../img/logo.jpg" alt="" class="images_pro">
                        </div>
                        <div class="discount_side d-flex">
                            <div class="tage_text">OFF</div>
                            <div class="tage_number">
                                <span>20%</span>
                            </div>
                        </div>
                        <div class="alliconsingel">
                            <a href="#" class="iconpro">
                                <i class="bi bi-heart"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-arrow-repeat"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-cart-plus"></i>
                            </a>
                        </div>
                        <div class="details_pro">
                            <div class="price">
                                <div class="discount_price">
                                    <span><strike>$150.00</strike></span>
                                </div>
                                <div class="current_price">
                                    <span>$120.00</span>
                                </div>
                            </div>
                            <div class="star_rate">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                            </div>
                            <div class="title_pro">
                                <span class="title_product">
                                    Calvin Klein Women's Scuba Sleeveless Princess Seamed Sheath Dress
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="singel_product slide">
                        <div class="out_images">
                            <img src="../img/logo.jpg" alt="" class="images_pro">
                        </div>
                        <div class="discount_side d-flex disabled">
                            <div class="tage_text">OFF</div>
                            <div class="tage_number">
                                <span>20%</span>
                            </div>
                        </div>
                        <div class="alliconsingel">
                            <a href="#" class="iconpro">
                                <i class="bi bi-heart"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-arrow-repeat"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-cart-plus"></i>
                            </a>
                        </div>
                        <div class="details_pro">
                            <div class="price">
                                <div class="discount_price">
                                    <span><strike>$150.00</strike></span>
                                </div>
                                <div class="current_price">
                                    <span>$120.00</span>
                                </div>
                            </div>
                            <div class="star_rate">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                            </div>
                            <div class="title_pro">
                                <span class="title_product">
                                    Calvin Klein Women's Scuba Sleeveless Princess Seamed Sheath Dress
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="singel_product slide">
                        <div class="out_images">
                            <img src="../img/logo.jpg" alt="" class="images_pro">
                        </div>
                        <div class="discount_side d-flex">
                            <div class="tage_text">OFF</div>
                            <div class="tage_number">
                                <span>20%</span>
                            </div>
                        </div>
                        <div class="alliconsingel">
                            <a href="#" class="iconpro">
                                <i class="bi bi-heart"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-arrow-repeat"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-cart-plus"></i>
                            </a>
                        </div>
                        <div class="details_pro">
                            <div class="price">
                                <div class="discount_price">
                                    <span><strike>$150.00</strike></span>
                                </div>
                                <div class="current_price">
                                    <span>$120.00</span>
                                </div>
                            </div>
                            <div class="star_rate">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                            </div>
                            <div class="title_pro">
                                <span class="title_product">
                                    Calvin Klein Women's Scuba Sleeveless Princess Seamed Sheath Dress
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="singel_product slide">
                        <div class="out_images">
                            <img src="../img/logo.jpg" alt="" class="images_pro">
                        </div>
                        <div class="discount_side d-flex disabled">
                            <div class="tage_text">OFF</div>
                            <div class="tage_number">
                                <span>20%</span>
                            </div>
                        </div>
                        <div class="alliconsingel">
                            <a href="#" class="iconpro">
                                <i class="bi bi-heart"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-arrow-repeat"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-cart-plus"></i>
                            </a>
                        </div>
                        <div class="details_pro">
                            <div class="price">
                                <div class="discount_price">
                                    <span><strike>$150.00</strike></span>
                                </div>
                                <div class="current_price">
                                    <span>$120.00</span>
                                </div>
                            </div>
                            <div class="star_rate">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                            </div>
                            <div class="title_pro">
                                <span class="title_product">
                                    Calvin Klein Women's Scuba Sleeveless Princess Seamed Sheath Dress
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="singel_product slide">
                        <div class="out_images">
                            <img src="../img/logo.jpg" alt="" class="images_pro">
                        </div>
                        <div class="discount_side d-flex">
                            <div class="tage_text">OFF</div>
                            <div class="tage_number">
                                <span>20%</span>
                            </div>
                        </div>
                        <div class="alliconsingel">
                            <a href="#" class="iconpro">
                                <i class="bi bi-heart"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-arrow-repeat"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-cart-plus"></i>
                            </a>
                        </div>
                        <div class="details_pro">
                            <div class="price">
                                <div class="discount_price">
                                    <span><strike>$150.00</strike></span>
                                </div>
                                <div class="current_price">
                                    <span>$120.00</span>
                                </div>
                            </div>
                            <div class="star_rate">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                            </div>
                            <div class="title_pro">
                                <span class="title_product">
                                    Calvin Klein Women's Scuba Sleeveless Princess Seamed Sheath Dress
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="singel_product slide">
                        <div class="out_images">
                            <img src="../img/logo.jpg" alt="" class="images_pro">
                        </div>
                        <div class="discount_side d-flex">
                            <div class="tage_text">OFF</div>
                            <div class="tage_number">
                                <span>20%</span>
                            </div>
                        </div>
                        <div class="alliconsingel">
                            <a href="#" class="iconpro">
                                <i class="bi bi-heart"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-arrow-repeat"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-cart-plus"></i>
                            </a>
                        </div>
                        <div class="details_pro">
                            <div class="price">
                                <div class="discount_price">
                                    <span><strike>$150.00</strike></span>
                                </div>
                                <div class="current_price">
                                    <span>$120.00</span>
                                </div>
                            </div>
                            <div class="star_rate">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                            </div>
                            <div class="title_pro">
                                <span class="title_product">
                                    Calvin Klein Women's Scuba Sleeveless Princess Seamed Sheath Dress
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="singel_product slide">
                        <div class="out_images">
                            <img src="../img/logo.jpg" alt="" class="images_pro">
                        </div>
                        <div class="discount_side d-flex">
                            <div class="tage_text">OFF</div>
                            <div class="tage_number">
                                <span>20%</span>
                            </div>
                        </div>
                        <div class="alliconsingel">
                            <a href="#" class="iconpro">
                                <i class="bi bi-heart"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-arrow-repeat"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-cart-plus"></i>
                            </a>
                        </div>
                        <div class="details_pro">
                            <div class="price">
                                <div class="discount_price">
                                    <span><strike>$150.00</strike></span>
                                </div>
                                <div class="current_price">
                                    <span>$120.00</span>
                                </div>
                            </div>
                            <div class="star_rate">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                            </div>
                            <div class="title_pro">
                                <span class="title_product">
                                    Calvin Klein Women's Scuba Sleeveless Princess Seamed Sheath Dress
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="singel_product slide">
                        <div class="out_images">
                            <img src="../img/logo.jpg" alt="" class="images_pro">
                        </div>
                        <div class="discount_side d-flex">
                            <div class="tage_text">OFF</div>
                            <div class="tage_number">
                                <span>20%</span>
                            </div>
                        </div>
                        <div class="alliconsingel">
                            <a href="#" class="iconpro">
                                <i class="bi bi-heart"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-arrow-repeat"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-cart-plus"></i>
                            </a>
                        </div>
                        <div class="details_pro">
                            <div class="price">
                                <div class="discount_price">
                                    <span><strike>$150.00</strike></span>
                                </div>
                                <div class="current_price">
                                    <span>$120.00</span>
                                </div>
                            </div>
                            <div class="star_rate">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                            </div>
                            <div class="title_pro">
                                <span class="title_product">
                                    Calvin Klein Women's Scuba Sleeveless Princess Seamed Sheath Dress
                                </span>
                            </div>
                        </div>
                    </div> --}}

                </div>
            </div>
        </div>
    </div>

    {{-- Accessories --}}
    <div class="display_product shadow-lg p-3 mb-5 bg-body"> {{-- rounded  disabled --}}
        <div class="header_display">
            <div class="left_header_display">
                <span>Accessories</span>
            </div>
            <div class="right_header_display">
                <button class="button_show_more btn btn-danger">Show More</button>
            </div>
        </div>
        <hr>
        <div class="body_display_product slider-wrapper">
            <nav>
                <div class="btn_prev display_btn left disabled">
                    <i class="bi bi-arrow-left"></i>
                </div>

                <div class="btn_next display_btn right">
                    <i class="bi bi-arrow-right"></i>
                </div>
            </nav>

            <div class="card_product slider">
                <div class="wrapper" id="Access">
                    {{-- <div class="singel_product slide">
                        <div class="out_images">
                            <img src="../img/logo.jpg" alt="" class="images_pro">
                        </div>
                        <div class="discount_side d-flex disabled">
                            <div class="tage_text">OFF</div>
                            <div class="tage_number">
                                <span>20%</span>
                            </div>
                        </div>
                        <div class="alliconsingel">
                            <a href="#" class="iconpro">
                                <i class="bi bi-heart"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-arrow-repeat"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-cart-plus"></i>
                            </a>
                        </div>
                        <div class="details_pro">
                            <div class="price">
                                <div class="discount_price">
                                    <span><strike>$150.00</strike></span>
                                </div>
                                <div class="current_price">
                                    <span>$120.00</span>
                                </div>
                            </div>
                            <div class="star_rate">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                            </div>
                            <div class="title_pro">
                                <span class="title_product">
                                    Calvin Klein Women's Scuba Sleeveless Princess Seamed Sheath Dress
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="singel_product slide">
                        <div class="out_images">
                            <img src="../img/logo.jpg" alt="" class="images_pro">
                        </div>
                        <div class="discount_side d-flex">
                            <div class="tage_text">OFF</div>
                            <div class="tage_number">
                                <span>20%</span>
                            </div>
                        </div>
                        <div class="alliconsingel">
                            <a href="#" class="iconpro">
                                <i class="bi bi-heart"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-arrow-repeat"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-cart-plus"></i>
                            </a>
                        </div>
                        <div class="details_pro">
                            <div class="price">
                                <div class="discount_price">
                                    <span><strike>$150.00</strike></span>
                                </div>
                                <div class="current_price">
                                    <span>$120.00</span>
                                </div>
                            </div>
                            <div class="star_rate">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                            </div>
                            <div class="title_pro">
                                <span class="title_product">
                                    Calvin Klein Women's Scuba Sleeveless Princess Seamed Sheath Dress
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="singel_product slide">
                        <div class="out_images">
                            <img src="../img/logo.jpg" alt="" class="images_pro">
                        </div>
                        <div class="discount_side d-flex disabled">
                            <div class="tage_text">OFF</div>
                            <div class="tage_number">
                                <span>20%</span>
                            </div>
                        </div>
                        <div class="alliconsingel">
                            <a href="#" class="iconpro">
                                <i class="bi bi-heart"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-arrow-repeat"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-cart-plus"></i>
                            </a>
                        </div>
                        <div class="details_pro">
                            <div class="price">
                                <div class="discount_price">
                                    <span><strike>$150.00</strike></span>
                                </div>
                                <div class="current_price">
                                    <span>$120.00</span>
                                </div>
                            </div>
                            <div class="star_rate">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                            </div>
                            <div class="title_pro">
                                <span class="title_product">
                                    Calvin Klein Women's Scuba Sleeveless Princess Seamed Sheath Dress
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="singel_product slide">
                        <div class="out_images">
                            <img src="../img/logo.jpg" alt="" class="images_pro">
                        </div>
                        <div class="discount_side d-flex">
                            <div class="tage_text">OFF</div>
                            <div class="tage_number">
                                <span>20%</span>
                            </div>
                        </div>
                        <div class="alliconsingel">
                            <a href="#" class="iconpro">
                                <i class="bi bi-heart"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-arrow-repeat"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-cart-plus"></i>
                            </a>
                        </div>
                        <div class="details_pro">
                            <div class="price">
                                <div class="discount_price">
                                    <span><strike>$150.00</strike></span>
                                </div>
                                <div class="current_price">
                                    <span>$120.00</span>
                                </div>
                            </div>
                            <div class="star_rate">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                            </div>
                            <div class="title_pro">
                                <span class="title_product">
                                    Calvin Klein Women's Scuba Sleeveless Princess Seamed Sheath Dress
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="singel_product slide">
                        <div class="out_images">
                            <img src="../img/logo.jpg" alt="" class="images_pro">
                        </div>
                        <div class="discount_side d-flex disabled">
                            <div class="tage_text">OFF</div>
                            <div class="tage_number">
                                <span>20%</span>
                            </div>
                        </div>
                        <div class="alliconsingel">
                            <a href="#" class="iconpro">
                                <i class="bi bi-heart"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-arrow-repeat"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-cart-plus"></i>
                            </a>
                        </div>
                        <div class="details_pro">
                            <div class="price">
                                <div class="discount_price">
                                    <span><strike>$150.00</strike></span>
                                </div>
                                <div class="current_price">
                                    <span>$120.00</span>
                                </div>
                            </div>
                            <div class="star_rate">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                            </div>
                            <div class="title_pro">
                                <span class="title_product">
                                    Calvin Klein Women's Scuba Sleeveless Princess Seamed Sheath Dress
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="singel_product slide">
                        <div class="out_images">
                            <img src="../img/logo.jpg" alt="" class="images_pro">
                        </div>
                        <div class="discount_side d-flex">
                            <div class="tage_text">OFF</div>
                            <div class="tage_number">
                                <span>20%</span>
                            </div>
                        </div>
                        <div class="alliconsingel">
                            <a href="#" class="iconpro">
                                <i class="bi bi-heart"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-arrow-repeat"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-cart-plus"></i>
                            </a>
                        </div>
                        <div class="details_pro">
                            <div class="price">
                                <div class="discount_price">
                                    <span><strike>$150.00</strike></span>
                                </div>
                                <div class="current_price">
                                    <span>$120.00</span>
                                </div>
                            </div>
                            <div class="star_rate">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                            </div>
                            <div class="title_pro">
                                <span class="title_product">
                                    Calvin Klein Women's Scuba Sleeveless Princess Seamed Sheath Dress
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="singel_product slide">
                        <div class="out_images">
                            <img src="../img/logo.jpg" alt="" class="images_pro">
                        </div>
                        <div class="discount_side d-flex">
                            <div class="tage_text">OFF</div>
                            <div class="tage_number">
                                <span>20%</span>
                            </div>
                        </div>
                        <div class="alliconsingel">
                            <a href="#" class="iconpro">
                                <i class="bi bi-heart"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-arrow-repeat"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-cart-plus"></i>
                            </a>
                        </div>
                        <div class="details_pro">
                            <div class="price">
                                <div class="discount_price">
                                    <span><strike>$150.00</strike></span>
                                </div>
                                <div class="current_price">
                                    <span>$120.00</span>
                                </div>
                            </div>
                            <div class="star_rate">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                            </div>
                            <div class="title_pro">
                                <span class="title_product">
                                    Calvin Klein Women's Scuba Sleeveless Princess Seamed Sheath Dress
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="singel_product slide">
                        <div class="out_images">
                            <img src="../img/logo.jpg" alt="" class="images_pro">
                        </div>
                        <div class="discount_side d-flex">
                            <div class="tage_text">OFF</div>
                            <div class="tage_number">
                                <span>20%</span>
                            </div>
                        </div>
                        <div class="alliconsingel">
                            <a href="#" class="iconpro">
                                <i class="bi bi-heart"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-arrow-repeat"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-cart-plus"></i>
                            </a>
                        </div>
                        <div class="details_pro">
                            <div class="price">
                                <div class="discount_price">
                                    <span><strike>$150.00</strike></span>
                                </div>
                                <div class="current_price">
                                    <span>$120.00</span>
                                </div>
                            </div>
                            <div class="star_rate">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                            </div>
                            <div class="title_pro">
                                <span class="title_product">
                                    Calvin Klein Women's Scuba Sleeveless Princess Seamed Sheath Dress
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="singel_product slide">
                        <div class="out_images">
                            <img src="../img/logo.jpg" alt="" class="images_pro">
                        </div>
                        <div class="discount_side d-flex">
                            <div class="tage_text">OFF</div>
                            <div class="tage_number">
                                <span>20%</span>
                            </div>
                        </div>
                        <div class="alliconsingel">
                            <a href="#" class="iconpro">
                                <i class="bi bi-heart"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-arrow-repeat"></i>
                            </a>
                            <a href="#" class="iconpro">
                                <i class="bi bi-cart-plus"></i>
                            </a>
                        </div>
                        <div class="details_pro">
                            <div class="price">
                                <div class="discount_price">
                                    <span><strike>$150.00</strike></span>
                                </div>
                                <div class="current_price">
                                    <span>$120.00</span>
                                </div>
                            </div>
                            <div class="star_rate">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                            </div>
                            <div class="title_pro">
                                <span class="title_product">
                                    Calvin Klein Women's Scuba Sleeveless Princess Seamed Sheath Dress
                                </span>
                            </div>
                        </div>
                    </div> --}}

                </div>
            </div>
        </div>
    </div>

    {{-- Banner --}}
    <div class="banner_sigin">
        <div>
            <img src="../img/Banner/Sign_Up_Banner.png" alt="" />
            <div class="contain">
                <div class="text_banner">
                    <h4>Sign Up For Newsletters</h4>
                    <h5>Get E-mail update about our latest shop and special offers.</h5>
                </div>

                <div class="button_banner">
                    <input type="text" placeholder="Your email address" />
                    <button>Sign Up Now</button>
                </div>
            </div>
        </div>
    </div>

    {{-- Footer --}}
    {{-- <div class="footer">
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
    </div> --}}

    {{-- Bottom --}}
    {{-- <div class="bottom">
        <div>© 2022. Boy Svit-HTML CSS JavaScript Ecommerce</div>
    </div> --}}
    {{-- </div> --}}



    <script src="{{ asset('contant/custome-style/home/home.js') }}"></script>
    <script src="{{ asset('contant/custome-style/home/silder_product.js') }}"></script>
    <script src="{{ asset('contant/custome-style/home/functionHome.js') }}"></script>
@endsection
{{-- @endsection --}}

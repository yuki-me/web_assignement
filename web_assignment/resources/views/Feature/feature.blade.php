@extends('layouts.main')

<link rel="stylesheet" href="{{ asset('contant/custome-style/home/home.css') }}">
<link rel="stylesheet" href="{{ asset('contant/custome-style/feature/feature.css') }}">

@section('content')
    {{-- Feature Products --}}
    <span id="my_id" hidden>{{ $id }}</span>
    <div class="feature_box">
        <div class="category_left">
            <div class="btn_category">
                <span>Categories</span>
                <i class="bi bi-caret-down show"></i>
                <i class="bi bi-caret-up hide" style="display: none"></i>
            </div>
            <div class="panel_category">
                <ul class="show_hide_category" id="seacat">
                    {{-- <li>
                        <input type="radio" name="menuopt" id="drop1" />
                        <label class="opener" for="drop1">Parent item 1</label>
                        <label class="closer" for="dropclose">Parent item 1</label>
                        <ul class="sub_category_box">
                            <li><a href="">Menu item 1</a></li>
                            <li><a href="">Menu item 2</a></li>
                            <li><a href="">Menu item 3</a></li>
                        </ul>
                    </li>
                    <li>
                        <input type="radio" name="menuopt" id="drop2" />
                        <label class="opener" for="drop2">Parent item 2</label>
                        <label class="closer" for="dropclose">Parent item 2</label>
                        <ul class="sub_category_box">
                            <li><a href="">Menu item 1</a></li>
                            <li><a href="">Menu item 2</a></li>
                            <li><a href="">Menu item 3</a></li>
                            <li><a href="">Menu item 4</a></li>
                            <li><a href="">Menu item 5</a></li>
                        </ul>
                        <input type="radio" name="menuopt" id="dropclose" />
                    </li> --}}
                </ul>
            </div>

            <div class="flitter_price" hidden>
                <div class="title_category_left">
                    <span>Price range</span>
                </div>
                <hr>
                <div class="select_op d-flex">
                    <div class="group_select">
                        <label for="FromPrice" class="form-label-sm">From : </label>
                        <select class="form-select form-select-sm">
                            <option value="" selected hidden>From</option>
                            <option value="1">1$</option>
                            <option value="10">10$</option>
                            <option value="30">30$</option>
                        </select>
                    </div>
                    <div class="icon_price_flitter">
                        <span>
                            <i class="bi bi-arrow-right-circle"></i>
                        </span>
                    </div>
                    <div class="group_select">
                        <label for="FromPrice" class="form-label-sm">To : </label>
                        <select class="form-select form-select-sm">
                            <option value="" selected hidden>To</option>
                            <option value="10">10$</option>
                            <option value="20">20$</option>
                            <option value="100">100$</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="flitter_size" hidden>
                <div class="title_category_left">
                    <span>Flitter Size</span>
                </div>
                <hr>
                <div class="check_size">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            S
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                        <label class="form-check-label" for="flexCheckChecked">
                            M
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                        <label class="form-check-label" for="flexCheckChecked">
                            L
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                        <label class="form-check-label" for="flexCheckChecked">
                            XL
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="product_right">
            {{-- <div>Fillter</div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Library</a></li>
                    <li class="breadcrumb-item" aria-current="page">Data</li>
                </ol>
            </nav> --}}
            <div class="display_product_feature shadow-lg p-3 mb-5 bg-body"> {{-- rounded  disabled --}}
                <div class="header_display">
                    <div class="left_header_display">
                        <span>All Products</span>
                    </div>
                    <div class="right_header_display" hidden>
                        <div class="flitter_brand d-flex">
                            <label for="Brand" class="form-label-sm">Brand</label>
                            <select name="Brand" id="Brand" class="form-select form-select-sm">
                                <option value="#" selected hidden>Brand</option>
                                <option value="Oppo">Oppo</option>
                            </select>
                        </div>
                        <div class="flitter_brand d-flex">
                            <label for="Brand" class="form-label-sm">Brand</label>
                            <select name="Brand" id="Brand" class="form-select form-select-sm">
                                <option value="#" selected hidden>Brand</option>
                                <option value="Oppo">Oppo</option>
                            </select>
                        </div>
                    </div>
                </div>
                <hr>
                <div id="pro">
                    {{-- <div class="body_display_product_feature slider-wrapper">

                        <div class="card_product slider">
                            <div class="wrapper">
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

                            </div>
                        </div>
                    </div>

                    <div class="body_display_product_feature slider-wrapper">

                        <div class="card_product slider">
                            <div class="wrapper">
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

                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('contant/custome-style/home/home.js') }}"></script>
    <script src="{{ asset('contant/custome-style/feature/feature.js') }}"></script>
    <script src="{{ asset('contant/custome-style/home/functionHome.js') }}"></script>
@endsection

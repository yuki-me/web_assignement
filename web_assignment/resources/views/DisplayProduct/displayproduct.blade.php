@extends('layouts.main')

<link rel="stylesheet" href="{{ asset('contant/custome-style/displayproduct/displayproduct.css') }}">

@section('content')
    <span id="my_iddis" hidden>{{ $id }}</span>
    <span id="proid" hidden></span>
    <div class="product_box">
        <div class="product_box_left">
            <div class="main_product_image">
                <img src="../img/Products/43UQ8050PSB/43UQ8050PSB_1.webp" alt="">
            </div>
            <div class="sub_product_images">
                <div class="sub_product">
                    <img src="../img/Products/43UQ8050PSB/43UQ8050PSB_1.webp" alt="">
                </div>
                <div class="sub_product">
                    <img src="../img/Products/43UQ8050PSB/43UQ8050PSB_2.webp" alt="">
                </div>
                <div class="sub_product">
                    <img src="../img/Products/43UQ8050PSB/43UQ8050PSB_3.webp" alt="">
                </div>
            </div>
        </div>
        <div class="product_box_right">
            <div class="left_descripton">
                {{-- <div class="title_product">
                    <span>43UQ8050PSB</span>
                </div>
                <div class="sub_title">
                    <span>LG UQ80 43 inch 4K Smart UHD TV</span>
                </div>
                <div class="space_product">
                    <span>
                        <p>Real 4K</p>
                    </span>
                    <span>
                        <p>Slim design</p>
                    </span>
                    <span>
                        <p>[α5 Gen5 AI Processor] for enhanced viewing experience</p>
                    </span>
                    <span>
                        <p>[ThinQ™ AI & WebOS] for personalized settings</p>
                    </span>
                </div> --}}
            </div>
            <div class="right_description">
                {{-- <div class="discount_price">
                    <span>Discount Price</span>
                </div>
                <div class="currect_price">
                    <span><strike>$ 120</strike></span>
                </div> --}}
                {{-- <div class="arrow_price">
                        <span>
                            <i class="bi bi-arrow-right-circle"></i>
                        </span>
                    </div> --}}
                {{-- <div class="discount_price">
                        <span>$ 120</span>
                    </div> --}}
                {{-- <div class="discount_price">
                    <span>Sale Price</span>
                </div>
                <div class="sale_price">
                    <span id="Price">$ 120</span>
                </div>
                <div class="add_qty">
                    <i class="bi bi-dash-circle" id="sub_qty"></i>
                    <div class="qty">
                        <span id="my_qty">1</span>
                    </div>
                    <i class="bi bi-plus-circle" id="add_qty"></i>
                </div>
                <div class="discount_price">
                    <span>Total Price</span>
                </div>
                <div class="currect_price">
                    <span id="total_price" style="font-size: 38px">$ 120</span>
                </div>
                <div class="button_area">
                    <button id="add_cart">
                        <i class="bi bi-bag"></i>
                        <span>Add to Cart</span>
                    </button>
                    <button id="buy_now">
                        <i class="bi bi-cart-check"></i>
                        <span>Buy Now</span>
                    </button>
                </div> --}}
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
                <div class="wrapper" id="sfeaturepro">
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
                    </div>

                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('contant/custome-style/displayproduct/displayproduct.js') }}"></script>
@endsection

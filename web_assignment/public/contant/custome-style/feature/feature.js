var show_hide = 0;
var categoryNum = 0;
$(".btn_category").click(function () {
    if (show_hide == 0) {
        $(".panel_category").show();
        $(".show").hide();
        $(".hide").show();
        show_hide = 1;
    } else {
        $(".panel_category").hide();
        $(".show").show();
        $(".hide").hide();
        show_hide = 0;
    }
    // console.log($(".panel_category").show());
});

$(document).ready(function () {
    //checkPass();
    // $("#my_message").hide();
    var my_id = $("#my_id").text();
    if ($("#my_id").text() == "all") {
        loadproduct();
    } else {
        debugger;
        if (my_id.includes("S")) {
            loadproductid();
        } else if (my_id.includes("PMP")) {
            loadproductper();
        }
    }
    getCategory();
});

function loadproduct() {
    var prodata = {
        cmd: "GET_ALL",
        id: $("#my_id").text(),
    };

    $.ajax({
        type: "POST",
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        url: "http://127.0.0.1:8000/categoryall",
        data: prodata,
        success: (data) => {
            html = "";
            check = 0;
            for (var i = 0; i < data.length; i++) {
                if (check == 0) {
                    html +=
                        '<div class="body_display_product_feature slider-wrapper"><div class="card_product slider"><div class="wrapper">';
                    html +=
                        '<div class="singel_product slide"><a href="http://127.0.0.1:8000/displayproductid/' +
                        data[i].Id +
                        '">';
                    html +=
                        '<div class="out_images"><img src="../storage/files/' +
                        data[i].ImageName +
                        '" alt="" class="images_pro"></div>';
                    if (data[i].Percetage != null) {
                        html +=
                            '<div class="discount_side d-flex"><div class="tage_text">OFF</div><div class="tage_number"><span>' +
                            data[i].Percetage +
                            "%</span></div></div>";
                    }
                    // html +=
                    //     '<div class="alliconsingel"><a href="#" class="iconpro" hidden><i class="bi bi-heart"></i></a><a href="#" class="iconpro" hidden><i class="bi bi-arrow-repeat"></i></a><a href="#" class="iconpro" hidden><i class="bi bi-cart-plus"></i></a></div>';
                    html += '<div class="details_pro"><div class="price">';
                    if (data[i].Percetage != null) {
                        var result =
                            data[i].SalePrice -
                            (data[i].Percetage / 100) * data[i].SalePrice;
                        html +=
                            '<div class="alliconsingel"><a href="javascript:void(0);" class="iconpro" onclick="addFavoritefe(\'' +
                            data[i].Item +
                            "', 1, " +
                            result +
                            ',  return false;)"><i class="bi bi-heart"></i></a><a href="#" class="iconpro" hidden><i class="bi bi-cart-plus"></i></a></div>';
                        html +=
                            '<div class="discount_price"><span><strike>$' +
                            data[i].SalePrice +
                            "</strike></span></div>";
                        html +=
                            '<div class="current_price"><span>$' +
                            result +
                            "</span></div>";
                    } else {
                        html +=
                            '<div class="alliconsingel"><a href="" class="iconpro" onclick="addFavoritefe(\'' +
                            data[i].Item +
                            "', 1, '" +
                            data[i].SalePrice +
                            '\')"><i class="bi bi-heart"></i></a><a href="#" class="iconpro" hidden><i class="bi bi-cart-plus"></i></a></div>';
                        html +=
                            '<div class="current_price"><span>$' +
                            data[i].SalePrice +
                            "</span></div>";
                    }
                    html += "</div>";
                    html +=
                        '<div class="star_rate"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i><i class="bi bi-star"></i><i class="bi bi-star"></i></div><div class="title_pro"><span class="title_product">' +
                        data[i].Item +
                        "</span></div>";
                    html += "</div></div></a>";
                    check++;
                } else if (check > 0 && check < 3) {
                    html +=
                        '<div class="singel_product slide"><a href="http://127.0.0.1:8000/displayproductid/' +
                        data[i].Id +
                        '">';
                    html +=
                        '<div class="out_images"><img src="../storage/files/' +
                        data[i].ImageName +
                        '" alt="" class="images_pro"></div>';
                    if (data[i].Percetage != null) {
                        html +=
                            '<div class="discount_side d-flex"><div class="tage_text">OFF</div><div class="tage_number"><span>' +
                            data[i].Percetage +
                            "%</span></div></div>";
                    }
                    // html +=
                    //     '<div class="alliconsingel"><a href="#" class="iconpro" hidden><i class="bi bi-heart"></i></a><a href="#" class="iconpro" hidden><i class="bi bi-arrow-repeat"></i></a><a href="#" class="iconpro" hidden><i class="bi bi-cart-plus"></i></a></div>';
                    html += '<div class="details_pro"><div class="price">';
                    if (data[i].Percetage != null) {
                        var result =
                            data[i].SalePrice -
                            (data[i].Percetage / 100) * data[i].SalePrice;
                        html +=
                            '<div class="alliconsingel"><a href="javascript:void(0);" class="iconpro" onclick="addFavoritefe(\'' +
                            data[i].Item +
                            "', 1, " +
                            result +
                            ',  return false;)"><i class="bi bi-heart"></i></a><a href="#" class="iconpro" hidden><i class="bi bi-cart-plus"></i></a></div>';
                        html +=
                            '<div class="discount_price"><span><strike>$' +
                            data[i].SalePrice +
                            "</strike></span></div>";
                        html +=
                            '<div class="current_price"><span>$' +
                            result +
                            "</span></div>";
                    } else {
                        html +=
                            '<div class="alliconsingel"><a href="" class="iconpro" onclick="addFavoritefe(\'' +
                            data[i].Item +
                            "', 1, '" +
                            data[i].SalePrice +
                            '\')"><i class="bi bi-heart"></i></a><a href="#" class="iconpro" hidden><i class="bi bi-cart-plus"></i></a></div>';
                        html +=
                            '<div class="current_price"><span>$' +
                            data[i].SalePrice +
                            "</span></div>";
                    }
                    html += "</div>";
                    html +=
                        '<div class="star_rate"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i><i class="bi bi-star"></i><i class="bi bi-star"></i></div><div class="title_pro"><span class="title_product">' +
                        data[i].Item +
                        "</span></div>";
                    html += "</div></div></a>";
                    check++;
                } else if (check == 3) {
                    html +=
                        '<div class="singel_product slide"><a href="http://127.0.0.1:8000/displayproductid/' +
                        data[i].Id +
                        '">';
                    html +=
                        '<div class="out_images"><img src="../storage/files/' +
                        data[i].ImageName +
                        '" alt="" class="images_pro"></div>';
                    if (data[i].Percetage != null) {
                        html +=
                            '<div class="discount_side d-flex"><div class="tage_text">OFF</div><div class="tage_number"><span>' +
                            data[i].Percetage +
                            "%</span></div></div>";
                    }
                    // html +=
                    //     '<div class="alliconsingel"><a href="#" class="iconpro" hidden><i class="bi bi-heart"></i></a><a href="#" class="iconpro" hidden><i class="bi bi-arrow-repeat"></i></a><a href="#" class="iconpro" hidden><i class="bi bi-cart-plus"></i></a></div>';
                    html += '<div class="details_pro"><div class="price">';
                    if (data[i].Percetage != null) {
                        var result =
                            data[i].SalePrice -
                            (data[i].Percetage / 100) * data[i].SalePrice;
                        html +=
                            '<div class="alliconsingel"><a href="javascript:void(0);" class="iconpro" onclick="addFavoritefe(\'' +
                            data[i].Item +
                            "', 1, " +
                            result +
                            ',  return false;)"><i class="bi bi-heart"></i></a><a href="#" class="iconpro" hidden><i class="bi bi-cart-plus"></i></a></div>';
                        html +=
                            '<div class="discount_price"><span><strike>$' +
                            data[i].SalePrice +
                            "</strike></span></div>";
                        html +=
                            '<div class="current_price"><span>$' +
                            result +
                            "</span></div>";
                    } else {
                        html +=
                            '<div class="alliconsingel"><a href="" class="iconpro" onclick="addFavoritefe(\'' +
                            data[i].Item +
                            "', 1, '" +
                            data[i].SalePrice +
                            '\')"><i class="bi bi-heart"></i></a><a href="#" class="iconpro" hidden><i class="bi bi-cart-plus"></i></a></div>';
                        html +=
                            '<div class="current_price"><span>$' +
                            data[i].SalePrice +
                            "</span></div>";
                    }
                    html += "</div>";
                    html +=
                        '<div class="star_rate"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i><i class="bi bi-star"></i><i class="bi bi-star"></i></div><div class="title_pro"><span class="title_product">' +
                        data[i].Item +
                        "</span></div>";
                    html += "</div></div></a>";
                    html += "</div></div></div>";
                    check = 0;
                } else if (check == data.length - 1) {
                    html +=
                        '<div class="singel_product slide"><a href="http://127.0.0.1:8000/displayproductid/' +
                        data[i].Id +
                        '">';
                    html +=
                        '<div class="out_images"><img src="../storage/files/' +
                        data[i].ImageName +
                        '" alt="" class="images_pro"></div>';
                    if (data[i].Percetage != null) {
                        html +=
                            '<div class="discount_side d-flex"><div class="tage_text">OFF</div><div class="tage_number"><span>' +
                            data[i].Percetage +
                            "%</span></div></div>";
                    }
                    // html +=
                    //     '<div class="alliconsingel"><a href="#" class="iconpro" hidden><i class="bi bi-heart"></i></a><a href="#" class="iconpro" hidden><i class="bi bi-arrow-repeat"></i></a><a href="#" class="iconpro" hidden><i class="bi bi-cart-plus"></i></a></div>';
                    html += '<div class="details_pro"><div class="price">';
                    if (data[i].Percetage != null) {
                        var result =
                            data[i].SalePrice -
                            (data[i].Percetage / 100) * data[i].SalePrice;
                        html +=
                            '<div class="alliconsingel"><a href="javascript:void(0);" class="iconpro" onclick="addFavoritefe(\'' +
                            data[i].Item +
                            "', 1, " +
                            result +
                            ',  return false;)"><i class="bi bi-heart"></i></a><a href="#" class="iconpro" hidden><i class="bi bi-cart-plus"></i></a></div>';
                        html +=
                            '<div class="discount_price"><span><strike>$' +
                            data[i].SalePrice +
                            "</strike></span></div>";
                        html +=
                            '<div class="current_price"><span>$' +
                            result +
                            "</span></div>";
                    } else {
                        html +=
                            '<div class="alliconsingel"><a href="" class="iconpro" onclick="addFavoritefe(\'' +
                            data[i].Item +
                            "', 1, '" +
                            data[i].SalePrice +
                            '\')"><i class="bi bi-heart"></i></a><a href="#" class="iconpro" hidden><i class="bi bi-cart-plus"></i></a></div>';
                        html +=
                            '<div class="current_price"><span>$' +
                            data[i].SalePrice +
                            "</span></div>";
                    }
                    html += "</div>";
                    html +=
                        '<div class="star_rate"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i><i class="bi bi-star"></i><i class="bi bi-star"></i></div><div class="title_pro"><span class="title_product">' +
                        data[i].Item +
                        "</span></div>";
                    html += "</div></div></a>";
                    html += "</div></div></div>";
                }
            }
            $("#pro").html(html);
        },
        error: function (e) {
            alert(e);
        },
    });
}

function loadproductid() {
    var prodata = {
        cmd: "GET_BID",
        id: $("#my_id").text(),
    };
    debugger;
    $.ajax({
        type: "POST",
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        url: "http://127.0.0.1:8000/categoryBid",
        data: prodata,
        success: (data) => {
            debugger;
            html = "";
            check = 0;
            for (var i = 0; i < data.length; i++) {
                if (check == 0) {
                    html +=
                        '<div class="body_display_product_feature slider-wrapper"><div class="card_product slider"><div class="wrapper">';
                    html +=
                        '<div class="singel_product slide"><a href="http://127.0.0.1:8000/displayproductid/' +
                        data[i].Id +
                        '">';
                    html +=
                        '<div class="out_images"><img src="../storage/files/' +
                        data[i].ImageName +
                        '" alt="" class="images_pro"></div>';
                    if (data[i].Percetage != null) {
                        html +=
                            '<div class="discount_side d-flex"><div class="tage_text">OFF</div><div class="tage_number"><span>' +
                            data[i].Percetage +
                            "%</span></div></div>";
                    }
                    // html +=
                    //     '<div class="alliconsingel"><a href="#" class="iconpro"><i class="bi bi-heart"></i></a><a href="#" class="iconpro" hidden><i class="bi bi-arrow-repeat"></i></a><a href="#" class="iconpro" hidden><i class="bi bi-cart-plus"></i></a></div>';
                    html += '<div class="details_pro"><div class="price">';
                    if (data[i].Percetage != null) {
                        var result =
                            data[i].SalePrice -
                            (data[i].Percetage / 100) * data[i].SalePrice;
                        html +=
                            '<div class="alliconsingel"><a href="javascript:void(0);" class="iconpro" onclick="addFavoritefe(\'' +
                            data[i].Item +
                            "', 1, " +
                            result +
                            ',  return false;)"><i class="bi bi-heart"></i></a><a href="#" class="iconpro" hidden><i class="bi bi-cart-plus"></i></a></div>';
                        html +=
                            '<div class="discount_price"><span><strike>$' +
                            data[i].SalePrice +
                            "</strike></span></div>";
                        html +=
                            '<div class="current_price"><span>$' +
                            result +
                            "</span></div>";
                    } else {
                        html +=
                            '<div class="alliconsingel"><a href="" class="iconpro" onclick="addFavoritefe(\'' +
                            data[i].Item +
                            "', 1, '" +
                            data[i].SalePrice +
                            '\')"><i class="bi bi-heart"></i></a><a href="#" class="iconpro" hidden><i class="bi bi-cart-plus"></i></a></div>';
                        html +=
                            '<div class="current_price"><span>$' +
                            data[i].SalePrice +
                            "</span></div>";
                    }
                    html += "</div>";
                    html +=
                        '<div class="star_rate"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i><i class="bi bi-star"></i><i class="bi bi-star"></i></div><div class="title_pro"><span class="title_product">' +
                        data[i].Item +
                        "</span></div>";
                    html += "</div></div></a>";
                    check++;
                } else if (check > 0 && check < 3) {
                    html +=
                        '<div class="singel_product slide"><a href="http://127.0.0.1:8000/displayproductid/' +
                        data[i].Id +
                        '">';
                    html +=
                        '<div class="out_images"><img src="../storage/files/' +
                        data[i].ImageName +
                        '" alt="" class="images_pro"></div>';
                    if (data[i].Percetage != null) {
                        html +=
                            '<div class="discount_side d-flex"><div class="tage_text">OFF</div><div class="tage_number"><span>' +
                            data[i].Percetage +
                            "%</span></div></div>";
                    }
                    // html +=
                    //     '<div class="alliconsingel"><a href="#" class="iconpro" hidden><i class="bi bi-heart"></i></a><a href="#" class="iconpro" hidden><i class="bi bi-arrow-repeat"></i></a><a href="#" class="iconpro" hidden><i class="bi bi-cart-plus"></i></a></div>';
                    html += '<div class="details_pro"><div class="price">';
                    if (data[i].Percetage != null) {
                        var result =
                            data[i].SalePrice -
                            (data[i].Percetage / 100) * data[i].SalePrice;
                        html +=
                            '<div class="alliconsingel"><a href="javascript:void(0);" class="iconpro" onclick="addFavoritefe(\'' +
                            data[i].Item +
                            "', 1, " +
                            result +
                            ',  return false;)"><i class="bi bi-heart"></i></a><a href="#" class="iconpro" hidden><i class="bi bi-cart-plus"></i></a></div>';
                        html +=
                            '<div class="discount_price"><span><strike>$' +
                            data[i].SalePrice +
                            "</strike></span></div>";
                        html +=
                            '<div class="current_price"><span>$' +
                            result +
                            "</span></div>";
                    } else {
                        html +=
                            '<div class="alliconsingel"><a href="" class="iconpro" onclick="addFavoritefe(\'' +
                            data[i].Item +
                            "', 1, '" +
                            data[i].SalePrice +
                            '\')"><i class="bi bi-heart"></i></a><a href="#" class="iconpro" hidden><i class="bi bi-cart-plus"></i></a></div>';
                        html +=
                            '<div class="current_price"><span>$' +
                            data[i].SalePrice +
                            "</span></div>";
                    }
                    html += "</div>";
                    html +=
                        '<div class="star_rate"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i><i class="bi bi-star"></i><i class="bi bi-star"></i></div><div class="title_pro"><span class="title_product">' +
                        data[i].Item +
                        "</span></div>";
                    html += "</div></div></a>";
                    check++;
                } else if (check == 3) {
                    html +=
                        '<div class="singel_product slide"><a href="http://127.0.0.1:8000/displayproductid/' +
                        data[i].Id +
                        '">';
                    html +=
                        '<div class="out_images"><img src="../storage/files/' +
                        data[i].ImageName +
                        '" alt="" class="images_pro"></div>';
                    if (data[i].Percetage != null) {
                        html +=
                            '<div class="discount_side d-flex"><div class="tage_text">OFF</div><div class="tage_number"><span>' +
                            data[i].Percetage +
                            "%</span></div></div>";
                    }
                    // html +=
                    //     '<div class="alliconsingel"><a href="#" class="iconpro" hidden><i class="bi bi-heart"></i></a><a href="#" class="iconpro" hidden><i class="bi bi-arrow-repeat"></i></a><a href="#" class="iconpro" hidden><i class="bi bi-cart-plus"></i></a></div>';
                    html += '<div class="details_pro"><div class="price">';
                    if (data[i].Percetage != null) {
                        var result =
                            data[i].SalePrice -
                            (data[i].Percetage / 100) * data[i].SalePrice;
                        html +=
                            '<div class="alliconsingel"><a href="javascript:void(0);" class="iconpro" onclick="addFavoritefe(\'' +
                            data[i].Item +
                            "', 1, " +
                            result +
                            ',  return false;)"><i class="bi bi-heart"></i></a><a href="#" class="iconpro" hidden><i class="bi bi-cart-plus"></i></a></div>';
                        html +=
                            '<div class="discount_price"><span><strike>$' +
                            data[i].SalePrice +
                            "</strike></span></div>";
                        html +=
                            '<div class="current_price"><span>$' +
                            result +
                            "</span></div>";
                    } else {
                        html +=
                            '<div class="alliconsingel"><a href="" class="iconpro" onclick="addFavoritefe(\'' +
                            data[i].Item +
                            "', 1, '" +
                            data[i].SalePrice +
                            '\')"><i class="bi bi-heart"></i></a><a href="#" class="iconpro" hidden><i class="bi bi-cart-plus"></i></a></div>';
                        html +=
                            '<div class="current_price"><span>$' +
                            data[i].SalePrice +
                            "</span></div>";
                    }
                    html += "</div>";
                    html +=
                        '<div class="star_rate"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i><i class="bi bi-star"></i><i class="bi bi-star"></i></div><div class="title_pro"><span class="title_product">' +
                        data[i].Item +
                        "</span></div>";
                    html += "</div></div></a>";
                    html += "</div></div></div>";
                    check = 0;
                } else if (check == data.length - 1) {
                    html +=
                        '<div class="singel_product slide"><a href="http://127.0.0.1:8000/displayproductid/' +
                        data[i].Id +
                        '">';
                    html +=
                        '<div class="out_images"><img src="../storage/files/' +
                        data[i].ImageName +
                        '" alt="" class="images_pro"></div>';
                    if (data[i].Percetage != null) {
                        html +=
                            '<div class="discount_side d-flex"><div class="tage_text">OFF</div><div class="tage_number"><span>' +
                            data[i].Percetage +
                            "%</span></div></div>";
                    }
                    // html +=
                    //     '<div class="alliconsingel"><a href="#" class="iconpro" hidden><i class="bi bi-heart"></i></a><a href="#" class="iconpro" hidden><i class="bi bi-arrow-repeat"></i></a><a href="#" class="iconpro" hidden><i class="bi bi-cart-plus"></i></a></div>';
                    html += '<div class="details_pro"><div class="price">';
                    if (data[i].Percetage != null) {
                        var result =
                            data[i].SalePrice -
                            (data[i].Percetage / 100) * data[i].SalePrice;
                        html +=
                            '<div class="alliconsingel"><a href="javascript:void(0);" class="iconpro" onclick="addFavoritefe(\'' +
                            data[i].Item +
                            "', 1, " +
                            result +
                            ',  return false;)"><i class="bi bi-heart"></i></a><a href="#" class="iconpro" hidden><i class="bi bi-cart-plus"></i></a></div>';
                        html +=
                            '<div class="discount_price"><span><strike>$' +
                            data[i].SalePrice +
                            "</strike></span></div>";
                        html +=
                            '<div class="current_price"><span>$' +
                            result +
                            "</span></div>";
                    } else {
                        html +=
                            '<div class="alliconsingel"><a href="" class="iconpro" onclick="addFavoritefe(\'' +
                            data[i].Item +
                            "', 1, '" +
                            data[i].SalePrice +
                            '\')"><i class="bi bi-heart"></i></a><a href="#" class="iconpro" hidden><i class="bi bi-cart-plus"></i></a></div>';
                        html +=
                            '<div class="current_price"><span>$' +
                            data[i].SalePrice +
                            "</span></div>";
                    }
                    html += "</div>";
                    html +=
                        '<div class="star_rate"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i><i class="bi bi-star"></i><i class="bi bi-star"></i></div><div class="title_pro"><span class="title_product">' +
                        data[i].Item +
                        "</span></div>";
                    html += "</div></div></a>";
                    html += "</div></div></div>";
                }
            }
            $("#pro").html(html);
        },
        error: function (e) {
            alert(e);
        },
    });
}

function loadproductper() {
    var prodata = {
        cmd: "GET_PER",
        id: $("#my_id").text(),
    };
    debugger;
    $.ajax({
        type: "POST",
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        url: "http://127.0.0.1:8000/categoryBid",
        data: prodata,
        success: (data) => {
            debugger;
            html = "";
            check = 0;
            for (var i = 0; i < data.length; i++) {
                if (check == 0) {
                    html +=
                        '<div class="body_display_product_feature slider-wrapper"><div class="card_product slider"><div class="wrapper">';
                    html +=
                        '<div class="singel_product slide"><a href="http://127.0.0.1:8000/displayproductid/' +
                        data[i].Id +
                        '">';
                    html +=
                        '<div class="out_images"><img src="../storage/files/' +
                        data[i].ImageName +
                        '" alt="" class="images_pro"></div>';
                    if (data[i].Percetage != null) {
                        html +=
                            '<div class="discount_side d-flex"><div class="tage_text">OFF</div><div class="tage_number"><span>' +
                            data[i].Percetage +
                            "%</span></div></div>";
                    }
                    // html +=
                    //     '<div class="alliconsingel"><a href="#" class="iconpro"><i class="bi bi-heart"></i></a><a href="#" class="iconpro" hidden><i class="bi bi-arrow-repeat"></i></a><a href="#" class="iconpro" hidden><i class="bi bi-cart-plus"></i></a></div>';
                    html += '<div class="details_pro"><div class="price">';
                    if (data[i].Percetage != null) {
                        var result =
                            data[i].SalePrice -
                            (data[i].Percetage / 100) * data[i].SalePrice;
                        html +=
                            '<div class="alliconsingel"><a href="javascript:void(0);" class="iconpro" onclick="addFavoritefe(\'' +
                            data[i].Item +
                            "', 1, " +
                            result +
                            ',  return false;)"><i class="bi bi-heart"></i></a><a href="#" class="iconpro" hidden><i class="bi bi-cart-plus"></i></a></div>';
                        html +=
                            '<div class="discount_price"><span><strike>$' +
                            data[i].SalePrice +
                            "</strike></span></div>";
                        html +=
                            '<div class="current_price"><span>$' +
                            result +
                            "</span></div>";
                    } else {
                        html +=
                            '<div class="alliconsingel"><a href="" class="iconpro" onclick="addFavoritefe(\'' +
                            data[i].Item +
                            "', 1, '" +
                            data[i].SalePrice +
                            '\')"><i class="bi bi-heart"></i></a><a href="#" class="iconpro" hidden><i class="bi bi-cart-plus"></i></a></div>';
                        html +=
                            '<div class="current_price"><span>$' +
                            data[i].SalePrice +
                            "</span></div>";
                    }
                    html += "</div>";
                    html +=
                        '<div class="star_rate"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i><i class="bi bi-star"></i><i class="bi bi-star"></i></div><div class="title_pro"><span class="title_product">' +
                        data[i].Item +
                        "</span></div>";
                    html += "</div></div></a>";
                    check++;
                } else if (check > 0 && check < 3) {
                    html +=
                        '<div class="singel_product slide"><a href="http://127.0.0.1:8000/displayproductid/' +
                        data[i].Id +
                        '">';
                    html +=
                        '<div class="out_images"><img src="../storage/files/' +
                        data[i].ImageName +
                        '" alt="" class="images_pro"></div>';
                    if (data[i].Percetage != null) {
                        html +=
                            '<div class="discount_side d-flex"><div class="tage_text">OFF</div><div class="tage_number"><span>' +
                            data[i].Percetage +
                            "%</span></div></div>";
                    }
                    // html +=
                    //     '<div class="alliconsingel"><a href="#" class="iconpro" hidden><i class="bi bi-heart"></i></a><a href="#" class="iconpro" hidden><i class="bi bi-arrow-repeat"></i></a><a href="#" class="iconpro" hidden><i class="bi bi-cart-plus"></i></a></div>';
                    html += '<div class="details_pro"><div class="price">';
                    if (data[i].Percetage != null) {
                        var result =
                            data[i].SalePrice -
                            (data[i].Percetage / 100) * data[i].SalePrice;
                        html +=
                            '<div class="alliconsingel"><a href="javascript:void(0);" class="iconpro" onclick="addFavoritefe(\'' +
                            data[i].Item +
                            "', 1, " +
                            result +
                            ',  return false;)"><i class="bi bi-heart"></i></a><a href="#" class="iconpro" hidden><i class="bi bi-cart-plus"></i></a></div>';
                        html +=
                            '<div class="discount_price"><span><strike>$' +
                            data[i].SalePrice +
                            "</strike></span></div>";
                        html +=
                            '<div class="current_price"><span>$' +
                            result +
                            "</span></div>";
                    } else {
                        html +=
                            '<div class="alliconsingel"><a href="" class="iconpro" onclick="addFavoritefe(\'' +
                            data[i].Item +
                            "', 1, '" +
                            data[i].SalePrice +
                            '\')"><i class="bi bi-heart"></i></a><a href="#" class="iconpro" hidden><i class="bi bi-cart-plus"></i></a></div>';
                        html +=
                            '<div class="current_price"><span>$' +
                            data[i].SalePrice +
                            "</span></div>";
                    }
                    html += "</div>";
                    html +=
                        '<div class="star_rate"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i><i class="bi bi-star"></i><i class="bi bi-star"></i></div><div class="title_pro"><span class="title_product">' +
                        data[i].Item +
                        "</span></div>";
                    html += "</div></div></a>";
                    check++;
                } else if (check == 3) {
                    html +=
                        '<div class="singel_product slide"><a href="http://127.0.0.1:8000/displayproductid/' +
                        data[i].Id +
                        '">';
                    html +=
                        '<div class="out_images"><img src="../storage/files/' +
                        data[i].ImageName +
                        '" alt="" class="images_pro"></div>';
                    if (data[i].Percetage != null) {
                        html +=
                            '<div class="discount_side d-flex"><div class="tage_text">OFF</div><div class="tage_number"><span>' +
                            data[i].Percetage +
                            "%</span></div></div>";
                    }
                    // html +=
                    //     '<div class="alliconsingel"><a href="#" class="iconpro" hidden><i class="bi bi-heart"></i></a><a href="#" class="iconpro" hidden><i class="bi bi-arrow-repeat"></i></a><a href="#" class="iconpro" hidden><i class="bi bi-cart-plus"></i></a></div>';
                    html += '<div class="details_pro"><div class="price">';
                    if (data[i].Percetage != null) {
                        var result =
                            data[i].SalePrice -
                            (data[i].Percetage / 100) * data[i].SalePrice;
                        html +=
                            '<div class="alliconsingel"><a href="javascript:void(0);" class="iconpro" onclick="addFavoritefe(\'' +
                            data[i].Item +
                            "', 1, " +
                            result +
                            ',  return false;)"><i class="bi bi-heart"></i></a><a href="#" class="iconpro" hidden><i class="bi bi-cart-plus"></i></a></div>';
                        html +=
                            '<div class="discount_price"><span><strike>$' +
                            data[i].SalePrice +
                            "</strike></span></div>";
                        html +=
                            '<div class="current_price"><span>$' +
                            result +
                            "</span></div>";
                    } else {
                        html +=
                            '<div class="alliconsingel"><a href="" class="iconpro" onclick="addFavoritefe(\'' +
                            data[i].Item +
                            "', 1, '" +
                            data[i].SalePrice +
                            '\')"><i class="bi bi-heart"></i></a><a href="#" class="iconpro" hidden><i class="bi bi-cart-plus"></i></a></div>';
                        html +=
                            '<div class="current_price"><span>$' +
                            data[i].SalePrice +
                            "</span></div>";
                    }
                    html += "</div>";
                    html +=
                        '<div class="star_rate"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i><i class="bi bi-star"></i><i class="bi bi-star"></i></div><div class="title_pro"><span class="title_product">' +
                        data[i].Item +
                        "</span></div>";
                    html += "</div></div></a>";
                    html += "</div></div></div>";
                    check = 0;
                } else if (check == data.length - 1) {
                    html +=
                        '<div class="singel_product slide"><a href="http://127.0.0.1:8000/displayproductid/' +
                        data[i].Id +
                        '">';
                    html +=
                        '<div class="out_images"><img src="../storage/files/' +
                        data[i].ImageName +
                        '" alt="" class="images_pro"></div>';
                    if (data[i].Percetage != null) {
                        html +=
                            '<div class="discount_side d-flex"><div class="tage_text">OFF</div><div class="tage_number"><span>' +
                            data[i].Percetage +
                            "%</span></div></div>";
                    }
                    // html +=
                    //     '<div class="alliconsingel"><a href="#" class="iconpro" hidden><i class="bi bi-heart"></i></a><a href="#" class="iconpro" hidden><i class="bi bi-arrow-repeat"></i></a><a href="#" class="iconpro" hidden><i class="bi bi-cart-plus"></i></a></div>';
                    html += '<div class="details_pro"><div class="price">';
                    if (data[i].Percetage != null) {
                        var result =
                            data[i].SalePrice -
                            (data[i].Percetage / 100) * data[i].SalePrice;
                        html +=
                            '<div class="alliconsingel"><a href="javascript:void(0);" class="iconpro" onclick="addFavoritefe(\'' +
                            data[i].Item +
                            "', 1, " +
                            result +
                            ',  return false;)"><i class="bi bi-heart"></i></a><a href="#" class="iconpro" hidden><i class="bi bi-cart-plus"></i></a></div>';
                        html +=
                            '<div class="discount_price"><span><strike>$' +
                            data[i].SalePrice +
                            "</strike></span></div>";
                        html +=
                            '<div class="current_price"><span>$' +
                            result +
                            "</span></div>";
                    } else {
                        html +=
                            '<div class="alliconsingel"><a href="" class="iconpro" onclick="addFavoritefe(\'' +
                            data[i].Item +
                            "', 1, '" +
                            data[i].SalePrice +
                            '\')"><i class="bi bi-heart"></i></a><a href="#" class="iconpro" hidden><i class="bi bi-cart-plus"></i></a></div>';
                        html +=
                            '<div class="current_price"><span>$' +
                            data[i].SalePrice +
                            "</span></div>";
                    }
                    html += "</div>";
                    html +=
                        '<div class="star_rate"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i><i class="bi bi-star"></i><i class="bi bi-star"></i></div><div class="title_pro"><span class="title_product">' +
                        data[i].Item +
                        "</span></div>";
                    html += "</div></div></a>";
                    html += "</div></div></div>";
                }
            }
            $("#pro").html(html);
        },
        error: function (e) {
            alert(e);
        },
    });
}

function loadproductidsea(id) {
    var prodata = {
        cmd: "GET_ALL",
        id: id,
    };

    $.ajax({
        type: "POST",
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        url: "http://127.0.0.1:8000/categoryall",
        data: prodata,
        success: (data) => {
            html = "";
            check = 0;
            for (var i = 0; i < data.length; i++) {
                if (check == 0) {
                    html +=
                        '<div class="body_display_product_feature slider-wrapper"><div class="card_product slider"><div class="wrapper">';
                    html +=
                        '<div class="singel_product slide"><a href="http://127.0.0.1:8000/displayproductid/' +
                        data[i].Id +
                        '">';
                    html +=
                        '<div class="out_images"><img src="../storage/files/' +
                        data[i].ImageName +
                        '" alt="" class="images_pro"></div>';
                    if (data[i].Percetage != null) {
                        html +=
                            '<div class="discount_side d-flex"><div class="tage_text">OFF</div><div class="tage_number"><span>' +
                            data[i].Percetage +
                            "%</span></div></div>";
                    }
                    // html +=
                    //     '<div class="alliconsingel"><a href="#" class="iconpro" hidden><i class="bi bi-heart"></i></a><a href="#" class="iconpro" hidden><i class="bi bi-arrow-repeat"></i></a><a href="#" class="iconpro" hidden><i class="bi bi-cart-plus"></i></a></div>';
                    html += '<div class="details_pro"><div class="price">';
                    if (data[i].Percetage != null) {
                        var result =
                            data[i].SalePrice -
                            (data[i].Percetage / 100) * data[i].SalePrice;
                        html +=
                            '<div class="alliconsingel"><a href="javascript:void(0);" class="iconpro" onclick="addFavoritefe(\'' +
                            data[i].Item +
                            "', 1, " +
                            result +
                            ',  return false;)"><i class="bi bi-heart"></i></a><a href="#" class="iconpro" hidden><i class="bi bi-cart-plus"></i></a></div>';
                        html +=
                            '<div class="discount_price"><span><strike>$' +
                            data[i].SalePrice +
                            "</strike></span></div>";
                        html +=
                            '<div class="current_price"><span>$' +
                            result +
                            "</span></div>";
                    } else {
                        html +=
                            '<div class="alliconsingel"><a href="" class="iconpro" onclick="addFavoritefe(\'' +
                            data[i].Item +
                            "', 1, '" +
                            data[i].SalePrice +
                            '\')"><i class="bi bi-heart"></i></a><a href="#" class="iconpro" hidden><i class="bi bi-cart-plus"></i></a></div>';
                        html +=
                            '<div class="current_price"><span>$' +
                            data[i].SalePrice +
                            "</span></div>";
                    }
                    html += "</div>";
                    html +=
                        '<div class="star_rate"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i><i class="bi bi-star"></i><i class="bi bi-star"></i></div><div class="title_pro"><span class="title_product">' +
                        data[i].Item +
                        "</span></div>";
                    html += "</div></div></a>";
                    check++;
                } else if (check > 0 && check < 3) {
                    html +=
                        '<div class="singel_product slide"><a href="http://127.0.0.1:8000/displayproductid/' +
                        data[i].Id +
                        '">';
                    html +=
                        '<div class="out_images"><img src="../storage/files/' +
                        data[i].ImageName +
                        '" alt="" class="images_pro"></div>';
                    if (data[i].Percetage != null) {
                        html +=
                            '<div class="discount_side d-flex"><div class="tage_text">OFF</div><div class="tage_number"><span>' +
                            data[i].Percetage +
                            "%</span></div></div>";
                    }
                    // html +=
                    //     '<div class="alliconsingel"><a href="#" class="iconpro" hidden><i class="bi bi-heart"></i></a><a href="#" class="iconpro" hidden><i class="bi bi-arrow-repeat"></i></a><a href="#" class="iconpro" hidden><i class="bi bi-cart-plus"></i></a></div>';
                    html += '<div class="details_pro"><div class="price">';
                    if (data[i].Percetage != null) {
                        var result =
                            data[i].SalePrice -
                            (data[i].Percetage / 100) * data[i].SalePrice;
                        html +=
                            '<div class="alliconsingel"><a href="javascript:void(0);" class="iconpro" onclick="addFavoritefe(\'' +
                            data[i].Item +
                            "', 1, " +
                            result +
                            ',  return false;)"><i class="bi bi-heart"></i></a><a href="#" class="iconpro" hidden><i class="bi bi-cart-plus"></i></a></div>';
                        html +=
                            '<div class="discount_price"><span><strike>$' +
                            data[i].SalePrice +
                            "</strike></span></div>";
                        html +=
                            '<div class="current_price"><span>$' +
                            result +
                            "</span></div>";
                    } else {
                        html +=
                            '<div class="alliconsingel"><a href="" class="iconpro" onclick="addFavoritefe(\'' +
                            data[i].Item +
                            "', 1, '" +
                            data[i].SalePrice +
                            '\')"><i class="bi bi-heart"></i></a><a href="#" class="iconpro" hidden><i class="bi bi-cart-plus"></i></a></div>';
                        html +=
                            '<div class="current_price"><span>$' +
                            data[i].SalePrice +
                            "</span></div>";
                    }
                    html += "</div>";
                    html +=
                        '<div class="star_rate"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i><i class="bi bi-star"></i><i class="bi bi-star"></i></div><div class="title_pro"><span class="title_product">' +
                        data[i].Item +
                        "</span></div>";
                    html += "</div></div></a>";
                    check++;
                } else if (check == 3) {
                    html +=
                        '<div class="singel_product slide"><a href="http://127.0.0.1:8000/displayproductid/' +
                        data[i].Id +
                        '">';
                    html +=
                        '<div class="out_images"><img src="../storage/files/' +
                        data[i].ImageName +
                        '" alt="" class="images_pro"></div>';
                    if (data[i].Percetage != null) {
                        html +=
                            '<div class="discount_side d-flex"><div class="tage_text">OFF</div><div class="tage_number"><span>' +
                            data[i].Percetage +
                            "%</span></div></div>";
                    }
                    // html +=
                    //     '<div class="alliconsingel"><a href="#" class="iconpro" hidden><i class="bi bi-heart"></i></a><a href="#" class="iconpro" hidden><i class="bi bi-arrow-repeat"></i></a><a href="#" class="iconpro" hidden><i class="bi bi-cart-plus"></i></a></div>';
                    html += '<div class="details_pro"><div class="price">';
                    if (data[i].Percetage != null) {
                        var result =
                            data[i].SalePrice -
                            (data[i].Percetage / 100) * data[i].SalePrice;
                        html +=
                            '<div class="alliconsingel"><a href="javascript:void(0);" class="iconpro" onclick="addFavoritefe(\'' +
                            data[i].Item +
                            "', 1, " +
                            result +
                            ',  return false;)"><i class="bi bi-heart"></i></a><a href="#" class="iconpro" hidden><i class="bi bi-cart-plus"></i></a></div>';
                        html +=
                            '<div class="discount_price"><span><strike>$' +
                            data[i].SalePrice +
                            "</strike></span></div>";
                        html +=
                            '<div class="current_price"><span>$' +
                            result +
                            "</span></div>";
                    } else {
                        html +=
                            '<div class="alliconsingel"><a href="" class="iconpro" onclick="addFavoritefe(\'' +
                            data[i].Item +
                            "', 1, '" +
                            data[i].SalePrice +
                            '\')"><i class="bi bi-heart"></i></a><a href="#" class="iconpro" hidden><i class="bi bi-cart-plus"></i></a></div>';
                        html +=
                            '<div class="current_price"><span>$' +
                            data[i].SalePrice +
                            "</span></div>";
                    }
                    html += "</div>";
                    html +=
                        '<div class="star_rate"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i><i class="bi bi-star"></i><i class="bi bi-star"></i></div><div class="title_pro"><span class="title_product">' +
                        data[i].Item +
                        "</span></div>";
                    html += "</div></div></a>";
                    html += "</div></div></div>";
                } else if (check == data.length - 1) {
                    html +=
                        '<div class="singel_product slide"><a href="http://127.0.0.1:8000/displayproductid/' +
                        data[i].Id +
                        '">';
                    html +=
                        '<div class="out_images"><img src="../storage/files/' +
                        data[i].ImageName +
                        '" alt="" class="images_pro"></div>';
                    if (data[i].Percetage != null) {
                        html +=
                            '<div class="discount_side d-flex"><div class="tage_text">OFF</div><div class="tage_number"><span>' +
                            data[i].Percetage +
                            "%</span></div></div>";
                    }
                    // html +=
                    //     '<div class="alliconsingel"><a href="#" class="iconpro" hidden><i class="bi bi-heart"></i></a><a href="#" class="iconpro" hidden><i class="bi bi-arrow-repeat"></i></a><a href="#" class="iconpro" hidden><i class="bi bi-cart-plus"></i></a></div>';
                    html += '<div class="details_pro"><div class="price">';
                    if (data[i].Percetage != null) {
                        var result =
                            data[i].SalePrice -
                            (data[i].Percetage / 100) * data[i].SalePrice;
                        html +=
                            '<div class="alliconsingel"><a href="javascript:void(0);" class="iconpro" onclick="addFavoritefe(\'' +
                            data[i].Item +
                            "', 1, " +
                            result +
                            ',  return false;)"><i class="bi bi-heart"></i></a><a href="#" class="iconpro" hidden><i class="bi bi-cart-plus"></i></a></div>';
                        html +=
                            '<div class="discount_price"><span><strike>$' +
                            data[i].SalePrice +
                            "</strike></span></div>";
                        html +=
                            '<div class="current_price"><span>$' +
                            result +
                            "</span></div>";
                    } else {
                        html +=
                            '<div class="alliconsingel"><a href="" class="iconpro" onclick="addFavoritefe(\'' +
                            data[i].Item +
                            "', 1, '" +
                            data[i].SalePrice +
                            '\')"><i class="bi bi-heart"></i></a><a href="#" class="iconpro" hidden><i class="bi bi-cart-plus"></i></a></div>';
                        html +=
                            '<div class="current_price"><span>$' +
                            data[i].SalePrice +
                            "</span></div>";
                    }
                    html += "</div>";
                    html +=
                        '<div class="star_rate"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i><i class="bi bi-star"></i><i class="bi bi-star"></i></div><div class="title_pro"><span class="title_product">' +
                        data[i].Item +
                        "</span></div>";
                    html += "</div></div></a>";
                    html += "</div></div></div>";
                }
            }
            $("#pro").html(html);
        },
        error: function (e) {
            alert(e);
        },
    });
}

function getCategory() {
    var checkCAT = "";
    var indexNext = 0;
    var datasea = {
        cmd: "CATEGORY",
    };
    $.ajax({
        type: "GET",
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        url: "http://127.0.0.1:8000/getcategoryhome",
        dataType: "json",
        success: (data) => {
            debugger;
            html = "";
            for (var i = 0; i < data.length; i++) {
                if (checkCAT != data[i].Id) {
                    categoryNum++;
                    html +=
                        '<li><input type="radio" name="menuopt" id="drop' +
                        categoryNum +
                        '" /><label class="opener" for="drop' +
                        categoryNum +
                        '">' +
                        data[i].Category +
                        '</label><label class="closer" for="dropclose">' +
                        data[i].Category +
                        "</label>";
                    checkCAT = data[i].Id;
                    indexNext = i + 1;
                    if (indexNext < data.length) {
                        if (checkCAT == data[i + 1].Id) {
                            html += '<ul class="sub_category_box">';
                            html +=
                                "<li onclick=\"loadproductidsea('" +
                                data[i].SubId +
                                '\')"><a href="http://127.0.0.1:8000/categoryid/' +
                                data[i].SubId +
                                '">' +
                                data[i].SubCategory +
                                "</a></li>";
                            checkCAT = data[i].Id;
                        }
                    }
                } else {
                    // html +=
                    //     "<li onclick=\"loadproductidsea('" +
                    //     data[i].SubId +
                    //     "')\"><a>" +
                    //     data[i].SubCategory +
                    //     "</a></li>";
                    html +=
                        "<li onclick=\"loadproductidsea('" +
                        data[i].SubId +
                        '\')"><a href="http://127.0.0.1:8000/categoryid/' +
                        data[i].SubId +
                        '">' +
                        data[i].SubCategory +
                        "</a></li>";
                    indexNext = i + 1;
                    if (indexNext < data.length) {
                        if (checkCAT != data[i + 1].Id) {
                            html += "</ul>";
                            checkCAT = data[i].Id;
                        }
                    }
                }
                if (i == 8) {
                    html +=
                        '<li class="d-flex singel_category"><div class="left_singel_category"><i class="bi bi-lightning-charge-fill"></i><span>Show More</span></div><div class="arrow_sign"><i class="bi bi-three-dots-vertical category_open"></i></div></li>';
                    break;
                }
            }
            $("#seacat").html(html);
        },
        error: function () {
            alert("error");
        },
    });
}

function addFavoritefe(pid, qty, price) {
    var prodata = {
        cmd: "INSERT",
        pid: pid,
        qty: qty,
        price: price,
        user: sessionStorage.getItem("Session"),
    };

    $.ajax({
        type: "POST",
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        url: "http://127.0.0.1:8000/addfavorite",
        data: prodata,
        success: (data) => {},
        error: function (e) {
            alert(e);
        },
    });
}

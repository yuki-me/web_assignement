function sub_qty() {
    var qty = parseInt($("#my_qty").text());
    if (qty <= 0) {
        return;
    } else {
        qty = qty - 1;
        $("#my_qty").html(qty);
    }
    calulate_total();
}

function add_qty() {
    var qty = parseInt($("#my_qty").text());
    qty = qty + 1;
    $("#my_qty").html(qty);
    calulate_total();
}

function calulate_total() {
    var qty = parseInt($("#my_qty").text());
    var string_price = $("#Price").text();
    var price = parseFloat(string_price.replace("$ ", ""));
    var total = qty * price;
    $("#total_price").html("$ " + total);
}

$(document).ready(function () {
    getdisplaypro();
    loadsfeaturepro();
});

function getdisplaypro() {
    var datadis = {
        cmd: "GET_BID",
        id: $("#my_iddis").text(),
    };
    // debugger;
    $.ajax({
        type: "POST",
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        url: "http://127.0.0.1:8000/getdisplaypro",
        data: datadis,
        success: (data) => {
            html = "";
            html2 = "";
            html3 = "";
            debugger;
            for (var i = 0; i < data.length; i++) {
                if (i == 0) {
                    html +=
                        '<div class="main_product_image"><img src="../storage/files/' +
                        data[i].ImageName +
                        '" alt="" style="height: 350px"></div>';
                    html += '<div class="sub_product_images">';
                    html +=
                        '<div class="sub_product"><img src="../storage/files/' +
                        data[i].ImageName +
                        '" alt=""></div>';
                } else if (i == data.length - 1) {
                    html +=
                        '<div class="sub_product"><img src="../storage/files/' +
                        data[i].ImageName +
                        '" alt=""></div>';
                    html += "</div>";
                } else {
                    html +=
                        '<div class="sub_product"><img src="../storage/files/' +
                        data[i].ImageName +
                        '" alt=""></div>';
                }
            }
            html2 +=
                '<div class="title_product"><span>' +
                data[0].Item +
                "</span></div>";
            html2 +=
                '<div class="sub_title"><span>' +
                data[0].Item +
                "</span></div>";
            html2 += '<div class="space_product">';
            var splitdes = data[0].DisplaySpace.split("\n");
            for (var i = 0; i < splitdes.length; i++) {
                html2 += "<span><p>" + splitdes[i] + "</p></span>";
            }
            html2 += "</div>";

            if (data[0].StatusPromotion != null) {
                html3 +=
                    '<div class="discount_price"><span>Discount Price</span></div>';
                html3 +=
                    '<div class="currect_price"><span><strike>$' +
                    data[0].SalePrice +
                    "</strike></span></div>";
                html3 +=
                    '<div class="discount_price"><span>Sale Price</span></div>';
                var result =
                data[i].SalePrice -
                (data[i].Percetage / 100) * data[i].SalePrice;
                html3 +=
                    '<div class="sale_price"><span id="Price">$ ' +
                    result +
                    "</span></div>";
            } else {
                html3 +=
                    '<div class="discount_price"><span>Sale Price</span></div>';
                html3 +=
                    '<div class="sale_price"><span id="Price">$ ' +
                    data[0].SalePrice +
                    "</span></div>";
            }
            html3 +=
                '<div class="add_qty"><i class="bi bi-dash-circle" id="sub_qty" onclick="sub_qty();"></i><div class="qty"><span id="my_qty">1</span></div><i class="bi bi-plus-circle" id="add_qty" onclick="add_qty();"></i></div><div class="discount_price"><span>Total Price</span></div><div class="currect_price"><span id="total_price" style="font-size: 38px">$ ' +
                data[0].SalePrice +
                '</span></div><div class="button_area"><button id="add_cart" onclick="addSFavorite(\'' +
                data[0].Item +
                '\')"><i class="bi bi-bag"></i><span>Add to Cart</span></button><button id="buy_now" hidden><i class="bi bi-cart-check"></i><span>Buy Now</span></button></div>';
            $(".product_box_left").html(html);
            $(".left_descripton").html(html2);
            $(".right_description").html(html3);
        },
        error: function (e) {
            // debugger;
            alert(e);
        },
    });
}

function loadsfeaturepro() {
    var prodata = {
        cmd: "FEATURE",
    };

    $.ajax({
        type: "POST",
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        url: "http://127.0.0.1:8000/getitembcat",
        data: prodata,
        success: (data) => {
            // debugger;
            html = "";
            check = 0;
            for (var i = 0; i < data.length; i++) {
                // debugger;
                html +=
                    '<a href="http://127.0.0.1:8000/displayproductid/' +
                    data[i].Id +
                    '"><div class="singel_product slide">';
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
                //     '<div class="alliconsingel"><a href="" class="iconpro" onclick="addFavorite(\'' +
                //     data[i].Id +
                //     '\', 1, 1)"><i class="bi bi-heart"></i></a><a href="#" class="iconpro" hidden><i class="bi bi-cart-plus"></i></a></div>';
                // html += '<div class="details_pro"><div class="price">';
                if (data[i].Percetage != null) {
                    var result =
                    data[i].SalePrice -
                    (data[i].Percetage / 100) * data[i].SalePrice;
                    html +=
                        '<div class="alliconsingel"><a href="" class="iconpro" onclick="addFavorite(\'' +
                        data[i].Item +
                        "', 1, " +
                        result +
                        ')"><i class="bi bi-heart"></i></a><a href="#" class="iconpro" hidden><i class="bi bi-cart-plus"></i></a></div>';
                    html += '<div class="details_pro"><div class="price">';
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
                        '<div class="alliconsingel"><a href="" class="iconpro" onclick="addFavorite(\'' +
                        data[i].Item +
                        "', 1, '" +
                        data[i].SalePrice +
                        '\')"><i class="bi bi-heart"></i></a><a href="#" class="iconpro" hidden><i class="bi bi-cart-plus"></i></a></div>';
                    html += '<div class="details_pro"><div class="price">';
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
            }
            $("#sfeaturepro").html(html);
        },
        error: function (e) {
            alert(e);
        },
    });
}

function addSFavorite(pid) {
    if (!checkSession()) {
        window.location.href = "http://127.0.0.1:8000/login";
        return;
    }
    var total = $("#total_price").text().split(" ");
    debugger;
    var prodata = {
        cmd: "INSERT",
        pid: pid,
        qty: $("#my_qty").text(),
        price: total[1],
        user: sessionStorage.getItem("Session"),
    };

    $.ajax({
        type: "POST",
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        url: "http://127.0.0.1:8000/addfavorite",
        data: prodata,
        success: (data) => {
            getFavorite();
        },
        error: function (e) {
            alert(e);
        },
    });
}

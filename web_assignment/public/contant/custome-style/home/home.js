// let slideIndex = 1;
// showSlides(slideIndex);

// // Next/previous controls
// function plusSlides(n) {
//     showSlides((slideIndex += n));
// }

// // Thumbnail image controls
// function currentSlide(n) {
//     showSlides((slideIndex = n));
// }

// function showSlides(n) {
//     let i;
//     let slides = document.getElementsByClassName("mySlides");
//     let dots = document.getElementsByClassName("dot");
//     if (n > slides.length) {
//         slideIndex = 1;
//     }
//     if (n < 1) {
//         slideIndex = slides.length;
//     }
//     for (i = 0; i < slides.length; i++) {
//         slides[i].style.display = "none";
//     }
//     for (i = 0; i < dots.length; i++) {
//         dots[i].className = dots[i].className.replace(" active", "");
//     }
//     slides[slideIndex - 1].style.display = "block";
//     dots[slideIndex - 1].className += " active";
// }

$.ajaxSetup({
    headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
    },
});

$(document).ready(function () {
    Category();
    loadflash();
    loadfeaturepro();
    loadfood();
    loadGrocer();
    loadTele();
    loadAppli();
    loadAirCo();
    loadMobile();
    loadAcces();
    loadPromo();
    loadBranch();
    getFavorite();
    getOrderLine();
    getCustomer();
});

function Category() {
    var checkCAT = "";
    var indexNext = 0;
    var checksubCAT = 0;
    $.ajax({
        type: "GET",
        url: "getcategoryhome",
        dataType: "json",
        success: (data) => {
            html = "";
            for (var i = 0; i < data.length; i++) {
                if (checkCAT != data[i].Id) {
                    html +=
                        '<li class="d-flex singel_category"><div class="left_singel_category"><i class="bi bi-lightning-charge-fill"></i><span>' +
                        data[i].Category +
                        '</span></div><div class="arrow_sign"><i class="bi bi-chevron-right category_open"></i></div>';
                    checkCAT = data[i].Id;
                    indexNext = i + 1;
                    if (indexNext < data.length) {
                        if (checkCAT == data[i + 1].Id) {
                            html += "<ul>";
                            html +=
                                '<li class="d-flex singel_category"><a class="d-flex" href="http://127.0.0.1:8000/categoryid/' +
                                data[i].SubId +
                                '"><div class="left_singel_category"><i class="bi bi-lightning-charge-fill"></i><span>' +
                                data[i].SubCategory +
                                '</span></div><div class="arrow_sign"><i class="bi bi-chevron-right category_open"></i></div></a></li>';
                            checkCAT = data[i].Id;
                        } else {
                            html += "<ul>";
                            html +=
                                '<li class="d-flex singel_category"><a class="d-flex" href="http://127.0.0.1:8000/categoryid/' +
                                data[i].SubId +
                                '"><div class="left_singel_category"><i class="bi bi-lightning-charge-fill"></i><span>' +
                                data[i].SubCategory +
                                '</span></div><div class="arrow_sign"><i class="bi bi-chevron-right category_open"></i></div></a></li>';
                            html += "</ul>";
                            checkCAT = data[i].Id;
                        }
                    }
                } else {
                    html +=
                        '<li class="d-flex singel_category" ><a class="d-flex" href="http://127.0.0.1:8000/categoryid/' +
                        data[i].SubId +
                        '"><div class="left_singel_category"><i class="bi bi-lightning-charge-fill"></i><span>' +
                        data[i].SubCategory +
                        '</span></div><div class="arrow_sign"><i class="bi bi-chevron-right category_open"></i></div></a></li>';
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
            $(".category_menu").html(html);
        },
        error: function () {},
    });
}

$("#btn_show_brand").click(function () {
    // window.location.replace = "branch";
    $.ajax({
        type: "GET",
        url: "gotobrand",
        dataType: "json",
        success: () => {
            window.location.href = "branch";
        },
        error: function () {
            console.log("error");
        },
    });
});

// $("#Feature").click(function () {
//     window.location.href = "feature";
// });

$("#Home").click(function () {
    window.location.href = "home";
});

// $("#Contact").click(function () {
//     window.location.href = "contact";
// });

// $("#About").click(function () {
//     window.location.href = "about";
// });

function loadflash() {
    var prodata = {
        cmd: "FLASH",
    };

    $.ajax({
        type: "POST",
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        url: "http://127.0.0.1:8000/getitembcat",
        data: prodata,
        success: (data) => {
            html = "";
            check = 0;
            for (var i = 0; i < data.length; i++) {
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
                //     '<div class="alliconsingel"><a href="#" class="iconpro"><i class="bi bi-heart"></i></a><a href="#" class="iconpro" hidden><i class="bi bi-cart-plus"></i></a></div>';
                html += '<div class="details_pro"><div class="price">';
                if (data[i].Percetage != null) {
                    var result =
                        data[i].SalePrice -
                        (data[i].Percetage / 100) * data[i].SalePrice;
                    html +=
                        '<div class="alliconsingel"><a class="iconpro" onclick="addFavorite(\'' +
                        data[i].Item +
                        "', 1, " +
                        result +
                        ')"><i class="bi bi-heart"></i></a><a href="#" class="iconpro" hidden><i class="bi bi-cart-plus"></i></a></div>';
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
                        '<div class="alliconsingel"><a class="iconpro" onclick="addFavorite(\'' +
                        data[i].Item +
                        "', 1, " +
                        data[i].SalePrice +
                        ')"><i class="bi bi-heart"></i></a><a href="#" class="iconpro" hidden><i class="bi bi-cart-plus"></i></a></div>';
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
            $("#flash").html(html);
        },
        error: function (e) {
            alert(e);
        },
    });
}

function loadfeaturepro() {
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
            html = "";
            check = 0;
            for (var i = 0; i < data.length; i++) {
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
                //     '<div class="alliconsingel"><a class="iconpro" onclick="addFavorite(\'' +
                //     data[i].Id +
                //     '\', 1, 1)"><i class="bi bi-heart"></i></a><a href="#" class="iconpro" hidden><i class="bi bi-cart-plus"></i></a></div>';
                // html += '<div class="details_pro"><div class="price">';
                if (data[i].Percetage != null) {
                    var result =
                        data[i].SalePrice -
                        (data[i].Percetage / 100) * data[i].SalePrice;
                    html +=
                        '<div class="alliconsingel"><a class="iconpro" onclick="addFavorite(\'' +
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
                        '<div class="alliconsingel"><a class="iconpro" onclick="addFavorite(\'' +
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
            $("#featurepro").html(html);
        },
        error: function (e) {
            alert(e);
        },
    });
}

function loadfood() {
    var prodata = {
        cmd: "FOOD",
    };

    $.ajax({
        type: "POST",
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        url: "http://127.0.0.1:8000/getitembcat",
        data: prodata,
        success: (data) => {
            html = "";
            check = 0;
            for (var i = 0; i < data.length; i++) {
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
                //     '<div class="alliconsingel"><a href="#" class="iconpro"><i class="bi bi-heart"></i></a><a href="#" class="iconpro" hidden><i class="bi bi-cart-plus"></i></a></div>';
                html += '<div class="details_pro"><div class="price">';
                if (data[i].Percetage != null) {
                    var result =
                        data[i].SalePrice -
                        (data[i].Percetage / 100) * data[i].SalePrice;
                    html +=
                        '<div class="alliconsingel"><div class="iconpro" onclick="addFavorite(\'' +
                        data[i].Item +
                        "', 1, " +
                        result +
                        ')"><i class="bi bi-heart"></i></div><a href="#" class="iconpro" hidden><i class="bi bi-cart-plus"></i></a></div>';
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
                        '<div class="alliconsingel"><div class="iconpro" onclick="addFavorite(\'' +
                        data[i].Item +
                        "', 1, '" +
                        data[i].SalePrice +
                        '\')"><i class="bi bi-heart"></i></div><a href="#" class="iconpro" hidden><i class="bi bi-cart-plus"></i></a></div>';
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
            $("#food").html(html);
        },
        error: function (e) {
            alert(e);
        },
    });
}

function loadGrocer() {
    var prodata = {
        cmd: "Grocer",
    };

    $.ajax({
        type: "POST",
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        url: "http://127.0.0.1:8000/getitembcat",
        data: prodata,
        success: (data) => {
            html = "";
            check = 0;
            for (var i = 0; i < data.length; i++) {
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
                //     '<div class="alliconsingel"><a href="#" class="iconpro"><i class="bi bi-heart"></i></a><a href="#" class="iconpro" hidden><i class="bi bi-cart-plus"></i></a></div>';
                html += '<div class="details_pro"><div class="price">';
                if (data[i].Percetage != null) {
                    var result =
                        data[i].SalePrice -
                        (data[i].Percetage / 100) * data[i].SalePrice;
                    html +=
                        '<div class="alliconsingel"><a class="iconpro" onclick="addFavorite(\'' +
                        data[i].Item +
                        "', 1, " +
                        result +
                        ')"><i class="bi bi-heart"></i></a><a href="#" class="iconpro" hidden><i class="bi bi-cart-plus"></i></a></div>';
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
                        '<div class="alliconsingel"><a class="iconpro" onclick="addFavorite(\'' +
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
            }
            $("#grocer").html(html);
        },
        error: function (e) {
            alert(e);
        },
    });
}

function loadTele() {
    var prodata = {
        cmd: "Televi",
    };

    $.ajax({
        type: "POST",
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        url: "http://127.0.0.1:8000/getitembcat",
        data: prodata,
        success: (data) => {
            html = "";
            check = 0;
            for (var i = 0; i < data.length; i++) {
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
                //     '<div class="alliconsingel"><a href="#" class="iconpro"><i class="bi bi-heart"></i></a><a href="#" class="iconpro" hidden><i class="bi bi-cart-plus"></i></a></div>';
                html += '<div class="details_pro"><div class="price">';
                if (data[i].Percetage != null) {
                    var result =
                        data[i].SalePrice -
                        (data[i].Percetage / 100) * data[i].SalePrice;
                    html +=
                        '<div class="alliconsingel"><a class="iconpro" onclick="addFavorite(\'' +
                        data[i].Item +
                        "', 1, " +
                        result +
                        ')"><i class="bi bi-heart"></i></a><a href="#" class="iconpro" hidden><i class="bi bi-cart-plus"></i></a></div>';
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
                        '<div class="alliconsingel"><a class="iconpro" onclick="addFavorite(\'' +
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
            }
            $("#televi").html(html);
        },
        error: function (e) {
            alert(e);
        },
    });
}

function loadAppli() {
    var prodata = {
        cmd: "Appli",
    };

    $.ajax({
        type: "POST",
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        url: "http://127.0.0.1:8000/getitembcat",
        data: prodata,
        success: (data) => {
            html = "";
            check = 0;
            for (var i = 0; i < data.length; i++) {
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
                //     '<div class="alliconsingel"><a href="#" class="iconpro"><i class="bi bi-heart"></i></a><a href="#" class="iconpro" hidden><i class="bi bi-cart-plus"></i></a></div>';
                html += '<div class="details_pro"><div class="price">';
                if (data[i].Percetage != null) {
                    var result =
                        data[i].SalePrice -
                        (data[i].Percetage / 100) * data[i].SalePrice;
                    html +=
                        '<div class="alliconsingel"><a class="iconpro" onclick="addFavorite(\'' +
                        data[i].Item +
                        "', 1, " +
                        result +
                        ')"><i class="bi bi-heart"></i></a><a href="#" class="iconpro" hidden><i class="bi bi-cart-plus"></i></a></div>';
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
                        '<div class="alliconsingel"><a class="iconpro" onclick="addFavorite(\'' +
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
            }
            $("#appli").html(html);
        },
        error: function (e) {
            alert(e);
        },
    });
}

function loadAirCo() {
    var prodata = {
        cmd: "Air Con",
    };

    $.ajax({
        type: "POST",
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        url: "http://127.0.0.1:8000/getitembcat",
        data: prodata,
        success: (data) => {
            html = "";
            check = 0;
            for (var i = 0; i < data.length; i++) {
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
                //     '<div class="alliconsingel"><a href="#" class="iconpro"><i class="bi bi-heart"></i></a><a href="#" class="iconpro" hidden><i class="bi bi-cart-plus"></i></a></div>';
                html += '<div class="details_pro"><div class="price">';
                if (data[i].Percetage != null) {
                    var result =
                        data[i].SalePrice -
                        (data[i].Percetage / 100) * data[i].SalePrice;
                    html +=
                        '<div class="alliconsingel"><a class="iconpro" onclick="addFavorite(\'' +
                        data[i].Item +
                        "', 1, " +
                        result +
                        ')"><i class="bi bi-heart"></i></a><a href="#" class="iconpro" hidden><i class="bi bi-cart-plus"></i></a></div>';
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
                        '<div class="alliconsingel"><a class="iconpro" onclick="addFavorite(\'' +
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
            }
            $("#aircon").html(html);
        },
        error: function (e) {
            alert(e);
        },
    });
}

function loadMobile() {
    var prodata = {
        cmd: "Mobile",
    };

    $.ajax({
        type: "POST",
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        url: "http://127.0.0.1:8000/getitembcat",
        data: prodata,
        success: (data) => {
            html = "";
            check = 0;
            for (var i = 0; i < data.length; i++) {
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
                //     '<div class="alliconsingel"><a href="#" class="iconpro"><i class="bi bi-heart"></i></a><a href="#" class="iconpro" hidden><i class="bi bi-cart-plus"></i></a></div>';
                html += '<div class="details_pro"><div class="price">';
                if (data[i].Percetage != null) {
                    var result =
                        data[i].SalePrice -
                        (data[i].Percetage / 100) * data[i].SalePrice;
                    html +=
                        '<div class="alliconsingel"><a class="iconpro" onclick="addFavorite(\'' +
                        data[i].Item +
                        "', 1, " +
                        result +
                        ')"><i class="bi bi-heart"></i></a><a href="#" class="iconpro" hidden><i class="bi bi-cart-plus"></i></a></div>';
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
                        '<div class="alliconsingel"><a class="iconpro" onclick="addFavorite(\'' +
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
            }
            $("#mobi").html(html);
        },
        error: function (e) {
            alert(e);
        },
    });
}

function loadAcces() {
    var prodata = {
        cmd: "Acces",
    };

    $.ajax({
        type: "POST",
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        url: "http://127.0.0.1:8000/getitembcat",
        data: prodata,
        success: (data) => {
            html = "";
            check = 0;
            for (var i = 0; i < data.length; i++) {
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
                //     '<div class="alliconsingel"><a href="#" class="iconpro"><i class="bi bi-heart"></i></a><a href="#" class="iconpro" hidden><i class="bi bi-cart-plus"></i></a></div>';
                html += '<div class="details_pro"><div class="price">';
                if (data[i].Percetage != null) {
                    var result =
                        data[i].SalePrice -
                        (data[i].Percetage / 100) * data[i].SalePrice;
                    html +=
                        '<div class="alliconsingel"><a class="iconpro" onclick="addFavorite(\'' +
                        data[i].Item +
                        "', 1, " +
                        result +
                        ')"><i class="bi bi-heart"></i></a><a href="#" class="iconpro" hidden><i class="bi bi-cart-plus"></i></a></div>';
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
                        '<div class="alliconsingel"><a class="iconpro" onclick="addFavorite(\'' +
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
            }
            $("#Access").html(html);
        },
        error: function (e) {
            alert(e);
        },
    });
}

function loadPromo() {
    var prodata = {
        cmd: "Promo",
    };

    $.ajax({
        type: "POST",
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        url: "http://127.0.0.1:8000/getitembcat",
        data: prodata,
        success: (data) => {
            html = "";
            check = 0;
            for (var i = 0; i < data.length; i++) {
                html +=
                    '<a href="http://127.0.0.1:8000/categoryid/' +
                    data[i].Id +
                    '"><div class="singel_promotion slide"><div class="out_images_promotion"><img src="./storage/files/' +
                    data[i].FileName +
                    '" alt="" class="promotion_icon"></div><div class="title_promotion"><span>' +
                    data[i].Percetage +
                    "</span></div></div></a>";
            }
            $("#promo").html(html);
        },
        error: function (e) {
            alert(e);
        },
    });
}

function loadBranch() {
    var prodata = {
        cmd: "Brand",
    };

    $.ajax({
        type: "POST",
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        url: "http://127.0.0.1:8000/getitembcat",
        data: prodata,
        success: (data) => {
            html = "";
            check = 0;
            for (var i = 0; i < data.length; i++) {
                html +=
                    '<a href="http://127.0.0.1:8000/displayproductid/' +
                    data[i].Id +
                    '"><div class="singel_promotion slide"><div class="out_images_promotion"><img src="../storage/files/' +
                    data[i].FileName +
                    '" alt="" class="promotion_icon"></div><div class="title_promotion"><span>' +
                    data[i].BranchName +
                    "</span></div></div></a>";
            }
            $("#branchsh").html(html);
        },
        error: function (e) {
            alert(e);
        },
    });
}

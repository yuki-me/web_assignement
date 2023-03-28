// $.ajaxSetup({
//     headers: {
//         "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
//     },
// });

$(document).ready(function () {
    //checkPass();
    // $("#my_message").hide();
    $(".ui-helper-hidden-accessible").hide();
    loadproduct();
    loadcategory();
    loadsubcategory();
    getCategoryPro();
    getCategorySub();
});

$(".btn_product").click(function () {
    $(".title")[0].innerText = "Product";
    $(".product_content").show();
    $(".category_content").hide();
    $(".subcategory_content").hide();
});

$(".btn_category").click(function () {
    $(".title")[0].innerText = "Category";
    $(".product_content").hide();
    $(".category_content").show();
    $(".subcategory_content").hide();
});

$(".btn_subcategory").click(function () {
    $(".title")[0].innerText = "Sub Category";
    $(".product_content").hide();
    $(".category_content").hide();
    $(".subcategory_content").show();
});

function closeProductModal() {
    clearPro();
    $("#MyProductModal").hide();
}

function openProductModal() {
    clearPro();
    $("#UpdatePro").hide();
    $("#AddPro").show();
    $("#MyProductModal").show();
}

function closeCategoryModal() {
    $("#MyCategoryModal").hide();
}

function openCategoryModal() {
    clearCat();
    $("#AddCat").show();
    $("#UpdateCat").hide();
    $("#MyCategoryModal").show();
}

function closeSubCategoryModal() {
    $("#MySubCategoryModal").hide();
}

function openSubCategoryModal() {
    clearSubCat();
    $("#MySubCategoryModal").show();
}

// $("#login_form").click(function () {
//     loginField = checkField();
//     if (loginField == true) {
//         insertProduct();
//     }
// });

// function insertProduct() {
//     var logindata = {
//         P_Email: $("#E_mail").val(),
//         P_Password: $("#Password").val(),
//     };
//     $.ajax({
//         type: "POST",
//         url: "login",
//         data: logindata,
//         success: (data) => {},
//         error: function () {
//             $("#message_login")
//                 .fadeTo(2000, 500)
//                 .slideUp(500, function () {
//                     $("#message_login").slideUp(500);
//                 });
//         },
//     });
// }

function loadproduct() {
    var prodata = {
        cmd: "GET_ALL",
    };
    $.ajax({
        type: "POST",
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        url: "getall",
        data: prodata,
        success: (data) => {
            html = "";
            console.log(data);
            for (var i = 0; i < data.length; i++) {
                html += "<tr>";
                html +=
                    '<td style="width: 3%; text-align: center">' +
                    (i + 1) +
                    "</td>";
                html +=
                    '<td style="width: 10%; text-align: center">' +
                    data[i].Id +
                    "</td>";
                html +=
                    '<td style="width: 25%; text-align: start; padding-left: 5px">' +
                    data[i].Item +
                    "</td>";
                html +=
                    '<td style="width: 45%; text-align: start; padding-left: 5px">' +
                    data[i].Description +
                    "</td>";
                html +=
                    '<td style="width: 10%; text-align: center">' +
                    data[i].Category +
                    "</td>";
                html +=
                    '<td style="width: 7%; text-align: center"><i class="bi bi-brush" data-target="' +
                    data[i].Id +
                    '" onclick="getproductid(\'' +
                    data[i].Id +
                    '\')"></i><i class="bi bi-eye" data-target="' +
                    data[i].Id +
                    '" onclick="viewProduct(\'' +
                    data[i].Id +
                    '\');"></i><i class="bi bi-trash3" data-target="' +
                    data[i].Id +
                    '" onclick="deleteProduct(\'' +
                    data[i].Id +
                    "')\"></i></td>";
                html += "</tr>";
            }
            $("#tblpro").html(html);
        },
        error: function (e) {
            alert(e);
        },
    });
}

function getproductid(id) {
    clearPro();
    var prodata = {
        cmd: "GET_BY",
        id: id,
    };
    $.ajax({
        type: "POST",
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        url: "getbyid",
        data: prodata,
        success: (data) => {
            $("#ProductId").val(data[0].Id);
            $("#Item").val(data[0].Item);
            $("#Description").val(data[0].Description);
            $("#CategoryPro").val(data[0].Category);
            $("#MyProductModal").show();
            $("#UpdatePro").show();
            $("#AddPro").hide();
        },
        error: function (e) {
            alert(e);
        },
    });
}

function viewProduct(id) {
    clearPro();
    var prodata = {
        cmd: "GET_BY",
        id: id,
    };
    $.ajax({
        type: "POST",
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        url: "getbyid",
        data: prodata,
        success: (data) => {
            $("#ProductId").val(data[0].Id);
            $("#Item").val(data[0].Item);
            $("#Description").val(data[0].Description);
            $("#CategoryPro").val(data[0].Category);
            $("#MyProductModal").show();
            $("#UpdatePro").hide();
            $("#AddPro").hide();
            $("#Item").prop("disabled", true);
            $("#Description").prop("disabled", true);
            $("#CategoryPro").prop("disabled", true);
        },
        error: function (e) {
            alert(e);
        },
    });
}

function insertProduct() {
    if (!validatePro()) {
        return;
    }
    var prodata = {
        cmd: "INSERT",
        item: $("#Item").val(),
        description: $("#Description").val(),
        category: $("#CategoryPro").val(),
    };
    $.ajax({
        type: "POST",
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        url: "insertpro",
        data: prodata,
        success: (data) => {
            $("#MyProductModal").hide();
            loadproduct();
        },
        error: function (e) {
            alert(e);
        },
    });
}

function updateProduct() {
    if (!validatePro()) {
        return;
    }
    var prodata = {
        cmd: "UPDATE",
        id: $("#ProductId").val(),
        item: $("#Item").val(),
        description: $("#Description").val(),
        category: $("#CategoryPro").val(),
    };
    $.ajax({
        type: "POST",
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        url: "updatepro",
        data: prodata,
        success: (data) => {
            $("#MyProductModal").hide();
            loadproduct();
        },
        error: function (e) {
            alert(e);
        },
    });
}

function deleteProduct(id) {
    if (confirm("do you want to delete! this product id " + id)) {
        var prodata = {
            cmd: "DELETE",
            id: id,
        };
        $.ajax({
            type: "POST",
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
            url: "deletepro",
            data: prodata,
            success: (data) => {
                loadproduct();
            },
            error: function (e) {
                alert(e);
            },
        });
    } else {
        return;
    }
}

function validatePro() {
    var item = $("#Item").val();
    var description = $("#Description").val();
    var category = $("#CategoryPro").val();
    var result = true;
    if (item == "") {
        $("#Item").css("border-color", "red");
        return (result = false);
    } else {
        result = true;
    }

    if (description == "") {
        $("#Description").css("border-color", "red");
        result = false;
    } else {
        return (result = true);
    }

    if (category == "") {
        $("#CategoryPro").css("border-color", "red");
        return (result = false);
    } else {
        result = true;
    }

    return result;
}

function clearPro() {
    $("#Item").prop("disabled", false);
    $("#Description").prop("disabled", false);
    $("#CategoryPro").prop("disabled", false);
    $("#ProductId").val("");
    $("#Item").val("");
    $("#Description").val("");
    // $("#CategoryPro").prop("selectedIndex", -1);
}

function getCategoryPro() {
    var procatdata = {
        cmd: "GET_SCAT",
    };
    $.ajax({
        type: "POST",
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        url: "getsubcate",
        data: procatdata,
        success: (data) => {
            debugger;
            html = "";
            html = '<option value="" selected hidden>Choose Category</option>';
            for (var i = 0; i < data.length; i++) {
                html +=
                    '<option value="' +
                    data[i].Id +
                    '">' +
                    data[i].Id +
                    ":  " +
                    data[i].SubCategory +
                    "</option>";
            }
            $("#CategoryPro").html(html);
        },
        error: function (e) {
            alert(e);
        },
    });
}

//Category
function loadcategory() {
    var catdata = {
        cmd: "GET_CAT",
    };
    $.ajax({
        type: "POST",
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        url: "getprocategory",
        data: catdata,
        success: (data) => {
            html = "";
            console.log(data);
            for (var i = 0; i < data.length; i++) {
                html += "<tr>";
                html +=
                    '<td style="width: 3%; text-align: center">' +
                    (i + 1) +
                    "</td>";
                html +=
                    '<td style="width: 10%; text-align: center">' +
                    data[i].Id +
                    "</td>";
                html +=
                    '<td style="width: 80%; text-align: center">' +
                    data[i].Category +
                    "</td>";
                html +=
                    '<td style="width: 7%; text-align: center"><i class="bi bi-brush" data-target="' +
                    data[i].Id +
                    '" onclick="getcategoryid(\'' +
                    data[i].Id +
                    '\')"></i><i class="bi bi-eye" data-target="' +
                    data[i].Id +
                    '" onclick="viewCategory(\'' +
                    data[i].Id +
                    '\');"></i><i class="bi bi-trash3" data-target="' +
                    data[i].Id +
                    '" onclick="deleteCategory(\'' +
                    data[i].Id +
                    "')\"></i></td>";
                html += "</tr>";
            }
            $("#tblcat").html(html);
        },
        error: function (e) {
            alert(e);
        },
    });
}

function getcategoryid(id) {
    clearCat();
    var catdata = {
        cmd: "GET_CID",
        id: id,
    };
    $.ajax({
        type: "POST",
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        url: "getprocategoryid",
        data: catdata,
        success: (data) => {
            $("#CategoryId").val(data[0].Id);
            $("#CategoryCat").val(data[0].Category);
            $("#MyCategoryModal").show();
            $("#UpdateCat").show();
            $("#AddCat").hide();
        },
        error: function (e) {
            alert(e);
        },
    });
}

function insertCategory() {
    if (!validateCat()) {
        return;
    }
    var catdata = {
        cmd: "INSERTC",
        category: $("#CategoryCat").val(),
    };
    $.ajax({
        type: "POST",
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        url: "insertcate",
        data: catdata,
        success: (data) => {
            $("#MyCategoryModal").hide();
            loadcategory();
        },
        error: function (e) {
            alert(e);
        },
    });
}

function updateCategory() {
    if (!validateCat()) {
        return;
    }
    var catdata = {
        cmd: "UPDATEC",
        id: $("#CategoryId").val(),
        category: $("#CategoryCat").val(),
    };
    $.ajax({
        type: "POST",
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        url: "updatecate",
        data: catdata,
        success: (data) => {
            $("#MyCategoryModal").hide();
            loadcategory();
        },
        error: function (e) {
            alert(e);
        },
    });
}

function viewCategory(id) {
    clearCat();
    var catdata = {
        cmd: "GET_CID",
        id: id,
    };
    $.ajax({
        type: "POST",
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        url: "getprocategoryid",
        data: catdata,
        success: (data) => {
            $("#CategoryId").val(data[0].Id);
            $("#CategoryCat").val(data[0].Category);
            $("#MyCategoryModal").show();
            $("#UpdateCat").hide();
            $("#AddCat").hide();
            $("#CategoryCat").prop("disabled", true);
        },
        error: function (e) {
            alert(e);
        },
    });
}

function deleteCategory(id) {
    if (confirm("do you want to delete! this product id " + id)) {
        var prodata = {
            cmd: "DELETEC",
            id: id,
        };
        $.ajax({
            type: "POST",
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
            url: "deletecate",
            data: prodata,
            success: (data) => {
                loadcategory();
            },
            error: function (e) {
                alert(e);
            },
        });
    } else {
        return;
    }
}

function clearCat() {
    $("#CategoryCat").prop("disabled", false);
    $("#CategoryId").val("");
    $("#CategoryCat").val("");
    // $("#CategoryPro").prop("selectedIndex", -1);
}

function validateCat() {
    var item = $("#CategoryCat").val();
    var result = true;
    if (item == "") {
        $("#CategoryCat").css("border-color", "red");
        return (result = false);
    } else {
        result = true;
    }

    return result;
}

//Sub Category
function loadsubcategory() {
    var catdata = {
        cmd: "GET_SCAT",
    };
    $.ajax({
        type: "POST",
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        url: "getsubcate",
        data: catdata,
        success: (data) => {
            html = "";
            for (var i = 0; i < data.length; i++) {
                html += "<tr>";
                html +=
                    '<td style="width: 3%; text-align: center">' +
                    (i + 1) +
                    "</td>";
                html +=
                    '<td style="width: 10%; text-align: center">' +
                    data[i].Id +
                    "</td>";
                html +=
                    '<td style="width: 40%; text-align: center">' +
                    data[i].SubCategory +
                    "</td>";
                html +=
                    '<td style="width: 40%; text-align: center">' +
                    data[i].Category +
                    "</td>";
                html +=
                    '<td style="width: 7%; text-align: center"><i class="bi bi-brush" data-target="' +
                    data[i].Id +
                    '" onclick="getsubcategoryid(\'' +
                    data[i].Id +
                    '\')"></i><i class="bi bi-eye" data-target="' +
                    data[i].Id +
                    '" onclick="viewSubCategory(\'' +
                    data[i].Id +
                    '\');"></i><i class="bi bi-trash3" data-target="' +
                    data[i].Id +
                    '" onclick="deleteSubCategory(\'' +
                    data[i].Id +
                    "')\"></i></td>";
                html += "</tr>";
            }
            $("#tblsub").html(html);
        },
        error: function (e) {
            alert(e);
        },
    });
}

function getsubcategoryid(id) {
    clearSubCat();
    var catdata = {
        cmd: "GET_SCID",
        id: id,
    };
    $.ajax({
        type: "POST",
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        url: "getsubby",
        data: catdata,
        success: (data) => {
            $("#SubCatId").val(data[0].Id);
            $("#SubCategory").val(data[0].SubCategory);
            $("#CategorySub").val(data[0].Category);
            $("#MySubCategoryModal").show();
            $("#UpdateSub").show();
            $("#AddSub").hide();
        },
        error: function (e) {
            alert(e);
        },
    });
}

function insertSubCategory() {
    if (!validateSubCat()) {
        return;
    }
    var catdata = {
        cmd: "INSERTSC",
        subcategory: $("#SubCategory").val(),
        category: $("#CategorySub").val(),
    };
    $.ajax({
        type: "POST",
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        url: "insertsub",
        data: catdata,
        success: (data) => {
            $("#MySubCategoryModal").hide();
            loadsubcategory();
        },
        error: function (e) {
            alert(e);
        },
    });
}

function updateSubCategory() {
    if (!validateSubCat()) {
        return;
    }
    var catdata = {
        cmd: "UPDATESC",
        id: $("#SubCatId").val(),
        subcategory: $("#SubCategory").val(),
        category: $("#CategorySub").val(),
    };
    $.ajax({
        type: "POST",
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        url: "updatesub",
        data: catdata,
        success: (data) => {
            $("#MySubCategoryModal").hide();
            loadsubcategory();
        },
        error: function (e) {
            alert(e);
        },
    });
}

function viewSubCategory(id) {
    clearSubCat();
    var catdata = {
        cmd: "GET_SCID",
        id: id,
    };
    $.ajax({
        type: "POST",
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        url: "getsubby",
        data: catdata,
        success: (data) => {
            $("#SubCatId").val(data[0].Id);
            $("#SubCategory").val(data[0].SubCategory);
            $("#CategorySub").val(data[0].Category);
            $("#MySubCategoryModal").show();
            $("#UpdateSub").hide();
            $("#AddSub").hide();
            $("#SubCategory").prop("disabled", true);
            $("#CategorySub").prop("disabled", true);
        },
        error: function (e) {
            alert(e);
        },
    });
}

function deleteSubCategory(id) {
    if (confirm("do you want to delete! this product id " + id)) {
        var prodata = {
            cmd: "DELETESC",
            id: id,
        };
        $.ajax({
            type: "POST",
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
            url: "deletesub",
            data: prodata,
            success: (data) => {
                loadsubcategory();
            },
            error: function (e) {
                alert(e);
            },
        });
    } else {
        return;
    }
}

function clearSubCat() {
    $("#SubCategory").prop("disabled", false);
    $("#CategorySub").prop("disabled", false);
    $("#SubCatId").val("");
    $("#SubCategory").val("");
    // $("#CategoryPro").prop("selectedIndex", -1);
}

function validateSubCat() {
    debugger;
    var subcat = $("#SubCategory").val();
    var cat = $("#CategorySub").val();
    var result = true;
    if (subcat == "") {
        $("#SubCategory").css("border-color", "red");
        return (result = false);
    } else {
        result = true;
    }

    if (cat == "") {
        $("#CategorySub").css("border-color", "red");
        return (result = false);
    } else {
        result = true;
    }

    return result;
}

function getCategorySub() {
    var procatdata = {
        cmd: "GET_CAT",
    };
    $.ajax({
        type: "POST",
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        url: "getprocategory",
        data: procatdata,
        success: (data) => {
            html = "";
            html = '<option value="" selected hidden>Choose Category</option>';
            for (var i = 0; i < data.length; i++) {
                html +=
                    '<option value="' +
                    data[i].Id +
                    '">' +
                    data[i].Id +
                    ":  " +
                    data[i].Category +
                    "</option>";
            }
            $("#CategorySub").html(html);
        },
        error: function (e) {
            alert(e);
        },
    });
}

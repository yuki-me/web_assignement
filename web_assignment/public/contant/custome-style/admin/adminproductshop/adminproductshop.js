// $.ajaxSetup({
//     headers: {
//         "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
//     },
// });
var proitem = [];
$(document).ready(function () {
    loadproduct();
    Percetage();
    Status();
    ProItem();

    $("#Item").autocomplete({
        source: proitem,
    });

    $("#Item").autocomplete("option", "appendTo", ".eventInsForm");

    $("#SalePrice").change(function () {
        // debugger;
        var qty = $("#Qty").val();
        var sale = $("#SalePrice").val();
        var amount = parseInt(qty) * parseInt(sale);
        $("#Amount").val(amount);
    });
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

function loadproduct() {
    var prodata = {
        cmd: "GET_ALL",
    };
    $.ajax({
        type: "POST",
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        url: "getproductshop",
        data: prodata,
        success: (data) => {
            html = "";
            for (var i = 0; i < data.length; i++) {
                html += "<tr>";
                html +=
                    '<td style="width: 3%; text-align: center">' +
                    (i + 1) +
                    "</td>";
                html +=
                    '<td style="width: 5%; text-align: center">' +
                    data[i].Id +
                    "</td>";
                html +=
                    '<td style="width: 15%; text-align: start; padding-left: 5px">' +
                    data[i].Item +
                    "</td>";
                html +=
                    '<td style="width: 25%; text-align: start; padding-left: 5px">' +
                    data[i].DisplaySpace +
                    "</td>";
                html +=
                    '<td style="width: 5%; text-align: center">' +
                    data[i].Qty +
                    "</td>";
                html +=
                    '<td style="width: 10%; text-align: center">' +
                    data[i].Cost +
                    "</td>";
                html +=
                    '<td style="width: 10%; text-align: center">' +
                    data[i].SalePrice +
                    "</td>";
                html +=
                    '<td style="width: 10%; text-align: center">' +
                    data[i].Amount +
                    "</td>";
                html +=
                    '<td style="width: 5%; text-align: center">' +
                    data[i].Percetage +
                    "</td>";
                html +=
                    '<td style="width: 5%; text-align: center">' +
                    data[i].ProductStatus +
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
        cmd: "GET_BID",
        id: id,
    };
    $.ajax({
        type: "POST",
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        url: "getproductshopid",
        data: prodata,
        success: (data) => {
            $("#Id").val(data[0].Id);
            $("#Item").val(data[0].Item);
            $("#DisplaySpace").val(data[0].DisplaySpace);
            $("#Qty").val(data[0].Qty);
            $("#Cost").val(data[0].Cost);
            $("#SalePrice").val(data[0].SalePrice);
            $("#Amount").val(data[0].Amount);
            $("#Percetage").val(data[0].Percetage);
            $("#ProductStatus").val(data[0].ProductStatus);
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
        cmd: "GET_BID",
        id: id,
    };
    $.ajax({
        type: "POST",
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        url: "getproductshopid",
        data: prodata,
        success: (data) => {
            $("#Id").val(data[0].Id);
            $("#Item").val(data[0].Item);
            $("#DisplaySpace").val(data[0].DisplaySpace);
            $("#Qty").val(data[0].Qty);
            $("#Cost").val(data[0].Cost);
            $("#SalePrice").val(data[0].SalePrice);
            $("#Amount").val(data[0].Amount);
            $("#Percetage").val(data[0].Percetage);
            $("#ProductStatus").val(data[0].ProductStatus);
            $("#MyProductModal").show();
            $("#UpdatePro").hide();
            $("#AddPro").hide();
            $("#Item").prop("disabled", true);
            $("#DisplaySpace").prop("disabled", true);
            $("#Qty").prop("disabled", true);
            $("#Cost").prop("disabled", true);
            $("#SalePrice").prop("disabled", true);
            $("#Amount").prop("disabled", true);
            $("#Percetage").prop("disabled", true);
            $("#ProductStatus").prop("disabled", true);
            $("#MainImage").prop("disabled", true);
            $("#SubImage").prop("disabled", true);
            $("#SubImage2").prop("disabled", true);
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
        productcode: $("#Item").val(),
        displayspace: $("#DisplaySpace").val(),
        qty: $("#Qty").val(),
        cost: $("#Cost").val(),
        saleprice: $("#SalePrice").val(),
        amount: $("#Amount").val(),
        statuspromotion: $("#Percetage").val(),
        statusproduct: $("#ProductStatus").val(),
    };
    $.ajax({
        type: "POST",
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        url: "insertproductshop",
        data: prodata,
        success: (data) => {
            var file = document.querySelectorAll(".MyImage");
            var id = data[0].V_ID;

            for (var i = 0; i < 3; i++) {
                var myform = new FormData();
                var filepath = file[i].files[0].type;
                var filesize = file[i].files[0].size;
                var filename = file[i].files[0].name;
                var myfile = $(".MyImage")[i].files[0];
                myform.append("id", id);
                myform.append("filepath", filepath);
                myform.append("filesize", filesize);
                myform.append("filename", filename);
                myform.append("myfile", myfile);
                // debugger;

                $.ajax({
                    type: "POST",
                    headers: {
                        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                            "content"
                        ),
                    },
                    url: "insertproductimage",
                    data: myform,
                    processData: false,
                    contentType: false,
                    success: (data) => {
                        // debugger;
                    },
                    error: function (e) {
                        alert(e);
                    },
                });
            }
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
        id: $("#Id").val(),
        productcode: $("#Item").val(),
        displayspace: $("#DisplaySpace").val(),
        qty: $("#Qty").val(),
        cost: $("#Cost").val(),
        saleprice: $("#SalePrice").val(),
        amount: $("#Amount").val(),
        statuspromotion: $("#Percetage").val(),
        statusproduct: $("#ProductStatus").val(),
    };
    // debugger;
    $.ajax({
        type: "POST",
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        url: "updateproductshop",
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
            url: "deleteproductshop",
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
    var displayspace = $("#DisplaySpace").val();
    var qty = $("#Qty").val();
    var cost = $("#Cost").val();
    var saleprice = $("#SalePrice").val();
    var amount = $("#Amount").val();
    var percatage = $("#Percetage").val();
    var productstatus = $("#ProductStatus").val();
    var aminimage = $("#MainImage").val();
    var subimage = $("#SubImage").val();
    var subimage2 = $("#SubImage2").val();
    var result = true;
    if (item == null) {
        $("#Item").css("border-color", "red");
        result = false;
    } else {
        result = true;
    }

    if (displayspace == "") {
        $("#DisplaySpace").css("border-color", "red");
        result = false;
    } else {
        return (result = true);
    }

    if (qty == "") {
        $("#Qty").css("border-color", "red");
        result = false;
    } else {
        result = true;
    }

    if (cost == "") {
        $("#Cost").css("border-color", "red");
        result = false;
    } else {
        result = true;
    }

    if (saleprice == "") {
        $("#SalePrice").css("border-color", "red");
        result = false;
    } else {
        result = false;
    }

    if (amount == "") {
        $("#Amount").css("border-color", "red");
        result = false;
    } else {
        result = true;
    }

    if (percatage == null) {
        $("#Percetage").css("border-color", "red");
        result = false;
    } else {
        result = true;
    }

    if (productstatus == null) {
        $("#ProductStatus").css("border-color", "red");
        result = false;
    } else {
        result = false;
    }

    if (aminimage == "") {
        $("#MainImage").css("border-color", "red");
        result = false;
    } else {
        result = true;
    }

    if (subimage == "") {
        $("#SubImage").css("border-color", "red");
        result = false;
    } else {
        result = true;
    }

    if (subimage2 == "") {
        $("#SubImage2").css("border-color", "red");
        result = false;
    } else {
        result = true;
    }

    return result;
}

function clearPro() {
    $("#Item").css("border-color", "gray");
    $("#DisplaySpace").css("border-color", "gray");
    $("#Qty").css("border-color", "gray");
    $("#Cost").css("border-color", "gray");
    $("#SalePrice").css("border-color", "gray");
    $("#Amount").css("border-color", "gray");
    $("#Percetage").css("border-color", "gray");
    $("#ProductStatus").css("border-color", "gray");
    $("#MainImage").css("border-color", "gray");
    $("#SubImage").css("border-color", "gray");
    $("#SubImage2").css("border-color", "gray");
    $("#Item").prop("disabled", false);
    $("#DisplaySpace").prop("disabled", false);
    $("#Qty").prop("disabled", false);
    $("#Cost").prop("disabled", false);
    $("#SalePrice").prop("disabled", false);
    $("#Amount").prop("disabled", false);
    $("#Percetage").prop("disabled", false);
    $("#ProductStatus").prop("disabled", false);
    $("#MainImage").prop("disabled", false);
    $("#SubImage").prop("disabled", false);
    $("#SubImage2").prop("disabled", false);
    $("#Id").val("");
    $("#Item").val("");
    $("#DisplaySpace").val("");
    $("#Qty").val("");
    $("#Cost").val("");
    $("#SalePrice").val("");
    $("#Amount").val("");
    $("#Percetage").val("");
    $("#ProductStatus").val("");
    $("#MainImage").val("");
    $("#SubImage").val("");
    $("#SubImage2").val("");
}

function Percetage() {
    var datasea = {
        cmd: "PERSEA",
    };
    $.ajax({
        type: "POST",
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        url: "prosea",
        dataType: "json",
        data: datasea,
        success: (data) => {
            html = "";
            html =
                '<option value="" disabled selected hidden>Choose Percetage</option>';
            for (var i = 0; i < data.length; i++) {
                html +=
                    '<option value="' +
                    data[i].Id +
                    '" >' +
                    data[i].Percetage +
                    "</option>";
            }
            $("#Percetage").html(html);
        },
        error: function () {},
    });
}

function Status() {
    var datasea = {
        cmd: "STASEA",
    };
    $.ajax({
        type: "POST",
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        url: "stasea",
        dataType: "json",
        data: datasea,
        success: (data) => {
            html = "";
            html =
                '<option value="" disabled selected hidden>Choose Percetage</option>';
            for (var i = 0; i < data.length; i++) {
                html +=
                    '<option value="' +
                    data[i].Id +
                    '" >' +
                    data[i].ProductStatus +
                    "</option>";
            }
            $("#ProductStatus").html(html);
        },
        error: function () {},
    });
}

function ProItem() {
    var datasea = {
        cmd: "PROSEA",
    };
    $.ajax({
        type: "POST",
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        url: "prosea",
        dataType: "json",
        data: datasea,
        success: (data) => {
            for (var i = 0; i < data.length; i++) {
                proitem.push(data[i].Item);
            }
        },
        error: function () {},
    });
}

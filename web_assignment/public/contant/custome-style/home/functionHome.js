var totalOrder = 0;
var totalAmount = 0;

function openFavoriteModal() {
    if (!checkSession()) {
        window.location.href = "http://127.0.0.1:8000/login";
        return;
    }
    $("#FavoriteModal").modal("show");
}

function closeFavoriteModal() {
    $("#FavoriteModal").modal("hide");
}

function openMyAccountModal() {
    if (!checkSession()) {
        window.location.href = "http://127.0.0.1:8000/login";
        return;
    }
    $("#MyAccountModal").modal("show");
}

function closeMyAccountModal() {
    $("#MyAccountModal").modal("hide");
}

function openOrderModal() {
    if (!checkSession()) {
        window.location.href = "http://127.0.0.1:8000/login";
        return;
    }
    $("#MyOrderModal").modal("show");
}

function closeOrderModal() {
    $("#MyOrderModal").modal("hide");
}

// function gotoCategory(id) {
//     // var data = {
//     //     cmd: "GET_BID",
//     //     id: id,
//     // };
//     $.ajax({
//         type: "POST",
//         url: "categoryid/" + id,
//         dataType: "json",
//         // data: data,
//         success: (data) => {
//             $("#my_id").html(data);
//         },
//         error: function () {
//             console.log("error");
//         },
//     });
// }

function addFavorite(pid, qty, price) {
    if (!checkSession()) {
        window.location.href = "http://127.0.0.1:8000/login";
        return;
    }
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
        success: (data) => {
            getFavorite();
        },
        error: function (e) {
            alert(e);
        },
    });
}

function getFavorite() {
    var favdata = {
        cmd: "GET_ALL",
        user: sessionStorage.getItem("Session"),
    };
    $.ajax({
        type: "POST",
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        url: "http://127.0.0.1:8000/getfavorite",
        data: favdata,
        success: (data) => {
            // console.log(data);
            html = "";
            total = 0;
            for (var i = 0; i < data.length; i++) {
                html += "<tr>";
                html += "<td>" + (i + 1) + "</td>";
                html += "<td>" + data[i].Item + "</td>";
                html += "<td>" + data[i].Description + "</td>";
                html += "<td>" + data[i].Qty + "</td>";
                html += "<td>$" + data[i].Price + "</td>";
                html += "<td>$" + data[i].Amount + "</td>";
                html +=
                    '<td><label class="label-control-sm" title="Delete" onclick="deleteFavorite(\'' +
                    data[i].Id +
                    "')\">Delete</label></td>";
                html += "</tr>";
                total = total + parseInt(data[i].Amount);
            }
            $("#taFavorite").html(html);
            $("#totalfav").html("$" + total);
        },
        error: function (e) {
            alert(e);
        },
    });
}

function deleteFavorite(id) {
    var datafav = {
        cmd: "DELETE",
        id: id,
    };
    $.ajax({
        type: "POST",
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        url: "http://127.0.0.1:8000/deletefavorite",
        data: datafav,
        success: function (data) {
            getFavorite();
            alert("Item Id {" + id + "} have been deleted!");
        },
        error: function (e) {
            alert(e);
        },
    });
}

function checkSession() {
    var check = sessionStorage.getItem("Session");
    var result = false;
    if (check != null) {
        result = true;
    }
    return result;
}

function getBuyNow() {
    if (!checkFavItem()) {
        return;
    }

    var amount = $("#totalfav").text();
    var databuy = {
        cmd: "INSERT",
        cid: sessionStorage.getItem("Session"),
        amount: amount.replace("$", ""),
    };
    $.ajax({
        type: "POST",
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        url: "http://127.0.0.1:8000/insertinvoice",
        data: databuy,
        success: function (data) {
            getFavorite();
        },
        error: function (e) {
            alert(e);
        },
    });
}

function checkFavItem() {
    var check = $("#taFavorite").find("tr");
    var result = false;
    if (check.length != 0) {
        result = true;
    }
    return result;
}

function getOrderLine() {
    var dataorder = {
        cmd: "GET_CID",
        cid: sessionStorage.getItem("Session"),
    };

    $.ajax({
        type: "POST",
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        url: "http://127.0.0.1:8000/getorderline",
        data: dataorder,
        success: function (data) {
            htmlorder = "";
            for (var i = 0; i < data.length; i++) {
                htmlorder += "<tr>";
                htmlorder += "<td>" + (i + 1) + "</td>";
                htmlorder += "<td>" + data[i].Id + "</td>";
                htmlorder += "<td>" + data[i].LastName + "</td>";
                htmlorder += "<td>" + data[i].FirstName + "</td>";
                htmlorder += "<td>" + data[i].Date + "</td>";
                htmlorder += "<td>$" + data[i].Amount + "</td>";
                if (data[i].Status == 1) {
                    htmlorder += "<td>Inproccess</td>";
                } else {
                    htmlorder += "<td>Complete</td>";
                }
                htmlorder +=
                    '<td><label class="label-control-sm" title="View">View</label></td>';
                htmlorder += "</tr>";
                totalAmount = totalAmount + parseInt(data[i].Amount);
            }
            $("#taOrderLine").html(htmlorder);
            totalOrder = data.length;
        },
        error: function (e) {
            alert(e);
        },
    });
}

function getCustomer() {
    var datacuss = {
        cmd: "GET_CID",
        id: sessionStorage.getItem("Session"),
    };
    $.ajax({
        type: "POST",
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        url: "http://127.0.0.1:8000/getcustomeridcus",
        data: datacuss,
        success: function (data) {
            $("#Name").val(data[0].CusName);
            $("#Email").val(data[0].Email);
            $("#Orders").val(totalOrder);
            $("#Amount").val("$" + totalAmount);
            $("#JobTitle").val(data[0].JobTitle);
            $("#Country").val(data[0].Country);
            $("#Province").val(data[0].Province);
            $("#District").val(data[0].Distict);
            $("#Commnues").val(data[0].Communes);
            $("#Villages").val(data[0].Villages);
            $("#Street").val(data[0].Street);
            $("#House").val(data[0].House);
        },
        error: function (e) {
            alert(e);
        },
    });
}

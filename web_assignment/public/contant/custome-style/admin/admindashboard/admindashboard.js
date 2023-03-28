function openOrderModal() {
    $("#MyOrderModal").show();
}

function closeOrderModal() {
    $("#MyOrderModal").hide();
}

$(document).ready(function () {
    loadoinvoice();
});

function RefreshBTN() {
    loadoinvoice();
}

function loadoinvoice() {
    var invdata = {
        cmd: "GET_ALL",
    };
    $.ajax({
        type: "POST",
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        url: "getorder",
        data: invdata,
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
                    '<td style="width: 20%; text-align: start; padding-left: 5px">' +
                    data[i].FullName +
                    "</td>";
                html +=
                    '<td style="width: 15%; text-align: center;">' +
                    data[i].Date +
                    "</td>";
                html +=
                    '<td style="width: 10%; text-align: center"> $' +
                    data[i].Amount +
                    "</td>";
                if (data[i].Status == 1) {
                    html +=
                        '<td style="width: 10%; text-align: center">Inproccess</td>';
                } else if (data[i].Status == 2) {
                    html +=
                        '<td style="width: 10%; text-align: center">Prepar to Delivery</td>';
                }
                html +=
                    '<td style="width: 7%; text-align: center"><span onclick="viewoInvoice(\'' +
                    data[i].Id +
                    '\')"><i class="bi bi-lightning-charge"></i></span></td>';
                html += "</tr>";
            }
            $("#tblorder").html(html);
        },
        error: function (e) {
            alert(e);
        },
    });
}

function viewoInvoice(id) {
    clearInv();
    var prodata = {
        cmd: "GET_BID",
        id: id,
    };
    // debugger;
    $.ajax({
        type: "POST",
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        url: "getbidinvoice",
        data: prodata,
        success: (data) => {
            // debugger;
            $("#Id").val(data[0].Id);
            $("#LastName").val(data[0].LastName);
            $("#FirstName").val(data[0].FirstName);
            $("#Date").val(data[0].Date);
            $("#Amount").val(data[0].Amount);
            $("#Status").val(data[0].Status);
            $("#MyOrderModal").show();
            $("#LastName").prop("disabled", true);
            $("#FirstName").prop("disabled", true);
            $("#Date").prop("disabled", true);
            $("#Amount").prop("disabled", true);
            $("#Status").prop("disabled", true);

            loadoitem(id);
        },
        error: function (e) {
            alert(e);
        },
    });
}

function loadoitem(id) {
    var itemdata = {
        cmd: "GET_BID",
        id: id,
    };
    $.ajax({
        type: "POST",
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        url: "getitembyinvoice",
        data: itemdata,
        success: (data) => {
            html = "";
            for (var i = 0; i < data.length; i++) {
                html += "<tr>";
                html += '<td style="text-align: center">' + (i + 1) + "</td>";
                // html +=
                //     '<td style="text-align: center">' + data[i].Id + "</td>";
                html +=
                    '<td style="text-align: start; padding-left: 5px">' +
                    data[i].Item +
                    "</td>";
                html +=
                    '<td style="text-align: center;">' +
                    data[i].Description +
                    "</td>";
                html +=
                    '<td style="text-align: center"> $' + data[i].Qty + "</td>";
                html +=
                    '<td style="text-align: center">' + data[i].Price + "</td>";
                html +=
                    '<td style="text-align: center">' +
                    data[i].Amount +
                    "</td>";
                html +=
                    '<td style="text-align: center">' +
                    data[i].Status +
                    "</td>";
                html += "</tr>";
            }
            $("#tblitem").html(html);
        },
        error: function (e) {
            alert(e);
        },
    });
}

function clearInv() {
    $("#LastName").prop("disabled", false);
    $("#FirstName").prop("disabled", false);
    $("#Date").prop("disabled", false);
    $("#Amount").prop("disabled", false);
    $("#Status").prop("disabled", false);
    $("#Id").val("");
    $("#LastName").val("");
    $("#FirstName").val("");
    $("#Date").val("");
    $("#Amount").val("");
    $("#Status").val("");
    // $("#CategoryPro").prop("selectedIndex", -1);
}

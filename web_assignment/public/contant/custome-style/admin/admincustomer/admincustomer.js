$(document).ready(function () {
    loadcustomer();
});
function closeCustomerModal() {
    $("#MyCustomerModal").hide();
}

function loadcustomer() {
    var cusdata = {
        cmd: "GET_ALL",
    };
    $.ajax({
        type: "POST",
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        url: "getcustomercus",
        data: cusdata,
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
                    '<td style="width: 15%; text-align: center">' +
                    data[i].CusName +
                    "</td>";
                if (data[i].Gender == "M") {
                    html +=
                        '<td style="width: 5%; text-align: center">Male</td>"';
                } else if (data[i].Gender == "F") {
                    html +=
                        '<td style="width: 5%; text-align: center">Female</td>"';
                }
                html +=
                    '<td style="width: 10%; text-align: center">' +
                    data[i].DateOfBirth +
                    "</td>";
                html +=
                    '<td style="width: 10%; text-align: center">' +
                    data[i].PhoneNumber +
                    "</td>";
                html +=
                    '<td style="width: 40%; text-align: center">' +
                    data[i].Address +
                    "</td>";
                html +=
                    '<td style="width: 7%; text-align: center"><i class="bi bi-eye" data-target="' +
                    data[i].Id +
                    '" onclick="getcustomerid(\'' +
                    data[i].Id +
                    '\');"></i></td>"';
                html += "</tr>";
            }
            $("#tblcus").html(html);
        },
        error: function (e) {
            alert(e);
        },
    });
}

function getcustomerid(id) {
    var prodata = {
        cmd: "GET_BID",
        id: id,
    };
    $.ajax({
        type: "POST",
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        url: "getcustomeridcus",
        data: prodata,
        success: (data) => {
            $("#CustomerId").val(data[0].Id);
            $("#LastName").val(data[0].LastName);
            $("#FirstName").val(data[0].FirstName);
            $("#Gender").val(data[0].Gender);
            $("#DOB").val(data[0].DateOfBirth);
            $("#PhoneNumber").val(data[0].PhoneNumber);
            $("#Email").val(data[0].Email);
            $("#JobTitle").val(data[0].JobTitle);
            $("#Country").val(data[0].Country);
            $("#Province").val(data[0].Province);
            $("#District").val(data[0].Distict);
            $("#Communes").val(data[0].Communes);
            $("#Village").val(data[0].Villages);
            $("#Street").val(data[0].Street);
            $("#House").val(data[0].House);
            $("#MyCustomerModal").show();
        },
        error: function (e) {
            alert(e);
        },
    });
}

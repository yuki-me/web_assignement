function openPromotionModal() {
    $("#MyPromotionModal").show();
    clearPromotion();
}

function closePromotionModal() {
    $("#MyPromotionModal").hide();
    clearPromotion();
}

$(document).ready(function () {
    $("#Image").change(function () {
        var file = document.querySelectorAll("#form");

        debugger;
        var myform = new FormData();
        var filepath = file[0].children[3].children[1].files[0].type;
        var filesize = file[0].children[3].children[1].files[0].size;
        var filename = file[0].children[3].children[1].files[0].name;
        var myfile = $("#Image")[0].files[0];
        myform.append("filepath", filepath);
        myform.append("filesize", filesize);
        myform.append("filename", filename);
        myform.append("myfile", myfile);

        // console.log(myform);

        $.ajax({
            type: "POST",
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
            url: "insertimagebad",
            data: myform,
            processData: false,
            contentType: false,
            success: (data) => {
                console.log(data);
                $("#imageId").html(data[0].LastId);
            },
            error: function (e) {
                alert("outer" + e);
            },
        });
    });
    loadpromo();
});

function loadpromo() {
    var bradata = {
        cmd: "GET_ALL",
    };

    $.ajax({
        type: "POST",
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        url: "getpromotion",
        data: bradata,
        success: (data) => {
            debugger;
            html = "";
            // console.log(data);
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
                    data[i].Percetage +
                    "</td>";
                html +=
                    '<td style="width: 15%; text-align: center">' +
                    data[i].FileName +
                    "</td>";
                html +=
                    '<td style="width: 7%; text-align: center"><i class="bi bi-brush" data-target="' +
                    data[i].Id +
                    '" onclick="getpromoid(\'' +
                    data[i].Id +
                    '\')"></i><i class="bi bi-trash3" data-target="' +
                    data[i].Id +
                    '" onclick="deletePromotion(\'' +
                    data[i].Id +
                    "')\"></i></td>";
                html += "</tr>";
            }
            $("#tblpromo").html(html);
        },
        error: function (e) {
            alert(e);
        },
    });
}

function insertPromotion() {
    if (!validatePromo()) {
        return;
    }

    var mybradata = {
        cmd: "INSERT",
        percentage: $("#PromotionName").val(),
        image: $("#imageId").text(),
    };
    $.ajax({
        type: "POST",
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        url: "insertpromotion",
        data: mybradata,
        success: (data) => {
            $("#MyPromotionModal").hide();
            loadpromo();
        },
        error: function (e) {
            alert("inner" + e);
        },
    });
}

function getpromoid(id) {
    clearPromotion();
    var bradata = {
        cmd: "GET_BID",
        id: id,
    };
    $.ajax({
        type: "POST",
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        url: "getpromotionidad",
        data: bradata,
        success: (data) => {
            $("#Id").val(data[0].Id);
            $("#PromotionName").val(data[0].Percetage);
            $("#MyPromotionModal").show();
            $("#UpdatePromo").show();
            $("#AddPromo").hide();
        },
        error: function (e) {
            alert(e);
        },
    });
}

function updatePromotion() {
    if (!validatePromo()) {
        return;
    }
    var bradata = {
        cmd: "UPDATE",
        id: $("#Id").val(),
        percentage: $("#PromotionName").val(),
        image: $("#imageId").text(),
    };
    // debugger;
    $.ajax({
        type: "POST",
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        url: "updatepromotion",
        data: bradata,
        success: (data) => {
            $("#MyPromotionModal").hide();
            loadpromo();
        },
        error: function (e) {
            alert(e);
        },
    });
}

function deletePromotion(id) {
    if (confirm("do you want to delete! this promotion id " + id)) {
        var prodata = {
            cmd: "DELETE",
            id: id,
        };
        $.ajax({
            type: "POST",
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
            url: "deletepromotion",
            data: prodata,
            success: (data) => {
                loadpromo();
            },
            error: function (e) {
                alert(e);
            },
        });
    } else {
        return;
    }
}

function validatePromo() {
    var branchname = $("#PromotionName").val();
    var image = $("#Image").val();
    var result = true;
    if (branchname == "") {
        $("#PromotionName").css("border-color", "red");
        return (result = false);
    } else {
        result = true;
    }

    if (image == "") {
        $("#Image").css("border-color", "red");
        return (result = false);
    } else {
        result = true;
    }

    return result;
}

function clearPromotion() {
    $("#PromotionName").prop("disabled", false);
    $("#Id").val("");
    $("#PromotionName").val("");
}

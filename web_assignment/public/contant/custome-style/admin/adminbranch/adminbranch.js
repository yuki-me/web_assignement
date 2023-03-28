function openBranchModal() {
    $("#MyBranchModal").show();
    clearBranch();
}

function closeBranchModal() {
    $("#MyBranchModal").hide();
    clearBranch();
}

$(document).ready(function () {
    $("#Image").change(function () {
        var file = document.querySelectorAll("#form");

        var myform = new FormData();
        var filepath = file[0].children[4].children[1].files[0].type;
        var filesize = file[0].children[4].children[1].files[0].size;
        var filename = file[0].children[4].children[1].files[0].name;
        var myfile = $("#Image")[0].files[0];
        myform.append("filepath", filepath);
        myform.append("filesize", filesize);
        myform.append("filename", filename);
        myform.append("myfile", myfile);

        console.log(myform);

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
    loadbranch();
});

function loadbranch() {
    var bradata = {
        cmd: "GET_ALL",
    };
    $.ajax({
        type: "POST",
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        url: "getbranchad",
        data: bradata,
        success: (data) => {
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
                    data[i].BranchName +
                    "</td>";
                html +=
                    '<td style="width: 45%; text-align: start; padding-left: 5px">' +
                    data[i].Description +
                    "</td>";
                html +=
                    '<td style="width: 15%; text-align: center">' +
                    data[i].FileName +
                    "</td>";
                html +=
                    '<td style="width: 7%; text-align: center"><i class="bi bi-brush" data-target="' +
                    data[i].Id +
                    '" onclick="getbranchid(\'' +
                    data[i].Id +
                    '\')"></i><i class="bi bi-trash3" data-target="' +
                    data[i].Id +
                    '" onclick="deleteBranch(\'' +
                    data[i].Id +
                    "')\"></i></td>";
                html += "</tr>";
            }
            $("#tblbra").html(html);
        },
        error: function (e) {
            alert(e);
        },
    });
}

function insertBranch() {
    if (!validateBra()) {
        return;
    }

    var mybradata = {
        cmd: "INSERT",
        branchname: $("#BranchName").val(),
        description: $("#Description").val(),
        branchimage: $("#imageId").text(),
    };
    $.ajax({
        type: "POST",
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        url: "insertbranch",
        data: mybradata,
        success: (data) => {
            $("#MyBranchModal").hide();
            loadbranch();
        },
        error: function (e) {
            alert("inner" + e);
        },
    });

    // var file = document.querySelectorAll("#form");
    // console.log(file[0].children[3].children[1].files[0]);
    // console.log($("#Form").serialize());

    // var bradata = {
    //     cmd: "INSERTI",
    //     myfile: file[0].children[4].children[1].files[0],
    //     filepath: file[0].children[4].children[1].files[0].type,
    //     filesize: file[0].children[4].children[1].files[0].size,
    //     filename: file[0].children[4].children[1].files[0].name,
    // };

    // var bradata = {
    //     cmd: "INSERTI",
    //     myfile: file[0].children[4].children[1].files[0],
    //     // myfile: $("#Image").files,
    //     filepath: file[0].children[4].children[1].files[0].type,
    //     filesize: file[0].children[4].children[1].files[0].size,
    //     filename: file[0].children[4].children[1].files[0].name,
    // };

    // console.log($("#Image")[0].files[0]);

    // console.log(bradata);

    // var myform = new FormData();
    // var filepath = file[0].children[4].children[1].files[0].type;
    // var filesize = file[0].children[4].children[1].files[0].size;
    // var filename = file[0].children[4].children[1].files[0].name;
    // var myfile = $("#Image")[0].files[0];
    // myform.append("filepath", filepath);
    // myform.append("filesize", filesize);
    // myform.append("filename", filename);
    // myform.append("myfile", myfile);

    // console.log(myform);

    // $.ajax({
    //     type: "POST",
    //     headers: {
    //         "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
    //     },
    //     url: "insertimagebad",
    //     data: myform,
    //     processData: false,
    //     contentType: false,
    //     success: (data) => {
    //         console.log(data);
    //         var mybradata = {
    //             cmd: "INSERT",
    //             branchname: $("#BranchName").val(),
    //             description: $("#Description").val(),
    //             branchimage: data[0].LastId,
    //         };
    //         $.ajax({
    //             type: "POST",
    //             headers: {
    //                 "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
    //                     "content"
    //                 ),
    //             },
    //             url: "insertbranch",
    //             data: mybradata,
    //             success: (data) => {
    //                 $("#MyBranchModal").hide();
    //                 loadbranch();
    //             },
    //             error: function (e) {
    //                 alert("inner" + e);
    //             },
    //         });
    //     },
    //     error: function (e) {
    //         alert("outer" + e);
    //     },
    // });
}

function getbranchid(id) {
    clearBranch();
    var bradata = {
        cmd: "GET_BID",
        id: id,
    };
    $.ajax({
        type: "POST",
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        url: "getbranchidad",
        data: bradata,
        success: (data) => {
            $("#Id").val(data[0].Id);
            $("#BranchName").val(data[0].BranchName);
            $("#Description").val(data[0].Description);
            $("#MyBranchModal").show();
            $("#UpdateBra").show();
            $("#AddBra").hide();
        },
        error: function (e) {
            alert(e);
        },
    });
}

function updateBranch() {
    if (!validateBra()) {
        return;
    }
    var bradata = {
        cmd: "UPDATE",
        id: $("#Id").val(),
        branchname: $("#BranchName").val(),
        description: $("#Description").val(),
    };
    // debugger;
    $.ajax({
        type: "POST",
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        url: "updatebranchbad",
        data: bradata,
        success: (data) => {
            $("#MyBranchModal").hide();
            loadbranch();
        },
        error: function (e) {
            alert(e);
        },
    });
}

function deleteBranch(id) {
    if (confirm("do you want to delete! this branch id " + id)) {
        var prodata = {
            cmd: "DELETE",
            id: id,
        };
        $.ajax({
            type: "POST",
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
            url: "deletebranchbad",
            data: prodata,
            success: (data) => {
                loadbranch();
            },
            error: function (e) {
                alert(e);
            },
        });
    } else {
        return;
    }
}

function validateBra() {
    var branchname = $("#BranchName").val();
    var description = $("#Description").val();
    var image = $("#Image").val();
    var result = true;
    if (branchname == "") {
        $("#BranchName").css("border-color", "red");
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

    if (image == "") {
        $("#Image").css("border-color", "red");
        return (result = false);
    } else {
        result = true;
    }

    return result;
}

function clearBranch() {
    $("#BranchName").prop("disabled", false);
    $("#Description").prop("disabled", false);
    $("#Id").val("");
    $("#BranchName").val("");
    $("#Description").val("");
}

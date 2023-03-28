$(document).ready(function () {
    //checkPass();
    $("#message_login").hide();
});

$("#btn-login").click(function () {
    loginField = checkField();
    if (loginField == true) {
        loginAjax();
    }
});

function loginAjax() {
    var logindata = {
        cmd: "LOGIN",
        email: $("#E_mail").val(),
        pass: $("#Password").val(),
    };
    debugger;
    $.ajax({
        type: "POST",
        url: "getlogin",
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        data: logindata,
        success: (data) => {
            debugger;
            if (data.length == 0) {
                $("#message_login")
                    .fadeTo(2000, 500)
                    .slideUp(500, function () {
                        $("#message_login").slideUp(500);
                    });
            } else {
                sessionStorage.setItem("AdminSession", data[0].Id); //asign
                window.location.href = "admin";
            }
        },
        error: function () {
            $("#message_login")
                .fadeTo(2000, 500)
                .slideUp(500, function () {
                    $("#message_login").slideUp(500);
                });
        },
    });
}

function checkField() {
    var email = $("#E_mail").val();
    var password = $("#Password").val();
    var result = true;
    if (email == "") {
        $("#E_mail").css("border-color", "red");
        result = false;
    } else {
        result = true;
    }

    if (password == "") {
        $("#Password").css("border-color", "red");
        result = false;
    } else {
        result = true;
    }
    return result;
}

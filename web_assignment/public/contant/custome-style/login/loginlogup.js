var isHide = true;
var isHideC = true;
var loginField = true;
var signupField = true;

$.ajaxSetup({
    headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
    },
});

$(document).ready(function () {
    //checkPass();
    $("#message_login").hide();

    Country();
});

$("#login_form").click(function () {
    $("#signup").hide();
    $("#login").show();
});

$("#signup_form").click(function () {
    $("#login").hide();
    $("#signup").show();
});

$("#btn-login").click(function () {
    // debugger;
    loginField = checkField();
    if (loginField == true) {
        loginAjax();
        // $("#login").hide();
    }
});

function loginAjax() {
    var logindata = {
        P_Email: $("#E_mail").val(),
        P_Password: $("#Password").val(),
    };
    $.ajax({
        type: "POST",
        url: "login",
        data: logindata,
        success: (data) => {
            // debugger;
            // if (data == 0) {
            //     $("#message_login")
            //         .fadeTo(2000, 500)
            //         .slideUp(500, function () {
            //             $("#message_login").slideUp(500);
            //         });
            // }
            sessionStorage.setItem("Session", data[0].Id); //asign
            // sessionStorage.getItem("lastname"); call
            window.location.href = "home";
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

$("#SshowPass").click(function () {
    $("#ShidePass").show();
    $("#SshowPass").hide();
    isHide = false;
    showhidePass(isHide);
});

$("#ShidePass").click(function () {
    $("#ShidePass").hide();
    $("#SshowPass").show();
    isHide = true;
    showhidePass(isHide);
});

function showhidePass(check) {
    if (check == false) {
        $("#SPassword").attr("type", "text");
    } else {
        $("#SPassword").attr("type", "password");
    }
}

$("#CshowPass").click(function () {
    $("#ChidePass").show();
    $("#CshowPass").hide();
    isHideC = false;
    showhideCPass(isHideC);
});

$("#ChidePass").click(function () {
    $("#ChidePass").hide();
    $("#CshowPass").show();
    isHideC = true;
    showhideCPass(isHideC);
});

function showhideCPass(check) {
    if (check == false) {
        $("#Confirm_Password").attr("type", "text");
    } else {
        $("#Confirm_Password").attr("type", "password");
    }
}

$("#SPassword").change(function () {
    checkPass();
});

$("#Confirm_Password").change(function () {
    checkPass();
});

function checkPass() {
    var spassword = $("#SPassword").val();
    var cpassword = $("#Confirm_Password").val();
    if (spassword != "" && cpassword != "") {
        if (spassword == cpassword) {
            $("#SPassword").css("border-color", "green");
            $("#Confirm_Password").css("border-color", "green");
        } else {
            $("#SPassword").css("border-color", "red");
            $("#Confirm_Password").css("border-color", "red");
        }
    } else {
        $("#SPassword").css("border-color", "#ced4da");
        $("#Confirm_Password").css("border-color", "#ced4da");
    }
}

$("#btn-signup").click(function () {
    signupField = checkSignup();
    if (signupField == true) {
        signupAjax();
    }
});

function signupAjax() {
    debugger;
    var signupdata = {
        P_CMD: "SIGNUP",
        P_ID: "",
        P_LastName: $("#LastName").val(),
        P_FirstName: $("#FirstName").val(),
        P_Gender: $("#Gender").val(),
        P_DateOfBirth: $("#DOB").val(),
        P_PhoneNumber: $("#PhoneNumber").val(),
        P_Email: $("#SEmail").val(),
        P_JobTitle: $("#JobTitle").val(),
        P_Country: $("#Country").val(),
        P_Province: $("#Province").val(),
        P_District: $("#District").val(),
        P_Commnues: $("#Commnues").val(),
        P_Villages: $("#Villages").val(),
        P_Street: $("#Street").val(),
        P_House: $("#House").val(),
        P_Password: $("#SPassword").val(),
    };
    $.ajax({
        type: "POST",
        url: "signup",
        data: signupdata,
        datatype: "json",
        success: (data) => {
            debugger;
            $("#signup").hide();
            $("#login").show();
        },
        error: function (data) {
            console.log(data.responseText);
        },
    });
}

function checkSignup() {
    var lastname = $("#LastName").val();
    var fristname = $("#FirstName").val();
    var gender = $("#Gender").val();
    var bod = $("#DOB").val();
    var semail = $("#SEmail").val();
    var spassword = $("#SPassword").val();
    var comfirmpassword = $("#Confirm_Password").val();
    var phonenumber = $("#PhoneNumber").val();
    var jobtitle = $("#JobTitle").val();
    var country = $("#Country").val();
    var province = $("#Province").val();
    var distrinct = $("#District").val();
    var commnues = $("#Commnues").val();
    var result = true;
    if (lastname == "") {
        $("#LastName").css("border-color", "red");
        result = false;
    } else {
        result = true;
    }

    if (fristname == "") {
        $("#FirstName").css("border-color", "red");
        result = false;
    } else {
        result = true;
    }

    if (gender == null) {
        $("#Gender").css("border-color", "red");
        result = false;
    } else {
        result = true;
    }

    if (bod == "") {
        $("#DOB").css("border-color", "red");
        result = false;
    } else {
        result = true;
    }

    if (semail == "") {
        $("#SEmail").css("border-color", "red");
        result = false;
    } else {
        result = true;
    }

    if (spassword == "") {
        $("#SPassword").css("border-color", "red");
        result = false;
    } else {
        result = true;
    }

    if (comfirmpassword == "") {
        $("#Confirm_Password").css("border-color", "red");
        result = false;
    } else {
        result = true;
    }

    if (phonenumber == "") {
        $("#PhoneNumber").css("border-color", "red");
        result = false;
    } else {
        result = true;
    }

    if (jobtitle == "") {
        $("#JobTitle").css("border-color", "red");
        result = false;
    } else {
        result = true;
    }

    if (country == null) {
        $("#Country").css("border-color", "red");
        result = false;
    } else {
        result = true;
    }

    if (province == null) {
        $("#Province").css("border-color", "red");
        result = false;
    } else {
        result = true;
    }

    if (distrinct == null) {
        $("#District").css("border-color", "red");
        result = false;
    } else {
        result = true;
    }

    if (commnues == null) {
        $("#Commnues").css("border-color", "red");
        result = false;
    } else {
        result = true;
    }

    return result;
}

// $("#Country").select2({
//     placeholder: "Select a Country",
//     ajax: {
//         url: "/select2-autocomplete-ajax",
//         dataType: "json",
//         delay: 250,
//         processResults: function (data) {
//             return {
//                 results: $.map(data, function (item) {
//                     return {
//                         text: item.name,
//                         id: item.id,
//                     };
//                 }),
//             };
//         },
//         cache: true,
//     },
// });

function Country() {
    $.ajax({
        type: "GET",
        url: "getcountrysign",
        dataType: "json",
        success: (data) => {
            html = "";
            html =
                '<option value="" disabled selected hidden>Choose Country</option>';
            for (var i = 0; i < data.length; i++) {
                html +=
                    '<option value="' +
                    data[i].Id +
                    '" >' +
                    data[i].Country +
                    "</option>";
            }
            $("#Country").html(html);
        },
        error: function () {},
    });
}

$("#Country").change(function () {
    var logindata = {
        P_CMD: "PRO",
        P_Country: $("#Country").val(),
    };

    $.ajax({
        type: "POST",
        url: "getprovincesign",
        data: logindata,
        dataType: "json",
        success: (data) => {
            html = "";
            html = '<option value="" selected hidden>Choose Province</option>';
            for (var i = 0; i < data.length; i++) {
                html +=
                    '<option value="' +
                    data[i].Id +
                    '" >' +
                    data[i].Province +
                    "</option>";
            }
            $("#Province").html(html);
        },
        error: function (data) {
            alert("error");
            console.log(data.responseText);
        },
    });
});

$("#Province").change(function () {
    var logindata = {
        P_CMD: "PRO",
        P_Province: $("#Province").val(),
    };

    $.ajax({
        type: "POST",
        url: "getdistrictsign",
        data: logindata,
        dataType: "json",
        success: (data) => {
            html = "";
            html = '<option value="" selected hidden>Choose District</option>';
            for (var i = 0; i < data.length; i++) {
                html +=
                    '<option value="' +
                    data[i].Id +
                    '" >' +
                    data[i].Distict +
                    "</option>";
            }
            $("#District").html(html);
        },
        error: function (data) {
            alert("error");
            console.log(data.responseText);
        },
    });
});

$("#District").change(function () {
    var logindata = {
        P_CMD: "COM",
        P_District: $("#District").val(),
    };

    $.ajax({
        type: "POST",
        url: "getcommunessign",
        data: logindata,
        dataType: "json",
        success: (data) => {
            html = "";
            html = '<option value="" selected hidden>Choose Commnues</option>';
            for (var i = 0; i < data.length; i++) {
                html +=
                    '<option value="' +
                    data[i].Id +
                    '" >' +
                    data[i].Communes +
                    "</option>";
            }
            $("#Commnues").html(html);
        },
        error: function (data) {
            alert("error");
            console.log(data.responseText);
        },
    });
});

$("#Commnues").change(function () {
    var logindata = {
        P_CMD: "VIL",
        P_Commnues: $("#Commnues").val(),
    };
    $.ajax({
        type: "POST",
        url: "getvillagessign",
        data: logindata,
        datatype: "json",
        success: (data) => {
            html = "";
            html = '<option value="" selected hidden>Choose Villages</option>';
            for (var i = 0; i < data.length; i++) {
                html +=
                    '<option value="' +
                    data[i].Id +
                    '">' +
                    data[i].Villages +
                    "</option>";
            }
            $("#Villages").html(html);
        },
        error: function (data) {
            console.log(data.responseText);
        },
    });
});

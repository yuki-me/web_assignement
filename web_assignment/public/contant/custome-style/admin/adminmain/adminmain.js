$("#nav-list li").click(function () {
    $("#nav-list li").not(this).find("div").hide();
    $(this).find("div").toggle();
});

$(document).ready(function () {
    if (sessionStorage.getItem("AdminSession") == null) {
        window.location.href = "http://127.0.0.1:8000/adminlogin";
    }

    document.querySelectorAll(".getTab").forEach(function (node) {
        node.onclick = function () {
            $(".my_display").id = node.innerText;
            $(".my_display").addClass("my_non_display");
            $(".my_display").removeClass("my_display");
            debugger;
            console.log(node.innerText);
            if (node.innerText.trim() == "Customer") {
                $(".work_body").append(
                    '<div class="my_content my_display" id="' +
                        node.innerText.trim() +
                        '_Content"><iframe src="http://127.0.0.1:8000/admincustomer" frameborder="0"></iframe></div>'
                );
            } else if (node.innerText.trim() == "All_Products") {
                $(".work_body").append(
                    '<div class="my_content my_display" id="' +
                        node.innerText.trim() +
                        '_Content"><iframe src="http://127.0.0.1:8000/adminproduct" frameborder="0"></iframe></div>'
                );
            } else if (node.innerText.trim() == "Display") {
                $(".work_body").append(
                    '<div class="my_content my_display" id="' +
                        node.innerText.trim() +
                        '_Content"><iframe src="http://127.0.0.1:8000/adminproductshop" frameborder="0"></iframe></div>'
                );
            } else if (node.innerText.trim() == "Invoice") {
                $(".work_body").append(
                    '<div class="my_content my_display" id="' +
                        node.innerText.trim() +
                        '_Content"><iframe src="http://127.0.0.1:8000/admininvoice" frameborder="0"></iframe></div>'
                );
            } else if (node.innerText.trim() == "Brands") {
                $(".work_body").append(
                    '<div class="my_content my_display" id="' +
                        node.innerText.trim() +
                        '_Content"><iframe src="http://127.0.0.1:8000/adminbranch" frameborder="0"></iframe></div>'
                );
            } else if (node.innerText.trim() == "Promotions") {
                $(".work_body").append(
                    '<div class="my_content my_display" id="' +
                        node.innerText.trim() +
                        '_Content"><iframe src="http://127.0.0.1:8000/adminpromotion" frameborder="0"></iframe></div>'
                );
            }

            $("#my_tabs").append(
                '<li class="sub_tab" id="' +
                    node.innerText.trim() +
                    '"><div><i class="bi bi-file-earmark"></i><span>' +
                    node.innerText.trim() +
                    '</span></div><i class="bi bi-x-lg close_btn" id="' +
                    node.innerText.trim() +
                    '_btn" title="Close"></i></li>'
            );
        };
    });
    // console.log($(document));
});

$(document).click(function () {
    document.querySelectorAll(".sub_tab").forEach(function (node) {
        node.onclick = function () {
            var getElement = $(".my_content");
            for (var i = 0; i < getElement.length; i++) {
                if (getElement[i].id.includes(node.id)) {
                    $(".my_display").addClass("my_non_display");
                    $(".my_display").removeClass("my_display");
                    $("#" + getElement[i].id).addClass("my_display");
                    $("#" + getElement[i].id).removeClass("my_non_display");
                }
            }
        };
    });

    document.querySelectorAll(".close_btn").forEach(function (node) {
        node.onclick = function () {
            var getElementContent = $(".work_body");
            var getElementTab = $("#my_tabs");
            var getId = node.id;
            var getSplit = getId.split("_");
            if (getSplit.length == 2) {
                var concateString = getSplit[0] + "_Content";
                for (var i = 0; i < getElementContent.length; i++) {
                    for (
                        var j = 0;
                        j < getElementContent[i].children.length;
                        j++
                    ) {
                        if (
                            getElementContent[i].children[j].id == concateString
                        ) {
                            getElementContent[i].children[j].remove();
                        }
                    }
                }
                for (var i = 0; i < getElementTab.length; i++) {
                    for (var j = 0; j < getElementTab[i].children.length; j++) {
                        if (getElementTab[i].children[j].id == getSplit[0]) {
                            getElementTab[i].children[j].remove();
                            $("#Order_Content").removeClass("my_non_display");
                            $("#Order_Content").addClass("my_display");
                        }
                    }
                }
            } else if (getSplit.length == 3) {
                var concateString =
                    getSplit[0] + "_" + getSplit[1] + "_Content";
                for (var i = 0; i < getElementContent.length; i++) {
                    for (
                        var j = 0;
                        j < getElementContent[i].children.length;
                        j++
                    ) {
                        if (
                            getElementContent[i].children[j].id == concateString
                        ) {
                            getElementContent[i].children[j].remove();
                        }
                    }
                }
                for (var i = 0; i < getElementTab.length; i++) {
                    for (var j = 0; j < getElementTab[i].children.length; j++) {
                        if (
                            getElementTab[i].children[j].id ==
                            getSplit[0] + "_" + getSplit[1]
                        ) {
                            getElementTab[i].children[j].remove();
                            $("#Order_Content").removeClass("my_non_display");
                            $("#Order_Content").addClass("my_display");
                        }
                    }
                }
            }

            // console.log(getSplit[0]);
            // console.log(node.id);
            // console.log(node);

            // console.log(getElementContent);
            // console.log(getElementTab);
        };
    });
});

function logoutbtn() {
    window.location.href = "http://127.0.0.1:8000/adminlogin";
}

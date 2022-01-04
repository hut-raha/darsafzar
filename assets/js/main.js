function userMenu() {
    console.log(document.getElementById("user-menu").getAttribute("data-lock") == "false");
    if (document.getElementById("user-menu").getAttribute("data-lock") == "false") {
        console.log("V");
        if (document.getElementById("user-menu").style.opacity == 0) {
            document.getElementById("user-menu").setAttribute("data-lock", "true");
            document.getElementById("user-menu").style.display = "block";
            setTimeout(function() {
                document.getElementById("user-menu").style.opacity = 1;
            }, 10);
        } else {
            document.getElementById("user-menu").setAttribute("data-lock", "true");
            document.getElementById("user-menu").style.opacity = 0;
            setTimeout(function() {
                document.getElementById("user-menu").style.display = "none";
            }, 500);
        }
        setTimeout(function() {
            document.getElementById("user-menu").setAttribute("data-lock", "false");
        }, 500);
    }
}

function userMenuPage(num) {
    switch (num) {
        case 0:
            window.location.href = "/user/desk";
            break;
        case 1:
            window.location.href = "/user/account";
            break;
        case 2:
            window.location.href = "/user/grades";
            break;
        case 3:
            window.location.href = "/user/messages";
            break;
        case 4:
            window.location.href = "/user/prefrences";
            break;
        case 5:
            window.location.href = "/user/login";
            break;
    }
}

function barMenu() {
    console.log(document.getElementById("content").style.right);
    if (document.getElementById("content").style.right == "0px") {
        document.getElementById("bar-menu").style.left = "80%";
        document.getElementById("content").style.right = "20%";
    } else {
        document.getElementById("bar-menu").style.left = "100%";
        document.getElementById("content").style.right = "0px";
    }
}
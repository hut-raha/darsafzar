function userMenu() {
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
    if (document.getElementById("content").style.right == "0px") {
        document.getElementById("bar-menu").style.left = "80%";
        document.getElementById("content").style.right = "20%";
        document.getElementById("content").style.left = "-20%";
    } else {
        document.getElementById("bar-menu").style.left = "100%";
        document.getElementById("content").style.right = "0px";
        document.getElementById("content").style.left = "0px";
    }
}

function msgBar() {
    if (document.getElementById("content").style.left == "0px") {
        document.getElementById("msg-bar").style.left = "0.5%";
        document.getElementById("content").style.left = "20%";
        document.getElementById("content").style.right = "-20%";
    } else {
        document.getElementById("msg-bar").style.left = "-20%";
        document.getElementById("content").style.left = "0px";
        document.getElementById("content").style.right = "0px";
    }
}

function msgBarOpenDiv(num) {
    if (document.getElementById("msg-bar-menu" + num).style.display == "none") {
        document.getElementById("msg-bar-menu" + num).style.display = "block";
    } else {
        document.getElementById("msg-bar-menu" + num).style.display = "none";
    }
}

function openBellList(num) {
    if (document.getElementById("bell").getElementsByTagName("div")[0].style.display == "none") {
        document.getElementById("bell").getElementsByTagName("div")[0].style.display = "block";
    } else {
        document.getElementById("bell").getElementsByTagName("div")[0].style.display = "none";
    }
}

function toggleDark(element) {
    console.log(document.body.style.backgroundColor);
    if (document.body.style.backgroundColor == "rgb(255, 255, 255)") {
        document.cookie = "username=dark-mode; expires=Thu, 18 Dec 2050 12:00:00 UTC; path=/;"
        element.style.backgroundColor = "rgb(20, 20, 20)";
        document.body.style.backgroundColor = "rgb(20, 20, 20)";
        document.body.style.color = "rgb(255, 255, 255)";
        document.getElementById("msg-bar").style.backgroundColor = "rgb(20, 20, 20)";
        document.getElementById("bar-menu").style.backgroundColor = "rgb(20, 20, 20)";
        document.getElementById("bell").getElementsByTagName("div")[0].style.backgroundColor = "rgb(20, 20, 20)";
        
        document.getElementById("msg-bar").style.color = "rgb(255, 255, 255)";
        document.getElementById("bar-menu").style.color = "rgb(255, 255, 255)";
        document.getElementById("bell").getElementsByTagName("div")[0].style.color = "rgb(255, 255, 255)";
    } else if (document.body.style.backgroundColor == "rgb(20, 20, 20)") {
        document.cookie = "username=dark-mode; expires=Thu, 18 Dec 1970 00:00:00 UTC; path=/;"
        element.style.backgroundColor = "rgb(255, 255, 255)";
        document.body.style.backgroundColor = "rgb(255, 255, 255)";
        document.body.style.color = "rgb(20, 20, 20)";
        document.getElementById("msg-bar").style.backgroundColor = "rgb(255, 255, 255)";
        document.getElementById("bar-menu").style.backgroundColor = "rgb(255, 255, 255)";
        document.getElementById("bell").getElementsByTagName("div")[0].style.backgroundColor = "rgb(255, 255, 255)";
        
        document.getElementById("msg-bar").style.color = "rgb(20, 20, 20)";
        document.getElementById("bar-menu").style.color = "rgb(20, 20, 20)";
        document.getElementById("bell").getElementsByTagName("div")[0].style.color = "rgb(20, 20, 20)";

    }
}

window.onload = function() {
    console.log(document.cookie);
    if (document.cookie != "") {
        document.getElementById("toggle-dark").style.backgroundColor = "rgb(20, 20, 20)";
        document.body.style.backgroundColor = "rgb(20, 20, 20)";
        document.body.style.color = "rgb(255, 255, 255)";
        document.getElementById("msg-bar").style.backgroundColor = "rgb(20, 20, 20)";
        document.getElementById("bar-menu").style.backgroundColor = "rgb(20, 20, 20)";
        document.getElementById("bell").getElementsByTagName("div")[0].style.backgroundColor = "rgb(20, 20, 20)";
        
        document.getElementById("msg-bar").style.color = "rgb(255, 255, 255)";
        document.getElementById("bar-menu").style.color = "rgb(255, 255, 255)";
        document.getElementById("bell").getElementsByTagName("div")[0].style.color = "rgb(255, 255, 255)";
    }
}
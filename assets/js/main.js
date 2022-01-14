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

        document.getElementById("user-menu").style.backgroundColor = "rgb(20, 20, 20)";
        document.getElementById("user-menu").style.color = "rgb(255, 255, 255)";
        if (document.getElementById("lessons-title") != null) {
            document.getElementById("lessons-title").style.color = "rgb(255, 255, 255)";
        }
        document.getElementById("user-menu").getElementsByTagName("div")[0].getElementsByTagName("img")[0].src = "/assets/svg/main/tachometer-alt-white.svg";
        document.getElementById("user-menu").getElementsByTagName("div")[1].getElementsByTagName("img")[0].src = "/assets/svg/main/user-alt-white.svg";
        document.getElementById("user-menu").getElementsByTagName("div")[2].getElementsByTagName("img")[0].src = "/assets/svg/main/table-white.svg";
        document.getElementById("user-menu").getElementsByTagName("div")[3].getElementsByTagName("img")[0].src = "/assets/svg/main/envelope.svg";
        document.getElementById("user-menu").getElementsByTagName("div")[4].getElementsByTagName("img")[0].src = "/assets/svg/main/wrench-white.svg";
        document.getElementById("user-menu").getElementsByTagName("div")[5].getElementsByTagName("img")[0].src = "/assets/svg/main/sign-out-alt-white.svg";

        if (document.getElementsByClassName("dark-in-show")[0] != undefined) {
            document.getElementsByClassName("dark-in-show")[0].getElementsByTagName("li")[1].style.backgroundColor = "#030";
            document.getElementsByClassName("dark-in-show")[1].getElementsByTagName("li")[1].style.backgroundColor = "#030";
            document.getElementsByClassName("dark-in-show")[2].getElementsByTagName("li")[1].style.backgroundColor = "#030";
        }

        if (document.getElementsByClassName("review-question")[0] != undefined) {
            document.getElementsByClassName("review-question")[0].getElementsByTagName("div")[2].style.backgroundColor = "#251e04"
            document.getElementsByClassName("review-question")[1].getElementsByTagName("div")[2].style.backgroundColor = "#251e04"
            document.getElementsByClassName("review-question")[2].getElementsByTagName("div")[2].style.backgroundColor = "#251e04"
            document.getElementsByClassName("review-question")[3].getElementsByTagName("div")[2].style.backgroundColor = "#251e04"
            document.getElementsByClassName("review-question")[4].getElementsByTagName("div")[2].style.backgroundColor = "#251e04"
        }

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

        document.getElementById("user-menu").style.backgroundColor = "rgb(255, 255, 255)";
        document.getElementById("user-menu").style.color = "rgb(0, 0, 0)";
        if (document.getElementById("lessons-title") != null) {
            document.getElementById("lessons-title").style.color = "rgb(0, 0, 0)";
        }
        document.getElementById("user-menu").getElementsByTagName("div")[0].getElementsByTagName("img")[0].src = "/assets/svg/main/tachometer-alt.svg";
        document.getElementById("user-menu").getElementsByTagName("div")[1].getElementsByTagName("img")[0].src = "/assets/svg/main/user-alt.svg";
        document.getElementById("user-menu").getElementsByTagName("div")[2].getElementsByTagName("img")[0].src = "/assets/svg/main/table.svg";
        document.getElementById("user-menu").getElementsByTagName("div")[3].getElementsByTagName("img")[0].src = "/assets/svg/main/envelope-black.svg";
        document.getElementById("user-menu").getElementsByTagName("div")[4].getElementsByTagName("img")[0].src = "/assets/svg/main/wrench.svg";
        document.getElementById("user-menu").getElementsByTagName("div")[5].getElementsByTagName("img")[0].src = "/assets/svg/main/sign-out-alt.svg";

        if (document.getElementsByClassName("dark-in-show")[0] != undefined) {
            document.getElementsByClassName("dark-in-show")[0].getElementsByTagName("li")[1].style.backgroundColor = "#ceeece";
            document.getElementsByClassName("dark-in-show")[1].getElementsByTagName("li")[1].style.backgroundColor = "#ceeece";
            document.getElementsByClassName("dark-in-show")[2].getElementsByTagName("li")[1].style.backgroundColor = "#ceeece";
        }

        if (document.getElementsByClassName("review-question")[0] != undefined) {
            document.getElementsByClassName("review-question")[0].getElementsByTagName("div")[2].style.backgroundColor = "#fff3cd"
            document.getElementsByClassName("review-question")[1].getElementsByTagName("div")[2].style.backgroundColor = "#fff3cd"
            document.getElementsByClassName("review-question")[2].getElementsByTagName("div")[2].style.backgroundColor = "#fff3cd"
            document.getElementsByClassName("review-question")[3].getElementsByTagName("div")[2].style.backgroundColor = "#fff3cd"
            document.getElementsByClassName("review-question")[4].getElementsByTagName("div")[2].style.backgroundColor = "#fff3cd"
        }

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
    if (document.cookie != "") {
        document.getElementById("toggle-dark").style.backgroundColor = "rgb(20, 20, 20)";

        document.getElementById("user-menu").style.backgroundColor = "rgb(20, 20, 20)";
        document.getElementById("user-menu").style.color = "rgb(255, 255, 255)";
        if (document.getElementById("lessons-title") != null) {
            document.getElementById("lessons-title").style.color = "rgb(255, 255, 255)";
        }
        document.getElementById("user-menu").getElementsByTagName("div")[0].getElementsByTagName("img")[0].src = "/assets/svg/main/tachometer-alt-white.svg";
        document.getElementById("user-menu").getElementsByTagName("div")[1].getElementsByTagName("img")[0].src = "/assets/svg/main/user-alt-white.svg";
        document.getElementById("user-menu").getElementsByTagName("div")[2].getElementsByTagName("img")[0].src = "/assets/svg/main/table-white.svg";
        document.getElementById("user-menu").getElementsByTagName("div")[3].getElementsByTagName("img")[0].src = "/assets/svg/main/envelope.svg";
        document.getElementById("user-menu").getElementsByTagName("div")[4].getElementsByTagName("img")[0].src = "/assets/svg/main/wrench-white.svg";
        document.getElementById("user-menu").getElementsByTagName("div")[5].getElementsByTagName("img")[0].src = "/assets/svg/main/sign-out-alt-white.svg";

        if (document.getElementsByClassName("dark-in-show")[0] != undefined) {
            document.getElementsByClassName("dark-in-show")[0].getElementsByTagName("li")[1].style.backgroundColor = "#030";
            document.getElementsByClassName("dark-in-show")[1].getElementsByTagName("li")[1].style.backgroundColor = "#030";
            document.getElementsByClassName("dark-in-show")[2].getElementsByTagName("li")[1].style.backgroundColor = "#030";
        }

        if (document.getElementsByClassName("review-question")[0] != undefined) {
            document.getElementsByClassName("review-question")[0].getElementsByTagName("div")[2].style.backgroundColor = "#251e04"
            document.getElementsByClassName("review-question")[1].getElementsByTagName("div")[2].style.backgroundColor = "#251e04"
            document.getElementsByClassName("review-question")[2].getElementsByTagName("div")[2].style.backgroundColor = "#251e04"
            document.getElementsByClassName("review-question")[3].getElementsByTagName("div")[2].style.backgroundColor = "#251e04"
            document.getElementsByClassName("review-question")[4].getElementsByTagName("div")[2].style.backgroundColor = "#251e04"
        }

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
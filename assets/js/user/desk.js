function lessonPage() {
    window.location.href = "/user/lesson/sad";
}

function activitiesMenu(num) {
    if (document.getElementById("clk-alt").getElementsByTagName("div")[num].style.display == "none") {
        document.getElementById("clk-alt").getElementsByTagName("div")[num].style.display = "block";
    } else {
        document.getElementById("clk-alt").getElementsByTagName("div")[num].style.display = "none";
    }
}

function openList(num) {
    console.log(document.getElementById("card").getElementsByTagName("div"));
    if (document.getElementById("card").getElementsByTagName("div")[num].style.display == "none") {
        document.getElementById("card").getElementsByTagName("div")[num].style.display = "block";
    } else {
        document.getElementById("card").getElementsByTagName("div")[num].style.display = "none";
    }
}
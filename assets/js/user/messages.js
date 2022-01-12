function messageOpenDiv(num) {
    if (document.getElementById("message-menu" + num).style.display == "none") {
        document.getElementById("message-menu" + num).style.display = "block";
    } else {
        document.getElementById("message-menu" + num).style.display = "none";
    }
}
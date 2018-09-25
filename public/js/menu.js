document.querySelector(".navbar-toggler").onclick = function (e) {
    e.preventDefault();
    if (window.getComputedStyle(document.querySelector('#navbarColor01')).display == 'block') {
        document.querySelector("#navbarColor01").style.display = "none";
    } else {
        document.querySelector("#navbarColor01").style.display = "block";
    }
}
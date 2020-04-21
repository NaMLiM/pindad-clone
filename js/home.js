var $a = document.getElementById("nav");
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
        $a.classList.add("scrolled");
    } else {
        $a.classList.remove("scrolled");
    }
}
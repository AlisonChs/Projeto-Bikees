function login () {
    document.getElementById("container-page-landing-cont").style.transition = "ease-in 400ms";
    document.getElementById("container-page-landing-cont").style.filter = "blur(3px)";
    document.getElementById("rotateAnONE").style.animation = "rotate 0.9s";
    document.getElementById("rotateAnTWO").style.animation = "rotate 0.9s";
}

function loginrev () {
    document.getElementById("container-page-landing-cont").style.filter = "blur(0px)";
    document.getElementById("rotateAnONE").style.animation = "rotate 0.9s";
    document.getElementById("rotateAnTWO").style.animation = "rotate 0.9s";
}

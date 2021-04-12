const BoxLoginRegister = document.querySelector("#box-login-register");
const formLogin = document.querySelector("#login");
const formRegister = document.querySelector("#register");


function login() {
    BoxLoginRegister.classList.add("on")
    formLogin.classList.add("on")
    document.querySelector(".container").style.filter = "blur(1px)";
}

function toClose() {
    BoxLoginRegister.classList.remove("on")
    formLogin.classList.remove("on")
    formRegister.classList.remove("on")
    document.querySelector(".container").style.filter = "blur(0px)";
}

function register() {
    formLogin.classList.toggle("on")
    formRegister.classList.toggle("on")
}
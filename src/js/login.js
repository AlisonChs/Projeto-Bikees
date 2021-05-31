const BoxLoginRegister = document.querySelector("#box-login-register");
const formLogin = document.querySelector("#login");
const formRegister = document.querySelector("#register");

function openLoginRegister() {
    BoxLoginRegister.classList.add("on")
    formLogin.classList.add("on")
    fadeIn('login', 0.1)
    fadeIn('box-login-register', 0.1)
}

function toClose() {
    var time = 0.1
    fadeOut('box-login-register', time)
    fadeOut('login', time)
    fadeOut('register', time)
    fadeRemoveClassOnLoginRegister(time+1, 140)
}

function switchRegisterLogin() {
    formRegister.classList.toggle("on")
    formLogin.classList.toggle("on")
}

function fadeRemoveClassOnLoginRegister(time, cont = 140) {
    var timer = (time*1000)/50
    var i = setInterval( () => {
        if (cont <= 0) {    
            formRegister.classList.remove("on")
            formLogin.classList.remove("on")
            BoxLoginRegister.classList.remove("on")
            clearInterval(i);
        } else {
            cont -= 2
        }
    }
    , timer);    
}

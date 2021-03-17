function login () {
    document.getElementById("container-page-landing-cont").style.transition = "ease-in 400ms";
    document.getElementById("container-page-landing-cont").style.filter = "blur(3px)";
    document.getElementById("illustrationLog-box-content-animations").style.animation = "rotate 0.9s";
    document.getElementById("login-box-content-animations").style.animation = "rotate 0.9s";
    document.getElementById("illustrationLog-box-content-animations").style.animation = "back-go 1s";
    document.getElementById("login-box-content-animations").style.animation = "go-back 1s";
}

function register () {
    document.getElementById("register-box-content-animations").style.animation = "rotate 0.9s";
    document.getElementById("illustrationReg-box-content-animations").style.animation = "rotate 0.9s";
    document.getElementById("illustrationReg-box-content-animations").style.animation = "back-go 1s";
    document.getElementById("register-box-content-animations").style.animation = "go-back 1s";   
}

function loginrev () {
    document.getElementById("container-page-landing-cont").style.filter = "blur(0px)";
    document.getElementById("login-box-content-animations").style.animation = "rotate 0.9s";
    document.getElementById("illustrationLog-box-content-animations").style.animation = "rotate 0.9s";
    document.getElementById("illustrationLog-box-content-animations").style.animation = "back-go 1s";
    document.getElementById("login-box-content-animations").style.animation = "go-back 1s";
}

function registerrev () {
    document.getElementById("container-page-landing-cont").style.filter = "blur(0px)";
    document.getElementById("register-box-content-animations").style.animation = "rotate 0.9s";
    document.getElementById("illustrationReg-box-content-animations").style.animation = "rotate 0.9s";
    document.getElementById("illustrationReg-box-content-animations").style.animation = "back-go 1s";
    document.getElementById("register-box-content-animations").style.animation = "go-back 1s";
}

var div = document.getElementById("texto-decorativo-login");
var textos = ['Hoje está um lindo dia!', 'Que tal uma pedalada mais tarde?', 'Fazer esporte é tão bom!', 'Com o meu histórico de bicicletista, certeza que esse corona nem me toca!', 'Bons sonhos...zzZZZzzzz......'];

function escrever(str, done) {
    var char = str.split('').reverse();
    var typer = setInterval(function() {
        if (!char.length) {
            clearInterval(typer);
            return setTimeout(done, 500); // só para esperar um bocadinho
        }
        var next = char.pop();
        div.innerHTML += next;
    }, 100);
}

function limpar(done) {
    var char = div.innerHTML;
    var nr = char.length;
    var typer = setInterval(function() {
        if (nr-- == 0) {
            clearInterval(typer);
            return done();
        }
        div.innerHTML = char.slice(0, nr);
    }, 100);
}

function rodape(conteudos, el) {
    var atual = -1;
	function prox(cb){
		if (atual < conteudos.length - 1) atual++;
		else atual = 0;
		var str = conteudos[atual];
		escrever(str, function(){
			limpar(prox);
		});
	}
	prox(prox);
}
rodape(textos);

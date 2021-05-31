var fadeOut = function (id, time, ini = 100, fin = 0) {
    fade(id, time, ini, fin);
    
}

var fadeIn = function (id, time, ini = 0, fin = 100) {
    fade(id, time, ini, fin);
}

var fade = function(id, time, ini, fin) {
    var target = document.getElementById(id);
    var alpha = ini;
    var inc;
    if (fin >= ini) { 
        inc = 2; 
    } else {
        inc = -2;
    }  
    var i = setInterval(
        function() {
            if (inc > 0 && alpha >= fin) {
                clearInterval(i);  
            } else if (inc < 0 && alpha <= fin) {
                clearInterval(i);
            }

            setAlpha(target, alpha);
            alpha += inc;
        }, ((time*1000)/50));
}

var setAlpha = function (target, alpha) {
    //target.style.filter = "alpha(opacity="+ alpha +")";
    target.style.opacity = alpha/100;
}

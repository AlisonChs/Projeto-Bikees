var fadeRemoveItem = function (id, time, cont = 140) {
    var target = document.getElementById(id)
    var timer = (time*1000)/50
    var i = setInterval( () => {
        if (cont <= 0) {    
            target.parentElement.removeChild(target)
            clearInterval(i);
        } else {
            cont -= 2
        }
    }
    , timer);    
}
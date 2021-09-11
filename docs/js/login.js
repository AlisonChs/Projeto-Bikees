var highlightInputParent = function(id) {
    var target = document.getElementById(id).parentElement
    var image = target.querySelector('img')
    target.style.border = '3px solid rgba(25, 166, 75, 0.479)'

    if (id.indexOf('password') !== -1 || id.indexOf('confirm-password') !== -1) {
        image.src = './media/img/onfocus-password.svg'

    } else if (id.indexOf('email') !== -1) {
        image.src = './media/img/onfocus-email.svg'
        
    } else if (id.indexOf('username') !== -1) {
        image.src = './media/img/onfocus-usuario.svg'
    }
}

var playDownInputParent = function(id) {
    var target = document.getElementById(id).parentElement
    var image = target.querySelector('img')
    target.style.border = '3px solid rgba(25, 166, 75, 0)'

    if (id.indexOf('password') !== -1 || id.indexOf('confirm-password') !== -1) {
        image.src = './media/img/black-password.svg'

    } else if (id.indexOf('email') !== -1) {
        image.src = './media/img/black-email.svg'

    } else if (id.indexOf('username') !== -1) {
        image.src = './media/img/black-usuario.svg'
    }
}
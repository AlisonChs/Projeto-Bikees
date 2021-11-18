const highlight = {
    confirmPassword:input => highlightPassword(input),
    password:input => highlightPassword(input),
    email:input => highlightEmail(input),
    username:input => highlightUser(input),
    fullname:input => highlightFullName(input),
    birthdate:input => highlightBirthdate(input),
    cep:input => highlightCep(input),
    cpf:input => highlightCpf(input)
}

const playDown = {
    confirmPassword:input => playDownPassword(input),
    password:input => playDownPassword(input),
    email:input => playDownEmail(input),
    username:input => playDownUser(input),
    fullname:input => playDownFullName(input),
    birthdate:input => playDownBirthdate(input),
    cep:input => playDownCep(input),
    cpf:input => playDownCpf(input)
}


export function highlightInput(input) {
    const inputType = input.dataset.type

    highlightInputParent(input)
    if(highlight[inputType]) {
        highlight[inputType](input)
    }
}

export function playDownInput(input) {
    const inputType = input.dataset.type

    playDownInputParent(input)
    if(playDown[inputType]) {
        playDown[inputType](input)
    }
}

/*
*********************
General Fuctions
**********************
*/ 
function highlightInputParent(input) {
    var target = input.parentElement
    target.style.border = '3px solid rgba(25, 166, 75, 0.479)'
}

function playDownInputParent(input) {
    var target = input.parentElement
    target.style.border = '3px solid rgba(25, 166, 75, 0)'
}

/*
***************************
Playdown unique fuctions
***************************
*/
function playDownPassword(input) {
    var target = input.parentElement
    var image = target.querySelector('img')
    image.src = './media/img/black-password.svg'
}

function playDownEmail(input) {
    var target = input.parentElement
    var image = target.querySelector('img')
    image.src = './media/img/black-email.svg'
}

function playDownUser(input) {
    var target = input.parentElement
    var image = target.querySelector('img')
    image.src = './media/img/black-usuario.svg'
}

function playDownFullName(input) {
    var target = input.parentElement
    var image = target.querySelector('img')
    image.src = './media/img/black-fullname.svg'
}

function playDownBirthdate(input) {
    var target = input.parentElement
    var image = target.querySelector('img')
    image.src = './media/img/black-birthdate.svg'
}

function playDownCep(input) {
    var target = input.parentElement
    var image = target.querySelector('img')
    image.src = './media/img/black-address.svg'
}

function playDownCpf(input) {
    var target = input.parentElement
    var image = target.querySelector('img')
    image.src = './media/img/black-cpf.svg'
}

/*
****************************
Highlights unique fuctions
****************************
*/
function highlightPassword(input) {
    var target = input.parentElement
    var image = target.querySelector('img')
    image.src = './media/img/onfocus-password.svg'
}

function highlightEmail(input) {
    var target = input.parentElement
    var image = target.querySelector('img')
    image.src = './media/img/onfocus-email.svg'
}

function highlightUser(input) {
    var target = input.parentElement
    var image = target.querySelector('img')
    image.src = './media/img/onfocus-usuario.svg'
}

function highlightFullName(input) {
    var target = input.parentElement
    var image = target.querySelector('img')
    image.src = './media/img/onfocus-fullname.svg'
}

function highlightBirthdate(input) {
    var target = input.parentElement
    var image = target.querySelector('img')
    image.src = './media/img/onfocus-birthdate.svg'
}

function highlightCep(input) {
    var target = input.parentElement
    var image = target.querySelector('img')
    image.src = './media/img/onfocus-address.svg'
}

function highlightCpf(input) {
    var target = input.parentElement
    var image = target.querySelector('img')
    image.src = './media/img/onfocus-cpf.svg'
}
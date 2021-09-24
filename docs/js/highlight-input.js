export function highlightInput(input) {
    const inputType = input.dataset.type

    if(highlight[inputType]) {
        highlightInputParent(input)
        highlight[inputType](input)
    }
}

export function playDownInput(input) {
    const inputType = input.dataset.type

    if(playDown[inputType]) {
        playDownInputParent(input)
        playDown[inputType](input)
    }
}

const highlight = {
    confirmPassword:input => highlightPassword(input),
    password:input => highlightPassword(input),
    email:input => highlightEmail(input),
    username:input => highlightUser(input)
}

const playDown = {
    confirmPassword:input => playDownPassword(input),
    password:input => playDownPassword(input),
    email:input => playDownEmail(input),
    username:input => playDownUser(input)
}


function highlightInputParent(input) {
    var target = input.parentElement
    target.style.border = '3px solid rgba(25, 166, 75, 0.479)'
}

function playDownInputParent(input) {
    var target = input.parentElement
    target.style.border = '3px solid rgba(25, 166, 75, 0)'
}


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
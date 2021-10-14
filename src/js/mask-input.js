export function maskInput(input) {
    const inputType = input.dataset.type

    if(masks[inputType]) {
        masks[inputType](input)
    }
}

const masks = {
    cep:input => maskCep(input),
    fullname:input => maskFullName(input),
    username:input => maskUserName(input),
    password:input => maskPassword(input),
    confirmPassword:input => maskPassword(input),
    cpf:input => maskCpf(input)
}

function maskCep(input) {
    var inputValue = input.value
    inputValue = inputValue.replace(/\s\D/, '')
    inputValue = inputValue.replace(/([0-9]{5})([0-9]{1,})/, "$1-$2")
    input.value = inputValue
}

function maskFullName(input) {
    var inputValue = input.value
    inputValue = inputValue.trimLeft()
    while (inputValue.match(/[\w]{1,}[\s]{2,}[\w]{1,}/)) {
        inputValue = inputValue.replace(/([\w]{1,})([\s]){2,}([\w]{1,})/, '$1 $3')
    }
    inputValue = inputValue.replace(/\d\+\000\xFF\uFFFF\u{FFFF}\cI\cZ\cA\t\n\v\f\r\=´`~\*,\|''\;/, '')
    input.value = inputValue
}

function maskUserName(input) {
    var inputValue = input.value
    inputValue = inputValue.trim()
    inputValue = inputValue.replace(/\d\000\xFF\uFFFF\cI\cZ\cA\t\n\v\f\r/, '')
    input.value = inputValue
}

function maskPassword(input) {
    var inputValue = input.value
    inputValue = inputValue.trim()
    inputValue = inputValue.replace(/\000\xFF\uFFFF\u{FFFF}\cI\cZ\cA\t\n\v\f\r/, '')
    input.value = inputValue
}

function maskCpf(input) {
    var inputValue = input.value
    inputValue = inputValue.trim()
    inputValue = inputValue.replace(/\D/g, '')
    inputValue = inputValue.replace(/([0-9]{3})([0-9]{1,})/, "$1.$2")
    inputValue = inputValue.replace(/([0-9]{3})([0-9]{1,})/, "$1.$2")
    inputValue = inputValue.replace(/([0-9]{3})([0-9]{1,})/, "$1-$2")
    input.value = inputValue
}
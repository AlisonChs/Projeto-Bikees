export function validateInput(input) {
    const inputType = input.dataset.type

    if(validators[inputType]) {
        validators[inputType](input)
    }
}

const validators = {
    confirmPassword:input => checkPasswordValidity(input)
}

function checkPasswordValidity(confirmPassword) {
    var passwordIsEqual = comparePassword(confirmPassword)
    var message = ''
    if (passwordIsEqual) {
        message = 'As senhas devem ser iguais'
    }
    console.log(confirmPassword)
    confirmPassword.setCustomValidity(message)
}

function comparePassword(confirmPassword) {
    const password = document.getElementById("password")
    return password.value != confirmPassword.value
}
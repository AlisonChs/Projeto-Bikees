var inputCepValue

export function validateInput(input) {
    const inputType = input.dataset.type

    if(validators[inputType]) {
        validators[inputType](input)
    }
}

const validators = {
    confirmPassword:input => checkPasswordValidity(input),
    birthdate:input => checkDateValidity(input),
    cep:input => checkCepValidity(input),
    cpf:input => checkCpfValidity(input)
}

function checkPasswordValidity(confirmPassword) {
    var passwordIsEqual = comparePassword(confirmPassword)
    var message = ''
    if (passwordIsEqual) {
        message = 'As senhas devem ser iguais'
    }
    confirmPassword.setCustomValidity(message)
}

function checkDateValidity(input) {
    if (input.value) {
        if (input.classList.contains("empty")) {
            input.classList.remove("empty")
        }
        var birthdate = new Date(input.value)
        var message = ''
        if (checkAgeMajority(birthdate)) {
            message = 'Você precisa ter mais de 18 anos'
        }
        input.setCustomValidity(message)
    } else {
        if (!input.classList.contains("empty")) {
            input.classList.add("empty")
        }        
    }
}

function comparePassword(confirmPassword) {
    const password = document.getElementById("password")
    return password.value != confirmPassword.value
}

function checkAgeMajority(birthdate) {
    const today = new Date()
    const majorityDate = new Date(birthdate.getUTCFullYear() + 18, birthdate.getUTCMonth(), birthdate.getUTCDay())
        
    return majorityDate >= today
}

function checkCepValidity(input) {
    var message = ''
    if (input.value.length == 9) {
        let cep = input.value.replace(/\D/g, '')
        if (cep != inputCepValue) {
            input.setCustomValidity(message)        
            inputCepValue = cep

            if (input.validity.valid) {
                var url = `https://viacep.com.br/ws/${cep}/json/`
                getRequest(url, thisCepIsValid, cannotCheckCepValidity)
            }
        }
    } else {
        message = 'Você precisa digitar o cep completo, com os 8 dígitos!'
    }
    input.setCustomValidity(message)      
}

function thisCepIsValid(cepInJson) {
    var cepInput = document.getElementById('cep');
    let message = ''
    if (!cepInJson['erro']) {
        var address = ["logradouro", "complemento", "bairro", "localidade", "uf", "ibge", "gia", "ddd", "siafi"]

        address.forEach(addressElement => {
            var newInput = document.getElementById(addressElement);
            if(cepInJson[addressElement]) {
                newInput.value = cepInJson[addressElement]    
            } else {
                newInput.value = null
            }
        })
    } else {
        message = 'O CEP digitado não é válido!'
    }
    cepInput.setCustomValidity(message) 
}

function cannotCheckCepValidity(reqStatus) {
    console.error(reqStatus);
}

function checkCpfValidity(input) {
    const formattedCpf = input.value.replace(/\D/g, '')
    let message = ''

    if (!checkDuplicateCpf(formattedCpf) || !checkCpfStructureValidity(formattedCpf)) {
        message = 'O CPF digitado não é válido'
    }

    input.setCustomValidity(message)
}

function checkCpfStructureValidity(cpf) {
    const multiplier = 10
    return checkVerificationNumber(cpf, multiplier)
}

function checkVerificationNumber(cpf, multiplier) {
    if (multiplier >= 12) {
        return true
    }

    let initialMultiplier = multiplier
    let amount = 0
    const cpfWithoutDigits = cpf.substr(0, multiplier - 1).split('')
    const verificationNumber = cpf.charAt(multiplier - 1)
    
    for(let count = 0; initialMultiplier > 1; initialMultiplier--) {
        amount += (Number(cpfWithoutDigits[count]) * Number(initialMultiplier))
        count++
    }

    if (verificationNumber == confirmCpfDigit(amount)) {
        return checkVerificationNumber(cpf, multiplier + 1)
    }

    return false
}

function confirmCpfDigit(amount) {
    amount = Number(amount)
    let conta = (11 - (amount % 11))
    return conta
}

function checkDuplicateCpf(cpf) {
    const duplicatesValues = [
        "00000000000",
        "11111111111",
        "22222222222",
        "33333333333",
        "44444444444",
        "55555555555",
        "66666666666",
        "77777777777",
        "88888888888",
        "99999999999",
    ]

    let cpfIsValid = true

    duplicatesValues.forEach(value => {
        if(value == cpf) {
            cpfIsValid = false
        }
    })

    return cpfIsValid
}

/**************
REQUEST FUNCTION
***************/
async function getRequest(url, success, error) {
    const options = {
        method: 'GET',
        mode: 'cors',
        headers: {
            'content-type': 'application/json;charset=utf-8'
        }
    }

    if (typeof success != 'function') success = function () {};
    if (typeof error!= 'function') error = function () {};

    try {
        const response = await fetch(url, options)
        const data = await response.json()
        success(data)
    } catch (e) {
        error(e)
    }
}
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
        if (input.value != inputCepValue) {
            input.setCustomValidity(message)        
            inputCepValue = input.value

            if (input.validity.valid) { 
                inputCepValue = inputCepValue.replace(/\s\D/, '')
                var url = "https://viacep.com.br/ws/" + inputCepValue + "/json/"
                getRequest(url, thisCepIsValid, cannotCheckCepValidity);
            }
        }
    } else {
        message = 'Você precisa digitar o cep completo, com os 8 dígitos!'
    }
    input.setCustomValidity(message)      
}

function thisCepIsValid(cepInString) {
    var cepInJson = JSON.parse(cepInString)
    var address = ["cep", "logradouro", "complemento", "bairro", "localidade", "uf", "ibge", "gia", "ddd", "siafi"]
    var input = document.querySelector("input#cep")
    var message = ''

    if (!("erro" in cepInJson)) {
        address.forEach(addressElement => {
            var newInput = document.getElementById(addressElement);
            if(cepInJson[addressElement]) {
                newInput.value = cepInJson[addressElement]    
            } else {
                newInput.value = null
            }
        })
    } else {
        message = 'Você precisa digitar um cep válido!'
    }
    input.setCustomValidity(message)
}

function cannotCheckCepValidity(reqStatus) {
    console.error(reqStatus);
}

function checkCpfValidity(input) {
    const formattedCpf = input.value.replace('/\D/g', '')
    let message = ''

    if (!checkDuplicateCpf(formattedCpf)) {
        message = 'O CPF digitado não é válido'
    }

    input.setCustomValidity(message)
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
function getRequest(url, success, error) {
    var req = false;

    try{
        // most browsers
        req = new XMLHttpRequest();
    } catch (e){
        // IE
        try{
            req = new ActiveXObject("Msxml2.XMLHTTP");
        } catch(e) {
            // try an older version
            try{
                req = new ActiveXObject("Microsoft.XMLHTTP");
            } catch(e) {
                return false;
            }
        }
    }
    
    if (!req) return false;
    if (typeof success != 'function') success = function () {};
    if (typeof error!= 'function') error = function () {};
    req.onreadystatechange = function(){
        if(req.readyState == 4) {
            return req.status === 200 ?
                success(req.responseText) : error(req.status);
        }
    }

    req.open("GET", url, true);
    req.send(null)
    return req;
}
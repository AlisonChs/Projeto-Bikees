import { validateInput } from "./validate-input.js";
import { highlightInput } from "./highlight-input.js";
import { playDownInput } from "./highlight-input.js";
import { maskInput } from "./mask-input.js";

const inputs = document.querySelectorAll('input')
inputs.forEach(input => {
    input.addEventListener('blur', (event) => {
        validateInput(event.target)
    })    
    input.addEventListener('keypress', (event) => {
        maskInput(event.target)
    })
    input.addEventListener('keyup', (event) => {
        maskInput(event.target)
    })
})

const specialInputs = document.querySelectorAll('.special-input input')
specialInputs.forEach(input => {
    input.addEventListener('blur', (event) => {
        playDownInput(event.target)
    })

    input.addEventListener('focus', (event) => {
        highlightInput(event.target)
    })    
})

console.log(specialInputs)
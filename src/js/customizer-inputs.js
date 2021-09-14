import {validateInput} from "./validate-input.js";
import { highlightInput } from "./highlight-input.js";
import { playDownInput } from "./highlight-input.js";
import { maskInput } from "./mask-input.js";

const inputs = document.querySelectorAll('input')
inputs.forEach(input => {
    input.addEventListener('blur', (event) => {
        validateInput(event.target)
        playDownInput(event.target)
    })
    input.addEventListener('focus', (event) => {
        highlightInput(event.target)

    })    
    input.addEventListener('keypress', (event) => {
        maskInput(event.target)
    })
    input.addEventListener('keyup', (event) => {
        maskInput(event.target)
    })
})
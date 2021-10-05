var btnext = document.getElementById('bt-next')
var btsubmit = document.getElementById('bt-submit')

var one = document.getElementById("1")
var two = document.getElementById("2")
var three = document.getElementById("3")


window.addEventListener('DOMContentLoaded', () => {
    two.classList.add('dsp-none')
    three.classList.add('dsp-none')

    btsubmit.classList.add('dsp-none')
})

let section = 1;

// Section 1 (one) -> Section 2 (two) -> Section 3 (three)

btnext.addEventListener('click', (event) => { 

    section++;

    function jumpTo2ndSection() {
        one.classList.add('dsp-none')
        two.classList.remove('dsp-none')
    }

    function jumpTo3ndSection() {
        two.classList.add('dsp-none')
        three.classList.remove('dsp-none')

        btsubmit.classList.remove('dsp-none')
        btnext.classList.add('dsp-none')
    }

    section === 2 ?  jumpTo2ndSection() : jumpTo3ndSection()
    
})





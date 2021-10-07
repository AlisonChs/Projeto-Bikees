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

// Choose-a-bikee

// Temporary/Basic function to passing bikees

const color = $('.color');

color.each(function() {

    $(this).on("click", function () {

        var idx = $(this).attr('data-idx');

        const imgs = document.getElementById('carousel');
        
        if (color.hasClass('selected')) {
            color.removeClass('selected') // Remove a classe "selecionado" de quaisquer divs que a contenham
        }

        $(this).addClass('selected') // Adiciona a classe "selecionado" a div que foi clicada

        setTimeout(function(){ $(this).css('position', 'absolute'); }, 3000);
        
        if (idx == 0) {
            imgs.style.transform = `translateX(152%)`;
        }

        else if (idx == 1) {
            imgs.style.transform = `translateX(60%)`;
        }

        else if (idx == 2) {
            imgs.style.transform = `translateX(-32%)`;
        }

        else {
            imgs.style.transform = `translateX(-124%)`;
        }

    })
    
})






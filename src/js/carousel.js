// This carousel needs clean

const imgs = document.querySelector("#slider_one");
const img = document.querySelectorAll("#slider_one img");

const imgs_2 = document.querySelector("#slider_two");
const img_2 = document.querySelectorAll("#slider_two img");

let idz = 0;
let idx = 0;

function carousel () {
    idx++;

    if (idx > img.length - 1) {
        idx = 0;
    }

    imgs.style.transform = `translateX(${-idx * 100}%)`;
}

setInterval(carousel, 2000);

// 2nd carousel


function carouseltwo () {
    idz++;

    if (idz > img_2.length - 1) {
        idz = 0;
    }

    imgs_2.style.transform = `translateX(${-idz * 100}%)`;
}

setInterval(carouseltwo, 1800);


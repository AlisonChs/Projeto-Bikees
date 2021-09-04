window.addEventListener('DOMContentLoaded', () => {
    var preloader = document.getElementById('preloader')
    var time = 1.2 * 1000
    preloader.classList.add('fade-out')
    setTimeout(() => {preloader.parentElement.removeChild(preloader)}, time)
})

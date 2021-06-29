let show = true;

const menuSection = document.querySelector(".menu-section");

menuSection.addEventListener("click", () => {
    menuSection.classList.toggle("on", show);
    show = !show;
})
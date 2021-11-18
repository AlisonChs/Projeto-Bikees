let show = true;

const menuSection = document.querySelector(".menu-section");
if (menuSection) {
        menuSection.addEventListener("click", () => {
        menuSection.classList.toggle("on", show);
        show = !show;
    })
}
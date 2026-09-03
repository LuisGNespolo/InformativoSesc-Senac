const menu = document.getElementById("collapseMenu");
const toggleOpen = document.getElementById("toggleOpen");
const toggleClose = document.getElementById("toggleClose");


// Abrir menu
toggleOpen.addEventListener("click", () => {
    menu.classList.remove("hidden");
    toggleOpen.setAttribute("aria-expanded", "true");
});


// Fechar menu
toggleClose.addEventListener("click", () => {
    menu.classList.add("hidden");
    toggleOpen.setAttribute("aria-expanded", "false");
});





const carousel = document.getElementById("professoresCarousel");
const nextButton = document.getElementById("nextProfessor");
const prevButton = document.getElementById("prevProfessor");

let professorIndex = 0;

nextButton.addEventListener("click", () => {
    professorIndex++;

    const professorWidth = carousel.children[0].offsetWidth + 16;

    if (professorIndex > carousel.children.length - 1) {
        professorIndex = 0;
    }

    carousel.style.transform = `translateX(-${professorIndex * professorWidth}px)`;
});

prevButton.addEventListener("click", () => {
    professorIndex--;

    const professorWidth = carousel.children[0].offsetWidth + 16;

    if (professorIndex < 0) {
        professorIndex = carousel.children.length - 1;
    }

    carousel.style.transform = `translateX(-${professorIndex * professorWidth}px)`;
});
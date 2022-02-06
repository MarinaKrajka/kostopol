const hamburger_menu = document.querySelector(".hamburger-menu");
const content = document.querySelector(".content");
const container = document.querySelector(".container");
const mobil = window.matchMedia("screen and (max-width: 649px)");

hamburger_menu.addEventListener("click", () => {
    content.classList.toggle("active");
    container.classList.toggle("active");
    if (mobil.matches) {
        content.classList.toggle("mob");
    }
    
});

mobil.addEventListener("change", () => {
     {
         //делаем проверку mobil
         alert ("hhhhhhhhhhhhh")
        
    }
    
});

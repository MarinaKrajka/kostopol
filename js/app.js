const hamburger_menu = document.querySelector(".hamburger-menu");
const container = document.querySelector(".container");
const content = document.querySelector(".content");
const mobil = window.matchMedia("screen and (max-width: 649px)");
                              

hamburger_menu.addEventListener("click", () => {
  container.classList.toggle("active");
    content.classList.toggle("active");
  if (mobile.matches) {
    content.classList.toggle("mob");
  }

});


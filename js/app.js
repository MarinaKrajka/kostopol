const hamburger_menu = document.querySelector(".hamburger-menu");
const container = document.querySelector(".container");
const content = document.querySelector(".content");

hamburger_menu.addEventListener("click", () => {
  container.classList.toggle("active");
    content.classList.toggle("active");

});


const hamburger_menu = document.querySelector(".hamburger-menu");
const container = document.querySelector(".container");
const gerbActive = document.querySelector(".gerb");

hamburger_menu.addEventListener("click", () => {
  container.classList.toggle("active");
  gerbActive.classList.toggle("active");

});



const hamburger_menu = document.querySelector(".hamburger-menu");
const content = document.querySelector(".content");
const container = document.querySelector(".container");
const mobil = window.matchMedia("screen and (max-width: 422px)");

//const  detskop = window.matchMedia("min-width: 650px");

hamburger_menu.addEventListener("click", () => {
    content.classList.toggle("active");
    container.classList.toggle("active");
    if (mobil.matches) {
        content.classList.toggle("mob");
    }
    
});


//function screenTest(e) {
 // if (e.matches) {

   // container.classList.toggle("active");
  //} else {

    //document.body.style.backgroundColor = 'blue';
  //}
//}

//mobil.addEventListener('change', screenTest);

mobil.addEventListener("change", () => {
    
    document.location.reload();
    
    
        //alert ("yyyyyyyyyyyyyyyyyy");
    
         //делаем проверку mobil
         //mobil.addEventListener('change');
         
    
});


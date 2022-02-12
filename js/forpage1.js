
const linksP = document.querySelector(".links");
//let obj_list = document.querySelector("#list");
//let linkStyles = linksP.style;

/*let aLinks = obj_list.querySelectorAll("li");*/
let aLinks = document.querySelectorAll(".links a");
//let linkLi = linksP.children; 
// Get a NodeList of all .demo elements
//const demoClasses = document.querySelectorAll('.demo-class');

// Change the text of multiple elements with a loop


// Access the first element in the NodeList
//aLinks[0];



//aLinks = Array.from(aLinks);


//let aStyles = aLinks.style;
//let aLinks = document.querySelectorAll("div.links a");
//let child = aLinks.childNodes;
/*alert(child[1]);
/*let aStyle = aLinks.style;
aStyle.fontSize = "5px";
/*linksStyles.background = "white";*/
// Получаем инлайновые стили элемента (если таковые имеются) 
//let linksStyles = linksP.style.cssText; 

// Удаляем существующие стили и заменяем их на новые 
//linksStyles.cssText = 'color: red; font-size: 3rem;';
/*let aaaa = aLinks.querySelector("a");
/*const aLink = document.querySelector("ul > a");

/*let obj_List = document.querySelector("#list");
let linksliP = obj_List.document.querySelectorAll("li");
let aLink = linksliP.document.querySelectorAll("a");*/
var el2 = aLinks[2];


const page1 = window.matchMedia("screen and (max-height: 490px)");

hamburger_menu.addEventListener("click", () => {

    if (page1.matches) {
        linksP.style.marginTop = "45px";
        linksP.style.right = "3px";
        linksP.style.height = "71vh";
        /*linkStyles.background = "red";*/
        aLinks.forEach(element => {
  element.style.fontSize = '0.7rem';
});
aLinks.forEach(element => {
    el2.textContent = "Влас, посмотри! Ну наконец то!!!"
});
alert("Я заменил 3 пункт меню. Его видно только на этой странице и только в горизонтальном положении");
    }
    
});
console.log(el2);
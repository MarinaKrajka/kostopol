/*вычисление, когда блок попадает в вьюпорт
var block_show = null;
let imageApear = document.querySelectorAll(".images");

function scrollTracking(){
	var wt = $(window).scrollTop();
	var wh = $(window).height();
	var et = $('.images').offset().top;
	var eh = $('.images').outerHeight();
	
	if (et >= wt && et + eh <= wh + wt){
		if (block_show == null || block_show == false) {
			alert("Меню в зоне полной видимости");
			
		}
		block_show = true;
	} else {
		if (block_show == null || block_show == true) {
			alert("goodbyyyyyy")
			
		}
		block_show = false;
	} 
}
 
$(window).scroll(function(){
	scrollTracking();
});
	
$(document).ready(function(){ 
	scrollTracking();
});
console.log(imageApear);*/
function onEntry(entry) {
	entry.forEach(change => {
	  if (change.isIntersecting) {
	   change.target.classList.add('show');
	  }
	});
  }
  
  let options = {
	threshold: [0.5] };
  let observer = new IntersectionObserver(onEntry, options);
  let elements = document.querySelectorAll('.images');
  
  for (let elm of elements) {
	observer.observe(elm);
  }
  
  
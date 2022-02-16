function onEntry(entry) {
	entry.forEach(change => {
	  if (change.isIntersecting) {
	   change.target.classList.add('show');
	  }
	});
  }
  
  let optionss = {
	threshold: [0.5] };
  let observerr = new IntersectionObserver(onEntry, optionss);
  let elementss = document.querySelectorAll('.whoare');
  
  for (let elm of elementss) {
	observerr.observe(elm);
  }

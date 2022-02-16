/*(function (window, document, undefined) {
    'use strict';
    if (!('localStorage' in window)) return;
    var checkedMode = localStorage.getItem('checkedMode');
    if (checkedMode) {
        document.documentElement.className += ' checked';
    }
})(window, document);


(function (window, document, undefined) {

    'use strict';

    // Feature test
    if (!('localStorage' in window)) return;

    // Get our newly insert toggle
    var checkedMode = document.getElementsByTagName('li');
    if (!checkedMode) return;

    // When clicked, checked mode on or off
    checkedMode.addEventListener('click', function (event) {
        event.preventDefault();
        document.documentElement.classList.toggle('checked');
        if ( document.documentElement.classList.contains('checked') ) {
            localStorage.setItem('checkedMode', true);
            return;
        }
        localStorage.removeItem('checkedMode');
    }, false);

})(window, document);

console.log(checkedMode);*/
function cssClick(e){
    abg=document.getElementsByClassName('act');
    if (abg) {
        for (var i = 0; i<abg.length; i++) {
            abg[i].className='notact';
        }
    }
    e.className='act';

}

console.log();
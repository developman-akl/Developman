// require('alpinejs');

// import Alpine from 'alpinejs'

// window.Alpine = Alpine

// Alpine.start()

var $searchlight = $(".header_city_signal");
var tl = new TimelineMax();
tl.fromTo($searchlight, 5, { rotation: -1, x: -10, y: -25, skewX: -4, transformOrigin: "0px 0px 0px", scale: 1 }, { rotation: 1, x: 10, repeat: -1, yoyo: true, ease: Power1.easeInOut, }, "-=20");


$(document).ready(function () {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });

});
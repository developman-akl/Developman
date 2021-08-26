import Alpine from 'alpinejs'
import intersect from '@alpinejs/intersect'

Alpine.plugin(intersect)
window.Alpine = Alpine
Alpine.start()

import anime from 'animejs/lib/anime.es.js';

var $searchlight = $(".header_city_signal");
var tl = new TimelineMax();
tl.fromTo($searchlight, 5, { rotation: -1, x: -10, y: -25, skewX: -4, transformOrigin: "0px 0px 0px", scale: 1 }, { rotation: 1, x: 10, repeat: -1, yoyo: true, ease: Power1.easeInOut, }, "-=20");


$(document).ready(function(){
	$('#nav-icon2').click(function(){
		$(this).toggleClass('open');
    });

    $('a[href^="#"]').on('click', function(event) {
        var target = $(this.getAttribute('href'));
        if ( target.length ) {
            event.preventDefault();
            $('html, body').stop().animate({
                scrollTop: target.offset().top
            }, 1000);
        }
    });
});

// Wrap every letter in a span
var textWrappers = document.querySelectorAll('.text-fade-in  .letters');
textWrappers.forEach(function(textWrapper) {
    textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");
});

anime.timeline({loop: false})
  .add({
    targets: '.text-fade-in  .letter',
    rotateY: [-90, 0],
    duration: 1300,
    delay: (el, i) => 45 * i
});

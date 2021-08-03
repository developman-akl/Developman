import Alpine from 'alpinejs'
import intersect from '@alpinejs/intersect'

Alpine.plugin(intersect)
window.Alpine = Alpine
Alpine.start()

import anime from 'animejs/lib/anime.es.js';

var $searchlight = $(".header_city_signal");
var tl = new TimelineMax();
tl.fromTo($searchlight, 5, { rotation: -1, x: -10, y: -25, skewX: -4, transformOrigin: "0px 0px 0px", scale: 1 }, { rotation: 1, x: 10, repeat: -1, yoyo: true, ease: Power1.easeInOut, }, "-=20");

// var ScrollIntoViewOptions = {
//     alignToTop: false,
//     behavior: 'smooth',
// };

$(document).ready(function(){
	$('#nav-icon2').click(function(){
		$(this).toggleClass('open');
    });

    // document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    //     anchor.addEventListener('click', function (e) {
    //         e.preventDefault();
    //         document.querySelector(this.getAttribute('href')).scrollIntoView(ScrollIntoViewOptions);
    //     });
    // });

    $('a[href^="#"]').on('click', function(event) {
        var target = $(this.getAttribute('href'));
        if ( target.length ) {
            event.preventDefault();
            $('html, body').stop().animate({
                scrollTop: target.offset().top
            }, 1000);
        }
    });

    // $('a[href*="#"]')
    // .not('[href="#"]')
    // .not('[href="#0"]')
    // .click(function(event) {
    //     // On-page links
    //     debugger;
    //     if (
    //         location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
    //         && 
    //         location.hostname == this.hostname
    //     ) {
    //         // Figure out element to scroll to
    //         var target = $(this.hash);
    //         target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
    //         // Does a scroll target exist?
    //         if (target.length) {
    //             // Only prevent default if animation is actually gonna happen
    //             event.preventDefault();
    //             $('html, body').stop().animate({
    //                 scrollTop: target.offset().top
    //             }, 1000, function() {
    //                 // Callback after animation
    //                 // Must change focus!
    //                 var $target = $(target);
    //                 $target.focus();
    //                 if ($target.is(":focus")) { // Checking if the target was focused
    //                     return false;
    //                 } else {
    //                     $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
    //                     $target.focus(); // Set focus again
    //                 };
    //             });
    //         }
    //     }
    // });
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

// Select all links with hashes
// $('a[href*="#"]')
//   // Remove links that don't actually link to anything
//   .not('[href="#"]')
//   .not('[href="#0"]')
//   .click(function(event) {
//     // On-page links
//     if (
//       location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
//       && 
//       location.hostname == this.hostname
//     ) {
//       // Figure out element to scroll to
//       var target = $(this.hash);
//       target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
//       // Does a scroll target exist?
//       if (target.length) {
//         // Only prevent default if animation is actually gonna happen
//         event.preventDefault();
//         $('html, body').animate({
//           scrollTop: target.offset().top
//         }, 1000, function() {
//           // Callback after animation
//           // Must change focus!
//           var $target = $(target);
//           $target.focus();
//           if ($target.is(":focus")) { // Checking if the target was focused
//             return false;
//           } else {
//             $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
//             $target.focus(); // Set focus again
//           };
//         });
//       }
//     }
//   });
/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/blob.js":
/*!******************************!*\
  !*** ./resources/js/blob.js ***!
  \******************************/
/***/ (function() {

var _this5 = this;

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

// **
//  * blob.js
//  * http://www.codrops.com
//  *
//  * Licensed under the MIT license.
//  * http://www.opensource.org/licenses/mit-license.php
//  * 
//  * Copyright 2018, Codrops
//  * http://www.codrops.com
//  */
{
  // From https://davidwalsh.name/javascript-debounce-function.
  var debounce = function debounce(func, wait, immediate) {
    var timeout;
    return function () {
      var context = this,
          args = arguments;

      var later = function later() {
        timeout = null;
        if (!immediate) func.apply(context, args);
      };

      var callNow = immediate && !timeout;
      clearTimeout(timeout);
      timeout = setTimeout(later, wait);
      if (callNow) func.apply(context, args);
    };
  };

  ;

  var Blob = /*#__PURE__*/function () {
    function Blob(el, options) {
      _classCallCheck(this, Blob);

      this.DOM = {};
      this.DOM.el = el;
      this.options = {};
      Object.assign(this.options, options);
      this.init();
    }

    _createClass(Blob, [{
      key: "init",
      value: function init() {
        var _this = this;

        this.rect = this.DOM.el.getBoundingClientRect();
        this.descriptions = [];
        this.layers = Array.from(this.DOM.el.querySelectorAll('path'), function (t) {
          t.style.transformOrigin = "".concat(_this.rect.left + _this.rect.width / 2, "px ").concat(_this.rect.top + _this.rect.height / 2, "px");
          t.style.opacity = 0;

          _this.descriptions.push(t.getAttribute('d'));

          return t;
        });
        window.addEventListener('resize', debounce(function () {
          _this.rect = _this.DOM.el.getBoundingClientRect();

          _this.layers.forEach(function (layer) {
            return layer.style.transformOrigin = "".concat(_this.rect.left + _this.rect.width / 2, "px ").concat(_this.rect.top + _this.rect.height / 2, "px");
          });
        }, 20));
      }
    }, {
      key: "intro",
      value: function intro() {
        anime.remove(this.layers);
        anime({
          targets: this.layers,
          duration: 1800,
          delay: function delay(t, i) {
            return i * 120;
          },
          easing: [0.2, 1, 0.1, 1],
          scale: [0.2, 1],
          opacity: {
            value: [0, 1],
            duration: 300,
            delay: function delay(t, i) {
              return i * 120;
            },
            easing: 'linear'
          }
        });
      }
    }, {
      key: "expand",
      value: function expand() {
        var _this2 = this;

        return new Promise(function (resolve, reject) {
          var halfway = false;
          anime({
            targets: _this2.layers,
            duration: 1000,
            delay: function delay(t, i) {
              return i * 50 + 200;
            },
            easing: [0.8, 0, 0.1, 0],
            d: function d(t) {
              return t.getAttribute('pathdata:id');
            },
            update: function update(anim) {
              if (anim.progress > 75 && !halfway) {
                halfway = true;
                resolve();
              }
            }
          });
        });
      }
    }, {
      key: "collapse",
      value: function collapse() {
        var _this3 = this;

        return new Promise(function (resolve, reject) {
          var halfway = false;
          anime({
            targets: _this3.layers,
            duration: 800,
            delay: function delay(t, i, total) {
              return (total - i - 1) * 50 + 400;
            },
            easing: [0.2, 1, 0.1, 1],
            d: function d(t, i) {
              return _this3.descriptions[i];
            },
            update: function update(anim) {
              if (anim.progress > 75 && !halfway) {
                halfway = true;
                resolve();
              }
            }
          });
        });
      }
    }, {
      key: "hide",
      value: function hide() {
        anime.remove(this.layers);
        anime({
          targets: this.layers,
          duration: 800,
          delay: function delay(t, i, total) {
            return (total - i - 1) * 80;
          },
          easing: 'easeInOutExpo',
          scale: 0,
          opacity: {
            value: 0,
            duration: 500,
            delay: function delay(t, i, total) {
              return (total - i - 1) * 80;
            },
            easing: 'linear'
          }
        });
      }
    }, {
      key: "show",
      value: function show() {
        var _this4 = this;

        setTimeout(function () {
          return _this4.intro();
        }, 400);
      }
    }]);

    return Blob;
  }();

  ;
  window.Blob = Blob;
  var DOM = {};
  var blobs = [];
  DOM.svg = document.querySelector('svg.scene');
  Array.from(DOM.svg.querySelectorAll('g')).forEach(function (el) {
    var blob = new Blob(el);
    blobs.push(blob);
    blob.intro();
  });
  DOM.content = document.querySelector('.content--reveal');
  DOM.contentInner = Array.from(DOM.content.querySelectorAll('.content__inner'), function (el) {
    charming(el);
    return el;
  });
  DOM.ctrlBack = DOM.content.querySelector('.content__close');
  DOM.links = Array.from(document.querySelectorAll('.menu > .menu__item'));
  DOM.links.forEach(function (link, pos) {
    link.style.pointerEvents = 'none';
    charming(link);
    anime({
      targets: link.querySelectorAll('span'),
      duration: 800,
      delay: function delay(t, i) {
        return anime.random(0, 600) + 500;
      },
      easing: 'easeInOutQuad',
      opacity: [0, 1],
      complete: function complete() {
        link.style.pointerEvents = 'auto';
        link.classList.add('menu__item--showDeco');
      }
    });
    link.addEventListener('click', function (ev) {
      ev.preventDefault();
      open(pos);
    });
  });
  DOM.ctrlBack.addEventListener('click', function () {
    return close();
  });
  var current;

  var open = function open(pos) {
    _this5.isOpen = true;
    anime({
      targets: DOM.links.map(function (link) {
        return link.querySelectorAll('span');
      }),
      delay: function delay(t, i) {
        return anime.random(0, 300);
      },
      duration: 200,
      easing: 'easeInOutQuad',
      opacity: 0,
      begin: function begin() {
        return DOM.links.forEach(function (link) {
          link.style.pointerEvents = 'none';
          link.classList.remove('menu__item--showDeco');
        });
      }
    });
    current = pos;
    var currentBlob = blobs[current];
    currentBlob.expand().then(function () {
      DOM.content.style.pointerEvents = 'auto';
      var contentInner = DOM.contentInner[pos];
      contentInner.style.opacity = 1;
      anime({
        targets: [contentInner.querySelectorAll('.content__title > span'), contentInner.querySelectorAll('.content__subtitle > span'), DOM.ctrlBack],
        duration: 200,
        delay: function delay(t, i) {
          return anime.random(0, 600);
        },
        easing: 'easeInOutQuad',
        opacity: [0, 1]
      });
    });
    blobs.filter(function (el) {
      return el != currentBlob;
    }).forEach(function (blob) {
      return blob.hide();
    });
  };

  var close = function close() {
    if (!_this5.isOpen) return;
    _this5.isOpen = false;
    var contentInner = DOM.contentInner[current];
    anime({
      targets: [contentInner.querySelectorAll('.content__title > span'), contentInner.querySelectorAll('.content__subtitle > span'), DOM.ctrlBack],
      delay: function delay(t, i) {
        return anime.random(0, 300);
      },
      duration: 200,
      easing: 'easeInOutQuad',
      opacity: 0,
      complete: function complete() {
        contentInner.style.opacity = 0;
        DOM.content.style.pointerEvents = 'none';
      }
    });
    blobs[current].collapse().then(function () {
      current = -1;
      anime({
        targets: DOM.links.map(function (link) {
          return link.querySelectorAll('span');
        }),
        duration: 200,
        delay: function delay(t, i) {
          return anime.random(0, 600);
        },
        easing: 'easeInOutQuad',
        opacity: 1,
        complete: function complete() {
          return DOM.links.forEach(function (link) {
            link.style.pointerEvents = 'auto';
            link.classList.add('menu__item--showDeco');
          });
        }
      });
    });
    blobs.filter(function (el) {
      return el != blobs[current];
    }).forEach(function (blob) {
      return blob.show();
    });
  };
}
;

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module is referenced by other modules so it can't be inlined
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/js/blob.js"]();
/******/ 	
/******/ })()
;
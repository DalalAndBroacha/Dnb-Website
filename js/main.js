$(document).ready(function(){
    init_map();
    /*dataWord ();*/
});

(function ($) {
    /**
     * Copyright 2012, Digital Fusion
     * Licensed under the MIT license.
     * http://teamdf.com/jquery-plugins/license/
     *
     * @author Sam Sehnert
     * @desc A small plugin that checks whether elements are within
     * the user visible viewport of a web browser.
     * only accounts for vertical position, not horizontal.
     */
    $.fn.visible = function (partial, hidden, container) {

        var $t = $(this).eq(0),
            t = $t.get(0),
            $w = (container != null ? container : $(window)),
            viewTop = (container != null ? 0 : $w.scrollTop()),
            viewBottom = viewTop + $w.height(),
            _top = $t.offset().top,
            _bottom = _top + $t.height(),
            compareTop = partial === true ? _bottom : _top,
            compareBottom = partial === true ? _top : _bottom,
            clientSize = hidden === true ? t.offsetWidth * t.offsetHeight : true;
        return !!clientSize && ((compareBottom <= viewBottom) && (compareTop >= viewTop));
     };
})(jQuery);

var win = $(window);
var allMods = $(".module");
var leftMods = $(".module-left");
var rightMods = $(".module-right");
var upMods = $(".module-up");
var zoomInMods = $(".module-zoom-in");
var zoomOutMods = $(".module-zoom-out");
var fadeInMods = $(".module-fade-in");
var fadeOutMods = $(".module-fade-out");

// Already visible modules
allMods.each(function(i, el) {
  var el = $(el);
  if (el.visible(true)) {
    el.addClass("already-visible");
      el.removeClass("module"); 
  } 
});

win.scroll(function(event) {
  
  leftMods.each(function(i, el) {
    var el = $(el);
    if (el.visible(true)) {
      /*el.addClass("come-in");*/ el.removeClass("module"); 
      /*el.addClass("come-in");*/ el.addClass("animated slideInLeft"); 
    } 
  });
  rightMods.each(function(i, el) {
    var el = $(el);
    if (el.visible(true)) {
      /*el.addClass("come-in");*/ el.removeClass("module"); 
      /*el.addClass("come-in");*/ el.addClass("animated slideInRight"); 
    } 
  });
  upMods.each(function(i, el) {
    var el = $(el);
    if (el.visible(true)) {
      /*el.addClass("come-in");*/ el.removeClass("module"); 
      /*el.addClass("come-in");*/ el.addClass("animated slideInUp"); 
    } 
  });
  zoomInMods.each(function(i, el) {
    var el = $(el);
    if (el.visible(true)) {
      /*el.addClass("come-in");*/ el.removeClass("module"); 
      /*el.addClass("come-in");*/ el.addClass("animated zoomIn"); 
    } 
  });
  zoomOutMods.each(function(i, el) {
    var el = $(el);
    if (el.visible(true)) {
      /*el.addClass("come-in");*/ el.removeClass("module"); 
      /*el.addClass("come-in");*/ el.addClass("animated zoomOut"); 
    } 
  });
  fadeInMods.each(function(i, el) {
    var el = $(el);
    if (el.visible(true)) {
      /*el.addClass("come-in");*/ el.removeClass("module"); 
      /*el.addClass("come-in");*/ el.addClass("animated fadeIn"); 
    } 
  });
  fadeOutMods.each(function(i, el) {
    var el = $(el);
    if (el.visible(true)) {
      /*el.addClass("come-in");*/ el.removeClass("module"); 
      /*el.addClass("come-in");*/ el.addClass("animated fadeOut"); 
    } 
  });
  
});

window.addEventListener("load", function () {
    const marquees = document.querySelectorAll(".marquee-track");

    marquees.forEach(function (marquee) {
        marquee.style.animationPlayState = "running";
    });
});


/* ---------------------------------------------
 Google map
 --------------------------------------------- */

function init_map(){
    (function($){
        
        $(".map-section").click(function(){
            $(this).toggleClass("js-active");
            $(this).find(".mt-open").toggle();
            $(this).find(".mt-close").toggle();
        });
    })(jQuery);
};


/* ---------------------------------------------
 Smooth Scrolling
 --------------------------------------------- */

// Select all links with hashes
$('nav a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000, function() {
          // Callback after animation
        });
      }
    }
  });




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
        if (window.matchMedia("(prefers-reduced-motion: reduce)").matches) {
            marquee.style.animationPlayState = "paused";
        } else {
            marquee.style.animationPlayState = "running";
        }
    });
});

// Pause marquee on hover/focus for WCAG 2.2.2 (CSS-only via .marquee-container:hover)
document.addEventListener("DOMContentLoaded", function() {
    const containers = document.querySelectorAll(".marquee-container");
    containers.forEach(function(container) {
        const track = container.querySelector(".marquee-track");
        if (!track) return;
        container.setAttribute("tabindex", "0");
        container.setAttribute("role", "region");
        container.setAttribute("aria-label", "Scrolling announcement");
    });
});


/* ---------------------------------------------
 Animation pause / play toggle buttons
 --------------------------------------------- */
document.addEventListener("DOMContentLoaded", function () {

    // --- Hero banner crossfade toggle ---
    var heroBtn = document.getElementById("hero-toggle");
    var heroAnimating = true;
    if (heroBtn) {
        heroBtn.addEventListener("click", function () {
            heroAnimating = !heroAnimating;

            // Pause/resume the xfade keyframe animation on all hero elements
            var targets = document.querySelectorAll(".band, .band1, .ship");
            targets.forEach(function (el) {
                el.style.animationPlayState = heroAnimating ? "running" : "paused";
            });

            // Also pause/resume the slideInLeft on the band container rows
            var bandRows = document.querySelectorAll(".bands .row");
            bandRows.forEach(function (row) {
                row.style.animationPlayState = heroAnimating ? "running" : "paused";
            });

            // Toggle ARIA label
            heroBtn.setAttribute("aria-label",
                heroAnimating ? "Pause hero animation" : "Play hero animation");

            // Toggle visual state — CSS handles icon swap via .is-paused class
            heroBtn.classList.toggle("is-paused", !heroAnimating);
        });
    }

    // --- Footer marquee toggle (controls ALL marquee tracks) ---
    var marqueeBtn = document.getElementById("marquee-toggle");
    var marqueeRunning = true;
    if (marqueeBtn) {
        marqueeBtn.addEventListener("click", function () {
            marqueeRunning = !marqueeRunning;

            // Target ALL marquee tracks on the page
            var tracks = document.querySelectorAll(".marquee-track");
            tracks.forEach(function (track) {
                track.style.animationPlayState = marqueeRunning ? "running" : "paused";
            });

            // Toggle ARIA label
            marqueeBtn.setAttribute("aria-label",
                marqueeRunning ? "Pause scrolling text" : "Play scrolling text");

            // Toggle visual state — CSS handles icon swap via .is-paused class
            marqueeBtn.classList.toggle("is-paused", !marqueeRunning);
        });
    }
});



function init_map(){
    (function($){
        $(".map-section").click(function(){
            $(this).toggleClass("js-active");
            $(this).find(".mt-open").toggle();
            $(this).find(".mt-close").toggle();
            var $iframe = $(".gmaps iframe");
            if ($iframe.length && $iframe.attr("data-src") && !$iframe.attr("src")) {
                $iframe.attr("src", $iframe.attr("data-src"));
            }
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




!function(){"use strict";jQuery((function(){jQuery(".play-btn").modalVideo({channel:"youtube",autoplay:"1"}),jQuery(document).ready((function(){window.sr=ScrollReveal(),sr.reveal(".fade-element",{delay:35,scale:1,interval:150,duration:1e3})}))})),jQuery((function(){var e=function(e,n){this.el=e||{},this.multiple=n||!1,this.el.find(".dropdownlink").on("click",{el:this.el,multiple:this.multiple},this.dropdown)};e.prototype.dropdown=function(e){var n=e.data.el,t=jQuery(this),a=t.next();a.slideToggle(),t.parent().toggleClass("open"),e.data.multiple||n.find(".submenuItems").not(a).slideUp().parent().removeClass("open")};new e(jQuery(".accordion-menu"),!1)})),jQuery(".invisalign-link").click((function(){jQuery(".home-treatments").css("background-image","url(/wp-content/themes/canvas/img/bg-treatments-invisalign-v2.jpg)")})),jQuery(".metal-braces-link").click((function(){jQuery(".home-treatments").css("background-image","url(/wp-content/themes/canvas/img/bg-treatments-metal-braces.jpg)")})),jQuery(".ceramic-braces-link").click((function(){jQuery(".home-treatments").css("background-image","url(/wp-content/themes/canvas/img/bg-treatments-ceramic-braces.jpg)")})),jQuery(".snoring-link").click((function(){jQuery(".home-treatments").css("background-image","url(/wp-content/themes/canvas/img/bg-treatments-snoring.jpg)")})),jQuery(".restoration-link").click((function(){jQuery(".home-treatments").css("background-image","url(/wp-content/themes/canvas/img/bg-treatments-restoration.jpg)")})),jQuery((function(){jQuery(".menu-toggle").click((function(){jQuery(this).toggleClass("active"),jQuery("header").toggleClass("mobile"),jQuery("#side-menu").toggleClass("active")})),jQuery(".play").click((function(){jQuery(this).siblings("video").addClass("fade"),jQuery(this).parent().addClass("fade")}));var e=(new Date).getFullYear();jQuery("footer span.year").text(e)}));jQuery(window).scrollTop();jQuery(window).scroll((function(){})),jQuery("#side-menu #primary-menu li").each((function(){jQuery(this).children("ul").size()>=1&&(jQuery(this).addClass("hasChild"),jQuery(this).append('<a class="expand"></a>'))})),jQuery("#side-menu .expand").click((function(){jQuery(this).parent().children("ul").toggleClass("active"),jQuery(this).toggleClass("active")})),jQuery(".close-nav").click((function(){jQuery("#side-menu").removeClass("active")})),jQuery(window).scroll((function(){jQuery(window).scrollTop()>=300?jQuery("header").addClass("active"):jQuery("header").removeClass("active")})),jQuery((function(){ParallaxScroll.init()}))}();
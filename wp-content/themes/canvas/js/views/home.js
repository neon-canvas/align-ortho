jQuery(function() {

  jQuery(".play-btn").modalVideo({channel:'youtube', autoplay: '1'});

  jQuery(document).ready(function() {

  var fooReveal = {
    delay    : 35,
    scale    : 1,
    interval: 150,
    duration : 1000,
  };

  window.sr = ScrollReveal();

  sr.reveal('.fade-element',fooReveal);

  });

});


jQuery(function() {
  var Accordion = function(el, multiple) {
    this.el = el || {};
    // more then one submenu open?
    this.multiple = multiple || false;
    
    var dropdownlink = this.el.find('.dropdownlink');
    dropdownlink.on('click',
                    { el: this.el, multiple: this.multiple },
                    this.dropdown);
  };
  
  Accordion.prototype.dropdown = function(e) {
    var $el = e.data.el,
        $this = jQuery(this),
        //this is the ul.submenuItems
        $next = $this.next();
    
    $next.slideToggle();
    $this.parent().toggleClass('open');
    
    if(!e.data.multiple) {
      //show only one menu at the same time
      $el.find('.submenuItems').not($next).slideUp().parent().removeClass('open');
    }
  }
  
  var accordion = new Accordion(jQuery('.accordion-menu'), false);
})

jQuery(".invisalign-link").click(function() {
	jQuery('.home-treatments').css("background-image", "url(/wp-content/themes/canvas/img/bg-treatments-invisalign-v2.jpg)");
});

jQuery(".metal-braces-link").click(function() {
	jQuery('.home-treatments').css("background-image", "url(/wp-content/themes/canvas/img/bg-treatments-metal-braces.jpg)");
});

jQuery(".ceramic-braces-link").click(function() {
	jQuery('.home-treatments').css("background-image", "url(/wp-content/themes/canvas/img/bg-treatments-ceramic-braces.jpg)");
});

jQuery(".snoring-link").click(function() {
	jQuery('.home-treatments').css("background-image", "url(/wp-content/themes/canvas/img/bg-treatments-snoring.jpg)");
});


jQuery(".restoration-link").click(function() {
	jQuery('.home-treatments').css("background-image", "url(/wp-content/themes/canvas/img/bg-treatments-restoration.jpg)");
});
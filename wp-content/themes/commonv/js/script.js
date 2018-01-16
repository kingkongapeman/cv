

new WOW().init();

$(document).ready(function(){
    
//semi-working
    $('.toggle').click(function(){
        $(this).toggleClass('on');
        $('.nav').toggleClass('on');
    }); 



$('a[target="_blank"]').addClass('external');

$('a').not('.external').click(function (e) {

    e.preventDefault();                   // prevent default anchor behavior
    var goTo = this.getAttribute("href"); // store anchor href
//alert('hello');
   
    $('.shutter').addClass('on');
    setTimeout(function(){
         window.location = goTo;
    },300);       
}); 


  $(".full-slider ul").each(function(index){
      var count = $(this).children('li').length;
      //alert(count);
      if (count == 1){
      //alert("1 count");
         $(this).siblings('.slider-controls').hide();
         $(this).parents('.full-slider').addClass('no-slide');
         $(this).parents('.full-slider').siblings('.unslider-nav').hide();
      }
  });

  $(".gallery-slider ul").each(function(index){
      var count = $(this).children('li').length;
     // alert(count);
      if (count == 1){
         //alert("1 count");
         $(this).siblings('.slider-controls').hide();
         $(this).parents('.gallery-slider').addClass('no-slide');
         $(this).parents('.gallery-slider').siblings('.unslider-nav').hide();
      }
  });

var $gallerySlider = $('.gallery-slider').not('.no-slide').imagesLoaded( function() {
    //alert('gallery slider loaded');
    $gallerySlider.unslider({
      arrows: false,
      dots: true,
      infinite: true
    });
});




var $fullSlider = $('.full-slider').not('.no-slide').imagesLoaded( function() {
   // alert('full slider loaded');
    $fullSlider.unslider({
      arrows: false,
      dots: false,
      infinite: true,
      fluid: true
    });
});


$('.gallery-slider .slider-controls .next').click(function(){
    $(this).parents('.gallery-slider').unslider('next');
   // alert('nek');
  });

  $('.gallery-slider .slider-controls .prev').click(function(){
    $(this).parents('.gallery-slider').unslider('prev');
    //alert('pre');
  });

 
  $('.full-slider .slider-controls .next').click(function(){
    $(this).parents('.full-slider').unslider('next');
    //alert('nek');
  });

  $('.full-slider .slider-controls .prev').click(function(){
    $(this).parents('.full-slider').unslider('prev');
    //alert('pre');
  });




  $('.down-btn').click(function(){
      $('html, body').animate({
          scrollTop: $( $.attr(this, 'href') ).offset().top
      }, 1000);
      return false;
  });


      $('.post-header div, .slide').matchHeight();

      //$('.team div.team-member:lt(2)').addClass('show');

      $('.dropdown-header').click(function(){
       //alert('BING');
        $(this).toggleClass('on');
        $(this).siblings('ul').slideToggle(300);
    });


});


$(function() {
  var $bloggrid = $('.masonry').imagesLoaded( function() {
    $bloggrid.isotope({
      itemSelector: '.blog-tile',
     // percentPosition: true,
      masonry: {
        // use outer width of grid-sizer for columnWidth
        columnWidth: '.grid-sizer',
        gutterWidth: 0
      }
    });
  });
});


$(function() {
  var $galleryGrid = $('.gallery-grid').imagesLoaded( function() {
    $galleryGrid.isotope({
      itemSelector: 'img',
     // percentPosition: true,
      masonry: {
        // use outer width of grid-sizer for columnWidth
        columnWidth: '.grid-sizer'
      }
    });
  });
});


$(function() {
  var $workGrid = $('.work-grid').imagesLoaded( function() {
    $workGrid.isotope({
      itemSelector: '.case-study',
     // percentPosition: true,
      masonry: {
        // use outer width of grid-sizer for columnWidth
        columnWidth: '.grid-sizer'
      }
    });

    $('.work-filter').on( 'click', 'div', function() {
      var filterValue = $(this).attr('data-filter');
      console.log(filterValue);
      $('.work-filter div').not(this).removeClass('active');
        $(this).toggleClass('active');
      $workGrid.isotope({ filter: filterValue });
    });
    
  });
});






$(document).ready(function(){


  $(".gallery-slider").each(function(index){
      var count = $(this).children('img').length;
     // alert(count);
      if (count == 1){
         //alert("1 count");
         $(this).siblings('.slider-controls').hide();
      }
  });


  /*  $('.gallery-slider').slick({
      centerPadding: '60px',
      slidesToShow: 1,
      arrows:false,
      dots: true,
      fade:true
    });

  $('.gallery-slider-wrap .slider-controls .next').click(function(){
    $(this).parent('.slider-controls').siblings('.gallery-slider').slick('slickNext');
    //alert('nek');
  });

  $('.gallery-slider-wrap .slider-controls .prev').click(function(){
    $(this).parent('.slider-controls').siblings('.gallery-slider').slick('slickPrev');
    //alert('pre');
  });

*/







/*
$('.result-number').each(function () {
    $(this).prop('Counter',0).animate({
        Counter: $(this).text()
    }, {
        duration: 4000,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
    });

});
*/

/*
$('.team-member').bind('inview', function (event, visible) {
  if (visible == true) {
   $(this).addClass('show');
  } else {
   $(this).removeClass('show');
  }
});
*/

$('.results-wrapper').one('inview', function (event, visible) {
  if (visible == true) {
      $('.result-number').addClass('show');
    $('.result-number').each(function () {
      var $this = $(this);
      jQuery({ Counter: 0 }).animate({ Counter: $this.text() }, {
        duration: 2000,
        easing: 'swing',
        step: function () {
          $this.text(Math.ceil(this.Counter));
        }
      });
    });

  } else {
  // $(this).removeClass('show');
  }
});


    var time = Math.floor((Math.random() * 20000) );
    var tf = ['true','false'][Math.round(Math.random())];
    //alert(tf);
    //alert(time);
    if (tf === 'true'){
      $('footer').one('inview', function (event, visible) {
      if (visible == true) {
          setTimeout(function(){ $('.lol').addClass('on'); }, time);
      } else {
      // $(this).removeClass('show');
      }
      });
    }

    
     setTimeout(function(){ $('.now-hiring').addClass('show'); }, 3000);


    $('.contact-panel').matchHeight();


    $('.dynamic-btn').each(function() {
      var content = $(this).text();
       $(this).prepend( '<span>' + content + '</span>' );
       $(this).addClass( 'button large' );
    });


});



$(document).bind('gform_post_render', function(){
   $('.contact-panel').matchHeight();
});

var stats = new Stats();
stats.showPanel(0);
//document.body.appendChild(stats.dom);
/**
 * A jQuery plugin that generates an interactive starfield inside a canvas element.
 *
 * Based on Chiptune's starfield.js:
 * https://github.com/chiptune/js/blob/master/starfield.html
 */
;(function ( $, window, document, undefined ) {
  // Plugin constructor
  var Starfield = function(el, options) {
    this.el     = el;
    this.$el    = $(el);
    this.options  = options;

    that      = this;
  };

  var isPlaying;
  var isInited  = false;
  var canCanvas = false;
  var animId;

  // http://paulirish.com/2011/requestanimationframe-for-smart-animating/
  // http://my.opera.com/emoller/blog/2011/12/20/requestanimationframe-for-smart-er-animating

  // requestAnimationFrame polyfill by Erik Möller. fixes from Paul Irish and Tino Zijdel

  // MIT license

  (function() {
    var lastTime = 0;
    var vendors = ['ms', 'moz', 'webkit', 'o'];
    for(var x = 0; x < vendors.length && !window.requestAnimationFrame; ++x) {
      window.requestAnimationFrame = window[vendors[x]+'RequestAnimationFrame'];
      window.cancelAnimationFrame = window[vendors[x]+'CancelAnimationFrame'] 
                     || window[vendors[x]+'CancelRequestAnimationFrame'];
    }
   
    if (!window.requestAnimationFrame)
      window.requestAnimationFrame = function(callback, element) {
        var currTime = new Date().getTime();
        var timeToCall = Math.max(0, 16 - (currTime - lastTime));
        var id = window.setTimeout(function() { callback(currTime + timeToCall); }, 
          timeToCall);
        lastTime = currTime + timeToCall;
        return id;
      };
   
    if (!window.cancelAnimationFrame)
      window.cancelAnimationFrame = function(id) {
        clearTimeout(id);
      };
  }());
  
  // Plugin prototype
  Starfield.prototype = {
    // Default settings
    defaults: {
      starColor:  "rgba(255,255,255,1)", 
      bgColor:  "rgba(0,0,0,1)",
      mouseMove:  true,
      mouseColor: "rgba(0,0,0,0.2)",
      mouseSpeed: 20,
      fps:    15,
      speed:    3,
      quantity: 512,
      ratio:    256,
      divclass: "starfield"
    },

    // Resize the canvas
    resizer: function() {
      var oldStar       = this.star;
      var initW       = this.context.canvas.width;
      var initH       = this.context.canvas.height;

      this.w          = this.$el.width();
      this.h          = this.$el.height();
      this.x          = Math.round(this.w / 2);
      this.y          = Math.round(this.h / 2);

      // Check if the device is in portrait orientation
      this.portrait     = this.w < this.h;

      // Get the ratio of the old height to the new height
      var ratX        = this.w / initW;
      var ratY        = this.h / initH;

      this.context.canvas.width = this.w;
      this.context.canvas.height  = this.h;

      // Recalculate the position of each star proportionally to new w and h
      for(var i = 0; i < this.n; i++) {
        this.star[i][0] = oldStar[i][0] * ratX;
        this.star[i][1] = oldStar[i][1] * ratY;

        this.star[i][3] = this.x + (this.star[i][0] / this.star[i][2]) * this.star_ratio;
        this.star[i][4] = this.y + (this.star[i][1] / this.star[i][2]) * this.star_ratio;
      }

      that.context.fillStyle    = that.settings.bgColor;
      this.context.strokeStyle  = this.settings.starColor;
    },

    init: function() {
      // Get default settings 
      this.settings = $.extend({}, this.defaults, this.options);

      // Query variables
      var url = document.location.href;
      this.n  = parseInt(
        (url.indexOf('n=') != -1) ? url.substring(url.indexOf('n=') + 2, (
          (url.substring(
            url.indexOf('n=') + 2,
            url.length)
          ).indexOf('&') != -1) ? url.indexOf('n=') + 2 + (url.substring(
            url.indexOf('n=') + 2,
            url.length)
          ).indexOf('&') :
            url.length) :
              this.settings.quantity
      );

      this.flag       = true;
      this.test         = true;
      this.w          = 0;
      this.h          = 0;
      this.x          = 0;
      this.y          = 0;
      this.z          = 0;
      this.star_color_ratio = 0;
      this.star_x_save    = 0;
      this.star_y_save    = 0;
      this.star_ratio     = this.settings.ratio;
      this.star_speed     = this.settings.speed;
      this.star_speed_save  = 0;
      this.star       = new Array(this.n);
      this.color        = this.settings.starColor;
      this.opacity      = 0.1;

      this.cursor_x     = 0;
      this.cursor_y     = 0;
      this.mouse_x      = 0;
      this.mouse_y      = 0;

      this.canvas_x     = 0;
      this.canvas_y     = 0;
      this.canvas_w     = 0;
      this.canvas_h     = 0;
      
      this.fps        = this.settings.fps;

      // Check for device orientation support
      this.desktop      = !navigator.userAgent.match(/(iPhone|iPod|iPad|Android|BlackBerry|BB10|IEMobile)/);
      this.orientationSupport = window.DeviceOrientationEvent !== undefined;
      this.portrait     = null;

      // Inject the canvas element
      var canvasInit = function(){
        that.w      = that.$el.width();
        that.h      = that.$el.height();

        that.initW    = that.w;
        that.initH    = that.h;

        that.portrait = that.w < that.h;

        that.wrapper  = $('<canvas />')
        .addClass(that.settings.divclass);

        that.wrapper.appendTo(that.el);

        that.starz  = $('canvas', that.el);

        if (that.starz[0].getContext) { // Can canvas?
          that.context  = that.starz[0].getContext('2d');
          canCanvas   = true;
        }

        that.context.canvas.width = that.w;
        that.context.canvas.height = that.h;
      }
      canvasInit();

      // Create initial star array and canvas context
      var starInit = function(){
        // Get context for the canvas element
        if(canCanvas){ // Check for canvas drawering abilities.
          that.x          = Math.round(that.w / 2);
          that.y          = Math.round(that.h / 2);
          that.z          = (that.w + that.h) / 2;
          that.star_color_ratio = 1 / that.z;
          that.cursor_x     = that.x;
          that.cursor_y     = that.y;

          // Big bang
          for(var i = 0; i < that.n; i++) {
            that.star[i]  = new Array(5); 

            that.star[i][0] = Math.random() * that.w * 2 - that.x * 2;
            that.star[i][1] = Math.random() * that.h * 2 - that.y * 2;
            that.star[i][2] = Math.round(Math.random() * that.z);
            that.star[i][3] = 0;
            that.star[i][4] = 0;
          }

          // Set the colors
          that.context.fillStyle    = that.settings.bgColor;
          that.context.strokeStyle  = that.settings.starColor;
        } else {
          return;
        }
      }
      starInit();

      isInited = true;
    },

    // Iterate over every star on the field and move it slightly
    anim: function(){
      stats.begin()
      this.mouse_x  = this.cursor_x - this.x;
      this.mouse_y  = this.cursor_y - this.y;
      this.context.fillRect(0, 0, this.w, this.h);

      for(var i = 0; i < this.n; i++) {
        this.test     = true;
        this.star_x_save  = this.star[i][3];
        this.star_y_save  = this.star[i][4];
        this.star[i][0] += this.mouse_x >> 4;

        // X coords
        if(this.star[i][0] > this.x << 1) {
          this.star[i][0] -= this.w << 1;
          this.test = false;
        }
        if(this.star[i][0] <- this.x << 1) {
          this.star[i][0] += this.w << 1;
          this.test = false;
        }

        // Y coords
        this.star[i][1] += this.mouse_y >> 4;
        if(this.star[i][1] > this.y << 1) {
          this.star[i][1] -= this.h << 1;
          this.test = false;
        }
        if(this.star[i][1] <- this.y << 1) {
          this.star[i][1] += this.h << 1;
          this.test = false;
        }

        // Z coords
        this.star[i][2] -= this.star_speed;
        if(this.star[i][2] > this.z) {
          this.star[i][2] -= this.z;
          this.test = false;
        }
        if(this.star[i][2] < 0) {
          this.star[i][2] += this.z;
          this.test = false;
        }

        this.star[i][3] = this.x + (this.star[i][0] / this.star[i][2]) * this.star_ratio;
        this.star[i][4] = this.y + (this.star[i][1] / this.star[i][2]) * this.star_ratio;

        if(this.star_x_save > 0
        && this.star_x_save < this.w
        && this.star_y_save > 0
        && this.star_y_save < this.h
        && this.test) {
          this.context.lineWidth = (1 - this.star_color_ratio * this.star[i][2]) * 2;
          this.context.beginPath();
          this.context.moveTo(this.star_x_save,this.star_y_save);
          this.context.lineTo(this.star[i][3], this.star[i][4]);
          this.context.stroke();
          this.context.closePath();
        }
      }
      stats.end()
    },

    loop: function(){
      this.anim();

      animId = window.requestAnimationFrame(function(){that.loop()});
    },

    

    move: function(){
      var doc = document.documentElement;

      if (this.orientationSupport && !this.desktop) {
        //$('<p class="output"></p>').prependTo('.content');
        //var output = document.querySelector('.output');
        window.addEventListener('deviceorientation', handleOrientation, false);
      } else {
        window.addEventListener('mousemove', handleMousemove, false);
      }

      function handleOrientation(event) {
        if( event.beta !== null && event.gamma !== null) {
          var x = event.gamma, y = event.beta;

          if (!that.portrait) {
            x = event.beta * -1;
            y = event.gamma;
          }

          that.cursor_x = (that.w / 2) + (x * 5);
          that.cursor_y = (that.h / 2) + (y * 5);

          /*var output = document.querySelector('.output');
          output.innerHTML = "rotZ : " + Math.round(event.alpha) + "<br />\n";
          output.innerHTML += "rotX: " + Math.round(event.beta) + "<br />\n";
          output.innerHTML += "rotY: " + Math.round(event.gamma) + "<br />\n";*/
        }
      }

      function handleMousemove(event) {
        that.cursor_x = event.pageX || event.clientX + doc.scrollLeft - doc.clientLeft;
        that.cursor_y = event.pageY || event.clientY + doc.scrollTop - doc.clientTop;
      }
    },

    stop: function(){
      window.cancelAnimationFrame(animId);

      isPlaying = false;
    },

    // this.start this whole thing
    start: function() {
      // Initialize
      if (!isInited) {
        isInited = true;
        this.init();
      }
      
      // Start the animation loop
      if (!isPlaying) {
        isPlaying = true;
        this.loop();
      }

      window.addEventListener('resize', function(){that.resizer()}, false);

      window.addEventListener('orientationchange', function(){that.resizer()}, false);

      // Move stars on mouse move

/*
      if (this.settings.mouseMove) {
        this.move();
      }
      */

      return this;
    }
  }

  Starfield.defaults  = Starfield.prototype.defaults;
  $.fn.starfield = function(options){
    return this.each(function() {
      new Starfield(this, options).start();
    });
  }

  window.Starfield = Starfield;
})( jQuery, window, document );

$('.starfield').starfield();

$('.team-photo-ff').freezeframe();



  $(function() {                       
  $(".team-photo").click(function() {  
    $(this).siblings(".team-member-bio-wrap").addClass("on"); 
    $(this).siblings('.bio-close').addClass('on');
    //
  });
    
});


$(function() {  
  $(".bio-close").click(function() {  
     $(this).siblings(".team-member-bio-wrap").removeClass("on");
     $(this).removeClass('on');
    });
  });





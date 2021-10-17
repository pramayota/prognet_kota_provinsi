$(document).ready(function(){
  $('.venobox').venobox({
    closeColor:'#f4f4f4',
    spinColor: '#f4f4f4',
    arowsColor: 'f4f4f4',
    closeBackground: '#17191D',
    overlayColor: 'rgba(23,25,29,0.8)'
  });
});

$(".whatsapp-icon").click(function(){
  $(".whatsapp-icon").hide();
  $(".whatsapp-desktop").show(500);
  $(".whatsapp").css({
          "background": "linear-gradient(90deg, rgba(6,96,44,1) 27%, rgba(20,196,90,1) 100%)",
          "padding": "12px 6px",
          "border-radius": "8px"
  });
});
$("#close-wa").click(function(){
  $(".whatsapp-desktop").hide(500);
  $(".whatsapp").css({
          "background-color": "#25D366",
          "padding": "8px 12px",
          "border-radius": "8px",
          "cursor": "pointer"
  });

  $(".whatsapp-icon").show();
});
  (function ($) {
  
  "use strict";

    // AOS ANIMATIONS
    AOS.init();

    // NAVBAR
    $('.navbar-nav .nav-link').click(function(){
        $(".navbar-collapse").collapse('hide');
    });

    // NEWS IMAGE RESIZE
    function NewsImageResize(){
      $(".navbar").scrollspy({ offset: -76 });
      
      var LargeImage = $('.large-news-image').height();

      var MinusHeight = LargeImage - 6;

      $('.news-two-column').css({'height' : (MinusHeight - LargeImage / 2) + 'px'});
    }

    $(window).on("resize", NewsImageResize);
    $(document).on("ready", NewsImageResize);

    $('a[href*="#"]').click(function (event) {
      if (
        location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
        if (target.length) {
          event.preventDefault();
          $('html, body').animate({
            scrollTop: target.offset().top - 66
          }, 1000);
        }
      }
    });
    
  })(window.jQuery);

  //Switch Thema
  const checkbox= document.getElementById('checkbox');
  checkbox.addEventListener('change',()=>{
    //change the theme of the website
    document.body.classList.toggle('dark');
  });

  var flkty = new Flickity( '.main-gallery', {
    // options
    cellAlign: 'left',
    contain: true
  });

  

  

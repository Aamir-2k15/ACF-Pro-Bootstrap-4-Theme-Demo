(function ($) {
  $(document).ready(function() {
      // Adjust footer margin
      $('#footer').css('margin-top', $(document).height() - ($('#header').height() + $('#content').height()) - $('#footer').height());

      // Smooth scroll to top
      $('#back-to-top').on('click', function (e) {
          e.preventDefault();
          $('html, body').animate({
              scrollTop: 0
          }, 700);
      });
 
      $('.navbar-nav a').addClass('nav-link');
 
    
  });
})(jQuery);

jQuery(function($) {
    // if ($(window).width() > 769) {
      $('.navbar .dropdown').hover(function() {
        $(this).find('.dropdown-menu').first().stop(true, true).delay(250).slideDown();
  
      }, function() {
        $(this).find('.dropdown-menu').first().stop(true, true).delay(100).slideUp();
  
      });
  
      $('.navbar .dropdown > a').click(function() {
        location.href = this.href;
      });
  
    // }
});

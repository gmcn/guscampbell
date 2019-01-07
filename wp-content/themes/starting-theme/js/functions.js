( function($) {

  /**
   * Match Height (Including Safari onload fix)
   */
  function startMatchHeight() {
    $('.matchheight').matchHeight();
    $('.cta-box').matchHeight();
    $('.contactheight').matchHeight();
    $('.team-member').matchHeight();
    $('.dlheight').matchHeight();
    $('.team-member-profile').matchHeight();
    $('.serviceheight').matchHeight();
    $('.servicecontentheight').matchHeight();
    $('.servicesheadheight').matchHeight();
    $('.contentheight').matchHeight();
    $('.img_wrapper').matchHeight();
    $('.services-page-footer').matchHeight();
    $('.searchmatch').matchHeight();
  }
  window.onload = startMatchHeight;

  // $(document).scroll(function () {
	//   var $nav = $(".fixed");
	//   $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
	// });

  $(document).ready(function(){
            var scroll_pos = 0;
            $(document).scroll(function() {
                scroll_pos = $(this).scrollTop();
                if(scroll_pos > 1) {
                    $(".fixed").addClass("scrolled");
                } else {
                    $(".fixed").removeClass("scrolled");
                }
            });
        });

  $('.bxslider').bxSlider({
  infiniteLoop: true,
  minSlides: 1,
  maxSlides: 1,
  auto: true,
  speed: 1000,
  pause: 5000,
  });

} ) (jQuery);

// Open the full screen search box
function openSearch() {
  document.getElementById("myOverlay").style.display = "block";
}

// Close the full screen search box
function closeSearch() {
  document.getElementById("myOverlay").style.display = "none";
}

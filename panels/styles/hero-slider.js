(function ($) {

  Drupal.behaviors.ch12i5b = {
    attach: function(context, settings) {
      if ($.fn.cycle) {
        $('.hero-slider', context).cycle({
          slides: '> .hero-section',
          fx: 'scrollHorz',
          timeout: 10000,
          pauseOnHover: '.hero-slider a[href]',
          log: false
        });
      }
    }
  }

})(jQuery);

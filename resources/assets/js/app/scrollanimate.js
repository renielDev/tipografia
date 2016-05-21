// function ScrollAnimate(config) {
//   this.config = {
//     elmnt : '',
//     effect : '',
//     initialPos : ''
//
//   };
//
//   $.extend(this.config, config);
// };
//
// ScrollAnimate.prototype = {
//
//   init: function() {
//     var win = $(window);
//     win.on('scroll' , function(){
//       win.scrollTop();
//     });
//   }
// };
//
// module.exports = ScrollAnimate;
//
//
// $('asdf').ScrollAnimate({
//
// });


// TODOs
 // $('elmnt').AnimateScroll({
 //   'distanceTop' : '110px',
 //   'animation' : 'slide-right',
 //   'initialOpacity' : 0,
 //   'delay' : 300,
 // });

;(function($, window, undefined){
  var _window = $(window);

  $.fn.AnimateScroll = function(config){
    var _self = $(this);

    var defaults = {
      'distanceTop' : 500,
      'animation' : 'slide-right',
      'initialVisibility' : 0,
      'delay' : 0,
    };

    $.extend(defaults, config);

    var dictionary = {
      'slide-right' : 'translateX(-120px)',
      'slide-left' : 'translateX(120px)',
      'slide-up' : 'translateY(120px)',
      'slide-down' : 'translateY(-120px)',
    };

    var evt = {
      scroll : function() {
        var win = $(this) // window
            ,distance =  _self.offset().top - win.scrollTop()
            ,animated = _self.data('animated');
        // console.log(win.scrollTop(), _self.offset().top, distance, animated);
        // console.log(distance <= defaults.distanceTop, animated);
        if(distance <= defaults.distanceTop && animated === undefined) {
          var css = { 'opacity' : 1 };
          css = evt.support(css, 'transform', 'none');
          css = evt.support(css, 'transition-delay', defaults.delay + 's');
          _self.css(css).attr('data-animated', true);
        }
      },
      support: function(obj, key, val) {
        var support = ['-ms-', '-moz-', '-webkit-', '-o-'];
        var ret = {};
        support.forEach(function(k, v) {
          // console.log(k,v);
          ret[k+key] = val;
        });
        return $.extend(obj, ret);
      }
    };

    var css = { 'opacity' : defaults.initialVisibility };
    css = evt.support(css, 'transform', dictionary[defaults.animation]);

    console.log(css);
    _self.css(css);

    _window.on('scroll', evt.scroll);
  };
})(jQuery, window);

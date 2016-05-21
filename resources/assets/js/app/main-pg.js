// all require at top
var FontType = require('./modal/font-type');
var fontTypeMdl = new FontType();

var events = {
  scroll : function(elmnt, delay) {
    $('body, html').animate({
      scrollTop: $(elmnt).offset().top
    }, delay || 600);
  },
  loadGoogleFonts : function(data) {
    WebFont.load({
      google: {
        families: data
      },
      casses: false,
      active: function() {
        $('head link').last().attr('id','imported-font');
      }
    });
  },
};

!function initialFonts() {
  $.get('api/v1/fonts/happy', function(data){
    var _data = JSON.parse(data);
    events.loadGoogleFonts(_data.fonts);
    $('.fonts-list').html(_data.mark_up);
  });
}();

$('.fill-block').css('height', 'calc( 100% - 120px )');

$('body')
  .on('click', '.sub-menu li, .menu li', function(){
    $(this)
      .addClass('active')
      .siblings().removeClass('active');
  })
  .on('click', '.sub-menu li',function() {
    $(this).closest('.font-type--modal').removeClass('is-shown');
    events.scroll('.fonts-list ul');
  })
  .on('click', '.menu li', function() {
    var elmnt = '.menu-list li[data-target="'+$(this).data('ref')+'"]';
    fontTypeMdl.open();
    $(elmnt)
      .addClass('active')
      .siblings().removeClass('active');
  })
  .on('click', '.fonts-list li button.select', function() {
    var _this = $(this),
    font = _this.closest('li').data('font');

    $('.canvas__form .canvas-font')
      .attr('readonly', false)
      .val(font)
      .attr('readonly', true)
      .focus();

    events.scroll('.container__canvas');
  });

// add animation sections 1-3
$.each([1,2,3], function(k, v){
  $('.section0'+v+' .hand').AnimateScroll({'animation':'none'});
  $('.section0'+v+' .what-is').AnimateScroll();
  $('.section0'+v+' .animation').AnimateScroll({'delay' : .3, 'animation' : 'slide-left'});
  $('.section0'+v+' .group').AnimateScroll({
    'animation' : 'slide-up',
    'delay' : .3});
});

module.exports = events;

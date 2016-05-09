
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
    $('.fonts-list ul').html(_data.mark_up);
  });
}();

$('body')
  .on('click', '.sub-menu li, .menu li', function(){
    $(this)
      .addClass('active')
      .siblings().removeClass('active');
  })
  .on('click', '.sub-menu li',function(){
    events.scroll('.fonts-list ul');
  })
  .on('click', '.menu li', function() {
    var elmnt = '.menu-list li[data-target="'+$(this).data('ref')+'"]';
    $(elmnt)
      .addClass('active')
      .siblings().removeClass('active');
    events.scroll(elmnt);
  });

module.exports = events;

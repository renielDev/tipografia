
var events = {
  scroll : function(elmnt, delay) {
    $('body, html').animate({
      scrollTop: $(elmnt).offset().top
    }, delay || 600);
  },
}

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

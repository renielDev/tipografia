
$('body').on('click', '.sub-menu li, .menu li', function(){
  $(this).addClass('active').siblings().removeClass('active');
});

$('body').on('click', '.sub-menu li',function(){
  $('body, html').animate({
    scrollTop: $('.fonts-list ul').offset().top
  }, 600);
});

$('body').on('click', '.menu li', function(){
  $('body, html').animate({
    scrollTop: $('.sub-menu').offset().top
  }, 600);
});

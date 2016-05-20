function ScrollAnimate(config) {
  this.config = {
    elmnt : '',
    effect : '',
    initialPos : '' 

  };

  $.extend(this.config, config);
};

ScrollAnimate.prototype = {

  init: function() {
    var win = $(window);
    win.on('scroll' , function(){
      win.scrollTop();
    });
  }
};

return ScrollAnimate;

function Modal(config){
  this.defaults = {
    _par : '.font-type--modal',
    _cls : '.btn-close',
    _cvr : '.cover'
  }
  config && $.extend(this.defaults,config);

  this._init();
}

Modal.prototype = {
  close: function() {
    $(this.defaults._par).removeClass('is-shown');
  },
  open: function() {
    $(this.defaults._par).addClass('is-shown');
  },
  _init: function() {
    var _this = this;
    $('body')
      .on('click',this.defaults._par + ' ' + this.defaults._cls, function(){
        _this.close();
      })
      .on('click',this.defaults._par + ' ' + this.defaults._cvr, function(){
        _this.close();
      });
    return this;
  }
}

module.exports = Modal;

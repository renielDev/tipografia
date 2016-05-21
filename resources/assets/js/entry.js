window.jQuery = window.$ = require('jquery');
require('./app/scrollanimate');

$(function(){
  var main = require('./app/main-pg');
  require('./app/modal/font-type');
  require('./app/home');
  require('./app/canvas');
});

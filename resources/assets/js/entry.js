window.jQuery = window.$ = require('jquery');

$(function(){
  var main = require('./app/main-pg');
  require('./app/home');
  require('./app/canvas');
});

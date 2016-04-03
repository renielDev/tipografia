(function(){
  require('./../lib/colorpicker');

  function initFonts(data) {
    alert('x');
    var _data = JSON.parse(data);
    console.log(_data);
    WebFont.load({
      google: {
        families: _data
      }
    });
  };

  $('body').on('click','.load-fonts', function() {
      var font = $('.fonts').val();
      $.get('/api/v1/fonts/'+font, initFonts);
  });

  var canvas = new fabric.Canvas('canvas');

  window.addEventListener('resize', resizeCanvas, false);

  function resizeCanvas() {
    canvas.setHeight(400);
    canvas.setWidth($('.container__canvas').width());
    canvas.renderAll();
  }
  // resize on init
  resizeCanvas();

  canvas.on('object:selected',function(e) {
    console.log(e);
    // console.log(e.target.get('type'));
  });

  $('body').on('click','.add-text', function() {
    var txt = $('.canvas-text').val();

    // canvas.setBackgroundColor('red', canvas.renderAll.bind(canvas));
    canvas.add(new fabric.IText(txt, {
      fontFamily: txt,
      top : canvas.height / 4,
      left : canvas.width / 4,
    }));
  });

  $('.canvas-color-picker').colorpicker().on('changeColor.colorpicker', function(e){
    canvas.setBackgroundColor(e.color.toHex(), canvas.renderAll.bind(canvas))
  });

  function download(url,name){
  // make the link. set the href and download. emulate dom click
    $('<a>').attr({href:url,download:name})[0].click();
  }
  function downloadFabric(canvas,name){
    canvas.deactivateAll().renderAll();
    //  convert the canvas to a data url and download it.
    download(canvas.toDataURL(),name+'.png');
  }

  $('body').on('click', '.download', function(){
    downloadFabric(canvas,'downlad');
  });

})();

(function(){
  require('./../lib/colorpicker');

  function initFonts(data) {
    $('#imported-font').remove();
    var _data = JSON.parse(data);
    WebFont.load({
      google: {
        families: _data
      }
    });
  };


  $('body').on('click','.load-fonts', function() {
      var font = $('.fonts').val();
  });

  var canvas = new fabric.Canvas('canvas');

  window.addEventListener('resize', resizeCanvas, false);

  function resizeCanvas() {
    canvas.setHeight(500);
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
    $.get('/api/v1/fonts/sad', initFonts);

    var txt = $('.canvas-text');
    var fontFace = $('.canvas-font').val();

    // canvas.setBackgroundColor('red', canvas.renderAll.bind(canvas));
    canvas.add(new fabric.IText(txt.val(), {
      fontFamily: fontFace,
      fill: $('.canvas__form .picker-color').val(),
      top : canvas.height / 4,
      left : canvas.width / 4,
    }));

    txt.val('');
    
  });

  $('.font-color-picker')
    .colorpicker({
      'input' : '.picker-color'
    });

  $('.canvas-color-picker')
    .colorpicker({
      'input' : '.picker-color'
    })
    .on('changeColor.colorpicker', function(e){
      canvas.setBackgroundColor(e.color.toHex(), canvas.renderAll.bind(canvas));
    });

  $('body').on('click', '.canvas-tools .no-bg', function(){
    canvas.setBackgroundColor(null, canvas.renderAll.bind(canvas));
  });

  $('body').on('change','.canvas-tools .uploadFile',function(e) {
    var reader = new FileReader();
    reader.onload = function (event){
      var imgObj = new Image();
      imgObj.src = event.target.result;
      imgObj.onload = function () {
        var image = new fabric.Image(imgObj);
        image.set({
              angle: 0,
              padding: 10,
              cornersize:10,
              height:110,
              width:110,
        });
        canvas.centerObject(image);
        canvas.add(image);
        canvas.renderAll();
      }
    }
    reader.readAsDataURL(e.target.files[0]);
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

  $('body').on('click', '.remove',function() {
    if(canvas.getActiveGroup()){
      canvas.getActiveGroup().forEachObject(function(o){ canvas.remove(o) });
      canvas.discardActiveGroup().renderAll();
    } else {
      canvas.remove(canvas.getActiveObject());
    }
  });
  $('body').on('click', '.download', function(){
    downloadFabric(canvas,'downlad');
  });

})();

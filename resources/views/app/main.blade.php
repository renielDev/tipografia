<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Typografia - Nicole Castaneda</title>
    <link rel="stylesheet" href="/assets/css/app.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="/assets/css/css/font-awesome.min.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="/assets/css/bootstrap-colorpicker.min.css" media="screen" title="no title" charset="utf-8">
  </head>
  <body>
    <div class="container">
      <header class="header">
        <div class="logo">
          <img src="/assets/images/page/logo.png" class="img img-responsive" alt="Typografia Logo" />
        </div>
        <nav class="navigator">
          <ul class="list-unstyled list-inline text-center">
            <li><a href="#">Welcome!</a></li>
            <li><a href="#">About</a></li>
            <li class="tipografia"><h1>Tipografia</h1></li>
            <li><a href="#">Type+</a></li>
            <li><a href="#">Credits</a></li>
          </ul>
        </nav>
        <div class="clear-both"></div>
      </header>
    </div>
    <section>
      <ul class="list-unstyled list-inline menu-list text-center">
        <li class="active">
          <ul class="list-unstyled list-inline sub-menu">
            <li class="active">
              <img src="/assets/images/holiday/new_year.png" class="img-responsive" alt="" />
              <span>
                New Year
              </span>
            </li>
            <li>
              <img src="/assets/images/holiday/valentines.png" class="img-responsive" alt="" />
              <span>
                Valentines
              </span>
            </li>
            <li>
              <img src="/assets/images/holiday/easter.png" class="img-responsive" alt="" />
              <span>
                Easter
              </span>
            </li>
            <li>
              <img src="/assets/images/holiday/halloween.png" class="img-responsive" alt="" />
              <span>
                Halloween
              </span>
            </li>
            <li>
              <img src="/assets/images/holiday/christmas.png" class="img-responsive" alt="" />
              <span>
               Christmas
              </span>
            </li>
          </ul>
        </li>
        <li>
          <ul class="list-unstyled list-inline">
            <li class="active">
              <img src="/assets/images/holiday/NY.png" class="img-responsive" alt="" />
              <span>
                Sample 1
              </span>
            </li>
            <li>
              <figure>
                <img src="/assets/images/holiday/Valentines.png" class="img-responsive" alt="" />
                <figcaption>
                  Sample 1
                </figcaption>
              </figure>
            </li>
            <li>
              <figure>
                <img src="/assets/images/holiday/Valentines.png" class="img-responsive" alt="" />
                <figcaption>
                  Sample 1
                </figcaption>
              </figure>
            </li>
            <li>
              <figure>
                <img src="/assets/images/holiday/Valentines.png" class="img-responsive" alt="" />
                <figcaption>
                  Sample 1
                </figcaption>
              </figure>
            </li>
            <li>
              <figure>
                <img src="/assets/images/holiday/Valentines.png" class="img-responsive" alt="" />
                <figcaption>
                  Sample 1
                </figcaption>
              </figure>
            </li>
          </ul>
        </li>
        <li>
          <ul class="list-unstyled list-inline">
            <li class="active">
              <img src="/assets/images/holiday/NY.png" class="img-responsive" alt="" />
              <span>
                Sample 1
              </span>
            </li>
            <li>
              <figure>
                <img src="/assets/images/holiday/Valentines.png" class="img-responsive" alt="" />
                <figcaption>
                  Sample 1
                </figcaption>
              </figure>
            </li>
            <li>
              <figure>
                <img src="/assets/images/holiday/Valentines.png" class="img-responsive" alt="" />
                <figcaption>
                  Sample 1
                </figcaption>
              </figure>
            </li>
            <li>
              <figure>
                <img src="/assets/images/holiday/Valentines.png" class="img-responsive" alt="" />
                <figcaption>
                  Sample 1
                </figcaption>
              </figure>
            </li>
            <li>
              <figure>
                <img src="/assets/images/holiday/Valentines.png" class="img-responsive" alt="" />
                <figcaption>
                  Sample 1
                </figcaption>
              </figure>
            </li>
          </ul>
        </li>
      </ul>
    </section>
    <div class="clear-both container">
      <section class="section">
        <ul class="col-md-10 col-md-offset-1 menu list-unstyled list-inline text-center">
          <li class="col-md-4 active">
            Moods <br />
            & emotions
          </li>
          <li class="col-md-4">
            Special <br />
            occasions
          </li>
          <li class="col-md-4">
            Worldwide <br />
            holidays
          </li>
        </ul>
        <div class="clear-both"></div>
      </section>
    </div>
    <section class="container__canvas">
      <span class="canvas-tools left">
        <button type="button" title="Remove selected element(s)" class="btn remove">
          <span class="glyphicon glyphicon-minus"></span>
        </button>
      </span>
      <span class="canvas-tools">
        <label for="uploadImg" title="Add image">
          <span class="glyphicon glyphicon-plus"></span>
        </label>
        <input type="file" id="uploadImg" class="uploadFile"></input>
        <span class="canvas-color-picker color-picker">
          <input type="hidden" value="#999999" class="picker-color" />
          <span class="btn btn-default add-on" title="Background color"></span>
        </span>
        <button type="button" class="btn btn-default no-bg" title="Remove Background Color" name="button"></button>
      </span>
      <span class="canvas-tools bottom">
        <button type="button" class="btn btn-default" name="button">
          <i class="fa fa-share-alt"></i>
        </button>
        <button type="button" class="btn btn-default download" name="button">
          <span class="glyphicon glyphicon-download-alt"></span>
        </button>
      </span>
      <canvas id="canvas"></canvas>
    </section>
    <section class="section">
      <div class="container canvas__form">
        <div class="col-md-10 col-md-offset-1">
          <div class="col-md-6 form-group">
            <label for="someText">Type here</label>
            <input type="text" name="someText" value="" class="form-control canvas-text" />
            <i title="Add text" class="fa fa-plus add-text"></i>
          </div>
          <div class="col-md-4 form-group font-color-picker color-picker">
            <label for="someText">Font Color</label>
            <input type="hidden" value="#333333" class="picker-color" />
            <span class="form-control input-group-addon"></span>
          </div>
        </div>
      </div>
    </section>

    <section class="fonts-list">
      <ul class="list-unstyled">
        <li>
          <div>
            <span><strong>Clemente</strong> by  Allan Prescott</span>
            <span>in <strong>Moods > Happy</strong></span>
          </div>
          <div>
            <div class="row">
              <span class="col-md-9">Clemente</span>
              <span class="col-md-3 text-right">
                  <button type="button" name="button" class="btn btn-default">Download</button>
                  <button type="button" name="button" class="btn btn-default">Select</button>
              </span>
              <span class="clear-both"></span>
            </div>
          </div>
        </li>
        <li>
          <div>
            <span><strong>Clemente</strong> by  Allan Prescott</span>
            <span>in <strong>Moods > Happy</strong></span>
          </div>
          <div>
            <div class="row">
              <span class="col-md-9">Clemente</span>
              <span class="col-md-3 text-right">
                  <button type="button" name="button" class="btn btn-default">Download</button>
                  <button type="button" name="button" class="btn btn-default">Select</button>
              </span>
              <span class="clear-both"></span>
            </div>
          </div>
        </li>
        <li>
          <div>
            <span><strong>Clemente</strong> by  Allan Prescott</span>
            <span>in <strong>Moods > Happy</strong></span>
          </div>
          <div>
            <div class="row">
              <span class="col-md-9">Clemente</span>
              <span class="col-md-3 text-right">
                  <button type="button" name="button" class="btn btn-default">Download</button>
                  <button type="button" name="button" class="btn btn-default">Select</button>
              </span>
              <span class="clear-both"></span>
            </div>
          </div>
        </li>
        <li>
          <div>
            <span><strong>Clemente</strong> by  Allan Prescott</span>
            <span>in <strong>Moods > Happy</strong></span>
          </div>
          <div>
            <div class="row">
              <span class="col-md-9">Clemente</span>
              <span class="col-md-3 text-right">
                  <button type="button" name="button" class="btn btn-default">Download</button>
                  <button type="button" name="button" class="btn btn-default">Select</button>
              </span>
              <span class="clear-both"></span>
            </div>
          </div>
        </li>
      </ul>
    </section>
    <footer>
      <section class="section container text-center">
        <div>
          2016 All rights reserved <strong>Nicole Castaneda</strong>
        </div>
        <div>
          Developer: <strong>Reniel Salvador</strong>
        </div>
      </section>
    </footer>

    <script src="/assets/js/app.js" type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <script src="/assets/js/fabric.js" type="text/javascript"></script>
  </body>
</html>

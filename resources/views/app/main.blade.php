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
            <li class="tipografia">Tipografia</li>
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
              <img src="/assets/images/holiday/NY.png" class="img-responsive" alt="" />
              <span>
                Sample 1
              </span>
            </li>
            <li>
              <img src="/assets/images/holiday/NY.png" class="img-responsive" alt="" />
              <span>
                Sample 1
              </span>
            </li>
            <li>
              <img src="/assets/images/holiday/NY.png" class="img-responsive" alt="" />
              <span>
                Sample 1
              </span>
            </li>
            <li>
              <img src="/assets/images/holiday/NY.png" class="img-responsive" alt="" />
              <span>
                Sample 1
              </span>
            </li>
            <li>
              <img src="/assets/images/holiday/NY.png" class="img-responsive" alt="" />
              <span>
                Sample 1
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
          <li class="col-md-4">
            Moods <br />
            & emotions
          </li>
          <li class="col-md-4">
            Special <br />
            occasions
          </li>
          <li class="col-md-4 active">
            Worldwide <br />
            holidays
          </li>
        </ul>
        <div class="clear-both"></div>
      </section>
    </div>
    <section class="container__canvas">
      <span class="canvas-tools">
        <button type="button" class="btn btn-default" name="button">
          <span class="glyphicon glyphicon-plus"></span>
        </button>
        <button type="button" class="btn btn-default" name="button"></button>
        <button type="button" class="btn btn-default" name="button"></button>
        <button type="button" class="btn btn-default" name="button">
          <span class="vertical-line"></span>
        </button>
      </span>
      <span class="canvas-tools bottom">
        <button type="button" class="btn btn-default" name="button">
          <i class="fa fa-share-alt"></i>
        </button>
        <button type="button" class="btn btn-default" name="button">
          <span class="glyphicon glyphicon-download-alt"></span>
        </button>
      </span>
      <canvas id="canvas"></canvas>
    </section>
    <div class="container canvas__form">
      <label for="someText">Type here</label>
      <input type="text" name="someText" value="" class="canvas-text">
      <div class="input-group canvas-color-picker">
        <input type="hidden" value="" class="form-control" />
        <span class="input-group-addon"><i></i></span>
      </div>
      <button type="button" name="addText" class="add-text">Add text</button>
      <button type="button" name="button" class="download">Download</button>
      <input type="text" name="name" value="" class="fonts">
      <button type="button" name="button" class="load-fonts">Init fonts</button>
      <button type="button" name="button" class="remove">remove</button>
    </div>

    <section class="fonts-list">
      <ul class="list-unstyled">
        <li>
          <div>
            <span>Clemente by  Allan Prescott</span>
            <span>in Moods > Happy</span>
          </div>
          <div>
            <span>Clemente</span>
            <span>
              <button type="button" name="button" class="btn btn-default">Download</button>
              <button type="button" name="button" class="btn btn-default">Select</button>
            </span>
          </div>
        </li>
        <li>
          <div>
            <span>Clemente by  Allan Prescott</span>
            <span>in Moods > Happy</span>
          </div>
          <div>
            <span>Clemente</span>
            <span>
              <button type="button" name="button" class="btn btn-default">Download</button>
              <button type="button" name="button" class="btn btn-default">Select</button>
            </span>
          </div>
        </li>
      </ul>
    </section>
    <footer>
      <section class="container text-center">
        <div>
          2016 All rights reserved Nicole Castaneda
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

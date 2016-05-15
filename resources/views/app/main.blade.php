@extends('app')

@section('header')
  <div class="imported-font"></div>
  <nav class="navbar navbar-default navbar-static-top">
  <div class="container">

    <div class="navbar-header">

        <!-- Collapsed Hamburger -->
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
            <span class="sr-only">Toggle Navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

        <!-- Branding Image -->
        <a class="navbar-brand tipografia" href="{{ url('/') }}">
            <h1>Tipografia</h1>
        </a>
    </div>

    <div class="collapse navbar-collapse" id="app-navbar-collapse">

        <!-- Right Side Of Navbar -->
        <ul class="nav navbar-nav navbar-right">
            <!-- Authentication Links -->
            <li><a href="{{ url('/') }}">welcome!</a></li>
            <li><a href="#">about</a></li>
            <li><a href="#">credits</a></li>
        </ul>
    </div>
  </div>
</nav>
@stop

@section('content')
  <section class="intro-video">
    <div class="video-play"></div>
  </section>
  <div class="clear-both container">
    <section class="section">
      <ul class="col-md-10 col-md-offset-1 menu list-unstyled list-inline text-center">
        <li class="col-md-4 active" data-ref="moods">
          Moods <br />
          & emotions
        </li>
        <li class="col-md-4" data-ref="special">
          Special <br />
          occasions
        </li>
        <li class="col-md-4" data-ref="holidays">
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
        <div class="col-md-4 form-group">
          <label for="someText">Type here</label>
          <input type="text" name="someText" value="" class="form-control canvas-text" />
          <i title="Add text" class="fa fa-plus add-text"></i>
        </div>
        <div class="col-md-4 form-group">
          <label for="someText">Font Face</label>
          <input type="text" name="someText" readonly value="" placeholder="Select a font" class="form-control canvas-font" />
        </div>
        <div class="col-md-4 form-group font-color-picker color-picker">
          <label for="someText">Font Color</label>
          <input type="hidden" value="#333333" class="picker-color" />
          <span class="form-control input-group-addon"></span>
        </div>
      </div>
    </div>
  </section>

  <section class="fonts-list"></section>

@stop

@include('app.modal.font_type')

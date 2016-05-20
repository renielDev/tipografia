@extends('app')

@section('header')
 <div class="navigator fixed">
  <span class="icon-right-nav fa-3x"></span>
 </div>
@stop

  @section('content-inner')
    <section class="page--block">
      <span class="group center-center g0 tipografia">
        <span class="back--elmnt">
          Tipo
          <br />
          Gra
          <br />
          Fia
        </span>
        <img src="{{ asset('assets/images/page/tipografia.png') }}" alt="Tipografia" class="front--elmnt img-responsive center-center" />
      </span>
      <span class="scroll-down">
          Scroll down
          <div class="img-container">
            <img src="{{ asset('assets/images/page/arrow-down.png') }}" class="img-responsive center" alt="scroll-down arrow" />
          </div>
      </span>
    </section>
    <section class="page--block">
      <div class="img-container hand text-center">
        <img src="{{ asset('assets/images/page/hand-1.png') }}" class="img-responsive center" alt="Hand" />
      </div>
      <div class="col-md-6 fill-block">
        <span class="what-is">
          <span class="back--elmnt">
            01
          </span>
          <span class="front--elmnt">
            What is
            <br />
            Tipografia
          </span>
        </span>
        <embed class="animation" src="{{ asset('assets/animation/1.swf') }}">
      </div>
      <div class="col-md-6 fill-block">
        <span class="group what">
          <span class="back--elmnt">
            what
          </span>
          <span class="front--elmnt">
            <p>
              Tipografia is a web based type design
              generator where users can yeah yeah na
              na na lorem ipsum yes yes
            </p>
          </span>
        </span>
      </div>
    </section>
    <section class="page--block">
      <div class="img-container hand text-center">
        <img src="{{ asset('assets/images/page/hand-2.png') }}" class="img-responsive center" alt="Hand" />
      </div>
      <div class="col-md-6 fill-block">
        <span class="what-is how-is">
          <span class="back--elmnt">
            02
          </span>
          <span class="front--elmnt">
            How does
            <br />
            Tipografia works?
          </span>
        </span>
        <embed class="animation" src="{{ asset('assets/animation/2.swf') }}">
      </div>
      <div class="col-md-6 fill-block">
        <span class="group what">
          <span class="back--elmnt">
            how
          </span>
          <span class="front--elmnt">
            <p>
              Lorem ipsum dolor sit amet, consectatur
              adipiscing elit. Nazivehicula mi sit amet
              erat convallis, id ornare ex retrum.
            </p>
          </span>
        </span>
      </div>
    </section>
    <section class="page--block">
      <div class="img-container hand text-center">
        <img src="{{ asset('assets/images/page/hand-3.png') }}" class="img-responsive center" alt="Hand" />
      </div>
      <div class="col-md-6 fill-block">
        <span class="what-is start-typing">
          <span class="back--elmnt">
            03
          </span>
          <span class="front--elmnt">
            Start
            <br />
            Typing.
          </span>
        </span>
        <embed class="animation" src="{{ asset('assets/animation/3.swf') }}">
      </div>
      <div class="col-md-6 fill-block">
        <span class="group what-is start-typing">
          <span class="back--elmnt">
            <a href="#" class="btn btn-default">Type now</a>
          </span>
        </span>
      </div>
    </section>
    <section class="page--block developers">
      <div class="row">
        <div class="col-md-12">
          <h2>
            Behind
            <div class="splitter"></div>
            Tipografia
            <div class="creator-title">
              The
              <div class="splitter"></div>
              creators
            </div>
          </h2>
        </div>
      </div>
      <div class="row mt20">
        <div class="col-md-10 col-md-offset-1">
          <div class="col-md-5">
            <div class="col-md-10">
              <div class="avatar-img">
                <img src="{{ asset('assets/images/page/avatar.png') }}" alt="avatar-1" class="img-responsive" />
              </div>
              <div class="personal-info">
                <div class="name">
                  Nicole Castaneda
                </div>
                <p class="position">
                  designer.
                </p>
                <a href="#" class="btn btn-default email">
                  pnicolecastaneda@gmail.com
                </a>
              </div>
            </div>
            <div class="col-md-2">
              <ul class="list-unstyled accounts">
                <li><a href="#"><i class="fa fa-behance fa-2x" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a></li>
                <li><a href="#">www</a></li>
              </ul>
            </div>
          </div>
          <!-- space in between -->
          <div class="col-md-2"></div>
          <!-- space in between -->
          <div class="col-md-5">
            <div class="col-md-10">
              <div class="avatar-img">
                <img src="{{ asset('assets/images/page/avatar.png') }}" alt="avatar-1" class="img-responsive" />
              </div>
              <div class="personal-info">
                <div class="name">
                  Reniel Salvador
                </div>
                <p class="position">
                  developer.
                </p>
                <a href="#" class="btn btn-default email">
                  reniel.salvador@gmail.com
                </a>
              </div>
            </div>
            <div class="col-md-2">
              <ul class="list-unstyled accounts">
                <li><a href="#"><i class="fa fa-linkedin fa-2x" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-github fa-2x" aria-hidden="true"></i></a></li>
                <li><a href="#">www</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
  @stop

@section('content')
  <div class="pg-home container">
    @yield('content-inner')
  </div>
@stop

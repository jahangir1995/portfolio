@extends('index')
@section('content')

  <section id="banner">
    <div class="container">
      <div class="row max-viewport align-items-center text-center">
        <div class="col-md-6 d-none d-md-block">
          <img src="{{asset('frontend/images/banner.jpg')}}" class="img-fluid rounded-thumbnail">
        </div>
        <div class="col-12 col-md-6 mx-auto my-5">
          <h1 class="text-white text-uppercase">jahangir alam</h1>
          <a href="https://github.com/jahangir1995" class="btn btn-lg btn-outline-warning text-uppercase m-2 p-2">Git Hub</a>

          <a href="{{asset(Storage::disk('local')->url($document->file))}}" class="btn btn-lg btn-outline-warning text-uppercase m-2 p-2">CV Download</a>
        </div>
      </div>
    </div>
  </section>

  <section id="quanlities" class="py-5 bg-secondary">
    <div class="container">
      <div class="row align-items-center text-center">

        <div class="col-sm-12 col-md-6 col-lg-4 text-white my-3 d-flex">
            <i class="fa fa-wrench fa-5x mr-3 align-self-center"></i>
          <div class="innner-text">
            <h1 class="my-3">Hard Word</h1>
            <p class="lead">dlfjdspof soiuf aoiun dlfjdspof soiuf aoiun alfuieo aluto athu alfuieo aluto athu</p>
          </div>
        </div>

        <div class="col-sm-12 col-md-6 col-lg-4 text-white my-3 d-flex">
            <i class="fa fa-refresh fa-5x mr-3 align-self-center"></i>
          <div class="innner-text">
            <h1 class="my-3">Learning</h1>
            <p class="lead">dlfjdspof soiuf aoiun dlfjdspof soiuf aoiun alfuieo aluto athu alfuieo aluto athu</p>
          </div>
        </div>

        <div class="col-sm-12 col-md-6 col-lg-4 text-white my-3 d-flex">
            <i class="fa fa-handshake-o fa-5x mr-3 align-self-center"></i>
          <div class="innner-text">
            <h1 class="my-3">Reliable</h1>
            <p class="lead">dlfjdspof soiuf aoiun dlfjdspof soiuf aoiun alfuieo aluto athu alfuieo aluto athu</p>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!--------------contact start------------->

  <section id="contact" class="p-5">
    <div class="container">
      <div class="row text-center align-items-center justify-content-between">
        <div class="col-sm-6 my-2">
          <h1 class="text-white text-uppercase">contact me</h1>
          </div>
          <div class="col-sm-6 my-2">
            <a href="{{route('contact')}}" class="btn btn-lg btn-outline-warning text-uppercase">Send me a note</a>
          </div>
        
      </div>
    </div>
  </section>
  <!--------------contact end------------->
<!--------------project setction start------------>
  <section id="project" class="p-5 bg-light">
    <div class="container">
      <div class="row">
        <div class="row-sm-6 col-md-4 my-3">
          <img src="{{asset('frontend/images/pexels-photo-1518836.jpeg')}}" class="img-fluid rounded" alt="picture">
          <h1 class="my-3">Project 2</h1>
          <p class="text-muted">dfoidh aslgjfo alsjhfoiew adkjoiew altkujerwog eltjrewuoit ewltujeiwro ertjr retjreojt</p>
        </div>
        <div class="row-sm-6 col-md-4 my-3">
          <img src="{{asset('frontend/images/pexels-photo-1518836.jpeg')}}" class="img-fluid rounded" alt="picture">
          <h1 class="my-3">Project 3</h1>
          <p class="text-muted">dfoidh aslgjfo alsjhfoiew adkjoiew altkujerwog eltjrewuoit ewltujeiwro ertjr retjreojt</p>
        </div>
        <div class="row-sm-6 col-md-4 my-3">
          <img src="{{asset('frontend/images/pexels-photo-1518836.jpeg')}}" class="img-fluid rounded" alt="picture">
          <h1 class="my-3">Project 4</h1>
          <p class="text-muted">dfoidh aslgjfo alsjhfoiew adkjoiew altkujerwog eltjrewuoit ewltujeiwro ertjr retjreojt</p>
        </div>
         <div class="row-sm-6 col-md-4 my-3">
          <img src="{{asset('frontend/images/pexels-photo-1518836.jpeg')}}" class="img-fluid rounded" alt="picture">
          <h1 class="my-3">Project 3</h1>
          <p class="text-muted">dfoidh aslgjfo alsjhfoiew adkjoiew altkujerwog eltjrewuoit ewltujeiwro ertjr retjreojt</p>
        </div>
        <div class="row-sm-6 col-md-4 my-3">
          <img src="{{asset('frontend/images/pexels-photo-1518836.jpeg')}}" class="img-fluid rounded" alt="picture">
          <h1 class="my-3">Project 4</h1>
          <p class="text-muted">dfoidh aslgjfo alsjhfoiew adkjoiew altkujerwog eltjrewuoit ewltujeiwro ertjr retjreojt</p>
        </div>
         <div class="row-sm-6 col-md-4 my-3">
          <img src="{{asset('frontend/images/pexels-photo-1518836.jpeg')}}" class="img-fluid rounded" alt="picture">
          <h1 class="my-3">Project 3</h1>
          <p class="text-muted">dfoidh aslgjfo alsjhfoiew adkjoiew altkujerwog eltjrewuoit ewltujeiwro ertjr retjreojt</p>
        </div>
        <div class="row-sm-6 col-md-4 my-3">
          <img src="{{asset('frontend/images/pexels-photo-1518836.jpeg')}}" class="img-fluid rounded" alt="picture">
          <h1 class="my-3">Project 4</h1>
          <p class="text-muted">dfoidh aslgjfo alsjhfoiew adkjoiew altkujerwog eltjrewuoit ewltujeiwro ertjr retjreojt</p>
        </div>
           <div class="row-sm-6 col-md-4 my-3">
          <img src="{{asset('frontend/images/pexels-photo-1518836.jpeg')}}" class="img-fluid rounded" alt="picture">
          <h1 class="my-3">Project 3</h1>
          <p class="text-muted">dfoidh aslgjfo alsjhfoiew adkjoiew altkujerwog eltjrewuoit ewltujeiwro ertjr retjreojt</p>
        </div>
        <div class="row-sm-6 col-md-4 my-3">
          <img src="{{asset('frontend/images/pexels-photo-1518836.jpeg')}}" class="img-fluid rounded" alt="picture">
          <h1 class="my-3">Project 4</h1>
          <p class="text-muted">dfoidh aslgjfo alsjhfoiew adkjoiew altkujerwog eltjrewuoit ewltujeiwro ertjr retjreojt</p>
        </div>
      </div>
      
    </div>
   </section>
<!--------------project setction end------------>

<section id="social" class="p-3">
  <div class="containr-fluid">
    <div class="row align-items-center">
      <div class="col-12 d-flex justify-content-center">
        <a href=""><i class="fa fa-facebook fa-4x m-3"></i></a>
        <a href=""><i class="fa fa-twitter fa-4x m-3"></i></a>
        <a href=""><i class="fa fa-instagram fa-4x m-3"></i></a>
      </div>
    </div>
  </div>
</section>
@endsection()
@extends('index')
@section('content')

<section>
  <div class="container pt-5 pb-5"> 
        <div class="row">
          <div class="col-12">
            <h2>My Photo Gallery</h2>
          </div>
        </div>

      <div class="row">
        <div class="jumbotorn pt-5">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">

        <div class="carousel-inner">

              <div class="carousel-item active">
                <div class="row">

                  <div class="col-3">
                   <img src="{{asset('frontend/images/slider/s1.jpg')}}" class="img-thumbnail"> 
                  </div>

                  <div class="col-3">
                   <img src="{{asset('frontend/images/slider/s2.jpg')}}"  class="img-thumbnail"> 
                  </div>

                  <div class="col-3">
                   <img src="{{asset('frontend/images/slider/s3.jpg')}}" class="img-thumbnail"> 
                  </div>
                  <div class="col-3">
                   <img src="{{asset('frontend/images/slider/s4.jpg')}}" class="img-thumbnail"> 
                  </div>
                </div>
              </div>

            <div class="carousel-item">
              <div class="row">

                <div class="col-3">
                  <img src="{{asset('frontend/images/slider/s5.jpg')}}" class="img-thumbnail">
                </div>

                <div class="col-3">
                  <img src="{{asset('frontend/images/slider/s6.jpg')}}" class="img-thumbnail">
                </div>

                <div class="col-3">
                  <img src="{{asset('frontend/images/slider/s8.jpg')}}" class="img-thumbnail">
                </div>

                <div class="col-3">
                  <img src="{{asset('frontend/images/slider/s7.jpg')}}" class="img-thumbnail">
                </div>

              </div>
            </div>

            <div class="carousel-item">
              <div class="row">

                <div class="col-3">
                  <img src="{{asset('frontend/images/slider/s9.jpg')}}" class="img-thumbnail">
                </div>

                <div class="col-3">
                  <img src="{{asset('frontend/images/slider/s10.jpg')}}" class="img-thumbnail">
                </div>

                <div class="col-3">
                  <img src="{{asset('frontend/images/slider/s11.jpg')}}" class="img-thumbnail">
                </div>

                <div class="col-3">
                  <img src="{{asset('frontend/images/slider/s12.jpg')}}" class="img-thumbnail">
                </div>

              </div>
            </div>

          
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
      </div>
      </div>
       
         
        </div>
       
    </div>

  </div>  
</section>


<section id="picturGallery">
  <div class="container">
    <h3>Photo Gallery</h3>
    <hr>
    <div class="row">
      <div class="col-md-4">
        <figure class="figure">
          <img src="{{asset('frontend/images/slider/s12.jpg')}}" class="figure-img img-fluid rounded" alt="...">
          <figcaption class="figure-caption">A caption for the above image.</figcaption>
        </figure>
      </div>
       <div class="col-md-4">
        <figure class="figure">
          <img src="{{asset('frontend/images/slider/s9.jpg')}}" class="figure-img img-fluid rounded" alt="...">
          <figcaption class="figure-caption">A caption for the above image.</figcaption>
        </figure>
      </div>
       <div class="col-md-4">
        <figure class="figure">
          <img src="{{asset('frontend/images/slider/s1.jpg')}}" class="figure-img img-fluid rounded" alt="...">
          <figcaption class="figure-caption">A caption for the above image.</figcaption>
        </figure>
      </div>
        <div class="col-md-4">
        <figure class="figure">
          <img src="{{asset('frontend/images/slider/s9.jpg')}}" class="figure-img img-fluid rounded" alt="...">
          <figcaption class="figure-caption">A caption for the above image.</figcaption>
        </figure>
      </div>
        <div class="col-md-4">
        <figure class="figure">
          <img src="{{asset('frontend/images/slider/s12.jpg')}}" class="figure-img img-fluid rounded" alt="...">
          <figcaption class="figure-caption">A caption for the above image.</figcaption>
        </figure>
      </div>
        <div class="col-md-4">
        <figure class="figure">
          <img src="{{asset('frontend/images/slider/s2.jpg')}}" class="figure-img img-fluid rounded" alt="...">
          <figcaption class="figure-caption">A caption for the above image.</figcaption>
        </figure>
      </div>

    </div>
  </div>

</section>
@endsection()

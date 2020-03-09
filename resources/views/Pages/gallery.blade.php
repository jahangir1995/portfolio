@extends('index')
@section('content')



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

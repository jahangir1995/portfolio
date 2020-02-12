<!DOCTYPE html>
<html lang="en">
<head>
   <title>Jahangir profile</title>
   <link rel="icon" href="frontend/images/jahangir.jpg" sizes="32x32" type="image/png">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

   
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/style.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/preload.css')}}">

</head>
<body>
  <div class="main">
    <!------------navbar start--------------->
  <nav class="navbar navbar-expand-sm transparent navbar-dark p-3 fixed-top">
    <div class="container">
      <a href="#" class="navbar-brand">Jahangir alam</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav">
          <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse justify-content-end" id="nav">
          <ul class="navbar-nav right">
            <li class="nav-item"><a href="{{route('index')}}" class="nav-link"> Home</a></li>
            <li class="nav-item"><a href="{{ route('aboutme')}}" class="nav-link"> About Me</a></li>
            <li class="nav-item"><a href="{{ route('blog')}}" class="nav-link">My Blog</a></li>
            <li class="nav-item"><a href="{{ route('contact')}}" class="nav-link"> contact</a></li>
            <li class="nav-item"><a href="{{ route('project')}}" class="nav-link"> project</a></li>
            <li class="nav-item"><a href="{{ route('gallery')}}" class="nav-link"> Gallery</a></li>


            <li class="nav-item">
            
          @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}" data-toggle="modal" data-target="#mymodal" class="nav-link"> login</a>

                    @endauth
                </div>
            @endif

            </li>



          </ul>
        </div>
    </div>
  </nav>
    <!------------navbar End--------------->
    <!------------login Modal start--------------->
    <div class="modal" id="mymodal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Admin Login</h5>
            <button class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            <form method="POST" action="{{ route('login') }}">
                        @csrf

              <div class="form-group">
                <label for="exampleInputPassword1">Username</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
              </div>

              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
              </div>
                         
           
          
          <div class="modal-footer">
            <button class="btn btn-secondary" data-dismiss="modal" >Close</button>
            <button type="submit" class="btn btn-primary" >Login</button>
          </div>
           </form>
          </div>
        </div>
      </div>
    </div>  

    <!------------login modal end--------------->


      @yield('content')      
             


<!-------------Footer section start------------>
<section id="footer" class="bg-dark p-2">
  <div class="container">
    <div class="row">
      <div class="col text-center">
        <h4 class="text-white text-capitalize">&copy; copyright 2019 jahangir</h4>
      </div>
    </div>
  </div>
</section>
<!-------------Footer section end------------>
</div>

<div class="preloader">
  <div id="load"></div>
</div>










<script src="{{asset('frontend/js/jquery.min.js')}}" ></script>
<script src="{{asset('frontend/js/popper.min.js')}}"></script>
<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
  <script>
    document.querySelector('.main').style.display="none";
    document.getElementById('load').classList.add('loader')
  
    setTimeout(()=>{
      document.getElementById('load').classList.remove('loader')
      document.querySelector('.main').style.display="block";

    },2000);

   
    
  </script>


</body>
</html>
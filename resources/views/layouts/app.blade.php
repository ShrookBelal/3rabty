<!DOCTYPE html>
<html lang="en">
<head>
<title>3Rabty</title>
<meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

 	<link rel="stylesheet" href="{{url('../resources/assets/front/bootstrap/css/bootstrap.css')}}" />
  <link rel="stylesheet" href="{{url('../resources/assets/front/style.css')}}"/>
  <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script src="{{url('../resources/assets/front/bootstrap/js/bootstrap.js')}}"></script>
  <script src="{{url('../resources/assets/front/script.js')}}"></script>



<!-- Owl stylesheet -->
<link rel="stylesheet" href="{{url('../resources/assets/front/owl-carousel/owl.carousel.css')}}">
<link rel="stylesheet" href="{{url('../resources/assets/front/owl-carousel/owl.theme.css')}}">
<script src="{{url('../resources/assets/front/owl-carousel/owl.carousel.js')}}"></script>
<!-- Owl stylesheet -->


<!-- slitslider -->
    <link rel="stylesheet" type="text/css" href="{{url('../resources/assets/front/slitslider/css/style.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{url('../resources/assets/front/slitslider/css/custom.css')}}" />
    <script type="text/javascript" src="{{url('../resources/assets/front/slitslider/js/modernizr.custom.79639.js')}}"></script>
    <script type="text/javascript" src="{{url('../resources/assets/front/slitslider/js/jquery.ba-cond.min.js')}}"></script>
    <script type="text/javascript" src="{{url('../resources/assets/front/slitslider/js/jquery.slitslider.js')}}"></script>
<!-- slitslider -->

</head>

<body>


<!-- Header Starts -->
<div class="navbar-wrapper">

        <div class="navbar-inverse" role="navigation">
          <div class="container">
            <div class="navbar-header">


              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>

            </div>


            <!-- Nav Starts -->
            <div class="navbar-collapse  collapse">
              <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="{{route('index')}}">Home</a></li>
                <li><a href="{{route('services')}}">Services</a></li>         
                <li><a href="{{route('products')}}">Cars</a></li>
                <li>
                    @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" style="text-align:center" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{route('profile')}}">
                            My Profile
                          </a><br>
                          <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
                </li>
              </ul>
            </div>
            <!-- #Nav Ends -->

          </div>
        </div>

    </div>
<!-- #Header Starts -->





<div class="container">

<!-- Header Starts -->
<div class="header">
  <a href="index.php">
    <img src="{{url('../resources/assets/front/images/logo.png')}}" width="200px" height="80px" alt="Realestate">
</a>

              <ul class="pull-right">
                <li><a href="{{route('products')}}">Buy</a></li>
                <li><a href="{{route('addproduct')}}">Sale</a></li>         
                <li><a href="{{route('services')}}">Service</a></li>
              </ul>
</div>
<!-- #Header Starts -->
</div>

@yield('content')


<div class="footer">

    <div class="container">
    
    
    
    <div class="row">
                <div class="col-lg-3 col-sm-3">
                       <h4>Information</h4>
                       <ul class="row">
                    <li class="col-lg-12 col-sm-12 col-xs-3"><a href="about.php">About</a></li>
                    <li class="col-lg-12 col-sm-12 col-xs-3"><a href="{{route('services')}}">Services</a></li>         
                    <li class="col-lg-12 col-sm-12 col-xs-3"><a href="{{route('products')}}">Cars</a></li>
                    <li class="col-lg-12 col-sm-12 col-xs-3"><a href="contact.php">Contact</a></li>
                  </ul>
                </div>
                
                <div class="col-lg-3 col-sm-3">
                        <h4>Newsletter</h4>
                        <p>Get notified about the latest properties in our marketplace.</p>
                        <form class="form-inline" role="form">
                                <input type="text" placeholder="Enter Your email address" class="form-control">
                                    <button class="btn btn-success" type="button">Notify Me!</button></form>
                </div>
                <div class="col-lg-3 col-sm-3">
                  <h4>Follow us</h4>
                  <a href="#"><img src="{{url('../resources/assets/front/images/facebook.png')}}" alt="facebook"></a>
                  <a href="#"><img src="{{url('../resources/assets/front/images/twitter.png')}}" alt="twitter"></a>
                  <a href="#"><img src="{{url('../resources/assets/front/images/linkedin.png')}}" alt="linkedin"></a>
                  <a href="#"><img src="{{url('../resources/assets/front/images/instagram.png')}}" alt="instagram"></a>
          </div>
    
                 <div class="col-lg-3 col-sm-3">
                        <h4>Contact us</h4>
    <span class="glyphicon glyphicon-map-marker"></span> 8290 Walk Street, Australia <br>
    <span class="glyphicon glyphicon-envelope"></span> hello@bootstrapreal.com<br>
    <span class="glyphicon glyphicon-earphone"></span> (123) 456-7890</p>
                </div>
            </div>
    <p class="copyright">Copyright 2013. All rights reserved.	</p>
    
    
    </div></div>
    
    
    
    
    <!-- Modal -->
    <div id="loginpop" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="row">
            <div class="col-sm-6 login">
            <h4>Login</h4>
            <form method="POST" action="{{ route('login') }}">
                @csrf

            <div class="form-group">
              <label for="email" class="col-md-4 col-form-label text-md-right sr-only">{{ __('E-Mail Address') }}</label>
              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
              @error('email')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>

            <div class="form-group">
              <label for="password" class="col-md-4 col-form-label text-md-right sr-only">{{ __('Password') }}</label>
              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                              </div>
            <div class="checkbox">
              <label>
                  <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> Remember me
              </label>
            </div>
            <button type="submit" class="btn btn-success">Sign in</button>
          </form>          
            </div>
            <div class="col-sm-6">
              <h4>New User Sign Up</h4>
              <p>Join today and get updated with all the properties deal happening around.</p>
              <button type="submit" class="btn btn-info"  onclick="window.location.href='{{ route('register') }}'">Join Now</button>
            </div>
    
          </div>
        </div>
      </div>
    </div>
    <!-- /.modal -->
    </body>
    </html>
    
    
    
    
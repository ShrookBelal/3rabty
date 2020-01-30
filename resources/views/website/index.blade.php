@extends('layouts.app')
@section('content')
<div class="">
    <div id="slider" class="sl-slider-wrapper">

<div class="sl-slider">

  <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
    <div class="sl-slide-inner">
      <div class="bg-img bg-img-1">
        <img class="sp-image" width="1570px" src="{{url('assets/front/images/slider/slider-img-1.jpg')}}" alt="Slider 1"/>
      </div>
      <h2><a href="#">You can By Best cars With best Deal with us</a></h2>
      <blockquote>              
      <cite><a href="{{route('products')}}" style="color:white">Buy Now</a></cite>
      </blockquote>
    </div>
  </div>
  
  <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
    <div class="sl-slide-inner">
      <div class="bg-img bg-img-2">
        <img class="sp-image" width="1570px" src="{{url('assets/front/images/slider/slider-img-2.jpg')}}" alt="Slider 1"/>
      </div>
      <h2><a href="#">We provide you with all your car services needs</a></h2>
      <blockquote>              
     <cite><a href="{{route('services')}}" style="color:white">Check Now</a></cite>
      </blockquote>
    </div>
  </div>
  
  <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
    <div class="sl-slide-inner">
      <div class="bg-img bg-img-3">
        <img class="sp-image" width="1570px" src="{{url('assets/front/images/slider/slider-img-3.jpg')}}" alt="Slider 1"/>
      </div>
      <h2><a href="#">You car sell your car using 3arabty </a></h2>
      <blockquote>              
     <cite><a href="{{route('addproduct')}}" style="color:white">Sell Now</a></cite>
      </blockquote>
    </div>
  </div>
</div><!-- /sl-slider -->



<nav id="nav-dots" class="nav-dots">
  <span class="nav-dot-current"></span>
  <span></span>
  <span></span>
 
</nav>

</div><!-- /slider-wrapper -->
</div>



<div class="banner-search">
<div class="container"> 
<!-- banner -->
<h3>Buy, Sale & Rent</h3>
<div class="searchbar">
<div class="row">
<div class="col-lg-6 col-sm-6">
  <input type="text" class="form-control" placeholder="Search of Properties">
  <div class="row">
    <div class="col-lg-3 col-sm-3 ">
      <select class="form-control">
        <option>Buy</option>
        <option>Rent</option>
        <option>Sale</option>
      </select>
    </div>
    <div class="col-lg-3 col-sm-4">
      <select class="form-control">
        <option>Price</option>
        <option>$150,000 - $200,000</option>
        <option>$200,000 - $250,000</option>
        <option>$250,000 - $300,000</option>
        <option>$300,000 - above</option>
      </select>
    </div>
    <div class="col-lg-3 col-sm-4">
    <select class="form-control">
        <option>Property</option>
        <option>Apartment</option>
        <option>Building</option>
        <option>Office Space</option>
      </select>
      </div>
      <div class="col-lg-3 col-sm-4">
      <button class="btn btn-success"  onclick="window.location.href='buysalerent.php'">Find Now</button>
      </div>
  </div>
  
  
</div>
<div class="col-lg-5 col-lg-offset-1 col-sm-6 ">
  <p>Join now and get updated with all the properties deals.</p>
  <button class="btn btn-info"   data-toggle="modal" data-target="#loginpop">Login
  </button>        
</div>
</div>
</div>
</div>
</div>
<!-- banner -->
<div class="container">
<div class="properties-listing spacer"> <a href="{{route('products')}}" class="pull-right viewall">View All Listing</a>
<h2>Featured Cars</h2>
<div id="owl-example" class="owl-carousel">
  @foreach ($products as $p)
  <div class="properties">
      <div class="image-holder"><img src="{{url('assets/front/images/products/'.$p->image.'')}}" class="car" alt="properties"/>
        <div class="status sold">{{$p->Color->color}}</div>
      </div>
    <h4><a href="property-detail.php">{{$p->name}}</a></h4>
      <p class="price">Price: ${{$p->price}}<br>
        {{$p->Status->status}}</p>
      
    <a class="btn btn-primary" href="{{route('product',['id'=>$p->id])}}">View Details</a>
      </div>
  @endforeach


</div>
</div>

<div class="properties-listing spacer"> <a href="{{route('parts')}}" class="pull-right viewall">View All Listing</a>
  <h2>Featured Spare parts</h2>
  <div class="owl-carousel owl-theme" style="opacity: 1;display: flex;">
    @foreach ($parts as $pr)
    <div class="properties" style="margin:0 5px;">
        <div class="image-holder"><img src="{{url('assets/front/images/products/'.$pr->image.'')}}" class="car" alt="properties"/>
          <div class="status sold">{{$pr->Color->color}}</div>
        </div>
      <h4><a href="property-detail.php">{{$pr->name}}</a></h4>
        <p class="price">Price: ${{$pr->price}}<br>
          {{$pr->Status->status}}</p>
        
      <a class="btn btn-primary" href="{{route('part',['id'=>$pr->id])}}">View Details</a>
        </div>
    @endforeach
  
  
  </div>
  </div>
<div class="spacer">
<div class="row">
<div class="col-lg-6 col-sm-9 recent-view">
<h3>About Us</h3>
<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.<br><a href="about.php">Learn More</a></p>

</div>
<div class="col-lg-5 col-lg-offset-1 col-sm-3 recommended">
<h3>Recommended Properties</h3>
<div id="myCarousel" class="carousel slide">
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1" class=""></li>
    <li data-target="#myCarousel" data-slide-to="2" class=""></li>
    <li data-target="#myCarousel" data-slide-to="3" class=""></li>
  </ol>
  <!-- Carousel items -->
  <div class="carousel-inner" style="opacity:1;display:block">
      @foreach ($top as $t)
      
    <div class="item @if($t->id == 1)active @endif">
      <div class="row">
        <div class="col-lg-4"><img src="{{url('assets/front/images/products/'.$t->image.'')}}" class="img-responsive" alt="properties"/></div>
        <div class="col-lg-8">
          <h5><a href="property-detail.php">{{$t->name}}</a></h5>
          <p class="price">${{$t->price}}</p>
          <a href="{{route('product',['id'=>$t->id])}}" class="more">More Detail</a> </div>
      </div>
    </div>
    @endforeach
  </div>
</div>
</div>
</div>
</div>
</div>
@endsection
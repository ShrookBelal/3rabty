@extends('layouts.app')
@section('content')
<div class="inside-banner">
        <div class="container"> 
          <span class="pull-right"><a href="#">Home</a> / Buy</span>
          <h2>Buy</h2>
      </div>
      </div>
      <!-- banner -->
      
      
      <div class="container">
      <div class="properties-listing spacer">
      
      <div class="row">
      <div class="col-lg-3 col-sm-4 hidden-xs">
      
      <div class="hot-properties hidden-xs">
      <h4>Hot Properties</h4>
      @foreach ($top as $t)
      <div class="row">
        
        <div class="col-lg-4 col-sm-5"><img src="{{url('../resources/assets/front/images/products/'.$t->image.'')}}" class="img-responsive img-circle" alt="properties"/></div>
        <div class="col-lg-8 col-sm-7">
          <h5><a href="{{route('product',['id'=>$t->id])}}">{{$t->name}}</a></h5>
          <p class="price">${{$t->price}}</p> </div>
      </div>
        @endforeach
                    
      
      </div>
      
      
      
      <div class="advertisement">
        
      </div>
      
      </div>
      
      <div class="col-lg-9 col-sm-8 ">
      @foreach ($product as $p)
          
      
      <h2>{{$p->name}}</h2>
      <div class="row">
        <div class="col-lg-8">
        <div class="property-images">
          <!-- Slider Starts -->
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators hidden-xs">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1" class=""></li>
              <li data-target="#myCarousel" data-slide-to="2" class=""></li>
              <li data-target="#myCarousel" data-slide-to="3" class=""></li>
            </ol>
            <div class="carousel-inner">
              <!-- Item 1 -->
              <div class="item active">
                <img src="{{url('../resources/assets/front/images/products/'.$p->image.'')}}" width="1000px" class="properties" alt="properties" />
              </div>
              <!-- #Item 1 -->
      
              <!-- Item 2 -->
              <div class="item">
                <img src="{{url('../resources/assets/front/images/products/'.$p->image.'')}}" width="1000px" class="properties" alt="properties" />
               
              </div>
              <!-- #Item 2 -->
      
              <!-- Item 3 -->
               <div class="item">
                <img src="{{url('../resources/assets/front/images/products/'.$p->image.'')}}" width="1000px" class="properties" alt="properties" />
              </div>
              <!-- #Item 3 -->
      
              <!-- Item 4 -->
              <div class="item ">
                <img src="{{url('../resources/assets/front/images/products/'.$p->image.'')}}" width="1000px" class="properties" alt="properties" />
                
              </div>
              <!-- # Item 4 -->
            </div>
            <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
          </div>
      <!-- #Slider Ends -->
      
        </div>
        
      
      
      
        <div class="spacer"><h4><span class="glyphicon glyphicon-th-list"></span> Properties Detail</h4>
        <p>{{$p->details}}</p>
        </div>
        </div>
        <div class="col-lg-4">
        <div class="col-lg-12  col-sm-6">
      <div class="property-info">
      <p class="price">{{$p->Type->type}}</p>
      <p class="price">${{$p->price}}</p>
      <h4> Status :{{$p->Status->status}}</h4>
      <h4> Color :{{$p->Color->color}}</h4>
        <div class="profile">
        <span class="glyphicon glyphicon-user"></span>{{$p->User->name}}
        <p>{{$p->User->email}}</p>
        </div>
      </div>
      
      </div>
      @endforeach
      <div class="col-lg-12 col-sm-6 ">
      {{-- <div class="enquiry">
        <h6><span class="glyphicon glyphicon-envelope"></span> Post Enquiry</h6>
        <form role="form">
                      <input type="text" class="form-control" placeholder="Full Name"/>
                      <input type="text" class="form-control" placeholder="you@yourdomain.com"/>
                      <input type="text" class="form-control" placeholder="your number"/>
                      <textarea rows="6" class="form-control" placeholder="Whats on your mind?"></textarea>
            <button type="submit" class="btn btn-primary" name="Submit">Send Message</button>
            </form>
       </div>         
      </div> --}}
        </div>
      </div>
      </div>
      </div>
      </div>
      </div>
@endsection
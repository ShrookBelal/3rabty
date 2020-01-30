@extends('layouts.app')
@section('content')

<!-- banner -->
<div class="inside-banner">
        <div class="container"> 
          <span class="pull-right"><a href="index.php">Home</a> / Buy</span>
          <h2>Buy</h2>
      </div>
      </div>
      <!-- banner -->
      
      
      <div class="container">
      <div class="properties-listing spacer">
      
      <div class="row">
      <div class="col-lg-3 col-sm-4 ">
      
        <div class="search-form"><h4><span class="glyphicon glyphicon-search"></span> Search for</h4>
          <input type="text" class="form-control" placeholder="Search of Properties">
          <div class="row">
                  <div class="col-lg-5">
                    <select class="form-control">
                      <option>Buy</option>
                      <option>Rent</option>
                      <option>Sale</option>
                    </select>
                  </div>
                  <div class="col-lg-7">
                    <select class="form-control">
                      <option>Price</option>
                      <option>$150,000 - $200,000</option>
                      <option>$200,000 - $250,000</option>
                      <option>$250,000 - $300,000</option>
                      <option>$300,000 - above</option>
                    </select>
                  </div>
                </div>
      
                <div class="row">
                <div class="col-lg-12">
                    <select class="form-control">
                      <option>Property Type</option>
                      <option>Apartment</option>
                      <option>Building</option>
                      <option>Office Space</option>
                    </select>
                    </div>
                </div>
                <button class="btn btn-primary">Find Now</button>
      
        </div>
      
      
      
      <div class="hot-properties hidden-xs">
      <h4>Hot Properties</h4>
      @foreach ($top as $t)
      <div class="row">
        
        <div class="col-lg-4 col-sm-5"><img src="{{url('assets/front/images/products/'.$t->image.'')}}" class="img-responsive img-circle" alt="properties"/></div>
        <div class="col-lg-8 col-sm-7">
          <h5><a href="{{route('product',['id'=>$t->id])}}">{{$t->name}}</a></h5>
          <p class="price">${{$t->price}}</p> </div>
      </div>
        @endforeach
      </div>
      
      
      </div>
      
      <div class="col-lg-9 col-sm-8">
      <div class="sortby clearfix">
      <div class="pull-left result">Showing: 12 of 100 </div>
        <div class="pull-right">
        <select class="form-control">
        <option>Sort by</option>
        <option>Price: Low to High</option>
        <option>Price: High to Low</option>
      </select></div>
      
      </div>
      <div class="row">
      
           <!-- properties -->
           @foreach ($products as $p)
           <div class="col-lg-4 col-sm-6">
            <div class="properties">
              <div class="image-holder"><img src="{{url('assets/front/images/products/'.$p->image.'')}}" class="car" alt="properties">
                <div class="status sold">{{$p->Color->color}}</div>
              </div>
              <h4><a href="{{route('product',['id'=>$p->id])}}">{{$p->name}}</a></h4>
            <p class="price">Price: ${{$p->price}}<br>
              {{$p->Status->status}}</p>
              <a class="btn btn-primary" href="{{route('product',['id'=>$p->id])}}">View Details</a>
            </div>
            </div>
           @endforeach
            
            <!-- properties -->
      
            {{-- <div class="center">
      <ul class="pagination">
                <li><a href="#">«</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">»</a></li>
              </ul>
      </div> --}}
      
      </div>
      </div>
      </div>
      </div>
      </div>
      

@endsection
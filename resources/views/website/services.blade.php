@extends('layouts.app')
@section('content')
<!-- banner -->
<div class="inside-banner">
        <div class="container"> 
          <span class="pull-right"><a href="#">Home</a> / Services</span>
          <h2>Blogs</h2>
      </div>
      </div>
      <!-- banner -->
      <div class="container">
            <div class="spacer blog">
            <div class="row">
              <div class="col-lg-8 col-sm-12 ">
<div class="col-lg-12 visible-lg" >

        <!-- tabs -->
        <div class="tabbable">
                    <ul class="nav nav-tabs" >
                        @foreach ($services as $s)
                        <li @if($s->id == 1)class="active"@endif><a href="#tab{{$s->id}}" data-toggle="tab" class="active">{{$s->name}}</a></li>
                        @endforeach
                    </ul>
                    <div class="tab-content">
                            @foreach ($providers as $p)
                      <div class="tab-pane active" id="tab{{$p->Service->id}}">
                        <ul class="list-unstyled">
                                @foreach ($provider as $pr)
                                @if($pr->service_id == $p->Service->id)
                                
                             <li class="active">
                                <div class="row">
                                        <div class="col-lg-4 col-sm-4 "><a href="blogdetail.php" class="thumbnail">
                                            <img src="{{url('../resources/assets/front/images/services/'.$pr->image.'')}}" alt="blog title"></a>
                                        </div>
                                        <div class="col-lg-8 col-sm-8 ">
                                        <h3><a href="blogdetail.php">{{$pr->name}}</a></h3>
                                        <div class="info">{{$pr->phone}}</div>                                               
                                        <p>{{$pr->details}}</p>
                                        <a href="blogdetail.php" class="more">Order Now</a>
                                        </div>
                                   </div>
                           </li>
                           @endif
                           @endforeach
                         </ul>
                      </div>
                      @endforeach
                    </div>
                    
                    
                    
                  </div>
        <!-- tabs -->
      
        </div>
              </div>
            </div>
            </div>
      </div>
@endsection
@extends('back-end.layout.app')

@section('title')

@endsection



@section('content')


@component('back-end.layout.header')
@slot('nav_title')

@endslot

@endcomponent


                <div class="card-body">
                  <form action="{{route('storeproduct')}}" method="POST" enctype="multipart/form-data">> 
                 @include('back-end.products.form')
          
               
                 
                    <button type="submit" class="btn btn-primary pull-right">add</button>
                    <div class="clearfix"></div>
                  </form>
         
@endsection


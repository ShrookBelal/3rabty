@extends('back-end.layout.app')

@section('title')

@endsection



@section('content')


@component('back-end.layout.header')
@slot('nav_title')

@endslot

@endcomponent


                <div class="card-body">
                  <form action="{{route('categories.update', ['id' => $row->id])}}" method="POST"> 
                 @include('back-end.categories.form')
          
               
                 
                    <button type="submit" class="btn btn-primary pull-right">update</button>
                    <div class="clearfix"></div>
                  </form>
         
@endsection


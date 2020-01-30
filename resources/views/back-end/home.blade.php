@extends('back-end.layout.app')
@section('content')
<!--this for page title-->
@section('title')
home page
@endsection
@push('css')
<!-- <style type="text/css">
  a{

    color: red !important;
  }
</style> -->
@endpush
@component('back-end.layout.header',['nav_title'=>"Home Page "])
<!--another way 
@component('back-end.layout.header')
@slot('nav_title')
Home Page
@endslot

-->
<!--removed from home because i will use it in all page so i will write in header page-->
<!--<li> 
  <a href="">logout</a>
  </li>-->

@endcomponent

  @include('back-end.home-sections.statics')
  @include('back-end.home-sections.latest-comments')

@endsection


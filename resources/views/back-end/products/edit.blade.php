@extends('back-end.layout.app')

@section('title')

@endsection



@section('content')


@component('back-end.layout.header')
@slot('nav_title')

@endslot

@endcomponent

  <form action="{{route('products.update', ['id' => $row->id])}}" method="POST"> 
                   @csrf

            @include('back-end.products.form')
           <button type="submit" class="btn btn-primary pull-right">Update </button>
                    <div class="clearfix"></div>
                  </form>

                   




@endsection

@extends('back-end.layout.app')

@section('title')
{{$PageTitle}}
@endsection



@section('content')


@component('back-end.layout.header')
@slot('nav_title')
{{$PageTitle}}
@endslot

@endcomponent

@component('back-end.shared.create' , ['pageTitle' => $PageTitle , 'pageDes' => $PageDes])
                <div class="card-body">
                  <form action="{{route($routeName.'.store')}}" method="POST" enctype="multipart/form-data"> 
                 @include('back-end.users.form')
                 {{csrf_field()}}
                
                 
                    <button type="submit" class="btn btn-primary pull-right">add{{$mdulename}}</button>
                    <div class="clearfix"></div>
                  </form>
               @endcomponent
@endsection


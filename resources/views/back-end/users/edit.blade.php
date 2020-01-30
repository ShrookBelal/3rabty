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
   @component('back-end.shared.edit' , ['pageTitle' => $PageTitle , 'pageDes' => $PageDes])

                  <form action="{{ route($routeName.'.update' , ['id' => $row]) }}" method="POST"> 
                    {{method_field('PUT')}}
                 @include('back-end.'.$folderName.'.form')
                 
                    <button type="submit" class="btn btn-primary pull-right">Update {{$mdulename}}</button>
                    <div class="clearfix"></div>
                  </form>
               

   @endcomponent
@endsection


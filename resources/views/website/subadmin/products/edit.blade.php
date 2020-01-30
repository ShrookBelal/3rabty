@extends('layouts.app')



@section('content')




                <div class="card-body">
                  <form action="{{route('adminproducts.update', ['id' => $row->id])}}" method="POST">
                  
                 @include('website.subadmin.products.form')
                    <button type="submit" class="btn btn-primary pull-right col-xl-5">update</button>
                    <div class="clearfix"></div>
                  </form>
         
@endsection


@extends('layouts.app')
@section('content')
<div class="text-right">
         <a class="btn btn-success" href="{{ route('addproduct') }}" class="btn btn-white btn-round">
             Add product
         </a>
     </div>

        <div class="site-section  pb-0">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-7 section-title text-center mb-5">
            <h2 class="d-block">Products <span style="color: red;"></span> </h2>
          </div>
        </div>
        <div class="row mb-5">
            <div class="site-blocks-table">
              <table class="table table-bordered">
                <thead>
                 
                  <tr>
                    <th class="product-thumbnail">Image</th>
                    <th class="product-name">ProductName</th>
                    <th class="product-price">color</th>
                    <th class="product-quantity">price</th>
                    <th class="product-quantity">category</th>

                    <th class="product-remove">UPdate</th>
                       <th class="product-remove">Delete</th>
                  </tr>
                </thead>
                @foreach($rows as $row)
                <tbody>



                      <tr>
                    <td class="product-thumbnail" style="width:200px">
                      <img src="{{url('../resources/assets/front/images/products/'.$row->image.'')}}" width="200px" height="130px" alt="Image" class="img-fluid">
                    </td>
                    <td class="product-name">
                      <h2 class="h5 cart-product-title text-black">{{$row->name}}</h2>
                  </td>
                
                    <td>{{$row->color}}</td>
                      <td>{{$row->price}}</td>
                    <td>{{$row->category->name}}</td>

                    <td><a href="{{route('adminproducts.edit',['id'=>$row->id])}}" class="btn btn-primary height-auto btn-sm">edit</a></td>
                      <form action="{{route('adminproducts.delete',['id'=>$row->id])}}" method="get">
  

                     <td><button type="submit" class="btn btn-primary height-auto btn-sm">Delete</button>
</form>
                     </td>
                    
 
                  </tr>
                @endforeach
                </tbody>
              </table>
            </div>
        </div>

      </div>
</div>

@endsection

@extends('back-end.layout.app')

@section('title')

@endsection



@section('content')


@component('back-end.layout.header')
@slot('nav_title')

@endslot

@endcomponent


       <div class="text-right">
                <a href="{{ route('createproduct') }}" class="btn btn-white btn-round">
                    Add product
                </a>
            </div>

        <div class="table-responsive">
            <table class="table">
                <thead class=" text-primary">
                <tr>

                    <th>
                        Name
                    </th>
                    <th>
                        color
                    </th>
                    <th>
                        details
                    </th>
                    <th>
                        price
                    </th>
                    <th class="text-right">
                        cat
                    </th>
                </tr></thead>
                <tbody>
                @foreach($rows as $row)
                    <tr>
                        <td>
                            {{ $row->name }}
                        </td>
                        <td>
                            {{ $row->color }}
                        </td>
                        <td>
                            {{ $row->details }}
                        </td>
                        <td>
                        {{ $row->price }}
                        </td>
                        <td>
                            {{ $row->category_id }}
                        </td>
                          <td class="td-actions text-right">
                              <a href="{{route('products.edit',['id'=>$row->id])}}" rel="tooltip" title="" class="btn btn-white btn-link btn-sm" data-original-title="Edit ">
    <i class="material-icons">edit</i>
</a>
                           <form action="{{route('products.delete',['id'=>$row->id])}}" method="get">
    {{ csrf_field() }}

    <button type="submit" rel="tooltip" title="" class="btn btn-white btn-link btn-sm" data-original-title="Remove ">
        <i class="material-icons">close</i>
    </button>
</form>

                         </td>

                    </tr>
                @endforeach
                </tbody>
            </table>
  
        </div>

@endsection

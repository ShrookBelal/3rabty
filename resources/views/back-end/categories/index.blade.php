@extends('back-end.layout.app')





@section('content')


@component('back-end.layout.header')


@endcomponent

<div class="text-right">
         <a href="{{ route('createcategory') }}" class="btn btn-white btn-round">
             Add category
         </a>
     </div>

        <div class="table-responsive">
            <table class="table">
                <thead class=" text-primary">
                <tr>

                    <th>
                        Name
                    </th>


                </tr></thead>
                <tbody>
                @foreach($categ as $row)
                    <tr>
                        <td>
                            {{ $row->name }}
                        </td>

                          <td class="td-actions text-right">
                              <a href="{{route('categories.edit',['id'=>$row->id])}}" rel="tooltip" title="" class="btn btn-white btn-link btn-sm" data-original-title="Edit ">
    <i class="material-icons">edit</i>
</a>
                           <form action="{{route('categories.delete',['id'=>$row->id])}}" method="get">
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

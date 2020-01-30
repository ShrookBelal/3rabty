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
@component('back-end.shared.table' , ['pageTitle' => $PageTitle , 'pageDes' => $PageDes])
@slot('addbutton')
  <div class="col-md-4 text-right">
                <a href="{{ route($routeName.'.create')}}" class="btn btn-white btn-round">
                    Add {{ $sModuleName }}
                </a>
            </div>
        @endslot
        <div class="table-responsive">
            <table class="table">
                <thead class=" text-primary">
                <tr>
                    <th>
                        ID
                    </th>
                    <th>
                        Name
                    </th>
                    <th>
                        email
                    </th>
                     <th>
                        phone
                    </th>
                      <th>
                        message
                    </th>
                    
                    
                    <th class="text-right">
                        control
                    </th>
                     <th>
                        delete more users
                    </th>
                </tr></thead>
                <tbody>

                   
                @foreach($rows as $row)
                    <tr>
                        <td>
                            {{ $row->id }}
                        </td>
                        <td>
                            {{ $row->name }}
                        </td>
                        <td>
                            {{ $row->email }}
                        </td>
                          <td>
                            {{ $row->phone }}
                        </td>
                          <td>
                            {{ $row->message }}
                        </td>
                       
                       
                       
                        <td class="td-actions text-right">
                            @include('back-end.shared.buttons.edit')
                            @include('back-end.shared.buttons.delete')

                        </td>
                        <td>
                           
  
               
</td>
                    </tr>
                @endforeach

                  <a href="deletealluser.blade.php">delete all users</a>
 
                </tbody>
            </table> 
            
                 
                
                
            {!! $rows->links() !!}
        </div>
    @endcomponent
@endsection

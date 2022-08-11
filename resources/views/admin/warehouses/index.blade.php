@extends('layouts.admin')
@section('content')
<div class="card">
    <div class="card-header">KHO HÀNG</div>
    <a class="btn btn-xs btn-primary" href="{{ route('warehouse.store') }}">Thêm </a>
    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>status</th>
                        <th></th>
                    </tr>

                </thead>
                <tbody>
                    @foreach($warehouses as $key => $warehouse)
                    <tr >
                        <td>
                            {{ $warehouse->id ?? '' }}
                        </td>
                        <td>
                            {{ $warehouse["name"] ?? '' }}
                        </td>
                        <td>
                            @if( $warehouse["status"] == 0 )
                            <span class="badge badge-danger">{{ $listStatus[0] }}</span>
                            @else
                            <span class="badge badge-success">{{ $listStatus[1] }}</span>
                            @endif
                        </td>
                        <td>
                           <a class="btn btn-xs btn-primary" href="{{ route('warehouse.show', $warehouse->id) }}">
                                 Xem
                            </a>
                            <a class="btn btn-xs btn-info" href="{{ route('warehouse.edit', $warehouse->id) }}">
                                 Xuất kho
                            </a>
                        </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div  class="text-center">
                {{$warehouses->links("pagination::bootstrap-4")}}            
            </div>
        </div>
    </div>
</div>

@endsection
@section('scripts')
@endsection

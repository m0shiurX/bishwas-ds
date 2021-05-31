@extends('layouts.app')
 
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <h2>Active Products</h2>
                <a class="d-inline-block btn btn-success" href="{{ route('products.create') }}"> Add a product</a>
            </div>
        </div>

        <div class="card-body">
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p class="m-0">{{ $message }}</p>
                </div>
            @endif
            
            <table class="table table-bordered">
                <tr>
                    <th>#</th>
                    <th>Product Name</th>
                    <th>Rate</th>
                    <th>Stock</th>
                    <th class="d-none d-md-table-cell text-center">Updated</th>
                    <th class="text-center">Action</th>
                </tr>
                @foreach ($data as $key => $value)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $value->name }}</td>
                    <td>{{ $value->rate }}</td>
                    <td>{{ $value->stock }}</td>
                    <td class="d-none d-md-table-cell text-center">{{ $value->created_at->diffForHumans() }}</td>
                    <td>
                        <form action="{{ route('products.destroy',$value->id) }}" method="POST">   
                            <a class="btn btn-secondary"  role="button" href="{{ route('products.show',$value->id) }}">Show</a>    
                            <a class="btn btn-primary" role="button" href="{{ route('products.edit',$value->id) }}">Edit</a>   
                            @csrf
                            @method('DELETE')      
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
            {!! $data->links() !!} 
        </div>
        <div class="card-footer">
        </div>
    </div>
   
@endsection
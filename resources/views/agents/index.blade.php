@extends('layouts.app')
 
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <h2>Active agents</h2>
                <a class="d-inline-block btn btn-success" href="{{ route('agents.create') }}"> Add agent</a>
            </div>
        </div>

        <div class="card-body">
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p class="m-0">{{ $message }}</p>
                </div>
            @endif
            
            <table class="table table-responsive table-bordered">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Phone</th>
                    {{-- <th>Email</th> --}}
                    <th>Address</th>
                    <th class="text-center">Action</th>
                </tr>
                @foreach ($data as $key => $value)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $value->name }}</td>
                    <td>{{ $value->phone }}</td>
                    {{-- <td>{{ $value->email }}</td> --}}
                    <td>{{ $value->address }}</td>
                    <td>
                        <form action="{{ route('agents.destroy',$value->id) }}" method="POST">   
                            <a class="btn btn-secondary"  role="button" href="{{ route('agents.show',$value->id) }}">Show</a>    
                            <a class="btn btn-primary" role="button" href="{{ route('agents.edit',$value->id) }}">Edit</a>   
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
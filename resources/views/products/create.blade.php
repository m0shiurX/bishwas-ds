@extends('layouts.app')
  
@section('content')
<div class="card">
    <div class="card-header">
        <div class="d-flex justify-content-between align-items-center">
            <h2>Add a product</h2>
            <a class="d-inline-block btn btn-success" href="{{ route('products.index') }}"> Back</a>
        </div>
    </div>
    <form action="{{ route('products.store') }}" method="POST">
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <p><strong>Whoops!</strong> There were some problems with your input.</p>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @csrf
            <div class="form-group">
                <label for="name">Product Name</label>
                <input type="text" class="form-control" id="name" name="name"">
            </div>
            <div class="form-group">
                <label for="details">Product Details</label>
                <input type="text" class="form-control" id="details" name="details">
            </div>
            <div class="form-group">
                <label for="rate">Current Rate</label>
                <input type="text" class="form-control" id="rate" name="rate">
            </div>
            <div class="form-group">
                <label for="stock">Current Stock</label>
                <input type="number" class="form-control" id="stock" name="stock" value="0">
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Save product</button>
        </div>
    </form>
</div>
@endsection
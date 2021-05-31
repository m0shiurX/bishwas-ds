@extends('layouts.app')
   
@section('content')
<div class="card">
    <div class="card-header">
        <div class="d-flex justify-content-between align-items-center">
            <h2>Product info</h2>
            <a class="d-inline-block btn btn-success" href="{{ route('products.index') }}"> Back</a>
        </div>
    </div>
    <div class="card-body">
        <div class="list-group">
            <div class="list-group-item list-group-item-action">
              <div class="d-flex w-100 justify-content-between">
                <h4 class="mb-1">Product Name</h4>
              </div>
              <p class="mb-1">{{ $product->name }}</p>
            </div>
            <div class="list-group-item list-group-item-action">
              <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">Details</h5>
              </div>
              <p class="mb-1">{{ $product->details }}</p>
            </div>
            <div class="list-group-item list-group-item-action">
              <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">Rate</h5>
              </div>
              <p class="mb-1">{{ $product->rate }}</p>
            </div>

            <div class="list-group-item list-group-item-action">
              <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">Current Stock</h5>
              </div>
              <p class="mb-1">{{ $product->stock }}</p>
            </div>

          </div>
    </div>
    <div class="card-footer">
        <small class="text-muted"> Last updated {{ $product->created_at->diffForHumans() }}</small>
    </div>
</div>
@endsection
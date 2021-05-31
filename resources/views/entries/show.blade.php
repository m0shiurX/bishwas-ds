@extends('layouts.app')
   
@section('content')
<div class="card">
    <div class="card-header">
        <div class="d-flex justify-content-between align-items-center">
            <h2>Entry info</h2>
            <a class="d-inline-block btn btn-success" href="{{ route('agents.index') }}"> Back</a>
        </div>
    </div>
    <div class="card-body">
            <div class="form-group">
                <label>Product:</label>
                {{ $entry->product->name }}
            </div>
            <div class="form-group">
                <label>Price:</label>
                {{ $entry->product->rate }}
            </div>
            <div class="form-group">
                <label>Stock:</label>
                {{ $entry->product->stock }}
            </div>
            <div class="form-group">
                <label>agent:</label>
                {{ $entry->agent->name }}
            </div>
    </div>
    <div class="card-footer">
        <p class="text-muted"> Last updated on: </p>
    </div>
</div>
@endsection
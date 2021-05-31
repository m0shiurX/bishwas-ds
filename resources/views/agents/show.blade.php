@extends('layouts.app')
   
@section('content')
<div class="card">
    <div class="card-header">
        <div class="d-flex justify-content-between align-items-center">
            <h2>Agent info</h2>
            <a class="d-inline-block btn btn-success" href="{{ route('agents.index') }}"> Back</a>
        </div>
    </div>
    <div class="card-body">
        <div class="list-group">
            <div class="list-group-item list-group-item-action">
              <div class="d-flex w-100 justify-content-between">
                <h4 class="mb-1">Name</h4>
                {{-- <small>3 days ago</small> --}}
              </div>
              <p class="mb-1">{{ $agent->name }}</p>
            </div>
            <div class="list-group-item list-group-item-action">
              <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">Phone</h5>
              </div>
              <p class="mb-1">{{ $agent->phone }}</p>
            </div>
            <div class="list-group-item list-group-item-action">
              <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">Email</h5>
              </div>
              <p class="mb-1">{{ $agent->email }}</p>
            </div>

            <div class="list-group-item list-group-item-action">
              <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">Address</h5>
              </div>
              <p class="mb-1">{{ $agent->address }}</p>
            </div>

          </div>
    </div>
    <div class="card-footer">
        <small class="text-muted"> Last updated on: </small>
    </div>
</div>
@endsection
@extends('adminlte::page')

@include('layouts.header-info')

@section('content_header')
@stop

@include('layouts.right-side-bar')


@section('content')

<div class="container">
    <form action="{{route('permissions.store')}}" method="POST">
    @csrf

    <div class="card">
        <div class="card-header">
            New Permission
            <input type="submit" value="Save" class="btn btn-sm btn-info float-right">
        </div>
        <div class="card-body">

            @include('layouts.show-errors')

            <div class="form-row">
                <div class="col-3">
                    <label for="name">Name</label>
                    <input type="text" name="name" value="{{old('name')}}" 
                           class="form-control @error('name') is-invalid @enderror" required>
                </div>
                <div class="col-3">
                    <label for="slug">Slug</label>
                    <input type="text" name="slug" value="{{old('slug')}}" 
                           class="form-control @error('slug') is-invalid @enderror" required>
                </div>
                <div class="col-6">
                    <label for="desc">Description</label>
                    <input type="text" name="desc" value="{{old('desc')}}" class="form-control">
                </div>
            </div>

        </div>
    </div>
    </form>
</div>
@stop


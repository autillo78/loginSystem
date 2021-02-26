@extends('adminlte::page')

@include('layouts.header-info')

@section('content_header')
@stop

@include('layouts.right-side-bar')


@section('content')

<div class="container">
    <form action="{{route('roles.store')}}" method="POST">
    @csrf

    <div class="card">
        <div class="card-header">
            New Role
            <input type="submit" value="Save" class="btn btn-sm btn-info float-right">
        </div>
        <div class="card-body">

            @include('layouts.show-errors')

            <div class="form-row">
                <div class="col-3">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" value="{{old('name')}}" 
                           class="form-control @error('name') is-invalid @enderror" required>
                </div>
                <div class="col-3">
                    <label for="slug">Slug</label>
                    <input type="text" name="slug" id="slug" value="{{old('slug')}}" 
                           class="form-control @error('slug') is-invalid @enderror" required>
                </div>
                <div class="col-6">
                    <label for="desc">Description</label>
                    <input type="text" name="desc" id="desc" value="{{old('desc')}}" class="form-control">
                </div>
            </div>
            <div class="form-row mt-3">
                <div class="col-3">
                    <div class="row">
                        <div class="col-5">
                            <label for="full_access">Full Access: </label>
                        </div>
                        <div class="col-3">
                            <input type="radio" name="full_access" id="full_access" value="1"> yes
                        </div>
                        <div class="col-3">
                            <input type="radio" name="full_access" id="full_access" value="0" checked> no
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mt-4">
                <div class="card-body">
                    <h5>Permissions</h5>
                        @foreach ($permissions as $permission)
                            <div class="row">
                                <div class="col-4">
                                    <input type="checkbox" name="permissions[]" id="{{$permission->id}}" value="{{$permission->id}}">
                                    <label for="{{$permission->id}}">{{$permission->name}}</label>
                                    <em>({{$permission->slug}})</em>
                                </div>
                                <div class="col-8">
                                    {{$permission->desc}}
                                </div>
                            </div>
                        @endforeach
                </div>
            </div>
        </div>
    </div>
    </form>
</div>
@stop


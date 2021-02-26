@extends('adminlte::page')

@include('layouts.header-info')

@section('content_header')
@stop

@include('layouts.right-side-bar')


@section('content')

<div class="container">
    

    <div class="card">
        <div class="card-header">
            Role: <em>{{$role->name}}</em>
        </div>
        <div class="card-body">

            @include('layouts.show-errors')

            <div class="form-row">
                <div class="col-3">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" value="{{$role->name}}" 
                           class="form-control" disabled>
                </div>
                <div class="col-3">
                    <label for="slug">Slug</label>
                    <input type="text" name="slug" id="slug" value="{{$role->slug}}" 
                           class="form-control" disabled>
                </div>
                <div class="col-6">
                    <label for="desc">Description</label>
                    <input type="text" name="desc" id="desc" value="{{$role->desc}}"
                           class="form-control" disabled>
                </div>
            </div>
            <div class="form-row mt-3">
                <div class="col-3">
                    <div class="row">
                        <div class="col-5">
                            <label for="full_access">Full Access: </label>
                        </div>
                        <div class="col-3">
                            <input type="radio" name="full_access" id="full_access"
                                   {{$role->full_access ? 'checked' : ''}}> yes
                        </div>
                        <div class="col-3">
                            <input type="radio" name="full_access" id="full_access"
                                   {{!$role->full_access ? 'checked' : ''}}> no
                        </div>
                    </div>
                </div>
            </div>

            <form action="{{route('roles.update', $role->id)}}" method="POST">
            @csrf
            @method('PUT')

            <div class="card mt-4">
                <div class="card-body">
                    <div class="mb-3">
                        <h5>Permissions
                            <input type="submit" value="Update" class="btn btn-sm btn-info float-right">
                        </h5>
                    </div>
                    @foreach ($allPermissions as $permission)

                        <div class="row">
                            <div class="col-4">
                                <input type="checkbox" name="permissions[]" id="{{$permission->id}}" 
                                value="{{$permission->id}}"
                                @foreach ($role->permissions as $rolePermission)
                                    @if ($rolePermission->name === $permission->name)
                                        {{'checked'}}
                                    @endif
                                @endforeach
                                >
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
            </form>

        </div>
    </div>
</div>
@stop


@extends('adminlte::page')

@include('layouts.header-info')

@section('content_header')
@stop

@include('layouts.right-side-bar')

@section('content')

<div class="container">
    <div class="card">
        <div class="card-header">
            Roles List
            <a href="{{route('roles.create')}}" class="btn btn-sm btn-info float-right">Add New</a>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <th>#</th>
                    <th>Name</th>
                    <th>Desc</th>
                    <th>Permissions</th>
                    <th>Full Access</th>
                    <th></th>
                </thead>
                <tbody>
                    @foreach ($roles as $role)
                    <tr>
                        <td>{{$role->id}}</td>
                        <td>{{$role->name}}</td>
                        <td>{{$role->desc}}</td>
                        <td>
                            @foreach ($role->permissions as $permission)
                                {{$permission->name}}@if(!$loop->last),@endif
                            @endforeach
                        </td>
                        <td>{{$role->full_access ? 'yes' : 'no'}}</td>
                        <td>
                            <a href="{{route('roles.show', $role->id)}}" class="btn btn-sm btn-outline-info float-right">Show</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop

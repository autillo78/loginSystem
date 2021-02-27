@extends('adminlte::page')

@include('layouts.header-info')

@section('content_header')
@stop

@include('layouts.right-side-bar')

@section('content')

<div class="container">
    <div class="card">
        <div class="card-header">
            Users List
        </div>
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <th>#</th>
                    <th>Name</th>
                    <th>Lastame</th>
                    <th>Team</th>
                    <th>Roles</th>
                    <th></th>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}} {{$user->middlename}}</td>
                        <td>{{$user->lastname}}</td>
                        <td>{{$user->team}}</td>
                        <td>
                            @foreach ($user->roles as $role)
                                {{$role->name}}@if(!$loop->last),@endif
                            @endforeach
                        </td>
                        <td>
                            <a href="{{route('users.edit', $user->id)}}" class="btn btn-sm btn-outline-info float-right">Edit</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop

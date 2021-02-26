@extends('adminlte::page')

@include('layouts.header-info')

@section('content_header')
@stop

@include('layouts.right-side-bar')

@section('content')

<div class="container">
    <div class="card">
        <div class="card-header">
            Permissions List
            <a href="{{route('permissions.create')}}" class="btn btn-sm btn-info float-right">Add New</a>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <th>#</th>            
                    <th>Name</th>            
                    <th>Desc</th>            
                    <th colspan="3"></th>            
                </thead>
                <tbody>
                    @foreach ($permissions as $permission)
                    <tr>
                        <td>{{$permission->id}}</td>
                        <td>{{$permission->name}}</td>
                        <td>{{$permission->desc}}</td>
                        <td>
                            {{-- <a href="{{route('permissions.show', $permission->id)}}" class="btn btn-sm btn-outline-info float-right">Show</a> --}}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop

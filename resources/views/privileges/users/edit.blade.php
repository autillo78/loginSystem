@extends('adminlte::page')

@include('layouts.header-info')

@section('content_header')
@stop

@include('layouts.right-side-bar')

@section('content')

<div class="container">

    <div class="card">
        <div class="card-header">
            Users Details
        </div>
        <div class="card-body">
            <h5>
                Personal Details
            </h5>
            <div class="form-row">
                <div class="col-2">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name"
                        value="{{$user->name}}"
                        class="form-control @error('name') is-invalid @enderror" disabled>
                </div>
                <div class="col-2">
                    <label for="middlename">Middleame</label>
                    <input type="text" name="middlename" id="middlename"
                        value="{{$user->middlename}}"
                        class="form-control @error('middlename') is-invalid @enderror" disabled>
                </div>
                <div class="col-3">
                    <label for="lastname">Lastname</label>
                    <input type="text" name="lastname" id="lastname"
                        value="{{$user->lastname}}"
                        class="form-control @error('lastname') is-invalid @enderror" disabled>
                </div>
            </div>
            <div class="form-row mt-3">
                <div class="col-3">
                    <label for="team">Team</label>
                    <input type="text" name="team" id="team"
                        value="{{$user->team}}"
                        class="form-control @error('team') is-invalid @enderror" disabled>
                </div>
                <div class="col-3">
                    <label for="phone">Phone</label>
                    <input type="text" name="phone" id="phone"
                        value="{{$user->phone}}"
                        class="form-control @error('phone') is-invalid @enderror" disabled>
                </div>
                <div class="col-3">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email"
                        value="{{$user->email}}"
                        class="form-control @error('email') is-invalid @enderror" disabled>
                </div>
            </div>
            
            <form action="{{route('users.update', $user->id)}}" method="POST">
            @csrf
            @method('PUT')

                <div class="card p-3 mt-5">
                    <h5>
                        Roles
                        <input type="submit" value="Update" class="btn btn-sm btn-info float-right">
                    </h5>
                    @foreach ($roles as $role)

                    <div class="row">
                        <div class="col-4">
                            <input type="checkbox" name="roles[]" id="{{$role->id}}" 
                            value="{{$role->id}}"
                            @foreach ($user->roles as $userRoles)
                                @if ($userRoles->name === $role->name)
                                    {{'checked'}}
                                @endif
                            @endforeach
                            >
                            <label for="{{$role->id}}">{{$role->name}}</label>
                        </div>
                        <div class="col-8">
                            {{$role->desc}}
                        </div>
                    </div>
                    @endforeach
                </div>    
            </form>
        </div>
    </div>
</div>

@stop
    
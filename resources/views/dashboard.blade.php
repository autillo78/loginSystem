{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-jet-welcome />
            </div>
        </div>
    </div>
</x-app-layout> --}}

@extends('adminlte::page')

@include('layouts.right-side-bar')

@include('layouts.header-info')

@section('content_header')
@stop

@section('content')
    <div class="main">
        <h1>Dashboard</h1>

        <div class="card mt-5">
            <div class="card-header">
                testing
            </div>
            <div class="card-body">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ratione esse magni sunt, iste voluptatem harum iure. Rerum nostrum praesentium similique facere perferendis eligendi ex! Culpa odit cum dignissimos ad voluptatem.</p>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ratione esse magni sunt, iste voluptatem harum iure. Rerum nostrum praesentium similique facere perferendis eligendi ex! Culpa odit cum dignissimos ad voluptatem.</p>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ratione esse magni sunt, iste voluptatem harum iure. Rerum nostrum praesentium similique facere perferendis eligendi ex! Culpa odit cum dignissimos ad voluptatem.</p>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ratione esse magni sunt, iste voluptatem harum iure. Rerum nostrum praesentium similique facere perferendis eligendi ex! Culpa odit cum dignissimos ad voluptatem.</p>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ratione esse magni sunt, iste voluptatem harum iure. Rerum nostrum praesentium similique facere perferendis eligendi ex! Culpa odit cum dignissimos ad voluptatem.</p>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ratione esse magni sunt, iste voluptatem harum iure. Rerum nostrum praesentium similique facere perferendis eligendi ex! Culpa odit cum dignissimos ad voluptatem.</p>
            </div>
        </div>

    </div>
@stop

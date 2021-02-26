

@section('right-sidebar')
    
<div class="container mt-3">
    <b>Privileges</b>
    <div class="row mt-2">
        <div class="col-6">
            <a href="{{route('roles.index')}}" class="btn btn-sm btn-primary btn-block">Users</a>
        </div>
        
    </div>
    <div class="row mt-2">
        <div class="col-6">
            <a href="{{route('roles.index')}}" class="btn btn-sm btn-primary btn-block">Roles</a>
        </div>
        <div class="col-6">
            <a href="{{route('permissions.index')}}" class="btn btn-sm btn-primary btn-block">Permisses</a>
        </div>
    </div>
</div>

@stop
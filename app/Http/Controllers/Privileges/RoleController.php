<?php

namespace App\Http\Controllers\Privileges;

use App\Http\Controllers\Controller;
use App\Models\Privileges\Permission;
use App\Models\Privileges\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::all();

        return view('privileges.roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permissions = Permission::all();

        return view('privileges.roles.create', compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'name' => 'required | string | max:30',
            'slug' => 'required | string | max:30',
            'desc' => 'nullable | string | max:255',
            'full_access' => 'required | boolean',
        ];

        $messages = [
            'name.required' => 'The name is required', 
            'name.max'      => 'The name must be shorter than 30 characters', 
            'slug.required' => 'The slug is required', 
            'slug.max'      => 'The slug must be shorter than 30 characters',
            'desc.max'      => 'Max 255 characters for the description'
        ];

        Validator::make($request->all(), $rules, $messages)->validate();

        $role = Role::create($request->all());

        if ($request->get('permissions')) {
            $role->permissions()->sync($request->permissions);
        }

        return redirect()->action([RoleController::class, 'index']);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $role = Role::find($id);
        $allPermissions = Permission::all();

        return view('privileges.roles.show', compact('role', 'allPermissions'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $role = Role::find($id);
        $role->permissions()->sync($request->permissions);

        return redirect()->action([RoleController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers\Privileges;

use App\Http\Controllers\Controller;
use App\Models\Privileges\Permission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permissions = Permission::all();

        return view('privileges.permissions.index', compact('permissions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('privileges.permissions.create');
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
        ];

        $messages = [
            'name.required' => 'The name is required', 
            'name.max'      => 'The name must be shorter than 30 characters', 
            'slug.required' => 'The slug is required', 
            'slug.max'      => 'The slug must be shorter than 30 characters',
            'desc.max'      => 'Max 255 characters for the description'
        ];

        Validator::make($request->all(), $rules, $messages)->validate();

        Permission::create($request->all());

        return redirect()->action([PermissionController::class, 'index']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
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

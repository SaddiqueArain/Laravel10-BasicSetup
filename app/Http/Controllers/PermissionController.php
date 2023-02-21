<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $permissions=new Permission();
        $permissions->code=$request->code;
        $permissions->description=$request->description;
        $permissions->save();
        $permissions->getroles()->sync([1,2]);
        return 'Added';
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $data=Permission::find($request->id);

        $data->code=$request->code;
        $data->description=$request->description;
        $data->save();
        $data->getroles()->sync([1,2]);
        return 'Updated';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data=Permission::find($id);
        $data->delete();
        return 'Deleted';
    }
}

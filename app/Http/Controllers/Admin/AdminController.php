<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use Laracasts\Flash\Flash;
use Illuminate\Http\Request;
use App\DataTables\AdminsDataTable;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(AdminsDataTable $dataTable)
    {
        return $dataTable->render('admin.admins.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.admins.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedAttributes = $request->validate([
            'name' => 'required|regex:/^[a-z0-9-_@]+[a-z0-9-_@\s]*[a-z0-9-_@]+$/i', //regex covered "required"
            'email' => "required|email|unique:admins,email",
            'mobile' => 'regex:/\+*[0-9]{8,}/', //regex covered "min:8" regex covered "required"
            'sex' => 'required|in:male,female,other',
            'password' => 'confirmed|min:8'
        ]);
        Admin::create($validatedAttributes);

        Flash::success('Admin saved successfully.');

        return redirect()->route('admin.admins.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        return view('admin.admins.show', compact('admin'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        return view('admin.admins.edit', compact('admin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {

        $validatedAttributes = $request->validate([
            'name' => 'required|regex:/^[a-z0-9-_@]+[a-z0-9-_@\s]*[a-z0-9-_@]+$/i', //regex covered "required"
            'email' => "required|email|unique:admins,email,$admin->id",
            'mobile' => 'regex:/\+*[0-9]{8,}/', //regex covered "min:8" regex covered "required"
            'sex' => 'required|in:male,female,other',
        ]);
        if (!empty($request->password)) {
            $password = $request->validate([
                'password' => 'confirmed|min:8'
            ]);
            $validatedAttributes['password'] = $password['password'];
        }

        $admin->update($validatedAttributes);

        Flash::success("Admin updated successfully");

        return redirect()->route('admin.admins.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        $admin->delete();

        Flash::success("Admin $admin->email deleted successfully");

        return redirect()->route('admin.admins.index');
    }
}

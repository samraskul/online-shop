<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Laracasts\Flash\Flash;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate(3);

        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
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
            'name'=> 'required|regex:/^[a-z0-9-_@]+[a-z0-9-_@\s]*[a-z0-9-_@]+$/i',//regex covered "required"
            'email'=> 'required|email|unique:users,email',
            'mobile'=> 'regex:/\+*[0-9]{8,}/',//regex covered "min:8" regex covered "required"
            'sex'=>'required|in:male,female,other',
            'password'=>'required|confirmed|min:8'
        ]);

        User::create($validatedAttributes);

        Flash::success('User saved successfully.');

        return redirect()->route('admin.users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('admin.users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \app\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //sometimes|required|alpha_num|between:6,20|confirmed
        $validatedAttributes = $request->validate([
            'name' => 'required|regex:/^[a-z0-9-_@]+[a-z0-9-_@\s]*[a-z0-9-_@]+$/i', //regex covered "required"
            'email' => "required|email|unique:users,email,$user->id",
            'mobile' => 'regex:/\+*[0-9]{8,}/', //regex covered "min:8" regex covered "required"
            'sex' => 'required|in:male,female,other',
        ]);
        if(! empty($request->password)){
            $password = $request->validate([
                'password' => 'confirmed|min:8'
            ]);
            $validatedAttributes['password'] = $password['password'];
        }

        $user->update($validatedAttributes);

        Flash::success("User updated successfully");

        return redirect()->route('admin.users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();

        Flash::success("User <b>$user->email<b> deleted successfully");

        return redirect()->route('admin.users.index');
    }
}

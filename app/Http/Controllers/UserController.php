<?php

namespace App\Http\Controllers;

use App\Models\User;
// use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        if(empty(auth()->user()->role)){
            abort(404);
        }
        $users = User::get();
        return view("user.index", compact("users"))->with('i');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("user.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        user::create($request->all());
        return redirect()->route("users.index");
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
    public function edit(User $user)
    {
        //
        return view("user.edit", compact("user"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
        $user->update($request->all());
        return redirect()->route("users.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
        $user->delete();
        return redirect()->route("users.index");
    }
}

<?php

namespace App\Http\Controllers\Synergi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Synergi\User;

class UsersController extends Controller
{

    /**
     * Thank you page
     */
    public function thankyou()
    {
        return view('synergi_users.thankyou');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('synergi_users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'username' => 'required|string|max:255',
            'email' => 'required|email|unique:synergi_users',
            'comments' => 'sometimes|nullable|string|max:2000'
        ]);

        if(!isset($request->comments)) {
            $request->comments = '';
        }
        
        $newUser = User::create([
            'username' => $request->username,
            'email' => $request->email,
            'comments' => $request->comments
        ]);

        return redirect()->route('users.thankyou');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $thisUser = User::find($id);
        return view('synergi_users.create')->with('this_user', $thisUser);
    }
}

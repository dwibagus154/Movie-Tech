<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('dashboard/dashboard');
    }

    public function user()
    {
        return view('dashboard/user');
    }

    public function edit(User $user)
    {
        return view('dashboard.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        User::find($user->id)->update($request->all());

        if ($request->hasFile('avatar')) {
            $request->file('avatar')->move('dashboard/images', $request->file('avatar')->getClientOriginalName());
            $user->avatar = $request->file('avatar')->getClientOriginalName();
            $user->save();
        }

        return redirect('/user')->with('status', 'User edited!');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Storage;

class UserController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        $ideas = $user->ideas()->get();

        return view("users.show", compact('user', 'ideas'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        $editing = true;
        $ideas = $user->ideas();
        return view("users.edit", compact("user", 'editing', 'ideas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(User $user)
    {
        if (auth()->user()->id != $user->id) {
            abort(404, 'id not equal');
        }
        $validated = request()->validate([
            'name' => 'min:2|max:200',
            'email' => 'email|unique:users,email',
            'bio' => 'nullable|max:200',
            'image' => 'image',
        ]);

        if (request()->hasFile('image')) {
            $imagePath = request()->file('image')->store('profile', 'public');
            $validated['image'] = $imagePath;

            // Storage::disk('public')->delete($user->image);
            // dd($validated['image']);
        }
        $user->update($validated);

        return redirect()->route('users.show', $user->id)->with('success', 'successfully updated profile');

        // $user->name = request('name', '');
        // $user->email = request('email', '');
        // $user->image = request()->file('image');
        // $user->bio = request('bio', '');
        // $user->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function profile(User $user)
    {
        return $this->show(auth()->user());
    }
}

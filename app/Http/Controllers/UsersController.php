<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    public function createUser(){
        return view('users.create');
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $users=User::get();
        return view('users.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return redirect(route('index'))->with('success', 'Usuario actualizado con éxito');
    }

    public function destroy($id)
    {
        $userToDelete = User::find($id);

        if ($userToDelete && Auth::user()->id === $userToDelete->id) {
            return redirect(route('index'))->with('error', 'No puedes eliminarte a ti mismo');
        }

        // Lógica de eliminación
        $userToDelete->delete();

        return redirect(route('index'))->with('success', 'Usuario eliminado con éxito');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);
        
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        return redirect(route('index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }
}
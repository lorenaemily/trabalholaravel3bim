<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class controlleruser extends Controller
{

    public readonly User $user;

    public function __construct()
    {
        $this->user = new User();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = $this->user->all();
        return view('master', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $created = $this->user->create([
            'name'=> $request -> input('name'),
            'email'=> $request -> input('email'),
            'password'=>bcrypt($request -> input('password')),
        ]);
        if($created){
            return redirect()->route('users.index')
                             ->with('message', 'Usuário criado com sucesso!');
        }
        return back()->withInput()
                     ->with('error', 'Falha ao criar o usuário.');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('user_show', ['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('user_edit', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,User $user)
    {
    $user->update($request->only(['name', 'email']));

    return redirect()->route('users.index')
                     ->with('message', 'Usuário atualizado com sucesso!');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

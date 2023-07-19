<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class RegistrasiController extends Controller
{
    public function index()
    {
        return view ('registrasi.index',[
            'title' => 'Register',
            'active' => 'register'
        ]);

    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'id_kantor' => ['required','max:255'],
            'name' => 'required|max:255',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5'

        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);

        return redirect('/')->with('berhasil', 'registrasi berhasil! silahkan login!');
    }
}

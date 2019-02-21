<?php

namespace App\Http\Controllers;
use App\User;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=User::all();
        //return view('Usuarios.index')->with('users',User::all());
        //return view('Usuarios',compact('users'));
        return view('home', compact('users'));
    }
    public function documentacion()
    {
        return view('welcome');
    }
}

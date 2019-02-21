<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class MyController extends Controller
{
    public function documentacion()
    {
        return view('welcome');
    }

    public function example()
    {
        return view('Example');
    }

    public function index()
    {
    	$users=User::all();
    	//return view('Usuarios.index')->with('users',User::all());
        return view('Usuarios',compact('users'));
    }
}

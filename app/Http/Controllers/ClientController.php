<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    function index()
    {
        return view('clients.clients');
    }

    function addpage(){
        return view('clients.add');
    }
    function add(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:posts|max:255',
            'email' => 'required|email',
            'description' => 'required'
        ]);
    }
}

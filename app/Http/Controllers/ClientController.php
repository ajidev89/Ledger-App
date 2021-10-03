<?php

namespace App\Http\Controllers;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    function index()
    {
        //get all clients
        $allClients = Client::all();
        return view('clients.clients',['allClients'=>$allClients]);
    }

    function addpage(){
        return view('clients.add');
    }
    function add(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:clients',
            'description' => 'required'
        ]);

        $newClient = new Client;
        $newClient->email = request('email');
        $newClient->description = request('description');
        $newClient->name = request('name');
        $newClient->current_balance =-0.00;
        $newClient->save();
        return redirect()->back()->with('msg', 'Successfully added a new client');
    }
}

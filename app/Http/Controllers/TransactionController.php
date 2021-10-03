<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Transaction;

class TransactionController extends Controller
{
    function index()
    {
        //get all clients
        $allClients = Client::all();
        return view('transactions.add',['clients'=>$allClients]);
    }
    function addTxn(Request $request){
        $request->validate([
            'title' => 'required|max:255',
            'type' => 'required|in:CR,DB',
            'clientId' => 'required',
            'description' => 'required',
            'amount' => 'required|numeric',
        ]);
        //Get the client
        if(Client::where('id',$request->clientId)->exists()){
            $client =  Client::where('id',$request->clientId)->first();
            $amountCurrent = ($request->type == 'CR') ? (- $request->amount) : (+ $request->amount);
            $client->current_balance = $client->current_balance + $amountCurrent;
            $client->save();
            //Save Txn
            $transaction = new Transaction;
            $transaction->title = $request->title;
            $transaction->type = $request->type;
            $transaction->client_id = $request->clientId;
            $transaction->current_bal = $client->current_balance;
            $transaction->description = $request->description;
            $transaction->amount = $request->amount;
            $transaction->save();

            return redirect()->back()->with('msg', 'A new transaction for '.$client->name);
        }
    }
    function show($id)
    {
        $transactions = Transaction::where('client_id',$id)-> orderBy('created_at','desc')->get();
        $clientDetails = Client::where('id',$id)->first();
        return view('transactions.single',['clients'=>$clientDetails,'transactions'=> $transactions]);
    }
}
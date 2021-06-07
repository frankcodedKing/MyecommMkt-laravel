<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    //
    public function store(request $req){
        //  $req->input();

        $clients = new Client;
       $clients->name = $req->name;
       $clients->email = $req->email;
       $clients->phone = $req->phone;
       $clients->currency = $req->currency;
       $clients->amount = $req->amount;
       $clients->save();

       return redirect('home');
    }
}

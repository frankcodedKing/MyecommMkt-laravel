<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Visitor;

class VisitorController extends Controller
{
    //
    public function store(request $req){
        //  $req->input();

        $visitors = new Visitor;
       $visitors->name = $req->name;
       $visitors->email = $req->email;
       $visitors->message = $req->message;
    //    $visitor->phone = $request->phone;
       $visitors->save();

       return redirect('home');

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PizzaController extends Controller
{
    function index() {
        return view('Index');
    }

    function pizza() {
        return view('Pizzas');
    }

    function insert(Request $req) {
        // return $req->toArray();
        // validation
        $validation=$req->validate([
            'username'=>"required",
            'pizza_name'=>"required",
            'topping'=>"required",
            'sauce'=>"required",
            'price'=>"required"


        ]);

        if($validation){
            return back()->with("success","Thank You For Your Order");
        }else{
            return back()->withErrors($validation);
        }
    }
}

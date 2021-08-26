<?php

namespace App\Http\Controllers;

use App\Models\Pizza;
use Illuminate\Http\Request;

class PizzaController extends Controller
{
    function index() {
        return view('Index');
    }

    function pizza() {

        $pizzas = [
            ["id"=>1,"username"=>"Aung","pizza_name"=>"chicken tiken","topping"=>"salad","sauce"=>"tomato","price"=>6.6],
            ["id"=>2,"username"=>"Ko","pizza_name"=>"Pork tiken","topping"=>"gg","sauce"=>"ff","price"=>4.6],
            ["id"=>3,"username"=>"Ko","pizza_name"=>"Bacon tiken","topping"=>"ss","sauce"=>"gg","price"=>7.6],
            ["id"=>4,"username"=>"Khant","pizza_name"=>"Cheese Porn tiken","topping"=>"ss","sauce"=>"gg","price"=>11.6],
        ];

        return view('Pizzas',['pizzas'=>$pizzas]);
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
            //insert data to database
            $pizza = new Pizza();
            $pizza->username=$req->username;
            $pizza->pizza_name=$req->pizza_name;
            $pizza->topping=$req->topping;
            $pizza->sauce=$req->sauce;
            $pizza->price=$req->price;
            $pizza->save();
            // return $pizza;

            return back()->with("success","Thank You For Your Order");
        }else{
            return back()->withErrors($validation);
        }
    }
}

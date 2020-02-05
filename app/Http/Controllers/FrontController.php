<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        $pizzas=Product::all();
        return view('front.home',compact('pizzas'));

    }

    public function pizzas()
    {
        $pizzas=Product::all();
        return view('front.pizzas',compact('pizzas'));

    }

    public function pizza()
    {
        return view('front.pizza');
    }
    public function admin()
    {
        return view('front.admin');
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $pizzas=Product::all();


        return view('home',compact('pizzas'));
    }
    public function pizzas()
    {
        $pizzas=Product::all();
        return view('home',compact('pizzas'));

    }

}



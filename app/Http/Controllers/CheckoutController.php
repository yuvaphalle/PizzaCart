<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{

    public function step1()
    {
        if (Auth::check()) {

            if (Cart::count()) {
                return redirect()->route('checkout.shipping');
            } else {
                return redirect()->route('pizzas');
            }
        }
        return redirect('login');
    }


    public function shipping()
    {
        if (Cart::count()) {
            return view('front.shipping-info');
        }
        else {
            return redirect()->route('pizzas');
        }

    }
}

<?php

namespace App\Http\Controllers;

use App\Product;
use DemeterChain\C;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //getting items
        $cartItems = Cart::Content();
        return view('cart.index',compact('cartItems'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //for adding item in card


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     *
     */

    public function logout(Request $request)
    {
        $this->guard()->logout();
// session logic here, just pull out things that need to and left other things as it is.

        // $request->session()->invalidate();

        return redirect('/');
    }
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

        $product=Product::find($id);
        Cart::add($id,$product->name,1,$product->price, 500 ,['size'=>'medium']); //default quantity 1 and size medium

        return back();



    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //updating cart
        Cart::update($id,['qty'=>$request->qty,"options"=>['size'=>$request->size]]);
        return back();


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //remove items
        Cart::remove($id);
            return back();


    }
}

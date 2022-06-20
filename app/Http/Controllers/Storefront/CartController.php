<?php

namespace App\Http\Controllers\Storefront;

use App\Http\Controllers\Controller;

class CartController extends Controller
{
    public function cart()
    {
        //display add to cart from db or session

    }

    public function addtoCart(Request $request, $id)
    {

        // if (Auth::user()->id) {
        //     //authenticated masukkan dalam database
        // } else {
        //     //not authenticated simpan dalam session
        //     $addtocart = $request->session()->get('key', 'default');

        // }

    }

    public function removeCart($id)
    {
        // $request->session()->forget('key', $request->id);
    }

}

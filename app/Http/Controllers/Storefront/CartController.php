<?php

namespace App\Http\Controllers\Storefront;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function cart()
    {
        //display add to cart from db or session
        // $carts = Cart::all();

        // return view('storefront.index', [
        //     'carts' => $carts,
        // ]);
    }

    public function addtoCart(Request $request)
    {

        if (Auth::user()->id) {
            $addtocart = Cart::create([
                'product_id' => $request->product_id,
                'user_id' => Auth::user()->id,
                'price' => $request->product_price,
                'quantity' => $request->quantity,
            ]);
        } else {
            //not authenticated simpan dalam session
            //  $addtocart = $request->session()->put($request->product_id);

        }

        return redirect()->back();

    }

    public function removeCart($id)
    {
        // $request->session()->forget('key', $request->id);
    }

}

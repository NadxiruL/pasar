<?php

namespace App\Http\Controllers\Storefront;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    public function purchase(Request $request)
    {
        $purchase = Purchase::create([
            'name' => $request->name,
            'price' => $request->price,
            'quantitiy' => $request->quantity,
        ]);
    }
}
<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $products = Product::all();

        return view('products.index', [
            'products' => $products,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $categories = Category::all();

        return view('products.create', [
            'categories' => $categories,
        ]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        // code masih boleh dipendekkan.
        if (!$request->digital) {
            //physical product
            $product = Product::create([
                'user_id' => Auth::user()->id,
                'name' => $request->name,
                'description' => $request->description,
                'slug' => Str::random(7),
                'price' => $request->price,
                'category_id' => $request->category_id,
                'product_type' => 'physical',
            ]);

            $product->stock()->create([
                'quantity' => $request->stock,
            ]);

            return redirect()->back()->with('physical_product', 'product successfully created!');

        } else {

            //digital product
            if ($request->has('digital')) {
                $digitalProduct = Product::create([
                    'user_id' => Auth::user()->id,
                    'name' => $request->name,
                    'description' => $request->description,
                    'slug' => Str::random(7),
                    'price' => $request->price,
                    'category_id' => $request->category_id,
                    'product_type' => 'digital',
                ]);

                $digitalProduct->Stock()->create([
                    'quantity' => $request->stock,
                ]);

                return redirect()->back()->with('digital_product', 'digital product successfully created!');
            }

        }
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

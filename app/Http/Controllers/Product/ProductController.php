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

        $products = Product::with('stock')->get();

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

                $digitalProduct->stock()->create([
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
        $product = Product::find($id);

        $categories = Category::all();

        return view('products.manage', [
            'product' => $product,
            'categories' => $categories,
        ]);
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

        $product = Product::create([
            'name' => $request->name,
        ]);

        return redirect()->with('success', 'product updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $product = Product::find($id);
        $product->delete();
        // $product->save();

        return redirect()->route('product.index')->with('success', 'product deleted successfully');

    }
}

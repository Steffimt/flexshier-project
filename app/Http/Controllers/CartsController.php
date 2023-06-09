<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;

class CartsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    // {
    //     $product = Product::find($request->get('product_id'))->first();
        
    //     $cart = Cart::create([
    //         'product_id' => $product->id,
    //         'quantity' => 1,
    //         'price' => $product->sale_price,
    //         'user_id' => auth()->user()->id
    //     ]);

    //     if($cart){
    //         return ['message' => 'Updated Cart'];
    //     }

    //     dd($product);
    // }

    public function store(Request $request)
    {
        dd($request->all());
        $product = Product::find($request->input('product_id'));
    
        if (!$product) {
            return response()->json(['message' => 'Product not found'], 404);
        }
    
        $cart = Cart::create([
            'product_id' => $product->id,
            'quantity' => 1,
            'price' => $product->sale_price,
            'user_id' => auth()->user()->id,
        ]);
    
        if ($cart) {
            return response()->json(['message' => 'Product added to cart'], 200);
        } else {
            return response()->json(['message' => 'Failed to add product to cart'], 500);
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

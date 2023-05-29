<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function addcart(Request $request, $id){
        // if(Auth::id()){
        //     $user=auth()->user();
            
        //     $product=product::find($id);

        //     $cart=new cart;
            
        //     $cart->name=$user->name;
        //     $cart->product_id = $product->id;
        //     $cart->price=$product->price;
        //     $cart->quantity=$request->quantity;

        //     $cart->save();
            



        //     return redirect()->back();
        // }else{
        //     return redirect('/login');  
        if (Auth::check()) {
            $user = Auth::user();
            $product = Product::find($id);

            $cart = new Cart();

            $cart->user_id = $user->id;
            $cart->product_id = $product->id;
            $cart->price = $product->price;
            $cart->quantity = $request->input('quantity');

            $cart->save();

            return redirect()->back()->with('success', 'Product added to cart successfully.');
        } else {
            return redirect('/login');
        }
        
    }

    // public function showcart(){

    //     $user = Auth::user();

    //     $cart = Cart::where('user_id', $user->id)->get();
    //     // $cart->cart::where('');

    //     return view('showcart');
    // }

    public function showcart()
{
    $user = Auth::user();
    $cart = Cart::where('user_id', $user->id)->get();
    return view('showcart', compact('cart'));
}
    
}


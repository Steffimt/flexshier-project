<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class welcomeController extends Controller
{


public function redirect()
    {
        $data = Product::paginate(3);
        $user = auth()->user();
        $count = Cart::where('user_id', $user->id)->count();

        return view('welcome', compact('data', 'count'));
      
    }
}
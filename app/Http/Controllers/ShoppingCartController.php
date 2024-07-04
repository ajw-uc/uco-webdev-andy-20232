<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ShoppingCart;
use Illuminate\Http\Request;

class ShoppingCartController extends Controller
{
    function list(Request $request)
    {
        $items = ShoppingCart::where('user_id', $request->user()->id)->get();

        return view('shopping_cart.list', [
            'items' => $items
        ]);
    }

    function add(string $product_id, Request $request)
    {
        $product = Product::where('id', $product_id)->firstOrFail();

        $user_id = $request->user()->id;

        $item = ShoppingCart::where('user_id', $user_id)
            ->where('product_id', $product->id)
            ->first();

        if ($item) {
            $item->quantity++;
            $item->save();
        } else {
            ShoppingCart::create([
                'user_id' => $user_id,
                'product_id' => $product->id,
                'quantity' => 1
            ]);
        }

        return redirect()->route('cart.list');
    }
}

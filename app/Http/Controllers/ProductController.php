<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function create(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->validate([
                'name' => ['required'],
                'description' => [],
                'price' => ['required', 'numeric', 'min:0'],
            ]);

            $product = Product::create($data);
            if ($product) {
                return redirect()->route('catalog-detail', ['id' => $product->id]);
            }

            return back()->withInput();
        }

        return view('product.form');
    }

    function edit(string $id, Request $request)
    {
        $product = Product::where('id', $id)->first();

        if ($request->isMethod('post')) {
            $data = $request->validate([
                'name' => ['required'],
                'description' => [],
                'price' => ['required', 'numeric', 'min:0'],
            ]);

            if ($product->update($data)) {
                return redirect()->route('catalog-detail', ['id' => $product->id]);
            }

            return back()->withInput();
        }

        return view('product.form', [
            'product' => $product
        ]);
    }
}

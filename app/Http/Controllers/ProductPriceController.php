<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\ProductPrice;
use App\Http\Requests\StoreProductPriceRequest;

class ProductPriceController extends Controller
{
    public function index($id)
    {
        $product = Product::findOrFail($id);

        return response()->json(
            $product->prices()->with('currency')->get()
        );
    }

    public function store(StoreProductPriceRequest $request, $id)
    {
        Product::findOrFail($id);

        $price = ProductPrice::create([
            'product_id' => $id,
            'currency_id' => $request->currency_id,
            'price' => $request->price,
        ]);

        return response()->json($price, 201);
    }
}

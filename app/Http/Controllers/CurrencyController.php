<?php

namespace App\Http\Controllers;

use App\Models\Currency;
use Illuminate\Http\Request;

class CurrencyController extends Controller
{


    public function index(){
        $currencies = Currency::all();
        return response()->json($currencies);
    }

    public function show($id)
    {
        $currency = Currency::findOrFail($id);
        return response()->json($currency);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:50',
            'symbol' => 'required|string|max:10',
            'exchange_rate' => 'required|numeric|min:0',
        ]);

        $currency = Currency::create($data);

        return response()->json($currency, 201);
    }
}

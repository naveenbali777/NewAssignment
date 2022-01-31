<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOrderRequest;
use App\Models\Order;
use App\Models\Product;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Order::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreOrderRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOrderRequest $request)
    {
        $product = Product::find($request->product_id);
        if($product){
            if($product->stock < $request->quantity){
                return response()->json(['message' => 'Product is Out of Stock!'], 200);
            }
            $product->decrement('stock', $request->quantity);
            $product->save();
        }else{
            return response()->json(['message' => 'Product Not Found!'], 404);
        }
        return Order::create($request->all());
    }
}

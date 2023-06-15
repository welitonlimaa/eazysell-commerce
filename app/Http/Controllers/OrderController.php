<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderProduct;
use Exception;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'user_id' => 'required|integer',
            'total_price' => 'required|numeric',
            'address' => 'required|string',
            'phone' => 'required|string',
        ]);
        
        $id = Order::create($data)->getKey();   
      
        $productsData = json_decode($request->input('products'), true);
        $status = true;

        foreach ($productsData as $product) {
            try {
                OrderProduct::create([
                    'order_id' => $id,
                    'product_id' => $product['id'],
                    'quantity' => $product['quantity'],
                ]);
            } catch (Exception $e) {
                $status =  $e->getMessage();
            }
        }

        return $status;
    }
}
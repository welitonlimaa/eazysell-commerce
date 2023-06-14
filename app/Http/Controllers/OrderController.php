<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        // Valide os dados recebidos do formulário
        $data = $request->validate([
            'user_id' => 'required|integer',
            'total_price' => 'required|numeric',
            'address' => 'required|string',
            'phone' => 'required|string',
        ]);
        $order = new Order();
        
        $order::create($data);   
      
        $products = json_decode($request->input('products'), true);
        dd($products);
        // Atualize o relacionamento entre a ordem e os produtos, incluindo as quantidades
        foreach ($products as $product) {
            $order->products()->attach($product['id'], ['quantity' => $product['quantity']]);
        }

        // Redirecione para a página de sucesso ou faça outras ações necessárias
        return redirect()->route('home');
    }
}
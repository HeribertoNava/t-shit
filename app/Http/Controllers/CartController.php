<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use App\Models\Shirt;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function add(Request $request, $id)
    {
        $shirt = Shirt::findOrFail($id);

        $cartItem = CartItem::create([
            'shirt_id' => $shirt->id,
            'quantity' => $request->quantity,
            'size' => $request->size,
        ]);

        return redirect()->route('cart.index');
    }

    public function index()
    {
        $cartItems = CartItem::with('shirt')->get();
        return view('cart.index', compact('cartItems'));
    }

    public function remove($id)
    {
        $cartItem = CartItem::findOrFail($id);
        $cartItem->delete();

        return redirect()->route('cart.index');
    }
}

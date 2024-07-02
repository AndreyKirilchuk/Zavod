<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tovar;

class CartController extends Controller
{
    public function index(Request $request)
    {
        $cart = $request->session()->get('cart', []);

        $totalPrice = 0;

        foreach ($cart as $item) {
            $totalPrice += $item['price'] * $item['quantity'];
        }

        return view('pages/cart', compact('cart', 'totalPrice'));
    }

    public function addItem(Request $request, $id)
    {
        $tovar = Tovar::findOrFail($id);

        $cart = $request->session()->get('cart', []);

        if(array_key_exists($id, $cart)) {
            $cart[$id]['quantity'] += $request->quantity;
        } else{
            $cart[$id] = [
                'id' => $tovar->id,
                'name' => $tovar->name,
                'img' => $tovar->img,
                'price' => $tovar->price,
                'quantity' => $request->quantity,
            ];
        }

        $request->session()->put('cart', $cart);

        return redirect()->back();
    }

    public function deleteItem(Request $request, $id)
    {
        $cart = $request->session()->get('cart', []);

        if (array_key_exists($id, $cart)) {
            unset($cart[$id]);
        }

        $request->session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Товар удален из корзины!');
    }

    public function deleteCart(Request $request){
        $request->session()->forget('cart');
        return redirect()->back()->with('success', 'Корзина очищена!');
    }

    public function redactItem(Request $request, $id)
    {
        $cart = $request->session()->get('cart', []);

        if(isset($cart[$id])) {
            $cart[$id]['quantity'] = $request->quantity;
        }

        $request->session()->put('cart', $cart);

        return redirect()->back();
    }
}

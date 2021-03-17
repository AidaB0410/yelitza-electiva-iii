<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Item;
use App\Cart;

class ShoppingController extends Controller
{
    public function products()
    {

        $products = Product::paginate();
        $i        = 1;

        return view('products', compact('products', 'i'));

    }

    public function cart()
    {
        return view('cart');
    }

    public function checkout()
    {
        return view('checkout');
    }

    public function checkoutStore(Request $request)
    {
      

        $cart  = new Cart();
        
        $cart->name      = $request->name;
        $cart->apellido  = $request->lastname;
        $cart->correo    = $request->email;
        $cart->telefono  = $request->phone;
        $cart->ciudad    = $request->city;
        $cart->estado    = $request->state;
        $cart->direccion = $request->direction;
        $cart->total     = $request->total;
        $cart->save();


        
        for($i = 0; $i < count($request->itemName); $i++){
            
            $item  = new Item();
           
            $item->name    = $request->itemName[$i];
            $item->price   = $request->itemPrice[$i];
            $item->photo   = $request->itemPhoto[$i];
            $item->cart_id = $cart->id;
            $item->save();
        }
        
        return redirect()->route('index');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Product;
use App\Cart;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/index');
    }

    public function products()
    {
        $products = Product::paginate();
        $i        = 1;

        return view('admin.products', compact('products', 'i'));
    }

    public function showVentas($id)
    {
        $compradorConsulta = \DB::select('SELECT * FROM carts WHERE id = ?', [$id]);

        $comprador = $compradorConsulta[0];
        
        $items = \DB::select('SELECT * FROM items WHERE cart_id = ?', [$id]);
       
        $i = 1;

        return view('admin.VentaShow', compact('items', 'comprador', 'i'));
    }

    public function cart()
    {
        $cart = Cart::paginate();
        $i        = 1;
        return view('admin/cart', compact('cart', 'i'));
    }

    public function productStore(Request $request)
    {

        $file    = $request->file('file');
        $nameFile    = $file->getClientOriginalName();
        \Storage::disk('product')->put($nameFile, \File::get($file));
        
        $url_img = "/img/product/" . $nameFile;
        

        $product  = new Product();

        $product->photo               = $url_img;
        $product->name                = $request->name;
        $product->category            = $request->category;
        $product->price               = $request->price;
        $product->description         = $request->description;

        $product->save();


        return redirect()->route('adminProducts');
    }

    public function newProduct()
    {
        return view('admin/createProduct');
    }
  
}

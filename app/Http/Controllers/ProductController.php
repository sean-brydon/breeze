<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    // Get Requests
    public function index(){
        $products = Product::all();
        return view('products',compact('products'));
    }

    public function moreInfo($id){
        $product = Product::where('id',$id) ->first();
        return view('productinfo',compact('product'));
    }

    public function cart(){
        return view ('cart');
    }

    public function addToCart($id)
    {
        $product = Product::find($id);

        if(!$product) {
            abort(404);
        }

        $cart = session()->get('cart');

        if(!$cart) {
            $cart = [
                    $id => [
                        "name" => $product->name,
                        "quantity" => 1,
                        "price" => $product->price,
                        "photo" => $product->photo,
                    ]
            ];

            session()->put('cart', $cart);

            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }

        if(isset($cart[$id])) {

            $cart[$id]['quantity']++;
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }

        $cart[$id] = [
            "name" => $product->name,
            "quantity" => 1,
            "price" => $product->price,
            "photo" => $product->photo,
            "id" => $product->id
        ];

        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function addOne($id){
        if($id){
            // Get cart session
            $cart = session()->get('cart');
            // Update carts quanitty with the quantity from the request/
            $cart[$id]["quantity"]++;
            session()->put('cart',$cart);
        }
        return redirect()->back()->with('success', 'Quantity updated');

    }
    public function removeOne($id){
        if($id){
            // Get cart session
            $cart = session()->get('cart');
            // Update carts quanitty with the quantity from the request/
            if($cart[$id]["quantity"] >1){
                $cart[$id]["quantity"]--;
            }else{
                unset($cart[$id]);
                session()->put('cart',$cart);
                return redirect()->back()->with('success', 'Quantity updated');
            }
            session()->put('cart',$cart);
        }
        return redirect()->back()->with('success', 'Quantity updated');

    }
    public function removeCart($id){
        if($id){
            $cart = session()->get('cart');
            if(isset($cart[$id])){
                unset($cart[$id]);
                session()->put('cart',$cart);
                return redirect()->back();
            }
        }
    }
}

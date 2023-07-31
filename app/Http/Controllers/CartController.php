<?php

namespace App\Http\Controllers;

use App\Mail\CartEmail;
use App\Models\Cart;
use App\Models\King;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CartController extends Controller
{
    public function index(){
        $cartes = Cart::all();
        $user = auth()->user();
        $cart = Cart::where('user_id', $user->id);
        return view('pages.cart.index', compact('cartes', 'cart'));
    }

    public function create(){
        return view('partials.king.show');
    }

    public function store(Request $request)
    {
        $store= new Cart();
        $store->user_id= $request->user_id;
        $store->king_id= $request->king_id;
        $store->quantity= $request->quantity;

        $store->save();
        return redirect('/cart')->with('Awesome , product added into the Shopping-cart');
    }

    public function show($id){
        $cart = Cart::find($id);
        return view('layouts.navigation', compact('cart'));
    }


    public function edit(){
        return view('pages.cart.index', compact(''));
    }


    public function update(Request $request, $id){
        $update = Cart::find($id);
        $king = King::find($id);
        $update->quantity = $request->quantity;
        $king->stock -= $request->quantity;
        $update->save();
        $king->save();
        return redirect()->back()->with('cart', 'Product added to cart');

    }

    public function destroy($id){
        $cart = Cart::find($id);
        return redirect('/cart', compact('cart'));
    }


    public function sendCartByEmail(Request $request)
    {
        $cart = Cart::all();

        $user = auth()->user(); // Si vous avez un système d'authentification et que vous voulez envoyer l'e-mail à l'utilisateur connecté

        Mail::to('william.verstraeten@termeeren.be')->send(new CartEmail($cart));

        Cart::where('user_id', $user->id)->delete();

        return response()->json(['message' => 'Le panier a été envoyé par e-mail avec succès.']);
        // return redirect('/cart', compact('cart'));
    }
    
    
}

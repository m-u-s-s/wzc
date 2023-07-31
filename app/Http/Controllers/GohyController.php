<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Gohy;
use App\Models\King;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GohyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gohy= Gohy::all();
        $kings= King::all();
        $cart= Cart::all();
        return view('pages.gohy.cards', compact('gohy', 'kings', 'cart'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.gohy.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $store = new Gohy();
        $store-> name = $request->name;
        $store-> number = $request->number;
        $store-> stock = $request->stock;
        $store-> sort = $request->sort;
        $store-> url = $request->url;

        $store->save();
        return redirect('/backoffice');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $gohy = Gohy::find($id);
        $cart= Cart::all();
        return view('pages.gohy.show', compact('gohy', 'cart'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $gohy = Gohy::find($id);
        return view('pages.gohy.edit', compact('gohy'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $update = Gohy::find($id);
        $update->name = $request->name;
        $update->number = $request->number;
        $update->stock = $request->stock;
        $update->sort = $request->sort;
        $update->url = $request->url;

        $update->save();
        return redirect('/backoffice');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $delete = Gohy::find($id);
        $delete->delete();

        return redirect('/backoffice');
    }

    public function addcarte(Request $request, $id)
    {
        if (Auth::check()) {
            $gohy = Gohy::find($id);
            $users= User::find($id);
            $user = auth()->user();
            $cart = new Cart();
            $cart->king_id = $gohy->id;
            $cart->user_id = $user->id;
            $cart->user_name= $user->woning;
            $cart->king_name = $gohy->name;
            $cart->king_number = $gohy->number;
            $cart->king_url = $gohy->url;
            $cart->quantity = $request->quantity;
            $gohy->stock -= $request->quantity;
            $cart->save();
            $gohy->save();
            return redirect()->back()->with('cart', 'Product added to cart');
        } 
        else 
        {
            return redirect('register');
        }
    }
}

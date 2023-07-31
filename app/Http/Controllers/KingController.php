<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\King;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class KingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kings = DB::table('kings')->paginate(8);
        $cart = Cart::all();
        return view('welcome', compact('kings', 'cart'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.king.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $store = new King();
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
        $kings = King::find($id);
        $cart = Cart::all();
        return view('pages.king.show', compact('kings', 'cart'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $kings = King::find($id);
        return view('pages.king.edit', compact('kings'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $update = King::find($id);
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
        $delete = King::find($id);
        $delete->delete();

        return redirect('/backoffice');
    }

    public function addcart(Request $request, $id)
    {
        if (Auth::check()) {
            $king = King::find($id);
            $user = auth()->user();
            $cart = new Cart();
            $cart->king_id = $king->id;
            $cart->user_id = $user->id;
            $cart->user_name= $user->woning;
            $cart->king_name = $king->name;
            $cart->king_number = $king->number;
            $cart->king_url = $king->url;
            $cart->quantity = $request->quantity;
            $king->stock -= $request->quantity;
            $cart->save();
            $king->save();
            return redirect()->back()->with('cart', 'Product added to cart');
        } 
        else 
        {
            return redirect('register');
        }
    }
}

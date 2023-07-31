<?php

namespace App\Http\Controllers;

use App\Models\Gohy;
use App\Models\King;
use Illuminate\Http\Request;

class BackofficeController extends Controller
{
    public function index(){
        $kings = King::all();
        $gohy = Gohy::all();
        return view('backoffice', compact('kings', 'gohy'));
    }
    public function index2(){
        $kings = King::all();
        $gohy = Gohy::all();
        return view('pages.gohy.backoffice', compact('kings', 'gohy'));
    }


    public function show($id){
        $kings = King::find($id);
        $gohy = Gohy::find($id);
        return view('pages.king.showking', compact('kings', 'gohy'));
    }
    public function show2($id){
        $gohy = Gohy::find($id);
        return view('pages.gohy.showgohy', compact('gohy'));
    }
}

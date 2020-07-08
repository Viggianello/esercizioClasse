<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function index()
    {
        $prodotti = Product::all();
        // dd($prodotti);
        // array associativo prima cosa nome views poi
        return view('mostradati', ['listaprodotti'=>$prodotti]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Kebudayaan;

class HomeController extends Controller
{
    public function index()
    {
        $produk = Produk::latest()->get();
        $k = Kebudayaan::latest()->get();
        return view('frontend.home', compact('produk', 'k'));
    }
}

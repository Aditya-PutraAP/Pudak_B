<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gambar;

class FotografiController extends Controller
{
    public function index()
    {
        $gambar = Gambar::latest()->get();
        return view('frontend.imagePage', compact('gambar'));
    }
}

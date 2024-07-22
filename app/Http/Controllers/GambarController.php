<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gambar;

class GambarController extends Controller
{
    public function index()
    {
        $gambar = Gambar::latest()->get();
        return view('gambar.index', compact('gambar'));
    }

    public function create()
    {
        return view('gambar.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePath = null;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('images'), $imageName);
            $imagePath = 'images/' . $imageName;
        }

        Gambar::create([
            'title' => $request->title,
            'image' => $imagePath,
        ]);

        return redirect()->route('gambar.index')->with(['success' => 'Gambar Created Successfully!']);
    }

    public function edit($id)
    {
        $gambar = Gambar::findOrFail($id);
        return view('gambar.edit', compact('gambar'));
    }

    public function update(Request $request, $id)
    {
        $gambar = Gambar::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePath = $gambar->image;

        if ($request->hasFile('image')) {
            if ($gambar->image && file_exists(public_path($gambar->image))) {
                unlink(public_path($gambar->image));
            }

            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('images'), $imageName);
            $imagePath = 'images/' . $imageName;
        }

        $gambar->update([
            'title' => $request->title,
            'image' => $imagePath,
        ]);

        return redirect()->route('gambar.index')->with(['success' => 'Gambar Updated Successfully!']);
    }

    public function destroy($id)
    {
        $gambar = Gambar::findOrFail($id);

        if ($gambar->image && file_exists(public_path($gambar->image))) {
            unlink(public_path($gambar->image));
        }

        $gambar->delete();

        return redirect()->route('gambar.index')->with(['success' => 'Gambar Deleted Successfully!']);
    }


    public function show($id)
    {
        $gambar = Gambar::findOrFail($id);
        return view('gambar.show', compact('gambar'));
    }
}

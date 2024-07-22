<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kebudayaan;

class KebudayaanController extends Controller
{
    public function index()
    {
        $k = Kebudayaan::latest()->get();
        return view('kebudayaan.index', compact('k'));
    }

    public function create()
    {
        return view('kebudayaan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:500',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePath = null;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('images'), $imageName);
            $imagePath = 'images/' . $imageName;
        }

        Kebudayaan::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imagePath,
        ]);

        return redirect()->route('kebudayaan.index')->with(['success' => 'Kebudayaan Created Successfully!']);
    }

    public function edit($id)
    {
        $k = Kebudayaan::findOrFail($id);
        return view('kebudayaan.edit', compact('k'));
    }

    public function update(Request $request, $id)
    {
        $k = Kebudayaan::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:500',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePath = $k->image;

        if ($request->hasFile('image')) {
            if ($k->image && file_exists(public_path($k->image))) {
                unlink(public_path($k->image));
            }

            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('images'), $imageName);
            $imagePath = 'images/' . $imageName;
        }

        $k->update([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imagePath,
        ]);

        return redirect()->route('kebudayaan.index')->with(['success' => 'Kebudayaan Updated Successfully!']);
    }

    public function destroy($id)
    {
        $k = Kebudayaan::findOrFail($id);

        if ($k->image && file_exists(public_path($k->image))) {
            unlink(public_path($k->image));
        }

        $k->delete();

        return redirect()->route('kebudayaan.index')->with(['success' => 'Kebudayaan Deleted Successfully!']);
    }


    public function show($id)
    {
        $k = Kebudayaan::findOrFail($id);
        return view('kebudayaan.show', compact('k'));
    }
}

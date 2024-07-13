<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::latest()->get();
        return view('news.index', compact('news'));
    }

    public function create()
    {
        return view('news.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'editor' => 'nullable|string|max:255',
        ]);

        $imagePath = null;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('images'), $imageName);
            $imagePath = 'images/' . $imageName;
        }

        News::create([
            'title' => $request->title,
            'author' => $request->author,
            'content' => $request->content,
            'image' => $imagePath,
            'editor' => $request->editor,
        ]);

        return redirect()->route('news.index')->with(['success' => 'News Created Successfully!']);
    }

    public function edit($id)
    {
        $news = News::findOrFail($id);
        return view('news.edit', compact('news'));
    }

    public function update(Request $request, $id)
    {
        $news = News::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'editor' => 'nullable|string|max:255',
        ]);

        $imagePath = $news->image;

        if ($request->hasFile('image')) {
            if ($news->image && file_exists(public_path($news->image))) {
                unlink(public_path($news->image));
            }

            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('images'), $imageName);
            $imagePath = 'images/' . $imageName;
        }

        $news->update([
            'title' => $request->title,
            'author' => $request->author,
            'content' => $request->content,
            'image' => $imagePath,
            'editor' => $request->editor,
        ]);

        return redirect()->route('news.index')->with(['success' => 'News Updated Successfully!']);
    }

    public function destroy($id)
    {
        $news = News::findOrFail($id);

        // Delete the image file if it exists
        if ($news->image && file_exists(public_path($news->image))) {
            unlink(public_path($news->image));
        }

        // Delete the news entry
        $news->delete();

        return redirect()->route('news.index')->with(['success' => 'News Deleted Successfully!']);
    }


    public function show($id)
    {
        $news = News::findOrFail($id);
        return view('news.show', compact('news'));
    }
}

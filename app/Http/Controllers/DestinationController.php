<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destination;
use App\Models\Category;
use App\Models\District;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class DestinationController extends Controller
{
    public function index()
    {
        $destinations = Destination::get();
        return view('pages-admin.destination.index', compact('destinations'));
    }

    public function create()
    {
        $categories = Category::get();
        $districts = District::get();
        return view('pages-admin.destination.create', compact('categories', 'districts'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'categories_id' => 'not_in:0',
            'districts_id' => 'not_in:0',
            'name' => 'required',
            'content' => 'required',
            'images' => 'required|mimes:jpg,png,jpeg',
            'map' => 'required'
        ]);

        $images = $request->file('images')->store('content');

        Destination::create([
            'categories_id' => $request->categories_id,
            'districts_id' => $request->districts_id,
            'name' => $request->name,
            'content' => $request->content,
            'images' => $images,
            'map' => $request->map
        ]);

        Alert::success('Success', 'Data Berhasil Ditambahkan');
        return redirect()->route('destination.index');
    }

    public function show(Destination $destination)
    {
        $categories = Category::get();
        $districts = District::get();
        return view('pages-admin.destination.show', compact('destination', 'categories', 'districts'));
    }

    public function edit(Destination $destination)
    {
        $categories = Category::get();
        $districts = District::get();
        return view('pages-admin.destination.edit', compact('destination', 'categories', 'districts'));
    }

    public function update(Request $request, Destination $destination)
    {
        $this->validate($request, [
            'categories_id' => 'not_in:0',
            'districts_id' => 'not_in:0',
            'name' => 'required',
            'content' => 'required',
            'map' => 'required'
        ]);
        if ($request->hasFile('images')) {
            $this->validate($request, [
                'images' => 'required|image|mimes:jpg,png,jpeg'
            ]);
        }

        $images = $destination->images;
        if ($request->hasFile('images')) {
            if ($destination->images) {
                Storage::delete($destination->images);
            }
            $images = $request->file('images')->store('content');
        }
        $destination->update([
            'categories_id' => $request->categories_id,
            'districts_id' => $request->districts_id,
            'name' => $request->name,
            'content' => $request->content,
            'images' => $images,
            'map' => $request->map
        ]);
        Alert::success('Success', 'Data Berhasil Diubah');
        return redirect()->route('destination.index');
    }

    public function delete(Destination $destination)
    {
        $destination->delete();
        if ($destination->images) {
            Storage::delete($destination->images);
        }
        Alert::success('Success', 'Data Berhasil Dihapus');
        return redirect()->route('destination.index');
    }
}
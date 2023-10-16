<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::get();
        return view('pages-admin.category.index', compact('categories'));
    }

    public function create()
    {
        return view('pages-admin.category.create');
    }

    public function store(Request $request)
    {
        $this->validate(
            $request,
            [
                'name' => 'required',
                'slug' => 'required',
                'icon' => 'mimes:jpg,png,jpeg'
            ],
            [
                'name.required' => 'Nama Kategori harus di isi',
                'slug.required' => 'Slug Kategori harus di isi',
                'icon.mimes:jpg,png,jpeg' => 'Upload Icon extd. JPG|PNG|JPEG'
            ]
        );

        $icon = $request->file('icon')->store('icon');

        Category::create([
            'name' => $request->name,
            'icon' => $icon,
            'slug' => $request->slug
        ]);

        Alert::success('Success', 'Data Berhasil Ditambahkan');
        return redirect()->route('category.index');
    }
    public function edit(Category $category)
    {
        return view('pages-admin.category.edit', compact('category'));
    }
    public function update(Request $request, Category $category)
    {
        $this->validate(
            $request,
            [
                'name' => 'required',
                'slug' => 'required'
            ],
            [
                'name.required' => 'Nama Kategori harus di isi',
                'slug.required' => 'Slug Kategori harus di isi',
                'icon.image' => 'Upload Icon extd. JPG|PNG|JPEG'
            ]
        );
        if ($request->hasFile('icon')) {
            $this->validate($request, [
                'icon' => 'image|mimes:jpg,png,jpeg'
            ]);
        }

        $icon = $category->icon;
        if ($request->hasFile('icon')) {
            if ($category->icon) {
                Storage::delete($category->icon);
            }
            $icon = $request->file('icon')->store('icon');
        }

        $category->update([
            'name' => $request->name,
            'slug' => $request->slug,
            'icon' => $icon,
        ]);
        Alert::success('Success', 'Data Berhasil Diubah');
        return redirect()->route('category.index');

    }
    public function delete(Category $category)
    {
        $category->delete();
        if ($category->icon) {
            Storage::delete($category->icon);
        }
        Alert::success('Success', 'Data Berhasil Di hapus');
        return redirect()->route('category.index');
    }
}
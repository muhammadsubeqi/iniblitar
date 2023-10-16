<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Destination;
use App\Models\District;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $categories = Category::get();
        $districts = District::get();

        $destinations = Destination::latest()->get();

        return view('welcome', compact('categories', 'destinations', 'districts'));
    }

    public function show(Destination $destination)
    {
        $categories = Category::get();
        $districts = District::get();
        $destinations = Destination::latest()->get()->random(1);
        return view('pages-visitor.show', compact('destination', 'categories', 'districts', 'destinations'));
    }

    public function category()
    {
        $categories = Category::get();

        return view('pages-visitor.category', compact('categories'));
    }

    public function categoryDetail($id)
    {
        $category = Category::findOrFail($id);
        $destinations = Destination::where('categories_id', $category->id)->get();

        return view('pages-visitor.category-detail', compact('category', 'destinations'));
    }

    public function district()
    {
        $districts = District::get();

        return view('pages-visitor.district', compact('districts'));
    }

    public function districtDetail($id)
    {
        $district = District::findOrFail($id);
        $destinations = Destination::where('districts_id', $district->id)->get();

        return view('pages-visitor.district-detail', compact('district', 'destinations'));
    }

    public function destination()
    {
        $destinations = Destination::get();

        return view('pages-visitor.destination', compact('destinations'));
    }

    public function search(Request $request)
    {
        $search = $request->search;

        if ($search) {
            $destinations = Destination::where('name', 'LIKE', "%$search%")->get();
        } else {
            $destinations = Destination::all();
        }

        return view('pages-visitor.destination-search', compact('destinations'));
    }

    public function about()
    {
        return view('pages-visitor.about');
    }
}
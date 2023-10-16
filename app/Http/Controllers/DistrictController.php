<?php

namespace App\Http\Controllers;

use App\Models\District;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class DistrictController extends Controller
{
    public function index()
    {
        $districts = District::get();

        return view('pages-admin.district.index', compact('districts'));
    }
    public function create()
    {
        return view('pages-admin.district.create');
    }
    public function store(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'map' => 'required'
        ],
        [
            'name.required' => 'Nama Kecamatan Harus Di isi',
            'map.required' => 'Link Google Map Harus Di isi',   
        ]);

        District::create([
            'name' => $request->name,
            'map' => $request->map
        ]);
        Alert::success('Success', 'Data Berhasil Ditambahkan');
        return redirect()->route('district.index');

        }

        public function edit(District $district)
        {
            return view('pages-admin.district.edit', compact('district'));
        }

        public function update(District $district, Request $request)
        {
            $this->validate($request,[
                'name' => 'required',
                'map' => 'required'
            ],
            [
                'name.required' => "Nama Kecamatan Harus DI isi",
                'map.required' => "Link Google Map Harus DI isi"
            ]);
            $district->update([
                'name' => $request->name,
                'map' => $request->map
            ]);
            Alert::success('Success', 'Data Berhasil Di ubah');
            return redirect()->route('district.index');
        }


        public function delete(District $district)
        {
            $district->delete();
            Alert::success('Success', 'Data Berhasil Di hapus');
            return redirect()->route('district.index');
        }

    }
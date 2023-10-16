<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\District;
use App\Http\Resources\DistrictResource;

class DistrictController extends Controller
{
    public function district()
    {
        $districts = District::get();
        return DistrictResource::collection($districts);
    }
}

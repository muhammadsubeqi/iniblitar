<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Destination;
use App\Http\Resources\DestinationResource;

class DestinationController extends Controller
{
    public function destination()
    {
        $destinations= Destination::get();
        return DestinationResource::collection($destinations);
    }

    public function destinationDetail(Destination $destination)
    {
        $detail = Destination::where('id', $destination->id)->first();
        return new DestinationResource($detail);
    }

    public function destinationCategory(Category $category)
    {
        $destinations = Destination::where('categories_id', $category->id)->get();
        return DestinationResource::collection($destinations);
    }
}

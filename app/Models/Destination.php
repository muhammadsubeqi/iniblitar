<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\District;

class Destination extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(Category::class, 'categories_id');
    }

    public function district()
    {
        return $this->belongsTo(District::class, 'districts_id');
    }

    public function getImage()
    {
        return asset('images/' . $this->images);
    }
}

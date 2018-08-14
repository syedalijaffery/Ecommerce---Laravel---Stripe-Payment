<?php

namespace App;
use App\Review;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['imagePath', 'title', 'description', 'price'];


    public static function category(){
        $category =Product::selectRaw('category ,Count(*) entries')->groupBy('category')->get()->toArray();

        return $category;
    }

    public function reviews() {
        return $this->hasMany(Review::class);
    }

}

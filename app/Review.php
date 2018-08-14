<?php

namespace App;
use App\Product;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $guarded=[];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function product(){
        return $this->belongsTo(Product::class);
    }
}

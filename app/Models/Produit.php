<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    protected $fillable = ['title','price','description','quantity','category_id'];

    //relate with category
    public function category(){
        return $this->belongsTo(Category::class ,'category_id');
    }
    //relate with image
    public function image(){
        return $this->hasMany(Image::class);
    }
    //panier
    public function panier(){
        return $this->belongsTo(Panier::class);
    }
}

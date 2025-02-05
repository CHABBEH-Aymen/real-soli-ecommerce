<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['mark','color','gender','description'];

    //relat with produit
    public function produit(){
        return $this->hasMany(Produit::class, 'category_id');
    }
}


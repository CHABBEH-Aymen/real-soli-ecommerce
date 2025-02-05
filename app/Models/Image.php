<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = ['image'];
    //produit
    public function produit(){
        return $this->belongsTo(Produit::class);
    }
}

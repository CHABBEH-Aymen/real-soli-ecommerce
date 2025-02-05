<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Panier extends Model
{
    protected $fillable = ['quantity','achat','date'];
    //produit
    public function produit(){
        return $this->hasOne(Produit::class);
    }
    //user
    public function user(){
        return $this->belongsTo(User::class);
    }
}

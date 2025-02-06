<?php

namespace App\Repositories\Eloquent;

use App\Models\Produit;
use App\Repositories\ProduitRepositoryInterface;

class ProduitRepository implements ProduitRepositoryInterface
{
    public function getAll()
    {
        return Produit::all();
    }

    public function getById($id)
    {
        return Produit::findOrFail($id);
    }

    public function create(array $data)
    {
        return Produit::create($data);
    }

    public function update($id, array $data)
    {
        $produit = Produit::findOrFail($id);
        $produit->update($data);
        return $produit;
    }

    public function delete($id)
    {
        return Produit::destroy($id);
    }
}

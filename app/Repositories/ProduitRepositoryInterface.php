<?php

namespace App\Repositories;

use App\Models\Produit;
use Illuminate\Http\Request;

interface ProduitRepositoryInterface{
    public function getAll();
    public function getById($id);
    public function create(array $data);
    public function update($id, array $data);
    public function delete($id);
}

?>

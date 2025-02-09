<?php

namespace App\Http\Controllers;
use App\Repositories\ProduitRepositoryInterface;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    private $produitRepository;
    public function __construct(ProduitRepositoryInterface $produitRepository)
    {
        $this->produitRepository = $produitRepository;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json($this->produitRepository->getAll());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'quantity' => 'required|integer',
        ]);
        return response()->json($this->produitRepository->create($validated));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return response()->json($this->produitRepository->getById($id));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'quantity' => 'required|integer',
        ]);

        return response()->json($this->produitRepository->update($id, $validated));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return response()->json(['message' => 'Deleted successfully']);
    }
}

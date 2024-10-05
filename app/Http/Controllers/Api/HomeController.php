<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    /**
     * Get all products with their categories.
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        // Define how many items per page
        $perPage = 5;

        // Fetch products with categorie, paginated
        $products = Product::with('categorie')->paginate($perPage);

        // Prepare the response
        return response()->json([
            'status' => 'success',
            'message' => 'List all products',
            'data' => $products
        ], 200);

}

    public function destroy(string $id)
    {
            //
    }

     public function show(string $id)
{
        //
}

     public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      //
    }
}

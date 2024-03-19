<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {

        $result = ["name" => 'index', 'payload' => Product::all()];
        return $result;
    }


    public function store(Request $request)
    {

        $fields = $request->validate(
            [
                "pd_name" => "required|string",
                "pd_type" => "required|integer",
                "pd_price" => "required|numeric",
            ]
        );

        Product::create([
            "product_name" => $fields["pd_name"],
            "product_type" => $fields["pd_type"],
            "price" => $fields["pd_price"],
        ]);

        return "Inserted success";
    }
    public function show(string $id)
    {
        $result = ['name' => 'Product', 'payload' => Product::find($id)];
        return $result;
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validate the request data
        $request->validate([
            'pd_name' => 'required|string|max:255',
            'pd_price' => 'required|numeric|min:0',
        ]);

        // Find the product by ID
        $product = Product::find($id);

        // Check if the product exists
        if (!$product) {
            return response()->json(['error' => 'Product not found'], 404);
        }

        // Update product information
        $product->product_name = $request->pd_name;
        $product->price = $request->pd_price;

        // Save changes to the database
        if ($product->save()) {
            // Return a success response
            return response()->json(['message' => 'Update success']);
        } else {
            // Handle the case where the update fails
            return response()->json(['error' => 'Update failed'], 500);
        }
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::find($id);
        if ($product->delete()) {
            // Return a success response
            return response()->json(['message' => 'Delete success']);
        } else {
            // Handle the case where the update fails
            return response()->json(['error' => 'Delete failed'], 500);
        }
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //it will display the product information
        $products = Products::with('categories','brands','taxes','units','attachments')->get();
        $data=$products->toArray();
        $response=[
            'success' => true,
            'status' => 200,
            'message'=>'Product showing successfully',
            'data'=>$data,
            'errors'=>null,

        ];
        return response()->json($response,200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Products::find($id);
        return response()->json($product);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        $product= Products::find($id);
        $product->name = $request->name;
        $product->sku = $request->sku;
        $product->symbology = $request->symbology;
        $product->save();
        return response()->json($product);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Products::destroy($id);
        return response()->json('message','deleted');
    }
}

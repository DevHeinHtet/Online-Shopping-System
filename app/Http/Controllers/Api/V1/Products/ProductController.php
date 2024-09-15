<?php

namespace App\Http\Controllers\Api\V1\Products;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Resources\ProductResource;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::latest()->paginate(5);
        return response()->json(ProductResource::collection($products));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'category_id' => 'required',
            'price' => 'required',
            'description' => 'required',
            'condition' => 'required',
            'type' => 'required',
            'status' => 'required',
            'photo' => 'required|file|mimes:png,jpg,jpeg,svg',
            'owner_name' => 'required',
            'phone_no' => 'required',
            'address' => 'required',
            'latitude_logitude' => 'required',
        ]);

        $fileName = $request->file('photo')->getClientOriginalName();
        $storage = $request->photo->storeAs('public/image/product',$fileName);
        
        $product = Product::create([
            'name' => $request->name,
            'category_id' => $request->category_id,
            'price' => $request->price,
            'description' => $request->description,
            'condition' => $request->condition,
            'type' => $request->type,
            'status' => $request->status,
            'photo' => $request->photo,
            'owner_name' => $request->owner_name,
            'phone_no' => $request->phone_no,
            'address' => $request->address,
            'latitude_logitude' => $request->latitude_logitude,
        ]);

        $response = [
            'status' => true,
            'message' => 'Product created successful...',
            'data' => new ProductResource($product),
        ];

        return response()->json($response, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers\V1\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    public function index(){
        $products = Product::latest()->paginate(5);
        return view('admin.product.index',compact('products'));
    }
    public function add(){
        $categories = Category::latest()->get();
        return view('admin.product.add',compact('categories'));
    }

    public function create(Request $request){
        $request->validate([
            'name' => 'required',
            'category_id' => 'required',
            'price' => 'required',
            'description' => 'required',
            'condition' => 'required',
            'type' => 'required',
            'photo' => 'required|file|mimes:png,jpg,jpeg,svg',
            'owner_name' => 'required',
            'phone_no' => 'required',
            'address' => 'required',
            'location' => 'required',
        ]);
        $fileName = $request->file('photo')->getClientOriginalName();
        $storage = $request->photo->storeAs('public/image/Product',$fileName);
        
        $product = Product::create([
            'name' => $request->name,
            'category_id' => $request->category_id,
            'price' => $request->price,
            'description' => $request->description,
            'condition' => $request->condition,
            'type' => $request->type,
            'status' => $request->has('status') ? true : false,
            'photo' => $fileName,
            'owner_name' => $request->owner_name,
            'phone_no' => $request->phone_no,
            'address' => $request->address,
            'latitude_logitude' => $request->location,
        ]);
        return redirect()->back()->with('success','Product created successfull ...');
    }

   
}

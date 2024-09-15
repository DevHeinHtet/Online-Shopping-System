<?php

namespace App\Http\Controllers\V1\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class HomeController extends Controller
{
    public function index(Request $request){
        $categories = Category::latest()->get();
        $products = Product::latest()->get();
        return view('page.home',compact('categories','products'));
    }
    public function list(){
        $categories = Category::latest()->get();
        $products = Product::latest()->get();
        return view('page.fashion',compact('categories','products'));
    }
    public function filter(Request $request){
        $request->validate([
            'name' => 'required',
            'min' => 'required',
            'max' => 'required',
            'category_id' => 'required',
            'condition' => 'required',
            'type' => 'required',
        ]);
        $categories = Category::latest()->get();
        $products = Product::latest()
                        ->where('name','LIKE','%'.$request->name.'%')
                        ->whereBetween('price',[$request->min,$request->max])
                        ->where('category_id',$request->category_id)
                        ->where('condition',$request->condition)
                        ->where('type',$request->type)
                        ->get();
        return view('page.fashion',compact('categories','products'));

    }
    public function detail(Request $request, $id){
        $product = Product::find($id);
        return view('page.detail',compact('product'));
    }
}

<?php

namespace App\Http\Controllers\V1\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
class CategoryController extends Controller
{
    public function index(){
        $categories = Category::latest()->paginate(5);
        return view('admin.category.index',compact('categories'));
    }
    public function create(Request $request){
        $request->validate([
            'name' => 'required|unique:categories,name',
            'photo' => 'required|file|mimes:png,jpg,jpeg,svg',
        ]);
        
        $fileName = $request->file('photo')->getClientOriginalName();
        $storage = $request->photo->storeAs('public/image/category',$fileName);
        
        $category = Category::create([
            'name' => $request->name,
            'status' => $request->has('status') ? true : false,
            'photo' => $fileName,
        ]);

        return redirect()->back()->with('success','Category created successfull ...');
    }
}

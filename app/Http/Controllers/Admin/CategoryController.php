<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    
    {
        return view('categories.index');
    }

    public function store(Request $request)
    {
        $attr = $request->validate([
            'category_name' => 'required|string|unique:categories|max:250',
            'status' => 'required'
        ]);

        try {
            $data = Category::create($attr);
            if($data){
                return to_route('categories.index')->with('message', 'Category successfully created');
            }        
        } catch(\Throwable $th) {
            throw $th;
        }
    }

}